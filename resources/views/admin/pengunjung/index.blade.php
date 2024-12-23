@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Daftar Pengunjung</h1>
            <div class="btn-group" role="group">
                <a href="{{ route('admin.pengunjung.create') }}" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah Pengunjung</span>
                </a>
                {{-- <button class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#exportModal">
                    <span class="icon text-white-50">
                        <i class="fas fa-file-export"></i>
                    </span>
                    <span class="text">Export</span>
                </button> --}}
            </div>
        </div>

        <!-- Filter dan Search -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Filter, Pencarian, dan Sortir</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.pengunjung.index') }}" method="GET">
                    <div class="row align-items-end">
                        @foreach ([['search', 'Pencarian', 'text', 'Nama, Email, No HP'], ['tanggal_dari', 'Tanggal Dari', 'date', null], ['tanggal_sampai', 'Tanggal Sampai', 'date', null]] as $field)
                            <div class="col-lg-2 col-md-6 mb-3">
                                <label for="{{ $field[0] }}" class="form-label">{{ $field[1] }}</label>
                                <input type="{{ $field[2] }}" name="{{ $field[0] }}" id="{{ $field[0] }}"
                                    class="form-control" placeholder="{{ $field[3] }}" value="{{ request($field[0]) }}">
                            </div>
                        @endforeach

                        <div class="col-lg-2 col-md-6 mb-3">
                            <label for="sort" class="form-label">Urutkan</label>
                            <select name="sort" id="sort" class="form-control">
                                <option value="">Pilih</option>
                                @foreach ([
            'nama_asc' => 'Nama A-Z',
            'nama_desc' => 'Nama Z-A',
            'tanggal_asc' => 'Tanggal Terlama',
            'tanggal_desc' => 'Tanggal Terbaru',
        ] as $value => $label)
                                    <option value="{{ $value }}" {{ request('sort') == $value ? 'selected' : '' }}>
                                        {{ $label }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-3 d-flex gap-2">
                            <button type="submit" class="btn btn-primary w-50">
                                <i class="fas fa-search me-2"></i> Cari
                            </button>
                            <a href="{{ route('admin.pengunjung.index') }}" class="btn btn-secondary w-50">
                                <i class="fas fa-undo me-2"></i> Reset
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Tabel Pengunjung -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Pengunjung</h6>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>No HP</th>
                                <th>Tanggal Berkunjung</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($pengunjung as $index => $p)
                                <tr>
                                    <td>{{ $pengunjung->firstItem() + $index }}</td>
                                    <td>{{ $p->nama }}</td>
                                    <td>{{ $p->email }}</td>
                                    <td>{{ $p->no_hp }}</td>
                                    <td>{{ $p->tanggal_berkunjung ? \Carbon\Carbon::parse($p->tanggal_berkunjung)->format('d M Y') : '-' }}
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                                data-target="#showModal{{ $p->id }}">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                                data-target="#editModal{{ $p->id }}">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#deleteModal{{ $p->id }}">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>

                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">Tidak ada data pengunjung.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-between">
                    <div>
                        Menampilkan {{ $pengunjung->firstItem() }} sampai {{ $pengunjung->lastItem() }} dari
                        {{ $pengunjung->total() }} data
                    </div>
                    <div>
                        {{ $pengunjung->links() }}
                    </div>
                    <select name="limit" id="limit" class="form-select form-select-sm w-auto"
                        onchange="this.form.submit()">
                        @foreach ([5, 10, 15, 20] as $limit)
                            <option value="{{ $limit }}" {{ request('limit') == $limit ? 'selected' : '' }}>
                                {{ $limit }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Delete -->
    @foreach ($pengunjung as $p)
        <div class="modal fade" id="deleteModal{{ $p->id }}" tabindex="-1" role="dialog"
            aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Apakah Anda yakin ingin menghapus pengunjung bernama <strong>{{ $p->nama }}</strong>?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <form action="{{ route('admin.pengunjung.destroy', $p->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <!-- Modal Edit -->
    <!-- Modal Edit -->
    @foreach ($pengunjung as $p)
        <div class="modal fade" id="editModal{{ $p->id }}" tabindex="-1" role="dialog"
            aria-labelledby="editModalLabel{{ $p->id }}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel{{ $p->id }}">Edit Pengunjung</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('admin.pengunjung.update', $p->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="editNama{{ $p->id }}">Nama</label>
                                <input type="text" class="form-control" id="editNama{{ $p->id }}"
                                    name="nama" value="{{ $p->nama }}" required>
                            </div>
                            <div class="form-group">
                                <label for="editEmail{{ $p->id }}">Email</label>
                                <input type="email" class="form-control" id="editEmail{{ $p->id }}"
                                    name="email" value="{{ $p->email }}" required>
                            </div>
                            <div class="form-group">
                                <label for="editNoHP{{ $p->id }}">No HP</label>
                                <input type="text" class="form-control" id="editNoHP{{ $p->id }}"
                                    name="no_hp" value="{{ $p->no_hp }}" required>
                            </div>
                            <div class="form-group">
                                <label for="editTanggalBerkunjung{{ $p->id }}">Tanggal Berkunjung</label>
                                <input type="date" class="form-control" id="editTanggalBerkunjung{{ $p->id }}"
                                    name="tanggal_berkunjung"
                                    value="{{ $p->tanggal_berkunjung ? \Carbon\Carbon::parse($p->tanggal_berkunjung)->format('Y-m-d') : '' }}">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    <!-- Modal Show -->
    @foreach ($pengunjung as $p)
        <div class="modal fade" id="showModal{{ $p->id }}" tabindex="-1" role="dialog"
            aria-labelledby="showModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="showModalLabel">Detail Pengunjung</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p><strong>Nama:</strong> {{ $p->nama }}</p>
                        <p><strong>Email:</strong> {{ $p->email }}</p>
                        <p><strong>No HP:</strong> {{ $p->no_hp }}</p>
                        <p><strong>Tanggal Berkunjung:</strong>
                            {{ $p->tanggal_berkunjung ? \Carbon\Carbon::parse($p->tanggal_berkunjung)->format('d M Y') : '-' }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
