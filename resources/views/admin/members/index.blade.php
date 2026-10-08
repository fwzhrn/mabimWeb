
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Anggota · PPkM Informatika</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        :root {
            --blue: #2563eb;
            --blue-dark: #1e40af;
            --navy: #0b1736;
            --text: #172033;
            --muted: #667085;
            --soft: #f5f8fc;
            --line: #e6eaf0;
            --white: #fff;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            background: var(--soft);
            color: var(--text);
            font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
        }

        .page-container {
            width: min(1180px, 92%);
            margin: 45px auto;
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: var(--white);
            border: 1px solid var(--line);
            padding: 28px 32px;
            margin-bottom: 22px;
            border-radius: 18px;
        }

        .eyebrow {
            color: var(--blue);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-bottom: 6px;
        }

        .page-title {
            margin: 0;
            color: var(--navy);
            font-size: 27px;
            font-weight: 700;
        }

        .page-subtitle {
            color: var(--muted);
            margin: 6px 0 0;
            font-size: 14px;
        }

        .btn-primary-custom {
            background: var(--blue);
            border: 1px solid var(--blue);
            color: white;
            padding: 10px 18px;
            border-radius: 9px;
            font-weight: 600;
        }

        .btn-primary-custom:hover {
            background: var(--blue-dark);
            border-color: var(--blue-dark);
            color: white;
        }

        .members-card {
            background: var(--white);
            border: 1px solid var(--line);
            border-radius: 18px;
            overflow: hidden;
        }

        .table {
            margin: 0;
        }

        .table thead th {
            background: #f8fafc;
            color: #475467;
            border-bottom: 1px solid var(--line);
            border-top: none;
            padding: 15px 18px;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .5px;
            white-space: nowrap;
        }

        .table tbody td {
            padding: 16px 18px;
            border-color: var(--line);
            vertical-align: middle;
        }

        .table tbody tr:last-child td {
            border-bottom: none;
        }

        .table tbody tr:hover {
            background: #fafcff;
        }

        .member-photo,
        .no-photo {
            width: 52px;
            height: 52px;
            border-radius: 50%;
        }

        .member-photo {
            object-fit: cover;
            border: 2px solid #e8eef8;
        }

        .no-photo {
            display: flex;
            align-items: center;
            justify-content: center;
            background: #eef2f7;
            color: #98a2b3;
            font-size: 19px;
        }

        .member-name {
            color: var(--navy);
            font-weight: 650;
        }

        .member-description {
            display: block;
            max-width: 330px;
            margin-top: 3px;
            color: var(--muted);
            font-size: 12px;
        }

        .position-badge {
            display: inline-block;
            padding: 6px 11px;
            border-radius: 7px;
            background: #eef4ff;
            color: var(--blue-dark);
            font-size: 12px;
            font-weight: 600;
        }

        .order-badge {
            display: inline-flex;
            min-width: 30px;
            height: 30px;
            align-items: center;
            justify-content: center;
            padding: 0 8px;
            border-radius: 7px;
            background: #f2f4f7;
            color: #475467;
            font-size: 12px;
            font-weight: 600;
        }

        .action-btn {
            width: 35px;
            height: 35px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0;
            border-radius: 8px;
            border: 1px solid transparent;
        }

        .btn-edit {
            background: #eef4ff;
            color: var(--blue);
        }

        .btn-edit:hover {
            background: var(--blue);
            color: white;
        }

        .btn-delete {
            background: #fff1f1;
            color: #dc3545;
        }

        .btn-delete:hover {
            background: #dc3545;
            color: white;
        }

        .modal-content {
            border: none;
            border-radius: 16px;
            overflow: hidden;
        }

        .modal-header {
            background: var(--navy);
            color: white;
            padding: 18px 22px;
            border: none;
        }

        .modal-title {
            font-size: 17px;
            font-weight: 650;
        }

        .modal-header .btn-close {
            filter: invert(1);
        }

        .modal-body {
            padding: 24px;
        }

        .modal-footer {
            padding: 16px 24px;
            background: #fafbfc;
            border-top: 1px solid var(--line);
        }

        .form-label {
            color: #344054;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 7px;
        }

        .form-control,
        .form-select {
            border: 1px solid #d0d5dd;
            border-radius: 8px;
            padding: 10px 12px;
            font-size: 14px;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--blue);
            box-shadow: 0 0 0 3px rgba(37, 99, 235, .10);
        }

        .form-text {
            color: var(--muted);
            font-size: 12px;
        }

        .current-photo {
            width: 78px;
            height: 78px;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid #eef2f7;
        }

        .empty-state {
            padding: 70px 20px;
            text-align: center;
        }

        .empty-state i {
            color: #98a2b3;
            font-size: 44px;
        }

        .empty-state h5 {
            color: var(--navy);
            margin: 15px 0 5px;
            font-weight: 650;
        }

        .empty-state p {
            color: var(--muted);
            margin-bottom: 18px;
        }

        .alert {
            border: none;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        @media (max-width: 768px) {
            .page-container {
                width: 94%;
                margin: 25px auto;
            }

            .page-header {
                padding: 22px;
                flex-direction: column;
                align-items: flex-start;
                gap: 18px;
            }

            .page-title {
                font-size: 23px;
            }

            .btn-primary-custom {
                width: 100%;
            }

            .table-responsive {
                border-radius: 18px;
            }
        }
    </style>
</head>
<body>
    <div class="page-container">
        <div class="page-header">
            <div>
                <div class="eyebrow">PPkM Informatika</div>
                <h1 class="page-title">Manajemen Anggota</h1>
                <p class="page-subtitle">Kelola informasi anggota dan susunan organisasi.</p>
            </div>
            <button type="button" class="btn btn-primary-custom" data-bs-toggle="modal" data-bs-target="#addMemberModal">
                <i class="bi bi-plus-lg me-1"></i>Tambah Anggota
            </button>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong><i class="bi bi-exclamation-triangle-fill me-2"></i>Terjadi kesalahan</strong>
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
                            <th width="65">No</th>
                            <th width="90">Foto</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th width="90">Urutan</th>
                            <th width="125" class="text-center">Aksi</th>
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
                                        <div class="no-photo"><i class="bi bi-person"></i></div>
                                    @endif
                                </td>
                                <td>
                                    <span class="member-name">{{ $member->nama }}</span>
                                    @if($member->deskripsi)
                                        <span class="member-description">{{ Str::limit($member->deskripsi, 65) }}</span>
                                    @endif
                                </td>
                                <td><span class="position-badge">{{ $member->jabatan }}</span></td>
                                <td><span class="order-badge">{{ $member->urutan }}</span></td>
                                <td class="text-center">
                                    <button type="button" class="btn action-btn btn-edit me-1" title="Edit" data-bs-toggle="modal" data-bs-target="#editMemberModal{{ $member->id }}">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button type="button" class="btn action-btn btn-delete" title="Hapus" data-bs-toggle="modal" data-bs-target="#deleteMemberModal{{ $member->id }}">
                                        <i class="bi bi-trash3"></i>
                                    </button>
                                </td>
                            </tr>

                            <!-- Modal Edit -->
                            <div class="modal fade" id="editMemberModal{{ $member->id }}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title"><i class="bi bi-pencil-square me-2"></i>Edit Anggota</h5>
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
                                                        <div class="form-text">Maksimal 2 MB. Kosongkan jika tidak ingin mengganti foto.</div>
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
                                                <button type="submit" class="btn btn-primary-custom">
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
                                            <h5 class="modal-title"><i class="bi bi-trash3 me-2"></i>Hapus Anggota</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body text-center py-4">
                                            <div class="mb-3">
                                                <i class="bi bi-exclamation-circle" style="font-size:48px;color:#dc3545;"></i>
                                            </div>
                                            <h5 class="mb-2">Yakin ingin menghapus?</h5>
                                            <p class="text-muted mb-0">Data <strong>{{ $member->nama }}</strong> akan dihapus secara permanen.</p>
                                        </div>
                                        <div class="modal-footer justify-content-center">
                                            <button type="button" class="btn btn-light px-4" data-bs-dismiss="modal">Batal</button>
                                            <form action="{{ route('admin.members.destroy', $member) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger px-4">
                                                    <i class="bi bi-trash3 me-1"></i>Ya, Hapus
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
                                        <p>Tambahkan anggota pertama untuk mulai mengisi data PPkM Informatika.</p>
                                        <button type="button" class="btn btn-primary-custom" data-bs-toggle="modal" data-bs-target="#addMemberModal">
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
                    <h5 class="modal-title"><i class="bi bi-person-plus me-2"></i>Tambah Anggota</h5>
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
                                <div class="form-text">Format JPG, JPEG, PNG, atau WEBP. Maksimal 2 MB.</div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Urutan</label>
                                <input type="number" name="urutan" class="form-control" value="{{ old('urutan', 1) }}" min="0" required>
                                <div class="form-text">Angka kecil tampil lebih dahulu.</div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary-custom">
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