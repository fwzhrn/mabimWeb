<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Anggota</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            background: #f4f6f9;
            font-family: Arial, sans-serif;
        }

        .page-container {
            max-width: 1200px;
            margin: 40px auto;
        }

        .page-header {
            background: #ffffff;
            border-radius: 16px;
            padding: 25px 30px;
            margin-bottom: 25px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.06);
        }

        .page-title {
            color: #0f2e1f;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .page-subtitle {
            color: #6c757d;
            margin-bottom: 0;
        }

        .btn-green {
            background: #1a5e3d;
            border-color: #1a5e3d;
            color: white;
            font-weight: 500;
        }

        .btn-green:hover {
            background: #0f2e1f;
            border-color: #0f2e1f;
            color: white;
        }

        .members-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.06);
        }

        .table {
            margin-bottom: 0;
        }

        .table thead th {
            background: #0f2e1f;
            color: white;
            border: none;
            padding: 15px;
            font-weight: 600;
        }

        .table tbody td {
            padding: 15px;
            vertical-align: middle;
        }

        .table tbody tr:last-child td {
            border-bottom: none;
        }

        .member-photo {
            width: 55px;
            height: 55px;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid #e9f1ec;
        }

        .no-photo {
            width: 55px;
            height: 55px;
            border-radius: 50%;
            background: #e9ecef;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6c757d;
            font-size: 12px;
        }

        .position-badge {
            background: #e8f3ed;
            color: #1a5e3d;
            font-weight: 600;
            padding: 6px 12px;
            border-radius: 20px;
        }

        .action-btn {
            width: 38px;
            height: 38px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
        }

        .btn-edit {
            background: #e8f0f7;
            color: #457b9d;
            border: none;
        }

        .btn-edit:hover {
            background: #457b9d;
            color: white;
        }

        .btn-delete {
            background: #fbeaea;
            color: #c0392b;
            border: none;
        }

        .btn-delete:hover {
            background: #c0392b;
            color: white;
        }

        .modal-header {
            background: #0f2e1f;
            color: white;
        }

        .modal-header .btn-close {
            filter: invert(1);
        }

        .modal-title {
            font-weight: 600;
        }

        .form-label {
            font-weight: 600;
            color: #333;
        }

        .form-control,
        .form-select {
            border-radius: 8px;
            padding: 10px 12px;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #1a5e3d;
            box-shadow: 0 0 0 0.2rem rgba(26, 94, 61, 0.15);
        }

        .current-photo {
            width: 90px;
            height: 90px;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid #e9f1ec;
        }

        .empty-state {
            padding: 60px 20px;
            text-align: center;
        }

        .empty-state i {
            font-size: 50px;
            color: #adb5bd;
        }

        .empty-state h5 {
            margin-top: 15px;
            color: #495057;
        }

        .modal-footer {
            border-top: 1px solid #eee;
        }

        @media (max-width: 768px) {
            .page-container {
                width: 95%;
                margin: 20px auto;
            }

            .page-header {
                padding: 20px;
            }

            .page-header-content {
                flex-direction: column;
                align-items: stretch !important;
                gap: 15px;
            }

            .table-responsive {
                border-radius: 16px;
            }
        }
    </style>
</head>

<body>
    <div class="page-container">

        <div class="page-header">
            <div class="page-header-content d-flex justify-content-between align-items-center">
                <div>
                    <h2 class="page-title">
                        <i class="bi bi-people-fill me-2"></i>Manajemen Anggota
                    </h2>
                    <p class="page-subtitle">Kelola data anggota tim</p>
                </div>

                <button type="button" class="btn btn-green px-4 py-2" data-bs-toggle="modal" data-bs-target="#addMemberModal">
                    <i class="bi bi-plus-lg me-1"></i>Tambah Anggota
                </button>
            </div>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i>
                {{ session('success') }}

                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>
                    <i class="bi bi-exclamation-triangle-fill me-2"></i>Terjadi kesalahan
                </strong>

                <ul class="mb-0 mt-2">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="members-card">
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th width="70">No</th>
                            <th width="100">Foto</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th width="100">Urutan</th>
                            <th width="150" class="text-center">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($members as $member)
                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>
                                    @if($member->foto)
                                        <img src="{{ asset('uploads/members/' . $member->foto) }}" alt="{{ $member->nama }}" class="member-photo">
                                    @else
                                        <div class="no-photo">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    @endif
                                </td>

                                <td>
                                    <strong>{{ $member->nama }}</strong>

                                    @if($member->deskripsi)
                                        <br>
                                        <small class="text-muted">
                                            {{ Str::limit($member->deskripsi, 60) }}
                                        </small>
                                    @endif
                                </td>

                                <td>
                                    <span class="position-badge">{{ $member->jabatan }}</span>
                                </td>

                                <td>
                                    <span class="badge text-bg-light">{{ $member->urutan }}</span>
                                </td>

                                <td class="text-center">
                                    <button type="button" class="btn action-btn btn-edit me-1" title="Edit" data-bs-toggle="modal" data-bs-target="#editMemberModal{{ $member->id }}">
                                        <i class="bi bi-pencil-fill"></i>
                                    </button>

                                    <button type="button" class="btn action-btn btn-delete" title="Hapus" data-bs-toggle="modal" data-bs-target="#deleteMemberModal{{ $member->id }}">
                                        <i class="bi bi-trash-fill"></i>
                                    </button>
                                </td>
                            </tr>

                            <!-- Modal Edit -->
                            <div class="modal fade" id="editMemberModal{{ $member->id }}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h5 class="modal-title">
                                                <i class="bi bi-pencil-square me-2"></i>Edit Anggota
                                            </h5>

                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <form action="{{ route('admin.members.update', $member) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                            <div class="modal-body">
                                                <div class="row g-3">

                                                    <div class="col-md-6">
                                                        <label class="form-label">Nama Anggota</label>
                                                        <input type="text" name="nama" class="form-control" value="{{ $member->nama }}" required>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label class="form-label">Jabatan</label>
                                                        <input type="text" name="jabatan" class="form-control" value="{{ $member->jabatan }}" placeholder="Contoh: Ketua" required>
                                                    </div>

                                                    <div class="col-12">
                                                        <label class="form-label">Deskripsi</label>
                                                        <textarea name="deskripsi" class="form-control" rows="4" placeholder="Deskripsi singkat anggota...">{{ $member->deskripsi }}</textarea>
                                                    </div>

                                                    <div class="col-md-8">
                                                        <label class="form-label">Ganti Foto</label>
                                                        <input type="file" name="foto" class="form-control" accept="image/jpeg,image/png,image/webp">
                                                        <small class="text-muted">Maksimal 2 MB. Kosongkan jika tidak ingin mengganti foto.</small>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label class="form-label">Urutan</label>
                                                        <input type="number" name="urutan" class="form-control" value="{{ $member->urutan }}" min="0" required>
                                                    </div>

                                                    @if($member->foto)
                                                        <div class="col-12">
                                                            <label class="form-label d-block">Foto Saat Ini</label>
                                                            <img src="{{ asset('uploads/members/' . $member->foto) }}" alt="{{ $member->nama }}" class="current-photo">
                                                        </div>
                                                    @endif

                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>

                                                <button type="submit" class="btn btn-green">
                                                    <i class="bi bi-check-lg me-1"></i>Simpan Perubahan
                                                </button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>

                            <!-- Modal Hapus -->
                            <div class="modal fade" id="deleteMemberModal{{ $member->id }}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h5 class="modal-title">
                                                <i class="bi bi-trash-fill me-2"></i>Hapus Anggota
                                            </h5>

                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <div class="modal-body text-center py-4">
                                            <div class="mb-3">
                                                <i class="bi bi-exclamation-circle" style="font-size: 55px; color: #c0392b;"></i>
                                            </div>

                                            <h5>Yakin ingin menghapus?</h5>

                                            <p class="text-muted mb-0">
                                                Data anggota <strong>{{ $member->nama }}</strong> akan dihapus secara permanen.
                                            </p>
                                        </div>

                                        <div class="modal-footer justify-content-center">
                                            <button type="button" class="btn btn-light px-4" data-bs-dismiss="modal">
                                                Batal
                                            </button>

                                            <form action="{{ route('admin.members.destroy', $member) }}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger px-4">
                                                    <i class="bi bi-trash me-1"></i>Ya, Hapus
                                                </button>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        @empty
                            <tr>
                                <td colspan="6">
                                    <div class="empty-state">
                                        <i class="bi bi-people"></i>
                                        <h5>Belum Ada Anggota</h5>
                                        <p class="text-muted">Silakan tambahkan anggota pertama.</p>

                                        <button type="button" class="btn btn-green" data-bs-toggle="modal" data-bs-target="#addMemberModal">
                                            <i class="bi bi-plus-lg me-1"></i>Tambah Anggota
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Anggota -->
    <div class="modal fade" id="addMemberModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="bi bi-person-plus-fill me-2"></i>Tambah Anggota
                    </h5>

                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <form action="{{ route('admin.members.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="modal-body">
                        <div class="row g-3">

                            <div class="col-md-6">
                                <label class="form-label">Nama Anggota</label>
                                <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" placeholder="Contoh: Fawwaz Zahran" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Jabatan</label>
                                <input type="text" name="jabatan" class="form-control" value="{{ old('jabatan') }}" placeholder="Contoh: Ketua" required>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Deskripsi</label>
                                <textarea name="deskripsi" class="form-control" rows="4" placeholder="Deskripsi singkat tentang anggota...">{{ old('deskripsi') }}</textarea>
                            </div>

                            <div class="col-md-8">
                                <label class="form-label">Foto</label>
                                <input type="file" name="foto" class="form-control" accept="image/jpeg,image/png,image/webp">
                                <small class="text-muted">Format JPG, JPEG, PNG, atau WEBP. Maksimal 2 MB.</small>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">Urutan</label>
                                <input type="number" name="urutan" class="form-control" value="{{ old('urutan', 1) }}" min="0" required>
                                <small class="text-muted">Angka kecil tampil lebih dahulu.</small>
                            </div>

                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>

                        <button type="submit" class="btn btn-green">
                            <i class="bi bi-check-lg me-1"></i>Simpan Anggota
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>