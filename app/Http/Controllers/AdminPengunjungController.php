<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminPengunjung;
use Illuminate\Support\Facades\Auth;

class AdminPengunjungController extends Controller
{
    // Tambahkan properti untuk menyimpan data admin
    protected $admin;

    // Konstruktor untuk menginisialisasi admin
    public function __construct()
    {
        $this->admin = Auth::guard('admin')->user();
    }

    public function create()
    {
        return view('admin.pengunjung.create', [
            'admin' => $this->admin
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:pengunjung,email',
            'no_hp' => 'required|string|max:20',
            'alamat' => 'nullable|string',
            'tanggal_berkunjung' => 'required|date'
        ]);

        AdminPengunjung::create($validatedData);

        return redirect()->route('admin.pengunjung.create')
            ->with('success', 'Data pengunjung berhasil disimpan.');
    }

    public function index(Request $request)
    {
        $query = AdminPengunjung::query();

        // Filter berdasarkan pencarian
        if ($request->has('search')) {
            $search = $request->get('search');
            $query->where(function ($q) use ($search) {
                $q->where('nama', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('no_hp', 'like', "%{$search}%");
            });
        }

        // Filter berdasarkan tanggal
        if ($request->has('tanggal_dari') && $request->has('tanggal_sampai')) {
            $tanggalDari = $request->get('tanggal_dari');
            $tanggalSampai = $request->get('tanggal_sampai');

            if ($tanggalDari && $tanggalSampai) {
                $query->whereBetween('tanggal_berkunjung', [$tanggalDari, $tanggalSampai]);
            }
        }
        if ($request->has('sort')) {
            $sort = $request->get('sort');
            switch ($sort) {
                case 'nama_asc':
                    $query->orderBy('nama', 'asc');
                    break;
                case 'nama_desc':
                    $query->orderBy('nama', 'desc');
                    break;
                case 'tanggal_asc':
                    $query->orderBy('tanggal_berkunjung', 'asc');
                    break;
                case 'tanggal_desc':
                    $query->orderBy('tanggal_berkunjung', 'desc');
                    break;
            }
        }

        if ($request->has('limit')) {
            $limit = $request->get('limit');
        }

        // Ambil data dengan pagination
        $pengunjung = $query->oldest()->paginate($limit ?? 10);

        return view('admin.pengunjung.index', compact('pengunjung'), [
            'admin' => $this->admin
        ]);
    }

    public function destroy($id)
    {
        $pengunjung = AdminPengunjung::findOrFail($id);
        $pengunjung->delete();

        return redirect()->route('admin.pengunjung.index')
            ->with('success', 'Data pengunjung berhasil dihapus.');
    }

    public function show($id)
    {
        $pengunjung = AdminPengunjung::findOrFail($id);
        return view('admin.pengunjung.show', compact('pengunjung'));
    }

    public function edit($id)
    {
        $pengunjung = AdminPengunjung::findOrFail($id);

        return view('admin.pengunjung.edit', [
            'pengunjung' => $pengunjung,
            'admin' => $this->admin
        ]);
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:pengunjung,email,' . $id,
            'no_hp' => 'required|string|max:20',
            'alamat' => 'nullable|string',
            'tanggal_berkunjung' => 'required|date'
        ]);

        $pengunjung = AdminPengunjung::findOrFail($id);
        $pengunjung->update($validatedData);

        return redirect()->route('admin.pengunjung.index')
            ->with('success', 'Data pengunjung berhasil diperbarui.');
    }
    public function getJumlahPengunjung()
    {
        $jumlahPengunjung = AdminPengunjung::count(); // Menghitung jumlah pengunjung
        return response()->json(['jumlah_pengunjung' => $jumlahPengunjung]);
    }
}