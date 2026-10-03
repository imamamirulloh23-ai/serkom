<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Program dan kegiatan Sekolah Kita untuk mendukung potensi setiap siswa.">
    <title>Program Sekolah | Sekolah Kita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --school-purple: #5845bd;
            --school-navy: #171936;
            --school-lavender: #f6f6f6;
        }

        body { color: var(--school-navy); }
        .school-navbar { background-color: #624ff2; }
        .brand-mark {
            display: inline-grid;
            width: 38px;
            height: 38px;
            place-items: center;
            border-radius: 8px;
            background: var(--school-purple);
            color: #fff;
            font-weight: 800;
        }
        .navbar-brand { color: var(--school-navy); font-weight: 800; }
        .navbar-brand:hover, .nav-link:hover { color: var(--school-purple); }
        .nav-link { color: #4f5069; font-weight: 500; }
        .btn-school { background: var(--school-purple); color: #fff; }
        .btn-school:hover { background: #4534a7; color: #fff; }
        .program-section { min-height: calc(100vh - 72px); background: var(--school-lavender); }
        .program-card { transition: transform .2s ease, box-shadow .2s ease; }
        .program-card:hover { transform: translateY(-3px); box-shadow: 0 1rem 2rem rgba(33, 28, 89, .12) !important; }
        .program-image { height: 160px; object-fit: cover; }
        .program-card .card-title { color: var(--school-navy); font-size: 1rem; font-weight: 700; }
        .program-card .card-text { color: #686b83; font-size: .875rem; line-height: 1.55; }
        .program-link { color: var(--school-navy); font-size: .75rem; font-weight: 700; }
        .program-arrow { color: var(--school-purple); font-size: 1.2rem; line-height: 1; }

        @media (max-width: 575.98px) {
            .program-image { height: 190px; }
            .program-heading { align-items: flex-start !important; flex-direction: column; }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg school-navbar sticky-top border-bottom">
        <div class="container px-3 px-lg-4">
            <a class="navbar-brand d-flex align-items-center gap-2" href="#beranda">
                <span>Sekolah Kita</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Buka navigasi">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto my-3 my-lg-0 gap-lg-3">
                    <li class="nav-item"><a class="nav-link active" href="#beranda">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="#berita">Berita</a></li>
                    <li class="nav-item"><a class="nav-link" href="#galeri">Galeri</a></li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <div class="visually-hidden" id="kontak">Hubungi Sekolah Kita melalui info@sekolah.sch.id</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
