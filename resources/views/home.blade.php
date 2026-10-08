
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPkM Informatika</title>

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

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            color: var(--text);
            background: var(--soft);
            font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
        }

        /* NAVBAR */

        .navbar {
            background: var(--white);
            border-bottom: 1px solid var(--line);
            padding: 17px 0;
        }

        .navbar-brand {
            color: var(--navy) !important;
            font-size: 19px;
            font-weight: 800;
            letter-spacing: -.4px;
        }

        .navbar-brand span {
            color: var(--blue);
        }

        .navbar-brand small {
            display: block;
            color: #98a2b3;
            font-size: 8px;
            font-weight: 600;
            letter-spacing: 1.5px;
            margin-left: 30px;
            margin-top: -2px;
        }

        .navbar-nav .nav-link {
            color: #475467;
            font-size: 14px;
            font-weight: 600;
            margin-left: 25px;
            transition: .2s;
        }

        .navbar-nav .nav-link:hover {
            color: var(--blue);
        }

        .navbar-toggler {
            border: 0;
        }

        .navbar-toggler:focus {
            box-shadow: none;
        }

        /* HERO */

        .hero {
            background: var(--white);
            padding: 90px 0 85px;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: "";
            position: absolute;
            width: 460px;
            height: 460px;
            border: 1px solid #e7eefb;
            border-radius: 50%;
            right: -170px;
            top: -220px;
        }

        .hero::after {
            content: "";
            position: absolute;
            width: 220px;
            height: 220px;
            background: #eff5ff;
            border-radius: 50%;
            right: 80px;
            bottom: -150px;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-kicker {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            color: var(--blue);
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 1.8px;
            text-transform: uppercase;
            margin-bottom: 22px;
        }

        .hero-kicker::before {
            content: "";
            width: 30px;
            height: 2px;
            background: var(--blue);
        }

        .hero h1 {
            max-width: 760px;
            color: var(--navy);
            font-size: 60px;
            line-height: 1.03;
            font-weight: 800;
            letter-spacing: -2.8px;
            margin: 0 0 25px;
        }

        .hero h1 span {
            color: var(--blue);
        }

        .hero-text {
            max-width: 620px;
            color: var(--muted);
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 32px;
        }

        .hero-actions {
            display: flex;
            align-items: center;
            gap: 18px;
        }

        .btn-primary-custom {
            background: var(--blue);
            color: white;
            border: 1px solid var(--blue);
            border-radius: 6px;
            padding: 12px 19px;
            font-size: 13px;
            font-weight: 700;
            transition: .2s;
        }

        .btn-primary-custom:hover {
            background: var(--blue-dark);
            color: white;
        }

        .btn-link-custom {
            color: #475467;
            text-decoration: none;
            font-size: 13px;
            font-weight: 700;
        }

        .btn-link-custom:hover {
            color: var(--blue);
        }

        .hero-note {
            color: #98a2b3;
            font-size: 11px;
            margin-top: 18px;
        }

        /* HERO SIDE */

        .hero-panel {
            position: relative;
            min-height: 330px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-panel-main {
            width: 285px;
            height: 285px;
            background: var(--navy);
            color: white;
            border-radius: 22px;
            padding: 32px;
            position: relative;
            box-shadow: 0 25px 60px rgba(15, 32, 70, .14);
        }

        .hero-panel-main::before {
            content: "";
            position: absolute;
            width: 70px;
            height: 70px;
            border: 1px solid rgba(255,255,255,.15);
            border-radius: 50%;
            right: 25px;
            top: 25px;
        }

        .hero-panel-number {
            color: #7da7ff;
            font-size: 54px;
            font-weight: 800;
            line-height: 1;
            margin-top: 35px;
        }

        .hero-panel-title {
            font-size: 17px;
            font-weight: 700;
            margin-top: 12px;
        }

        .hero-panel-text {
            color: #aab5ca;
            font-size: 12px;
            line-height: 1.6;
            margin-top: 8px;
        }

        .hero-panel-label {
            position: absolute;
            background: var(--blue);
            color: white;
            padding: 10px 14px;
            border-radius: 7px;
            font-size: 10px;
            font-weight: 800;
            letter-spacing: .8px;
            right: -25px;
            bottom: 25px;
            box-shadow: 0 10px 25px rgba(37, 99, 235, .2);
        }

        /* SECTION */

        .section {
            padding: 90px 0;
        }

        .section-label {
            color: var(--blue);
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 1.7px;
            text-transform: uppercase;
            margin-bottom: 9px;
        }

        .section-title {
            color: var(--navy);
            font-size: 35px;
            font-weight: 800;
            letter-spacing: -1.1px;
            margin-bottom: 13px;
        }

        .section-description {
            color: var(--muted);
            max-width: 590px;
            font-size: 15px;
            line-height: 1.8;
            margin-bottom: 0;
        }

        /* ABOUT */

        .about-section {
            background: var(--soft);
        }

        .about-intro {
            margin-bottom: 48px;
        }

        .about-content {
            background: white;
            border: 1px solid var(--line);
            border-radius: 14px;
            padding: 38px;
        }

        .about-content h3 {
            color: var(--navy);
            font-size: 22px;
            font-weight: 800;
            margin-bottom: 17px;
        }

        .about-content p {
            color: var(--muted);
            font-size: 14px;
            line-height: 1.85;
            margin-bottom: 13px;
        }

        .about-list {
            border-top: 1px solid var(--line);
            margin-top: 25px;
            padding-top: 20px;
        }

        .about-item {
            display: flex;
            gap: 13px;
            margin-bottom: 16px;
        }

        .about-item:last-child {
            margin-bottom: 0;
        }

        .about-item-icon {
            width: 34px;
            height: 34px;
            flex: 0 0 34px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--blue);
            background: #eff5ff;
            border-radius: 7px;
            font-size: 14px;
        }

        .about-item strong {
            display: block;
            color: var(--navy);
            font-size: 13px;
            margin-bottom: 3px;
        }

        .about-item span {
            color: var(--muted);
            font-size: 12px;
            line-height: 1.5;
        }

        /* MEMBERS */

        .members-section {
            background: white;
        }

        .members-header {
            display: flex;
            justify-content: space-between;
            align-items: end;
            margin-bottom: 45px;
        }

        .members-count {
            color: #98a2b3;
            font-size: 12px;
            font-weight: 600;
            padding-bottom: 5px;
        }

        .member-card {
            height: 100%;
            background: white;
            border: 1px solid var(--line);
            border-radius: 12px;
            padding: 26px;
            transition: .25s ease;
        }

        .member-card:hover {
            border-color: #c7d7f7;
            box-shadow: 0 15px 35px rgba(16, 24, 40, .07);
            transform: translateY(-4px);
        }

        .member-top {
            display: flex;
            align-items: center;
            gap: 17px;
            padding-bottom: 20px;
            border-bottom: 1px solid #edf0f4;
            margin-bottom: 18px;
        }

        .member-photo-wrapper {
            width: 76px;
            height: 76px;
            flex: 0 0 76px;
            padding: 3px;
            background: #e8f0ff;
            border-radius: 50%;
        }

        .member-image,
        .member-no-image {
            width: 100%;
            height: 100%;
            border-radius: 50%;
        }

        .member-image {
            object-fit: cover;
            border: 3px solid white;
        }

        .member-no-image {
            display: flex;
            align-items: center;
            justify-content: center;
            background: #eff5ff;
            color: #6f9cf4;
            border: 3px solid white;
            font-size: 28px;
        }

        .member-name {
            color: var(--navy);
            font-size: 17px;
            font-weight: 800;
            margin: 0 0 7px;
        }

        .member-position {
            display: inline-block;
            color: var(--blue);
            background: #eff5ff;
            border-radius: 4px;
            padding: 5px 8px;
            font-size: 9px;
            font-weight: 800;
            letter-spacing: .5px;
            text-transform: uppercase;
        }

        .member-description {
            color: var(--muted);
            font-size: 13px;
            line-height: 1.7;
            margin: 0;
        }

        .member-footer {
            color: #98a2b3;
            font-size: 10px;
            font-weight: 600;
            margin-top: 20px;
        }

        .member-footer i {
            color: var(--blue);
        }

        /* EMPTY */

        .empty-state {
            text-align: center;
            border: 1px dashed #d6deeb;
            border-radius: 12px;
            padding: 65px 20px;
            background: #fbfcfe;
        }

        .empty-state i {
            color: #9db9ef;
            font-size: 42px;
        }

        .empty-state h5 {
            color: var(--navy);
            font-weight: 800;
            margin-top: 15px;
        }

        .empty-state p {
            color: var(--muted);
            font-size: 13px;
        }

        /* CLOSING */

        .closing {
            background: var(--navy);
            color: white;
            padding: 78px 0;
        }

        .closing-line {
            width: 45px;
            height: 2px;
            background: #4f8cff;
            margin-bottom: 22px;
        }

        .closing h2 {
            max-width: 700px;
            font-size: 35px;
            line-height: 1.2;
            font-weight: 800;
            letter-spacing: -1px;
            margin-bottom: 15px;
        }

        .closing p {
            max-width: 600px;
            color: #aab5ca;
            font-size: 14px;
            line-height: 1.8;
            margin: 0;
        }

        /* FOOTER */

        footer {
            background: #071126;
            color: #74819a;
            padding: 23px 0;
            font-size: 11px;
        }

        footer strong {
            color: #cbd5e1;
        }

        footer span {
            color: #6f9cf4;
        }

        /* MOBILE */

        @media (max-width: 991px) {
            .hero {
                padding: 75px 0;
            }

            .hero h1 {
                font-size: 48px;
            }

            .hero-panel {
                margin-top: 55px;
            }

            .members-header {
                display: block;
            }

            .members-count {
                margin-top: 12px;
            }
        }

        @media (max-width: 767px) {
            .navbar-nav .nav-link {
                margin-left: 0;
                padding: 9px 0;
            }

            .hero {
                padding: 65px 0 75px;
            }

            .hero h1 {
                font-size: 39px;
                letter-spacing: -1.7px;
            }

            .hero-text {
                font-size: 14px;
            }

            .hero-actions {
                display: block;
            }

            .btn-primary-custom {
                display: inline-block;
                margin-bottom: 15px;
            }

            .hero-panel {
                min-height: 300px;
                margin-top: 40px;
            }

            .hero-panel-main {
                width: 250px;
                height: 250px;
            }

            .hero-panel-label {
                right: 0;
            }

            .section {
                padding: 70px 0;
            }

            .section-title {
                font-size: 29px;
            }

            .about-content {
                padding: 27px;
            }

            .member-card {
                padding: 22px;
            }

            .closing {
                padding: 65px 0;
            }

            .closing h2 {
                font-size: 29px;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/">
                <span>PPKM</span> Informatika Kelompok 7
                <small>ppkm</small>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tentang">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#anggota">Anggota</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- HERO -->

    <section class="hero" id="home">
        <div class="container hero-content">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="hero-kicker">PPKM Informatika</div>

                    <h1>
                        Kelompok PPKM urang 
                        <span>Kelompok 7</span>
                    </h1>

                    <p class="hero-text">
                        PPKM Informatika menjadi ruang bagi mahasiswa untuk
                        berkembang, berkolaborasi, dan mengambil bagian dalam
                        berbagai kegiatan kemahasiswaan di lingkungan Informatika.
                    </p>

                    <div class="hero-actions">
                        <a href="#anggota" class="btn btn-primary-custom">
                            Kenali Anggota <i class="bi bi-arrow-right ms-2"></i>
                        </a>

                        <a href="#tentang" class="btn-link-custom">
                            Tentang PPkM <i class="bi bi-arrow-down-short ms-1"></i>
                        </a>
                    </div>

                    {{-- <div class="hero-note">
                        Informatika · Kemahasiswaan · Kolaborasi
                    </div> --}}
                </div>

                <div class="col-lg-5">
                    <div class="hero-panel">
                        <div class="hero-panel-main">
                            <div class="small text-uppercase fw-semibold text-white-50">
                                Our Community
                            </div>

                            <div class="hero-panel-number">01</div>

                            <div class="hero-panel-title">
                                Satu ruang untuk berkembang.
                            </div>

                            <div class="hero-panel-text">
                                Tempat ide, pengalaman, dan kontribusi
                                mahasiswa bertemu.
                            </div>
                        </div>

                        <div class="hero-panel-label">
                            INFORMATIKA
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- TENTANG -->

    <section class="section about-section" id="tentang">
        <div class="container">
            <div class="row align-items-end about-intro">
                <div class="col-lg-6">
                    <div class="section-label">Tentang Kami</div>
                    <h2 class="section-title">Bukan hanya sebuah kelompok.</h2>
                </div>

                {{-- <div class="col-lg-5 offset-lg-1 mt-3 mt-lg-0">
                    <p class="section-description">
                        PPKM Informatika menjadi bagian dari perjalanan mahasiswa
                        dalam membangun pengalaman, relasi, dan kontribusi
                        di lingkungan akademik maupun organisasi.
                    </p>
                </div> --}}
            </div>

            <div class="row g-4">
                <div class="col-lg-7">
                    <div class="about-content h-100">
                        <h3>Tentang PPkM Informatika</h3>

                        <p>
                            PPKM Informatika merupakan wadah yang mempertemukan
                            mahasiswa dengan berbagai kegiatan dan pengalaman
                            dalam lingkungan Informatika.
                        </p>

                        <p>
                            Melalui kerja sama dan keterlibatan setiap anggota,
                            berbagai kegiatan dapat dijalankan dengan semangat
                            untuk berkembang bersama.
                        </p>

                        <p>
                            Halaman ini menjadi media sederhana untuk mengenal
                            anggota dan bagian dari struktur PPKM Informatika.
                        </p>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="about-content h-100">
                        <div class="about-list border-0 mt-0 pt-0">
                            <div class="about-item">
                                <div class="about-item-icon">
                                    <i class="bi bi-people"></i>
                                </div>

                                <div>
                                    <strong>Kolaborasi</strong>
                                    <span>Membangun kerja sama melalui kegiatan dan pengalaman bersama.</span>
                                </div>
                            </div>

                            <div class="about-item">
                                <div class="about-item-icon">
                                    <i class="bi bi-lightbulb"></i>
                                </div>

                                <div>
                                    <strong>Pengembangan</strong>
                                    <span>Mendorong mahasiswa untuk aktif belajar dan berkembang.</span>
                                </div>
                            </div>

                            <div class="about-item">
                                <div class="about-item-icon">
                                    <i class="bi bi-diagram-3"></i>
                                </div>

                                <div>
                                    <strong>Kontribusi</strong>
                                    <span>Memberikan ruang untuk mengambil peran dalam lingkungan Informatika.</span>
                                </div>
                            </div>

                            <div class="about-item">
                                <div class="about-item-icon">
                                    <i class="bi bi-arrow-up-right"></i>
                                </div>

                                <div>
                                    <strong>Berproses</strong>
                                    <span>Karena pengalaman terbaik dibangun melalui proses bersama.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ANGGOTA -->

    <section class="section members-section" id="anggota">
        <div class="container">
            <div class="members-header">
                <div>
                    <div class="section-label">Struktur Anggota</div>

                    <h2 class="section-title mb-2">
                        Orang-orang di balik PPKM.
                    </h2>

                    <p class="section-description">
                        Kenali anggota yang mengambil bagian dalam perjalanan
                        PPKM Informatika.
                    </p>
                </div>

                <div class="members-count">
                    <i class="bi bi-people me-1"></i>
                    {{ $members->count() }} Anggota Terdaftar
                </div>
            </div>

            <div class="row g-4">
                @forelse($members as $member)
                    <div class="col-md-6 col-lg-4">
                        <div class="member-card">
                            <div class="member-top">
                                <div class="member-photo-wrapper">
                                    @if($member->foto)
                                        <img src="{{ asset('uploads/members/' . $member->foto) }}" alt="{{ $member->nama }}" class="member-image">
                                    @else
                                        <div class="member-no-image">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    @endif
                                </div>

                                <div>
                                    <h5 class="member-name">{{ $member->nama }}</h5>
                                    <span class="member-position">{{ $member->jabatan }}</span>
                                </div>
                            </div>

                            @if($member->deskripsi)
                                <p class="member-description">{{ $member->deskripsi }}</p>
                            @else
                                <p class="member-description">
                                    Bagian dari PPKM Informatika yang
                                    berkontribusi dalam perjalanan organisasi.
                                </p>
                            @endif

                            <div class="member-footer">
                                <i class="bi bi-dot"></i>
                                PPKM Informatika
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="empty-state">
                            <i class="bi bi-person-x"></i>
                            <h5>Belum Ada Anggota</h5>
                            <p class="mb-0">Data anggota belum tersedia.</p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>


    <!-- CLOSING -->

    <section class="closing">
        <div class="container">
            <div class="closing-line"></div>

            <h2>
                Tumbuh bersama, berkontribusi untuk Informatika.
            </h2>

            <p>
                Setiap kegiatan memberikan pengalaman.
                Setiap anggota memberikan kontribusi.
                Dan setiap proses menjadi bagian dari perjalanan PPKM Informatika.
            </p>
        </div>
    </section>


    <!-- FOOTER -->

    <footer>
        <div class="container d-flex justify-content-between align-items-center flex-wrap gap-2">
            <div>
                <strong>PPKM Informatika</strong> · Universitas
            </div>

            <div>
                © {{ date('Y') }} <span>PPKM Informatika</span>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>