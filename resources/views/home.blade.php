<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPkM Informatika</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- FONT BARU: Anton (judul) + Space Mono (teks) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --cream: #f6f3ec;
            --ink: #111111;
            --dark: #181818;
            --blue: #1f3fff;
            --lime: #c6ff2e;
            --muted: #55524b;
            --line: #111111;
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
            background: var(--lime);
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
            padding: 72px 0 80px;
            border-top: 2px solid var(--line);
        }

        .members-header {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: flex-end;
            gap: 18px;
            margin-bottom: 44px;
        }

        .members-title {
            font-family: var(--display);
            font-weight: 400;
            font-size: clamp(2.6rem, 5vw, 4.6rem);
            line-height: .95;
            text-transform: uppercase;
            color: var(--lime);
            margin: 0 0 14px;
        }

        .members-desc {
            max-width: 480px;
            font-size: 13px;
            line-height: 1.7;
            color: #cfcabd;
            margin: 0;
        }

        .members-count {
            background: var(--lime);
            color: var(--ink);
            border-radius: 999px;
            padding: 10px 22px;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .06em;
            text-transform: uppercase;
        }

        .member-card {
            position: relative;
            height: 100%;
            background: var(--cream);
            color: var(--ink);
            border: 2px solid var(--cream);
            transition: transform .2s, border-color .2s;
        }

        .member-card:hover {
            transform: translateY(-4px);
            border-color: var(--lime);
        }

        .member-number {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 2;
            background: var(--lime);
            color: var(--ink);
            padding: 5px 11px;
            font-size: 12px;
            font-weight: 700;
        }

        .member-photo {
            background: var(--lime);
            aspect-ratio: 1 / 1;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .member-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: grayscale(1) contrast(1.15);
            mix-blend-mode: multiply;
        }

        .member-no-image {
            font-size: 84px;
            line-height: 1;
            color: var(--ink);
        }

        .member-body {
            padding: 18px 18px 20px;
            border-top: 2px solid var(--ink);
        }

        .member-name {
            font-size: 15px;
            font-weight: 700;
            text-transform: uppercase;
            margin: 0 0 4px;
        }

        .member-position {
            display: block;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
            color: var(--blue);
            margin-bottom: 12px;
        }

        .member-description {
            font-size: 12px;
            line-height: 1.65;
            color: var(--muted);
            margin: 0;
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
                        <span class="line">urang</span>
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

                        <a href="#tentang" class="btn-link-custom">Tentang PPkM</a>
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
                    <h2 class="members-title">Orang-orang<br>di balik PPKM.</h2>

                    <p class="members-desc">
                        Kenali anggota yang mengambil bagian dalam perjalanan
                        PPKM Informatika.
                    </p>
                </div>

                <div class="members-count">
                    {{ $members->count() }} Anggota Terdaftar
                </div>
            </div>

            <div class="row g-4">
                @forelse($members as $member)
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="member-card">
                            <div class="member-number">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</div>

                            <div class="member-photo">
                                @if($member->foto)
                                    <img src="{{ asset('uploads/members/' . $member->foto) }}" alt="{{ $member->nama }}" class="member-image">
                                @else
                                    <div class="member-no-image">
                                        <i class="bi bi-person"></i>
                                    </div>
                                @endif
                            </div>

                            <div class="member-body">
                                <h5 class="member-name">{{ $member->nama }}</h5>
                                <span class="member-position">{{ $member->jabatan }}</span>

                                @if($member->deskripsi)
                                    <p class="member-description">{{ $member->deskripsi }}</p>
                                @else
                                    <p class="member-description">
                                        Bagian dari PPKM Informatika yang
                                        berkontribusi dalam perjalanan organisasi.
                                    </p>
                                @endif
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

</body>
</html>