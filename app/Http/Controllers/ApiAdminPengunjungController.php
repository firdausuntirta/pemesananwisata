<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\AdminPengunjung;


Carbon::setLocale('id');

class ApiAdminPengunjungController extends Controller
{
    //
    // Tambahkan properti untuk menyimpan data admin
    protected $admin;

    // Konstruktor untuk menginisialisasi admin
    public function __construct()
    {
        $this->admin = Auth::guard('admin')->user();
    }
    public function getJumlahPengunjung()
    {
        $jumlahPengunjung = AdminPengunjung::count(); // Menghitung jumlah pengunjung
        return response()->json(['jumlah_pengunjung' => $jumlahPengunjung]);
    }
    public function getJumlahPengunjungToday()
    {
        $today = Carbon::today();
        $visitorCount = AdminPengunjung::whereDate('tanggal_berkunjung', $today)->count();
        return response()->json(['jumlah_pengunjung_hari_ini' => $visitorCount]);
    }

    public function getDataPengunjungTahunan(Request $request)
    {
        $tahun = $request->input('tahun', date('Y')); // Ambil tahun dari parameter atau gunakan tahun saat ini.

        $pengunjung = DB::table('pengunjung')
            ->select(DB::raw('MONTH(tanggal_berkunjung) as month'), DB::raw('COUNT(*) as count'))
            ->whereYear('tanggal_berkunjung', $tahun) // Filter berdasarkan tahun.
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        $formattedData = [
            'labels' => $pengunjung->pluck('month')->map(function ($month) {
                return date('F', mktime(0, 0, 0, $month, 10));
            }),
            'data' => $pengunjung->pluck('count')
        ];

        return response()->json($formattedData);
    }

    public function getDataPengunjungBulanan(Request $request)
    {
        // Ambil parameter bulan dari request, default ke bulan ini jika tidak ada
        $month = $request->input('month', date('m')); // Menggunakan 'm' untuk format angka bulan
        $year = $request->input('year', date('Y')); // Ambil tahun (default tahun ini)

        // Query berdasarkan bulan dan tahun
        $pengunjung = DB::table('pengunjung')
            ->select(DB::raw('DAY(tanggal_berkunjung) as day'), DB::raw('COUNT(*) as count'))
            ->whereYear('tanggal_berkunjung', $year)
            ->whereMonth('tanggal_berkunjung', $month)
            ->groupBy('day')
            ->orderBy('day')
            ->get();

        $formattedData = [
            'labels' => $pengunjung->pluck('day'),
            'data' => $pengunjung->pluck('count')
        ];

        return response()->json($formattedData);
    }



    public function getDataPengunjungHarian()
    {
        $pengunjung = DB::table('pengunjung')
            ->select(DB::raw('DATE(tanggal_berkunjung) as date'), DB::raw('COUNT(*) as count'))
            ->where('tanggal_berkunjung', '>=', Carbon::now()->subDays(6)->startOfDay()) // 6 hari + hari ini
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        $formattedData = [
            'labels' => collect(range(0, 6))->map(function ($daysAgo) {
                // Menghasilkan nama hari untuk 7 hari terakhir
                return Carbon::now()->subDays($daysAgo)->isoFormat('dddd');
            })->reverse()->values(),
            'data' => collect(range(0, 6))->map(function ($daysAgo) use ($pengunjung) {
                $date = Carbon::now()->subDays($daysAgo)->toDateString();
                return $pengunjung->firstWhere('date', $date)->count ?? 0; // 0 jika tidak ada data
            })->reverse()->values(),
        ];

        return response()->json($formattedData);
    }
}
