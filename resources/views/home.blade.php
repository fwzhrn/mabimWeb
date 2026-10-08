    <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPKM Informatika — Kelompok 7</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- FONT BARU: Anton (judul) + Space Mono (teks) -->
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

        /* ============ NAVBAR ============ */

        .navbar {
            background: var(--cream);
            border-bottom: 2px solid var(--line);
            padding: 0;
        }

        .navbar > .container-fluid { padding: 0; }

        .navbar-brand {
            display: flex;
            align-items: center;
            gap: 14px;
            margin: 0;
            padding: 14px 24px;
            border-right: 2px solid var(--line);
            font-family: var(--display);
            font-size: 22px;
            line-height: 1;
            letter-spacing: .02em;
            text-transform: uppercase;
            color: var(--ink) !important;
        }

        .navbar-brand .logo-star {
            font-size: 34px;
            line-height: 1;
        }

        .navbar-brand small {
            display: block;
            font-family: var(--mono);
            font-size: 9px;
            letter-spacing: 0;
            text-transform: none;
            color: var(--muted);
            margin-top: 4px;
        }

        .navbar-nav .nav-link {
            color: var(--ink);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .06em;
            text-transform: uppercase;
            padding: 0 18px !important;
        }

        .navbar-nav .nav-link:hover { color: var(--blue); }

        .nav-status {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 0 24px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .06em;
            text-transform: uppercase;
        }

        .nav-status::after {
            content: "";
            width: 9px;
            height: 9px;
            background: var(--blue);
            border-radius: 50%;
        }

        .navbar-toggler {
            border: 2px solid var(--ink);
            border-radius: 0;
            margin-right: 20px;
        }

        .navbar-toggler:focus { box-shadow: none; }

        /* ============ HERO ============ */

        .hero {
            position: relative;
            background: var(--cream);
            padding: 56px 0 64px;
            overflow: hidden;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            padding: 0 40px;
        }

        .hero-kicker {
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
            margin-bottom: 18px;
        }

        .hero h1 {
            font-family: var(--display);
            font-weight: 400;
            font-size: clamp(3.4rem, 8.2vw, 8rem);
            line-height: .92;
            letter-spacing: -.005em;
            text-transform: uppercase;
            margin: 0;
        }

        .hero h1 .line { display: block; }

        .hero h1 .blue { color: var(--blue); }

        .hero h1 .star {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: .78em;
            height: .78em;
            margin-left: .08em;
            background: var(--ink);
            color: var(--cream);
            border-radius: 50%;
            font-size: .62em;
            line-height: 1;
            vertical-align: .08em;
        }

        /* FOTO TENGAH */

        .hero-photo {
            position: relative;
            background: var(--blue);
            aspect-ratio: 3 / 4;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: grayscale(1) contrast(1.25);
            mix-blend-mode: multiply;
        }

        .hero-photo .photo-placeholder {
            font-family: var(--display);
            font-size: clamp(8rem, 16vw, 15rem);
            line-height: 1;
            color: var(--ink);
        }

        /* KANAN */

        .hero-side { padding-left: 36px; }

        .hero-text {
            font-size: 14px;
            font-weight: 700;
            line-height: 1.7;
            text-transform: uppercase;
            margin-bottom: 38px;
        }

        .hero-actions {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 20px;
        }

        .btn-pill {
            display: inline-flex;
            align-items: center;
            gap: 14px;
            background: var(--blue);
            color: #fff;
            border: 0;
            border-radius: 999px;
            padding: 7px 34px 7px 7px;
            font-family: var(--mono);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .06em;
            text-transform: uppercase;
            text-decoration: none;
            transition: transform .2s;
        }

        .btn-pill:hover {
            color: #fff;
            transform: translateX(5px);
        }

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

        .btn-link-custom {
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .06em;
            text-transform: uppercase;
            text-decoration: underline;
            text-underline-offset: 5px;
        }

        .btn-link-custom:hover { color: var(--blue); }

        /* ============ MARQUEE ============ */

        .marquee {
            background: var(--lime);
            border-top: 2px solid var(--line);
            border-bottom: 2px solid var(--line);
            overflow: hidden;
            white-space: nowrap;
        }

        .marquee-track {
            display: inline-flex;
            animation: marquee 28s linear infinite;
        }

        .marquee-track span {
            padding: 12px 0;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: .06em;
            text-transform: uppercase;
        }

        @keyframes marquee {
            from { transform: translateX(0); }
            to   { transform: translateX(-50%); }
        }

        @media (prefers-reduced-motion: reduce) {
            .marquee-track { animation: none; }
        }

        /* ============ TENTANG ============ */

        .about-section { background: var(--cream); }

        .about-section .row { --bs-gutter-x: 0; }

        .about-left {
            background: var(--blue);
            color: #fff;
            padding: 48px 36px;
            border-right: 2px solid var(--line);
        }

        .about-left .big-title {
            font-family: var(--display);
            font-weight: 400;
            font-size: clamp(2.4rem, 4.4vw, 4rem);
            line-height: .95;
            text-transform: uppercase;
            color: var(--lime);
            margin: 0 0 22px;
        }

        .about-left p {
            font-size: 13px;
            line-height: 1.75;
            margin-bottom: 14px;
        }

        .about-left .big-star {
            font-family: var(--display);
            font-size: 9rem;
            line-height: 1;
            color: transparent;
            -webkit-text-stroke: 1.5px rgba(255,255,255,.55);
            margin-top: 10px;
        }

        .about-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            height: 100%;
        }

        .about-item {
            padding: 36px 30px;
            border-right: 2px solid var(--line);
            border-bottom: 2px solid var(--line);
        }

        .about-item:nth-child(2n) { border-right: 0; }

        .about-item:nth-child(n+3) { border-bottom: 0; }

        .about-item-icon {
            font-size: 30px;
            line-height: 1;
            margin-bottom: 22px;
        }

        .about-item strong {
            display: block;
            font-size: 14px;
            letter-spacing: .04em;
            text-transform: uppercase;
            margin-bottom: 8px;
        }

        .about-item span {
            display: block;
            font-size: 12px;
            line-height: 1.65;
            color: var(--muted);
        }

        /* ============ ANGGOTA ============ */

        .members-section {
            background: var(--dark);
            color: #fff;
            padding: 88px 0 96px;
            border-top: 2px solid var(--line);
            position: relative;
            overflow: hidden;
        }

        .members-section::before {
            content: "07";
            position: absolute;
            right: -15px;
            top: -55px;
            font-family: var(--display);
            font-size: 18rem;
            line-height: 1;
            color: rgba(36,87,197,.10);
            pointer-events: none;
        }

        .members-header {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: flex-end;
            gap: 24px;
            margin-bottom: 42px;
            position: relative;
            z-index: 1;
        }

        .members-title {
            font-family: var(--display);
            font-weight: 400;
            font-size: clamp(2.8rem, 5.5vw, 5.2rem);
            line-height: .9;
            text-transform: uppercase;
            color: #fff;
            margin: 0 0 16px;
        }

        .members-title .accent { color: #6f9df7; }

        .members-desc {
            max-width: 530px;
            font-size: 13px;
            line-height: 1.8;
            color: #aebbd2;
            margin: 0;
        }

        .members-tools {
            display: flex;
            align-items: center;
            gap: 12px;
            flex-wrap: wrap;
        }

        .member-search {
            width: 230px;
            border: 1px solid #31415e;
            background: #0c1931;
            color: #fff;
            padding: 12px 16px;
            border-radius: 999px;
            font-family: var(--mono);
            font-size: 11px;
            outline: none;
        }

        .member-search::placeholder { color: #7786a0; }
        .member-search:focus { border-color: #6f9df7; box-shadow: 0 0 0 3px rgba(111,157,247,.12); }

        .members-count {
            background: var(--blue-bright);
            color: #fff;
            border-radius: 999px;
            padding: 11px 20px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .06em;
            text-transform: uppercase;
        }

        .member-card {
            position: relative;
            height: 100%;
            background: #f4f7fb;
            color: var(--ink);
            border: 1px solid #d9e2f1;
            cursor: pointer;
            overflow: hidden;
            transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;
        }

        .member-card:hover {
            transform: translateY(-8px);
            border-color: #6f9df7;
            box-shadow: 0 22px 45px rgba(0,0,0,.28);
        }

        .member-card::after {
            content: "VIEW PROFILE  ↗";
            position: absolute;
            right: 14px;
            top: 14px;
            z-index: 3;
            background: var(--blue);
            color: #fff;
            padding: 7px 10px;
            font-size: 8px;
            font-weight: 700;
            letter-spacing: .06em;
            opacity: 0;
            transform: translateY(-5px);
            transition: .2s ease;
        }

        .member-card:hover::after { opacity: 1; transform: translateY(0); }

        .member-number {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 2;
            background: var(--blue);
            color: #fff;
            padding: 7px 12px;
            font-size: 11px;
            font-weight: 700;
        }

        .member-photo {
            background: #dbe8ff;
            aspect-ratio: 1 / 1;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            position: relative;
        }

        .member-photo::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(18,59,143,.08), transparent 60%);
            pointer-events: none;
        }

        .member-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: saturate(.82);
            transition: transform .45s ease;
        }

        .member-card:hover .member-image { transform: scale(1.05); }

        .member-no-image {
            font-size: 84px;
            line-height: 1;
            color: var(--blue);
        }

        .member-body {
            padding: 20px 18px 21px;
            border-top: 2px solid var(--ink);
        }

        .member-name {
            font-size: 15px;
            font-weight: 700;
            text-transform: uppercase;
            margin: 0 0 5px;
            padding-right: 50px;
        }

        .member-position {
            display: block;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
            color: var(--blue-bright);
            margin-bottom: 12px;
        }

        .member-description {
            font-size: 11px;
            line-height: 1.65;
            color: var(--muted);
            margin: 0;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .member-click {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 16px;
            padding-top: 12px;
            border-top: 1px solid #dbe2ed;
            color: var(--blue);
            font-size: 9px;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
        }

        .member-click i { font-size: 15px; }

        /* PROFILE MODAL */
        .profile-modal .modal-dialog {
            max-width: 760px;
        }

        .profile-modal .modal-content {
            border: 0;
            border-radius: 0;
            overflow: hidden;
            background: #f4f7fb;
            box-shadow: 0 35px 90px rgba(0,0,0,.35);
        }

        .profile-modal .modal-header {
            border: 0;
            padding: 16px 18px;
            background: var(--dark);
            color: #fff;
        }

        .profile-modal .modal-header .btn-close {
            filter: invert(1);
            opacity: .8;
        }

        .profile-modal .modal-body { padding: 0; }

        .profile-layout {
            display: grid;
            grid-template-columns: 42% 58%;
        }

        .profile-photo {
            min-height: 430px;
            background: #dbe8ff;
            position: relative;
            overflow: hidden;
        }

        .profile-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .profile-photo .profile-placeholder {
            height: 100%;
            min-height: 430px;
            display: grid;
            place-items: center;
            font-size: 110px;
            color: var(--blue);
        }

        .profile-index {
            position: absolute;
            left: 16px;
            bottom: 16px;
            background: var(--blue);
            color: #fff;
            padding: 8px 12px;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: .08em;
        }

        .profile-info {
            padding: 42px 38px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .profile-label {
            color: var(--blue-bright);
            font-size: 10px;
            font-weight: 700;
            letter-spacing: .12em;
            text-transform: uppercase;
            margin-bottom: 12px;
        }

        .profile-info h3 {
            font-family: var(--display);
            font-size: clamp(2.4rem, 5vw, 4.5rem);
            line-height: .9;
            text-transform: uppercase;
            margin: 0 0 12px;
            color: var(--dark);
        }

        .profile-position {
            display: inline-block;
            align-self: flex-start;
            background: var(--blue);
            color: #fff;
            padding: 8px 12px;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
            margin-bottom: 24px;
        }

        .profile-description {
            color: var(--muted);
            font-family: var(--mono);
            font-size: 12px;
            line-height: 1.8;
            margin: 0;
        }

        .profile-footer {
            margin-top: 28px;
            padding-top: 16px;
            border-top: 1px solid #d6dfed;
            font-size: 10px;
            color: #71809a;
        }

        @media (max-width: 767px) {
            .member-search { width: 100%; }
            .profile-layout { grid-template-columns: 1fr; }
            .profile-photo { min-height: 300px; max-height: 360px; }
            .profile-photo .profile-placeholder { min-height: 300px; }
            .profile-info { padding: 30px 24px; }
        }

        /* EMPTY */

        .empty-state {
            text-align: center;
            border: 2px dashed #555;
            padding: 64px 20px;
        }

        .empty-state i {
            color: var(--lime);
            font-size: 42px;
        }

        .empty-state h5 {
            font-family: var(--display);
            font-weight: 400;
            font-size: 1.8rem;
            text-transform: uppercase;
            margin-top: 14px;
        }

        .empty-state p {
            color: #cfcabd;
            font-size: 13px;
        }

        /* ============ CLOSING ============ */

        .closing {
            background: var(--lime);
            border-top: 2px solid var(--line);
            padding: 72px 0;
        }

        .closing h2 {
            max-width: 780px;
            font-family: var(--display);
            font-weight: 400;
            font-size: clamp(2.6rem, 6vw, 5.6rem);
            line-height: .95;
            text-transform: uppercase;
            margin: 0 0 22px;
        }

        .closing h2 .blue { color: var(--blue); }

        .closing p {
            max-width: 560px;
            font-size: 13px;
            font-weight: 700;
            line-height: 1.75;
            margin: 0;
        }

        /* ============ FOOTER ============ */

        footer {
            background: var(--ink);
            color: var(--lime);
            padding: 24px 0;
            font-size: 11px;
            letter-spacing: .06em;
            text-transform: uppercase;
        }

        footer strong { color: #fff; }

        /* ============ MOBILE ============ */

        @media (max-width: 991px) {
            .navbar-brand { border-right: 0; padding: 12px 20px; }

            .navbar-collapse {
                border-top: 2px solid var(--line);
                padding: 12px 20px;
            }

            .navbar-nav .nav-link { padding: 10px 0 !important; }

            .nav-status { padding: 8px 0; }

            .hero { padding: 44px 0 56px; }

            .hero-content { padding: 0 20px; }

            .hero-photo {
                max-width: 340px;
                margin: 32px 0;
            }

            .hero-side { padding-left: calc(var(--bs-gutter-x) * .5); }

            .about-left {
                border-right: 0;
                border-bottom: 2px solid var(--line);
            }
        }

        @media (max-width: 575px) {
            .about-grid { grid-template-columns: 1fr; }

            .about-item { border-right: 0 !important; }

            .about-item:nth-child(n+3) { border-bottom: 2px solid var(--line); }

            .about-item:last-child { border-bottom: 0; }

            .members-section { padding: 56px 0 64px; }

            .closing { padding: 56px 0; }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <span class="logo-star">✱</span>
                <span>
                    PPKM Informatika
                    <small>Kelompok 7</small>
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav me-auto ms-lg-3">
                    <li class="nav-item"><a class="nav-link" href="#home">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tentang">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#anggota">Anggota</a></li>
                </ul>

                <div class="nav-status">Kelompok 7</div>
            </div>
        </div>
    </nav>


    <!-- HERO -->

    <section class="hero" id="home">
        <div class="container-fluid hero-content">
            <div class="row align-items-center">

                <!-- KIRI: HEADLINE -->
                <div class="col-lg-5">
                    <div class="hero-kicker">PPKM Informatika</div>

                    <h1>
                        <span class="line">Kelompok</span>
                        <span class="line">PPKM <span class="star">✱</span></span>
                        <span class="line">-</span>
                        <span class="line blue">Kelompok 7.</span>
                    </h1>
                </div>

                <!-- TENGAH: FOTO -->
                <div class="col-lg-3">
                    <div class="hero-photo">
                        {{-- Taruh foto di public/img/kelompok7.png (PNG transparan paling bagus) --}}
                        @if(file_exists(public_path('img/kelompok7.png')))
                            <img src="{{ asset('img/kelompok7.png') }}" alt="Kelompok 7">
                        @else
                            <div class="photo-placeholder">✱</div>
                        @endif
                    </div>
                </div>

                <!-- KANAN: TEKS + TOMBOL -->
                <div class="col-lg-4 hero-side">
                    <p class="hero-text">
                        PPKM Informatika menjadi ruang bagi mahasiswa untuk
                        berkembang, berkolaborasi, dan mengambil bagian dalam
                        berbagai kegiatan kemahasiswaan di lingkungan Informatika.
                    </p>

                    <div class="hero-actions">
                        <a href="#anggota" class="btn-pill">
                            <span class="arrow"><i class="bi bi-arrow-right"></i></span>
                            Kenali Anggota
                        </a>

                        <a href="#tentang" class="btn-link-custom">Tentang PPKM</a>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- MARQUEE -->

    <div class="marquee" aria-hidden="true">
        <div class="marquee-track">
            <span>PPKM ✱ INFORMATIKA ✱ KELOMPOK 7 ✱ KOLABORASI ✱ PENGEMBANGAN ✱ KONTRIBUSI ✱ BERPROSES ✱ &nbsp;</span>
            <span>PPKM ✱ INFORMATIKA ✱ KELOMPOK 7 ✱ KOLABORASI ✱ PENGEMBANGAN ✱ KONTRIBUSI ✱ BERPROSES ✱ &nbsp;</span>
        </div>
    </div>


    <!-- TENTANG -->

    <section class="about-section" id="tentang">
        <div class="container-fluid p-0">
            <div class="row">

                <div class="col-lg-5">
                    <div class="about-left h-100">
                        <h2 class="big-title">Bukan hanya sebuah kelompok.</h2>

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

                        <div class="big-star" aria-hidden="true">✱</div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="about-grid">

                        <div class="about-item">
                            <div class="about-item-icon"><i class="bi bi-people"></i></div>
                            <strong>Kolaborasi</strong>
                            <span>Membangun kerja sama melalui kegiatan dan pengalaman bersama.</span>
                        </div>

                        <div class="about-item">
                            <div class="about-item-icon"><i class="bi bi-lightbulb"></i></div>
                            <strong>Pengembangan</strong>
                            <span>Mendorong mahasiswa untuk aktif belajar dan berkembang.</span>
                        </div>

                        <div class="about-item">
                            <div class="about-item-icon"><i class="bi bi-diagram-3"></i></div>
                            <strong>Kontribusi</strong>
                            <span>Memberikan ruang untuk mengambil peran dalam lingkungan Informatika.</span>
                        </div>

                        <div class="about-item">
                            <div class="about-item-icon"><i class="bi bi-arrow-up-right"></i></div>
                            <strong>Berproses</strong>
                            <span>Karena pengalaman terbaik dibangun melalui proses bersama.</span>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ANGGOTA -->

    <section class="members-section" id="anggota">
        <div class="container-fluid" style="padding: 0 40px;">
            <div class="members-header">
                <div>
                    <div class="hero-kicker" style="color:#6f9df7;">STRUKTUR KELOMPOK-7</div>
                    <h2 class="members-title">Orang-orang<br>di balik <span class="accent">PPKM KELOMPOK-7.</span></h2>
                    <p class="members-desc">
                        Kenali lebih dekat orang-orang yang mengambil bagian dalam perjalanan
                        PPKM Informatika. Klik salah satu card untuk melihat profil lengkapnya.
                    </p>
                </div>

                <div class="members-tools">
                    <input type="search" id="memberSearch" class="member-search" placeholder="Cari nama / jabatan...">
                    <div class="members-count">
                        {{ $members->count() }} Anggota
                    </div>
                </div>
            </div>

            <div class="row g-4" id="membersGrid">
                @forelse($members as $member)
                    <div class="col-sm-6 col-lg-4 col-xl-3 member-item"
                         data-search="{{ strtolower($member->nama . ' ' . $member->jabatan) }}">
                        <div class="member-card"
                             role="button"
                             tabindex="0"
                             data-bs-toggle="modal"
                             data-bs-target="#memberModal"
                             data-name="{{ $member->nama }}"
                             data-position="{{ $member->jabatan }}"
                             data-description="{{ $member->deskripsi ?: 'Bagian dari PPKM Informatika yang berkontribusi dalam perjalanan organisasi.' }}"
                             data-photo="{{ $member->foto ? asset('uploads/members/' . $member->foto) : '' }}"
                             data-number="{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}">

                            <div class="member-number">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</div>

                            <div class="member-photo">
                                @if($member->foto)
                                    <img src="{{ asset('uploads/members/' . $member->foto) }}"
                                         alt="{{ $member->nama }}"
                                         class="member-image">
                                @else
                                    <div class="member-no-image">
                                        <i class="bi bi-person"></i>
                                    </div>
                                @endif
                            </div>

                            <div class="member-body">
                                <h5 class="member-name">{{ $member->nama }}</h5>
                                <span class="member-position">{{ $member->jabatan }}</span>

                                <p class="member-description">
                                    {{ $member->deskripsi ?: 'Bagian dari PPKM Informatika yang berkontribusi dalam perjalanan organisasi.' }}
                                </p>

                                <div class="member-click">
                                    <span>Lihat profil</span>
                                    <i class="bi bi-arrow-up-right"></i>
                                </div>
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

            <div id="memberNotFound" class="empty-state mt-4" style="display:none;">
                <i class="bi bi-search"></i>
                <h5>Anggota Tidak Ditemukan</h5>
                <p class="mb-0">Coba cari dengan nama atau jabatan yang berbeda.</p>
            </div>
        </div>
    </section>

    <!-- MEMBER PROFILE MODAL -->

    <div class="modal fade profile-modal" id="memberModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <span style="font-size:10px;font-weight:700;letter-spacing:.1em;">PPKM INFORMATIKA / PROFILE</span>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>

                <div class="modal-body">
                    <div class="profile-layout">
                        <div class="profile-photo">
                            <img id="modalMemberPhoto" src="" alt="" style="display:none;">
                            <div id="modalMemberPlaceholder" class="profile-placeholder">
                                <i class="bi bi-person"></i>
                            </div>
                            <div class="profile-index" id="modalMemberNumber">01</div>
                        </div>

                        <div class="profile-info">
                            <div class="profile-label">Anggota Kelompok 07</div>
                            <h3 id="modalMemberName">Nama Anggota</h3>
                            <div class="profile-position" id="modalMemberPosition">Jabatan</div>
                            <p class="profile-description" id="modalMemberDescription"></p>

                            <div class="profile-footer">
                                <i class="bi bi-stars me-1"></i>
                                PPKM Informatika · Kelompok 7
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- CLOSING -->

    <section class="closing">
        <div class="container-fluid" style="padding: 0 40px;">
            <h2>
                Tumbuh bersama, berkontribusi untuk <span class="blue">Informatika.</span>
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
        <div class="container-fluid d-flex justify-content-between align-items-center flex-wrap gap-2" style="padding: 0 40px;">
            <div>
                <strong>PPKM Informatika</strong> / Universitas
            </div>

            <div>
                © {{ date('Y') }} PPKM Informatika
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // PROFILE MODAL
        const memberModal = document.getElementById('memberModal');

        if (memberModal) {
            memberModal.addEventListener('show.bs.modal', function (event) {
                const card = event.relatedTarget;

                document.getElementById('modalMemberName').textContent = card.dataset.name || 'Nama Anggota';
                document.getElementById('modalMemberPosition').textContent = card.dataset.position || 'Anggota';
                document.getElementById('modalMemberDescription').textContent =
                    card.dataset.description || 'Bagian dari PPKM Informatika.';
                document.getElementById('modalMemberNumber').textContent = card.dataset.number || '01';

                const photo = document.getElementById('modalMemberPhoto');
                const placeholder = document.getElementById('modalMemberPlaceholder');

                if (card.dataset.photo) {
                    photo.src = card.dataset.photo;
                    photo.alt = card.dataset.name || 'Foto anggota';
                    photo.style.display = 'block';
                    placeholder.style.display = 'none';
                } else {
                    photo.style.display = 'none';
                    placeholder.style.display = 'grid';
                }
            });
        }

        // SEARCH MEMBER
        const searchInput = document.getElementById('memberSearch');
        const memberItems = document.querySelectorAll('.member-item');
        const notFound = document.getElementById('memberNotFound');

        if (searchInput) {
            searchInput.addEventListener('input', function () {
                const keyword = this.value.toLowerCase().trim();
                let visible = 0;

                memberItems.forEach(item => {
                    const match = item.dataset.search.includes(keyword);
                    item.style.display = match ? '' : 'none';
                    if (match) visible++;
                });

                if (notFound) {
                    notFound.style.display = visible === 0 ? 'block' : 'none';
                }
            });
        }

        // ENTER / SPACE UNTUK CARD
        document.querySelectorAll('.member-card').forEach(card => {
            card.addEventListener('keydown', function (e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    this.click();
                }
            });
        });
    </script>


</body>
</html>