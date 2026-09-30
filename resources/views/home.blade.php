
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mabim Kita</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            background: #f8fafc;
            color: #0f172a;
            font-family: Arial, Helvetica, sans-serif;
        }

        /* NAVBAR */

        .navbar {
            background: #0f172a;
            padding: 14px 0;
            border-bottom: 3px solid #0ea5e9;
        }

        .navbar-brand {
            color: white !important;
            font-size: 21px;
            font-weight: 800;
        }

        .navbar-brand span {
            color: #38bdf8;
        }

        .navbar-brand i {
            color: #0ea5e9;
        }

        .navbar-nav .nav-link {
            color: #cbd5e1;
            margin-left: 18px;
            font-size: 14px;
            font-weight: 600;
        }

        .navbar-nav .nav-link:hover {
            color: #38bdf8;
        }

        .navbar-toggler {
            border-color: #334155;
        }

        .navbar-toggler-icon {
            filter: invert(1);
        }

        /* HERO */

        .hero {
            background: #0f172a;
            color: white;
            padding: 100px 20px 110px;
            border-bottom: 8px solid #0ea5e9;
        }

        .hero small {
            color: #38bdf8;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .hero h1 {
            max-width: 850px;
            font-size: 58px;
            line-height: 1.05;
            font-weight: 900;
            margin: 18px 0 25px;
        }

        .hero h1 span {
            color: #0ea5e9;
        }

        .hero p {
            max-width: 700px;
            color: #cbd5e1;
            font-size: 18px;
            line-height: 1.7;
            margin-bottom: 30px;
        }

        .hero-note {
            margin-top: 20px;
            color: #94a3b8;
            font-size: 13px;
        }

        .btn-main {
            background: #0ea5e9;
            color: white;
            border: none;
            padding: 13px 22px;
            border-radius: 6px;
            font-weight: 700;
        }

        .btn-main:hover {
            background: #0284c7;
            color: white;
        }

        /* GENERAL */

        .section {
            padding: 85px 20px;
        }

        .section-title {
            font-size: 34px;
            font-weight: 900;
            color: #0f172a;
            margin-bottom: 10px;
        }

        .section-subtitle {
            color: #64748b;
            margin-bottom: 45px;
        }

        /* ABOUT */

        .about-section {
            background: white;
        }

        .about-box {
            max-width: 950px;
            margin: auto;
            background: #e0f2fe;
            border-left: 7px solid #0ea5e9;
            padding: 35px;
        }

        .about-box h3 {
            font-size: 25px;
            font-weight: 800;
            margin-bottom: 18px;
        }

        .about-box p {
            color: #334155;
            line-height: 1.8;
            margin-bottom: 10px;
        }

        .about-box .warning {
            color: #0369a1;
            font-weight: 700;
            margin-top: 20px;
        }

        /* MEMBERS */

        .members-section {
            background: #f8fafc;
        }

        .member-card {
            height: 100%;
            background: white;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            padding: 30px 22px;
            text-align: center;
            transition: 0.2s;
        }

        .member-card:hover {
            border-color: #0ea5e9;
            transform: translateY(-4px);
        }

        .member-photo-wrapper {
            width: 145px;
            height: 145px;
            margin: 0 auto 20px;
            padding: 5px;
            background: #0ea5e9;
            border-radius: 50%;
        }

        .member-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid white;
        }

        .member-no-image {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: #e0f2fe;
            color: #0284c7;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 55px;
            border: 4px solid white;
        }

        .member-name {
            font-size: 21px;
            font-weight: 800;
            margin-bottom: 9px;
            color: #0f172a;
        }

        .member-position {
            display: inline-block;
            background: #0f172a;
            color: #7dd3fc;
            padding: 6px 13px;
            border-radius: 5px;
            font-size: 12px;
            font-weight: 800;
            margin-bottom: 17px;
        }

        .member-description {
            color: #64748b;
            line-height: 1.7;
            font-size: 14px;
            margin-bottom: 0;
        }

        .member-joke {
            margin-top: 18px;
            color: #0284c7;
            font-size: 12px;
            font-weight: 700;
        }

        /* EMPTY */

        .empty-state {
            background: white;
            border: 2px dashed #bae6fd;
            padding: 60px 20px;
            text-align: center;
        }

        .empty-state i {
            font-size: 55px;
            color: #0ea5e9;
        }

        /* FINAL MESSAGE */

        .final-section {
            background: #0f172a;
            color: white;
            text-align: center;
            padding: 80px 20px;
        }

        .final-section h2 {
            font-size: 36px;
            font-weight: 900;
            margin-bottom: 15px;
        }

        .final-section p {
            color: #94a3b8;
            max-width: 650px;
            margin: 0 auto 25px;
            line-height: 1.7;
        }

        .final-line {
            color: #38bdf8;
            font-size: 14px;
            font-weight: 700;
        }

        /* FOOTER */

        footer {
            background: #020617;
            color: #64748b;
            padding: 25px 20px;
            font-size: 13px;
        }

        footer strong {
            color: #cbd5e1;
        }

        footer span {
            color: #0ea5e9;
        }

        /* MOBILE */

        @media (max-width: 768px) {
            .hero {
                padding: 75px 20px 85px;
            }

            .hero h1 {
                font-size: 40px;
            }

            .hero p {
                font-size: 16px;
            }

            .section {
                padding: 65px 20px;
            }

            .section-title {
                font-size: 28px;
            }

            .member-card {
                padding: 28px 20px;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/">
                <i class="bi bi-people-fill me-2"></i>MABIM<span>.KITA</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Beranda</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">Tentang</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#anggota">Korban</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- HERO -->

    <section class="hero" id="home">
        <div class="container">

            <small>WEBSITE RESMI KELOMPOK MABIM</small>

            <h1>
                Selamat Datang di Tempat
                yang <span>Sebenarnya Tidak Perlu</span>
                Dibuat.
            </h1>

            <p>
                Kami awalnya cuma disuruh kenalan.
                Tidak ada yang menyangka prosesnya akan berkembang
                sampai punya database, CRUD, dan website sendiri.
                Inilah hasil dari terlalu banyak waktu luang.
            </p>

            <a href="#anggota" class="btn btn-main">
                <i class="bi bi-person-lines-fill me-2"></i>
                Lihat Orang-Orangnya
            </a>

            <div class="hero-note">
                * Website ini dibuat dengan penuh tanggung jawab.
                Tanggung jawab siapa? Nanti kita diskusikan.
            </div>

        </div>
    </section>


    <!-- TENTANG -->

    <section class="section about-section" id="tentang">
        <div class="container">

            <div class="text-center">
                <h2 class="section-title">
                    Sebenarnya Kita Ngapain?
                </h2>

                <p class="section-subtitle">
                    Tidak ada yang tahu. Tapi setidaknya websitenya ada.
                </p>
            </div>

            <div class="about-box">

                <h3>
                    Tentang kelompok ini
                </h3>

                <p>
                    Kami adalah sekumpulan mahasiswa yang dipertemukan
                    oleh takdir, jadwal, dan pembagian kelompok.
                </p>

                <p>
                    Awalnya cuma saling tahu nama.
                    Sekarang sudah tahu jabatan, foto, dan deskripsi.
                    Teknologi memang luar biasa.
                </p>

                <p>
                    Website ini digunakan untuk menampilkan anggota
                    kelompok Mabim secara dinamis.
                    Jadi kalau ada anggota baru, tinggal masukkan datanya.
                    Tidak perlu mengedit HTML sambil menangis.
                </p>

                <p class="warning">
                    <i class="bi bi-exclamation-triangle-fill me-1"></i>
                    Disclaimer: Tidak semua anggota setuju fotonya dipajang.
                    Tapi mereka juga belum protes.
                </p>

            </div>

        </div>
    </section>


    <!-- ANGGOTA -->

    <section class="section members-section" id="anggota">
        <div class="container">

            <div class="text-center">
                <h2 class="section-title">
                    Para Korban Mabim
                </h2>

                <p class="section-subtitle">
                    Mereka tidak mendaftar. Mereka hanya tidak sempat kabur.
                </p>
            </div>

            <div class="row g-4">

                @forelse($members as $member)

                    <div class="col-md-6 col-lg-4">

                        <div class="member-card">

                            <div class="member-photo-wrapper">

                                @if($member->foto)

                                    <img src="{{ asset('uploads/members/' . $member->foto) }}" alt="{{ $member->nama }}" class="member-image">

                                @else

                                    <div class="member-no-image">
                                        <i class="bi bi-person-fill"></i>
                                    </div>

                                @endif

                            </div>


                            <h5 class="member-name">
                                {{ $member->nama }}
                            </h5>


                            <span class="member-position">
                                {{ $member->jabatan }}
                            </span>


                            @if($member->deskripsi)

                                <p class="member-description">
                                    {{ $member->deskripsi }}
                                </p>

                            @else

                                <p class="member-description">
                                    Anggota kelompok yang sampai sekarang
                                    masih bertahan dan belum menghilang.
                                </p>

                            @endif


                            <div class="member-joke">
                                <i class="bi bi-dot"></i>
                                Status: masih hidup
                            </div>

                        </div>

                    </div>

                @empty

                    <div class="col-12">

                        <div class="empty-state">

                            <i class="bi bi-person-x"></i>

                            <h5 class="mt-3 fw-bold">
                                Belum Ada Korban
                            </h5>

                            <p class="text-muted mb-0">
                                Sepertinya semua orang masih pura-pura
                                tidak tahu kalau ada website ini.
                            </p>

                        </div>

                    </div>

                @endforelse

            </div>

        </div>
    </section>


    <!-- PESAN TERAKHIR -->

    <section class="final-section">

        <div class="container">

            <h2>
                Kalau Kamu Sampai Sini...
            </h2>

            <p>
                Berarti kamu sudah melihat wajah-wajah anggota kelompok kami.
                Sekarang silakan kembali ke aktivitas masing-masing
                dan berpura-pura produktif.
            </p>

            <div class="final-line">
                <i class="bi bi-code-slash me-1"></i>
                Website selesai. Tugas berikutnya? Belum tahu.
            </div>

        </div>

    </section>


    <!-- FOOTER -->

    <footer>
        <div class="container text-center">

            <div>
                Dibuat oleh <strong>anak Mabim</strong>
                dengan <span>HTML, CSS, Laravel</span>,
                dan sedikit kepanikan.
            </div>

            <div class="mt-2">
                © {{ date('Y') }} MABIM.KITA
            </div>

        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
