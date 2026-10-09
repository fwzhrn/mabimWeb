<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Anggota · PPKM Informatika</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --cream: #f4f7fb;
            --ink: #0a1633;
            --dark: #071126;
            --blue: #123b8f;
            --blue-bright: #2457c5;
            --lime: #dbe8ff;
            --muted: #52627d;
            --line: #0a1633;
            --display: 'Anton', 'Impact', sans-serif;
            --mono: 'Space Mono', ui-monospace, monospace;
        }

        * { box-sizing: border-box; }
        html { scroll-behavior: smooth; }

        body {
            margin: 0;
            color: var(--ink);
            background: var(--cream);
            font-family: var(--mono);
        }

        a { color: inherit; }

        /* ============ TOPBAR ============ */
        .topbar {
            display: flex;
            align-items: stretch;
            justify-content: space-between;
            border-bottom: 2px solid var(--line);
            background: var(--cream);
        }

        .topbar-brand {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 14px 24px;
            border-right: 2px solid var(--line);
            font-family: var(--display);
            font-size: 22px;
            line-height: 1;
            letter-spacing: .02em;
            text-transform: uppercase;
            text-decoration: none;
        }

        .topbar-brand .logo-star { font-size: 34px; line-height: 1; }

        .topbar-brand small {
            display: block;
            font-family: var(--mono);
            font-size: 9px;
            letter-spacing: 0;
            text-transform: none;
            color: var(--muted);
            margin-top: 4px;
        }

        .topbar-status {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 0 24px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .06em;
            text-transform: uppercase;
        }

        .topbar-status::after {
            content: "";
            width: 9px;
            height: 9px;
            background: var(--blue);
            border-radius: 50%;
        }

        .page-container {
            width: min(1220px, 92%);
            margin: 0 auto;
            padding: 48px 0 72px;
        }

        /* ============ HEADER ============ */
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            flex-wrap: wrap;
            gap: 24px;
            margin-bottom: 36px;
        }

        .page-kicker {
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
            margin-bottom: 14px;
        }

        .page-title {
            font-family: var(--display);
            font-weight: 400;
            font-size: clamp(2.8rem, 6vw, 5rem);
            line-height: .92;
            text-transform: uppercase;
            margin: 0;
        }

        .page-title .blue { color: var(--blue); }

        .page-subtitle {
            max-width: 480px;
            margin: 14px 0 0;
            font-size: 13px;
            line-height: 1.75;
            color: var(--muted);
        }

        /* ============ BUTTONS ============ */
        .btn-pill {
            display: inline-flex;
            align-items: center;
            gap: 14px;
            background: var(--blue);
            color: #fff;
            border: 0;
            border-radius: 999px;
            padding: 7px 30px 7px 7px;
            font-family: var(--mono);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .06em;
            text-transform: uppercase;
            text-decoration: none;
            cursor: pointer;
            transition: transform .2s;
        }

        .btn-pill:hover { color: #fff; transform: translateX(5px); }

        .btn-pill .arrow {
            display: grid;
            place-items: center;
            width: 38px;
            height: 38px;
            background: #fff;
            color: var(--blue);
            border-radius: 50%;
            font-size: 18px;
        }

        .btn-square {
            background: var(--blue);
            color: #fff;
            border: 2px solid var(--ink);
            border-radius: 0;
            padding: 10px 20px;
            font-family: var(--mono);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .06em;
            text-transform: uppercase;
        }

        .btn-square:hover { background: var(--ink); color: #fff; border-color: var(--ink); }

        .btn-ghost {
            background: transparent;
            color: var(--ink);
            border: 2px solid var(--ink);
            border-radius: 0;
            padding: 10px 20px;
            font-family: var(--mono);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .06em;
            text-transform: uppercase;
        }

        .btn-ghost:hover { background: var(--lime); color: var(--ink); border-color: var(--ink); }

        .btn-danger-sq {
            background: #c62828;
            color: #fff;
            border: 2px solid var(--ink);
            border-radius: 0;
            padding: 10px 20px;
            font-family: var(--mono);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .06em;
            text-transform: uppercase;
        }

        .btn-danger-sq:hover { background: var(--ink); color: #fff; }

        /* ============ STATS ============ */
        .stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            border: 2px solid var(--line);
            background: var(--lime);
            margin-bottom: 36px;
        }

        .stat {
            display: flex;
            align-items: center;
            gap: 16px;
            padding: 22px 24px;
            border-right: 2px solid var(--line);
        }

        .stat:last-child { border-right: 0; }

        .stat-icon {
            display: grid;
            place-items: center;
            flex: 0 0 46px;
            width: 46px;
            height: 46px;
            background: var(--blue);
            color: #fff;
            font-size: 21px;
        }

        .stat-label { font-size: 10px; font-weight: 700; letter-spacing: .08em; text-transform: uppercase; color: var(--muted); }
        .stat-value { font-family: var(--display); font-size: 2rem; line-height: 1.1; text-transform: uppercase; }
        .stat-note { font-size: 11px; color: var(--muted); }

        /* ============ ALERT ============ */
        .alert {
            border: 2px solid var(--ink);
            border-radius: 0;
            font-size: 12px;
            margin-bottom: 24px;
        }

        .alert-success { background: var(--lime); color: var(--ink); }
        .alert-danger { background: #ffe3e3; color: #7a1010; }

        /* ============ LIST ============ */
        .list-toolbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 18px;
            padding: 20px 24px;
            background: var(--dark);
            color: #fff;
            border: 2px solid var(--line);
            border-bottom: 0;
        }

        .list-heading {
            font-family: var(--display);
            font-weight: 400;
            font-size: 1.9rem;
            text-transform: uppercase;
            margin: 0;
        }

        .list-caption { font-size: 11px; color: #aebbd2; margin: 4px 0 0; }

        .search-wrap { position: relative; width: min(330px, 100%); }
        .search-wrap i { position: absolute; top: 50%; left: 16px; transform: translateY(-50%); color: #7786a0; }

        .search-input {
            width: 100%;
            padding: 12px 16px 12px 40px;
            border: 1px solid #31415e;
            background: #0c1931;
            color: #fff;
            border-radius: 999px;
            font-family: var(--mono);
            font-size: 11px;
            outline: none;
        }

        .search-input::placeholder { color: #7786a0; }
        .search-input:focus { border-color: #6f9df7; box-shadow: 0 0 0 3px rgba(111,157,247,.12); }

        .members-card {
            background: #fff;
            border: 2px solid var(--line);
            overflow: hidden;
        }

        .table { margin: 0; font-family: var(--mono); }

        .table thead th {
            background: var(--lime);
            color: var(--ink);
            border-bottom: 2px solid var(--line);
            border-top: 0;
            padding: 14px 18px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
            white-space: nowrap;
        }

        .table tbody td {
            padding: 16px 18px;
            border-color: #d6dfed;
            vertical-align: middle;
            font-size: 13px;
        }

        .table tbody tr:last-child td { border-bottom: 0; }
        .table tbody tr { transition: background .18s ease; }
        .table tbody tr:hover { background: #f4f7fb; }
        .table tbody td:first-child { color: var(--muted); font-size: 12px; font-weight: 700; }

        .member-photo,
        .no-photo { width: 52px; height: 52px; }

        .member-photo { object-fit: cover; border: 2px solid var(--ink); }

        .no-photo {
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--lime);
            border: 2px solid var(--ink);
            color: var(--blue);
            font-size: 22px;
        }

        .member-name { font-weight: 700; text-transform: uppercase; font-size: 13px; }

        .ig-link {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            margin-top: 4px;
            color: var(--blue-bright);
            font-size: 12px;
            font-weight: 700;
            text-decoration: none;
        }

        .ig-link:hover { text-decoration: underline; text-underline-offset: 4px; }
        .ig-empty { display: block; margin-top: 4px; font-size: 12px; color: #8190a8; }

        .position-badge {
            display: inline-block;
            padding: 6px 11px;
            background: var(--blue);
            color: #fff;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
        }

        .order-badge {
            display: inline-flex;
            min-width: 32px;
            height: 32px;
            align-items: center;
            justify-content: center;
            padding: 0 8px;
            border: 2px solid var(--ink);
            font-size: 12px;
            font-weight: 700;
        }

        .action-btn {
            width: 36px;
            height: 36px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0;
            border-radius: 0;
            border: 2px solid var(--ink);
            background: #fff;
            color: var(--ink);
        }

        .btn-edit:hover { background: var(--blue); color: #fff; border-color: var(--ink); }
        .btn-delete { color: #c62828; }
        .btn-delete:hover { background: #c62828; color: #fff; border-color: var(--ink); }

        /* ============ MODAL ============ */
        .modal-content {
            border: 2px solid var(--ink);
            border-radius: 0;
            overflow: hidden;
            background: var(--cream);
            font-family: var(--mono);
            box-shadow: 8px 8px 0 var(--ink);
        }

        .modal-header {
            background: var(--dark);
            color: #fff;
            padding: 16px 22px;
            border: 0;
        }

        .modal-title {
            font-family: var(--display);
            font-weight: 400;
            font-size: 1.5rem;
            letter-spacing: .02em;
            text-transform: uppercase;
        }

        .modal-header .btn-close { filter: invert(1); opacity: .8; }
        .modal-body { padding: 26px 24px; }

        .modal-footer {
            padding: 16px 24px;
            background: var(--lime);
            border-top: 2px solid var(--line);
            gap: 8px;
        }

        .modal-footer > * { margin: 0; }

        .form-label {
            color: var(--ink);
            font-size: 10px;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
            margin-bottom: 7px;
        }

        .form-control {
            background: #fff;
            border: 2px solid var(--ink);
            border-radius: 0;
            padding: 10px 12px;
            font-family: var(--mono);
            font-size: 13px;
            color: var(--ink);
        }

        .form-control::placeholder { color: #8190a8; }

        .form-control:focus {
            background: #fff;
            border-color: var(--blue-bright);
            box-shadow: 4px 4px 0 var(--lime);
        }

        .input-group-text {
            background: var(--blue);
            color: #fff;
            border: 2px solid var(--ink);
            border-right: 0;
            border-radius: 0;
            font-family: var(--mono);
            font-weight: 700;
            font-size: 13px;
        }

        .input-group .form-control { border-radius: 0; }

        input[type="file"].form-control { padding: 8px 10px; font-size: 12px; }
        input[type="file"].form-control::file-selector-button {
            margin: -8px 12px -8px -10px;
            padding: 9px 14px;
            background: var(--ink);
            color: #fff;
            border: 0;
            border-right: 2px solid var(--ink);
            border-radius: 0;
            font-family: var(--mono);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .06em;
            text-transform: uppercase;
            cursor: pointer;
        }

        .form-text { color: var(--muted); font-size: 11px; line-height: 1.6; }

        .current-photo {
            width: 78px;
            height: 78px;
            object-fit: cover;
            border: 2px solid var(--ink);
        }

        .delete-icon { font-size: 48px; color: #c62828; }
        .delete-title { font-family: var(--display); font-weight: 400; font-size: 1.8rem; text-transform: uppercase; }

        /* ============ EMPTY ============ */
        .empty-state {
            padding: 64px 20px;
            text-align: center;
        }

        .empty-state i { color: var(--blue); font-size: 44px; }

        .empty-state h5 {
            font-family: var(--display);
            font-weight: 400;
            font-size: 1.8rem;
            text-transform: uppercase;
            margin: 14px 0 6px;
        }

        .empty-state p { color: var(--muted); font-size: 13px; margin-bottom: 20px; }

        .member-row-hidden { display: none; }

        @media (max-width: 991px) {
            .topbar-brand { border-right: 0; padding: 12px 20px; }
            .topbar-status { padding: 0 20px; }
            .stats { grid-template-columns: 1fr; }
            .stat { border-right: 0; border-bottom: 2px solid var(--line); }
            .stat:last-child { border-bottom: 0; }
        }

        @media (max-width: 575px) {
            .page-container { padding: 32px 0 56px; }
            .list-toolbar { padding: 18px; }
            .search-wrap { width: 100%; }
        }

        @media (prefers-reduced-motion: reduce) {
            .btn-pill, .table tbody tr { transition: none; }
        }
    </style>
</head>
<body>

    <!-- TOPBAR -->
    <div class="topbar">
        <a class="topbar-brand" href="/">
            <span class="logo-star">7</span>
            <span>
                PPKM Informatika
                <small>Satu Ideologi Satu Solidaritas</small>
            </span>
        </a>
        <div class="topbar-status">Panel Admin</div>
    </div>

    <div class="page-container">

        <!-- HEADER -->
        <div class="page-header">
            <div>
                <div class="page-kicker">PPKM Informatika</div>
                <h1 class="page-title">Manajemen <span class="blue">Anggota.</span></h1>
                <p class="page-subtitle">Kelola data anggota Kelompok 7: nama, jabatan, foto, dan akun Instagram.</p>
            </div>
            <button type="button" class="btn-pill" data-bs-toggle="modal" data-bs-target="#addMemberModal">
                <span class="arrow"><i class="bi bi-plus-lg"></i></span>
                Tambah Anggota
            </button>
        </div>

        <!-- STATS -->
        <div class="stats">
            <div class="stat">
                <div class="stat-icon"><i class="bi bi-people-fill"></i></div>
                <div>
                    <div class="stat-label">Total Anggota</div>
                    <div class="stat-value">{{ $members->count() }}</div>
                    <div class="stat-note">Data anggota terdaftar</div>
                </div>
            </div>
            <div class="stat">
                <div class="stat-icon"><i class="bi bi-person-badge-fill"></i></div>
                <div>
                    <div class="stat-label">Manajemen Data</div>
                    <div class="stat-value">Terpusat</div>
                    <div class="stat-note">Tambah, edit, dan hapus anggota</div>
                </div>
            </div>
            <div class="stat">
                <div class="stat-icon"><i class="bi bi-instagram"></i></div>
                <div>
                    <div class="stat-label">Kontak Anggota</div>
                    <div class="stat-value">Instagram</div>
                    <div class="stat-note">Cukup isi username akun</div>
                </div>
            </div>
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

        <!-- TOOLBAR -->
        <div class="list-toolbar">
            <div>
                <h2 class="list-heading">Daftar Anggota</h2>
                <p class="list-caption">Lihat dan kelola informasi anggota kelompok.</p>
            </div>
            <div class="search-wrap">
                <i class="bi bi-search"></i>
                <input type="search" id="memberSearch" class="search-input" placeholder="Cari nama / jabatan / instagram..." aria-label="Cari anggota">
            </div>
        </div>

        <!-- TABLE -->
        <div class="members-card">
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th width="65">No</th>
                            <th width="90">Foto</th>
                            <th>Nama / Instagram</th>
                            <th>Jabatan</th>
                            <th width="90">Urutan</th>
                            <th width="125" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($members as $member)
                            @php
                                // kolom `deskripsi` sekarang berisi username Instagram
                                $ig = ltrim(trim($member->deskripsi ?? ''), '@');
                                $igValid = preg_match('/^[A-Za-z0-9._]{1,30}$/', $ig);
                            @endphp

                            <tr class="member-row" data-search="{{ strtolower($member->nama . ' ' . $member->jabatan . ' ' . $ig) }}">
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
                                    @if($igValid)
                                        <a href="https://instagram.com/{{ $ig }}" target="_blank" rel="noopener noreferrer" class="ig-link d-flex">
                                            <i class="bi bi-instagram"></i>&#64;{{ $ig }}
                                        </a>
                                    @else
                                        <span class="ig-empty">Instagram belum diisi</span>
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
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
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
                                                        <label class="form-label">Username Instagram</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text">@</span>
                                                            <input type="text" name="deskripsi" class="form-control" data-ig
                                                                   value="{{ $igValid ? $ig : '' }}"
                                                                   placeholder="username.instagram"
                                                                   maxlength="60" autocomplete="off" autocapitalize="off" spellcheck="false">
                                                        </div>
                                                        <div class="form-text">Tulis username saja, tanpa link. Contoh: <strong>fawwazzahran</strong></div>
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
                                                <button type="button" class="btn btn-ghost" data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-square">
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
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                                        </div>
                                        <div class="modal-body text-center py-4">
                                            <div class="mb-3"><i class="bi bi-exclamation-circle delete-icon"></i></div>
                                            <h5 class="delete-title mb-2">Yakin ingin menghapus?</h5>
                                            <p class="mb-0" style="font-size:13px;color:var(--muted);">Data <strong>{{ $member->nama }}</strong> akan dihapus secara permanen.</p>
                                        </div>
                                        <div class="modal-footer justify-content-center">
                                            <button type="button" class="btn btn-ghost" data-bs-dismiss="modal">Batal</button>
                                            <form action="{{ route('admin.members.destroy', $member) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger-sq">
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
                                        <p>Tambahkan anggota pertama untuk mulai mengisi data PPKM Informatika.</p>
                                        <button type="button" class="btn-pill" data-bs-toggle="modal" data-bs-target="#addMemberModal">
                                            <span class="arrow"><i class="bi bi-plus-lg"></i></span>
                                            Tambah Anggota
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
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
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
                                <label class="form-label">Username Instagram</label>
                                <div class="input-group">
                                    <span class="input-group-text">@</span>
                                    <input type="text" name="deskripsi" class="form-control" data-ig
                                           value="{{ old('deskripsi') }}"
                                           placeholder="username.instagram"
                                           maxlength="60" autocomplete="off" autocapitalize="off" spellcheck="false">
                                </div>
                                <div class="form-text">Tulis username saja, tanpa link. Contoh: <strong>fawwazzahran</strong></div>
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
                        <button type="button" class="btn btn-ghost" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-square">
                            <i class="bi bi-check-lg me-1"></i>Simpan Anggota
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // CARI ANGGOTA
            const searchInput = document.getElementById('memberSearch');
            const rows = Array.from(document.querySelectorAll('.member-row'));

            if (searchInput) {
                searchInput.addEventListener('input', function () {
                    const keyword = this.value.toLocaleLowerCase('id').trim();
                    rows.forEach(function (row) {
                        const text = (row.dataset.search || row.innerText).toLocaleLowerCase('id');
                        row.style.display = text.includes(keyword) ? '' : 'none';
                    });
                });
            }

            // BERSIHKAN INPUT INSTAGRAM
            // kalau yang ditempel link atau pakai "@", otomatis jadi username saja
            function cleanInstagram(value) {
                let v = value.trim();
                v = v.replace(/^https?:\/\/(www\.)?instagram\.com\//i, '');
                v = v.split(/[\/?#]/)[0];
                return v.replace(/^@+/, '');
            }

            document.querySelectorAll('input[data-ig]').forEach(function (input) {
                input.addEventListener('blur', function () {
                    this.value = cleanInstagram(this.value);
                });
            });
        });
    </script>
</body>
</html>