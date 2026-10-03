<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Sekolah Kita, tempat tumbuhnya generasi berkarakter, kreatif, dan siap meraih masa depan.">
    <title>Sekolah Kita | Belajar, Bertumbuh, Berkarya</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --ink: #171936;
            --muted: #686b83;
            --green: #5845bd;
            --green-dark: #080d50;
            --lime: #eeecff;
            --paper: #ffffff;
            --white: #fff;
            --line: #e8e7f2;
            --coral: #efedff;
            font-family: 'DM Sans', sans-serif;
            color: var(--ink);
            background: var(--paper);
            scroll-behavior: smooth;
        }

        * { box-sizing: border-box; }
        body { margin: 0; }
        a { color: inherit; text-decoration: none; }
        .container { width: min(1120px, calc(100% - 48px)); margin: 0 auto; }
        .site-header { background: #efedff; }
        .nav-wrap { min-height: 82px; display: flex; align-items: center; justify-content: space-between; gap: 28px; }
        .brand { display: inline-flex; align-items: center; gap: 11px; font: 800 18px 'Manrope', sans-serif; letter-spacing: 0; white-space: nowrap; }
        .brand-mark { width: 38px; height: 38px; display: grid; place-items: center; border-radius: 12px; background: var(--green); color: var(--lime); font-size: 17px; }
        .nav-links { display: flex; align-items: center; gap: 34px; color: #50645d; font-size: 14px; font-weight: 600; }
        .nav-links a:hover { color: var(--green); }
        .nav-cta { padding: 12px 18px; border-radius: 5px; background: var(--green); color: var(--white); font-size: 13px; font-weight: 700; }
        .nav-cta:hover, .button-primary:hover { background: var(--green-dark); }

        .hero { padding: 34px 0 76px; }
        .hero-grid { display: grid; grid-template-columns: .88fr 1.12fr; min-height: 480px; overflow: hidden; border-radius: 8px; background: var(--green-dark); }
        .hero-copy { display: flex; flex-direction: column; align-items: flex-start; justify-content: center; padding: 58px 52px; color: var(--white); }
        .eyebrow { display: inline-flex; align-items: center; gap: 9px; margin: 0 0 20px; color: var(--lime); font-size: 11px; font-weight: 700; letter-spacing: 1.4px; text-transform: uppercase; }
        .eyebrow::before { width: 22px; height: 2px; background: currentColor; content: ''; }
        h1, h2, h3, p { margin-top: 0; }
        h1, h2, h3 { font-family: 'Manrope', sans-serif; letter-spacing: 0; }
        h1 { max-width: 440px; margin-bottom: 18px; font-size: clamp(38px, 4.5vw, 58px); line-height: 1.08; }
        .hero-copy > p:not(.eyebrow) { max-width: 400px; margin-bottom: 28px; color: #d5e5dc; font-size: 15px; line-height: 1.8; }
        .button-primary { display: inline-flex; align-items: center; gap: 12px; padding: 14px 19px; border-radius: 4px; background: var(--lime); color: var(--ink); font-size: 13px; font-weight: 700; transition: background .2s ease; }
        .button-primary:hover { background: #c8e27a; }
        .hero-photo { position: relative; min-height: 360px; background: #a2b69e url('https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=1500&q=85') center 45% / cover; }
        .photo-note { position: absolute; right: 20px; bottom: 20px; padding: 11px 15px; border-radius: 4px; background: var(--white); color: var(--ink); font-size: 12px; font-weight: 700; }
        .photo-note span { display: block; margin-top: 3px; color: var(--muted); font-size: 11px; font-weight: 500; }

        .quick-facts { display: grid; grid-template-columns: repeat(3, 1fr); gap: 0; padding: 0 5px; border-bottom: 1px solid var(--line); }
        .fact { padding: 25px 28px; border-right: 1px solid var(--line); }
        .fact:last-child { border-right: 0; }
        .fact strong { display: block; margin-bottom: 5px; font: 800 23px 'Manrope', sans-serif; color: var(--green); }
        .fact span { color: var(--muted); font-size: 12px; }
        section.content-section { padding: 86px 0; }
        .section-heading { display: flex; align-items: end; justify-content: space-between; gap: 20px; margin-bottom: 29px; }
        .section-heading .eyebrow { margin-bottom: 12px; color: var(--green); }
        h2 { margin-bottom: 0; font-size: clamp(27px, 3vw, 38px); line-height: 1.2; }
        .text-link { color: var(--green); font-size: 13px; font-weight: 700; white-space: nowrap; }
        .news-grid { display: grid; grid-template-columns: 1.35fr 1fr 1fr; gap: 18px; }
        .news-card { overflow: hidden; border: 1px solid var(--line); border-radius: 6px; background: var(--white); }
        .news-image { height: 190px; background-position: center; background-size: cover; }
        .news-card:first-child .news-image { height: 220px; }
        .news-body { padding: 20px; }
        .category { display: inline-block; margin-bottom: 10px; color: var(--green); font-size: 10px; font-weight: 700; letter-spacing: 1px; text-transform: uppercase; }
        .news-body h3 { margin-bottom: 9px; font-size: 17px; line-height: 1.45; }
        .news-body p { margin-bottom: 13px; color: var(--muted); font-size: 12px; line-height: 1.7; }
        .date { color: #87938d; font-size: 11px; }

        .gallery-section { background: #edf1e7; }
        .gallery-grid { display: grid; grid-template-columns: 1.2fr .8fr .8fr; grid-template-rows: 185px 185px; gap: 12px; }
        .gallery-item { position: relative; overflow: hidden; border-radius: 5px; background-position: center; background-size: cover; }
        .gallery-item:first-child { grid-row: span 2; }
        .gallery-item::after { position: absolute; inset: 45% 0 0; background: linear-gradient(transparent, rgba(15, 39, 31, .72)); content: ''; }
        .gallery-item span { position: absolute; z-index: 1; bottom: 16px; left: 17px; color: var(--white); font-size: 13px; font-weight: 700; }

        .about-grid { display: grid; grid-template-columns: .9fr 1.1fr; align-items: center; gap: 72px; }
        .about-image { min-height: 390px; border-radius: 6px; background: #9ba889 url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=1100&q=85') center / cover; }
        .about-copy .eyebrow { color: var(--green); }
        .about-copy h2 { max-width: 480px; margin-bottom: 18px; }
        .about-copy > p:not(.eyebrow) { color: var(--muted); font-size: 14px; line-height: 1.9; }
        .values { display: grid; grid-template-columns: 1fr 1fr; gap: 14px 22px; margin: 25px 0 28px; }
        .value { display: flex; align-items: center; gap: 10px; font-size: 12px; font-weight: 700; }
        .value::before { display: grid; width: 22px; height: 22px; place-items: center; border-radius: 50%; background: var(--lime); color: var(--green-dark); content: '✓'; font-size: 12px; }
        .button-outline { display: inline-block; padding: 12px 16px; border: 1px solid var(--green); border-radius: 4px; color: var(--green); font-size: 12px; font-weight: 700; }
        .button-outline:hover { background: var(--green); color: var(--white); }

        .contact-band { padding: 38px 0; background: var(--coral); color: #fff; }
        .contact-inner { display: flex; align-items: center; justify-content: space-between; gap: 22px; }
        .contact-inner h2 { max-width: 600px; font-size: 25px; }
        .contact-inner p { margin: 7px 0 0; color: #fff4ef; font-size: 13px; }
        .contact-button { flex: 0 0 auto; padding: 13px 18px; border-radius: 4px; background: var(--white); color: var(--ink); font-size: 12px; font-weight: 700; }
        footer { padding: 28px 0; background: #153c32; color: #dce9e1; }
        .footer-inner { display: flex; align-items: center; justify-content: space-between; gap: 20px; font-size: 11px; }
        .footer-links { display: flex; gap: 20px; color: #e0ebe4; }

        .hero { padding: 0 0 52px; }
        .hero-grid { min-height: 450px; border-radius: 0; }
        .hero-copy { padding: 54px 56px; }
        .hero-photo { border-radius: 18px 0 0 18px; }
        .button-primary { color: var(--green); }
        .quick-facts { border-bottom: 0; }
        .fact { text-align: center; }
        .fact strong { color: var(--green); }
        .section-heading .eyebrow, .about-copy .eyebrow { color: var(--green); }
        .text-link, .category { color: var(--green); }
        .gallery-section, .programs-section, .join-section { background: #f0eeff; }
        .gallery-item::after { background: linear-gradient(transparent, rgba(8, 13, 80, .76)); }
        .button-outline { border-color: var(--green); color: var(--green); }
        .button-outline:hover { background: var(--green); }
        .contact-band { color: var(--ink); }
        .contact-inner p { color: var(--muted); }
        .contact-button { background: var(--green); color: var(--white); }
        footer { background: #17163f; }
        .brand-mark { background: var(--green); color: #fff; border-radius: 8px; }
        .program-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; }
        .program-card { overflow: hidden; border-radius: 5px; background: #fff; box-shadow: 0 5px 18px rgba(33, 28, 89, .06); }
        .program-image { height: 145px; background-position: center; background-size: cover; }
        .program-body { padding: 14px; }
        .program-body h3 { margin-bottom: 5px; font-size: 14px; }
        .program-body p { min-height: 38px; margin-bottom: 13px; color: var(--muted); font-size: 11px; line-height: 1.6; }
        .program-meta { display: flex; align-items: center; justify-content: space-between; color: var(--ink); font-size: 10px; font-weight: 700; }
        .program-meta span:last-child { color: var(--green); font-size: 17px; }
        .center-action { margin-top: 28px; text-align: center; }
        .popular-section { position: relative; overflow: hidden; background: #17163f; color: #fff; }
        .popular-section .eyebrow { color: #b8aaff; }
        .popular-section .section-heading { display: block; text-align: center; }
        .popular-section .section-heading h2 { color: #fff; }
        .popular-section .section-heading .eyebrow { justify-content: center; }
        .popular-section .program-grid { grid-template-columns: repeat(4, 1fr); }
        .popular-section .program-card { color: var(--ink); }
        .stats-layout { display: grid; grid-template-columns: .85fr 1.15fr; align-items: center; gap: 54px; }
        .stats-copy h2 { max-width: 390px; margin-bottom: 24px; }
        .stat-list { display: grid; gap: 17px; }
        .stat-row { display: grid; grid-template-columns: 82px 1fr; gap: 14px; align-items: center; }
        .stat-row strong { color: var(--green); font: 800 25px 'Manrope', sans-serif; }
        .stat-row h3 { margin-bottom: 4px; font-size: 13px; }
        .stat-row p { margin: 0; color: var(--muted); font-size: 11px; line-height: 1.6; }
        .stats-photos { display: grid; grid-template-columns: 1fr 1fr; grid-template-rows: 150px 150px; gap: 12px; }
        .stats-photos div { border-radius: 5px; background-position: center; background-size: cover; }
        .stats-photos div:first-child { grid-row: span 2; }
        .join-grid { display: grid; grid-template-columns: .9fr 1.1fr; align-items: center; gap: 55px; }
        .join-photo { min-height: 270px; border-radius: 5px; background: #d9d7eb url('https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=1100&q=85') center / cover; }
        .join-copy .eyebrow { color: var(--green); }
        .join-copy h2 { margin-bottom: 14px; }
        .join-copy p { max-width: 500px; color: var(--muted); font-size: 13px; line-height: 1.8; }
        .testimonial-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; }
        .testimonial { padding: 20px; border: 1px solid #e8e5fb; border-radius: 5px; background: #f5f3ff; }
        .stars { margin-bottom: 12px; color: #e8a73b; letter-spacing: 2px; }
        .testimonial p { min-height: 56px; color: var(--muted); font-size: 12px; line-height: 1.7; }
        .person { display: flex; align-items: center; gap: 10px; font-size: 11px; font-weight: 700; }
        .person img { width: 35px; height: 35px; border-radius: 50%; object-fit: cover; }
        .person span { display: block; margin-top: 3px; color: var(--muted); font-size: 10px; font-weight: 400; }
        .news-grid { grid-template-columns: repeat(4, 1fr); }
        .news-card:first-child .news-image, .news-image { height: 155px; }
        .news-body { padding: 15px; }
        .news-body h3 { font-size: 13px; }
        .news-body p { font-size: 11px; }
        .contact-band { background: #f0eeff; }

        @media (max-width: 760px) {
            .hero { padding: 0 0 36px; }
            .hero-grid { min-height: auto; }
            .hero-photo { min-height: 270px; border-radius: 0; }
            .program-grid, .popular-section .program-grid { grid-template-columns: repeat(2, 1fr); }
            .stats-layout, .join-grid { grid-template-columns: 1fr; gap: 28px; }
            .stats-photos { grid-template-rows: 130px 130px; }
            .testimonial-grid { grid-template-columns: 1fr; }
            .testimonial p { min-height: auto; }
            .news-grid { grid-template-columns: 1fr 1fr; }
            .news-card:first-child .news-image, .news-image { height: 170px; }
            .fact { text-align: left; }
        }

        @media (max-width: 390px) {
            .program-grid, .popular-section .program-grid, .news-grid { grid-template-columns: 1fr; }
            .program-image { height: 190px; }
            .section-heading { flex-direction: column; }
        }

        @media (max-width: 760px) {
            .container { width: min(100% - 32px, 560px); }
            .nav-wrap { min-height: auto; padding: 17px 0; flex-wrap: wrap; gap: 15px; }
            .nav-links { order: 3; width: 100%; justify-content: space-between; gap: 12px; font-size: 12px; }
            .nav-cta { margin-left: auto; padding: 10px 12px; font-size: 11px; }
            .hero { padding: 18px 0 46px; }
            .hero-grid { grid-template-columns: 1fr; }
            .hero-copy { padding: 42px 28px; }
            h1 { font-size: clamp(32px, 10vw, 43px); }
            .hero-photo { min-height: 280px; }
            .quick-facts { grid-template-columns: 1fr; padding: 0; }
            .fact { display: flex; align-items: center; gap: 13px; padding: 14px 5px; border-right: 0; border-bottom: 1px solid var(--line); }
            .fact strong { min-width: 66px; margin: 0; font-size: 20px; }
            section.content-section { padding: 60px 0; }
            .section-heading { align-items: start; }
            .news-grid { grid-template-columns: 1fr; }
            .news-card:first-child .news-image, .news-image { height: 210px; }
            .gallery-grid { grid-template-columns: 1fr 1fr; grid-template-rows: 210px 150px 150px; }
            .gallery-item:first-child { grid-column: span 2; grid-row: auto; }
            .about-grid { grid-template-columns: 1fr; gap: 30px; }
            .about-image { min-height: 270px; }
            .contact-inner, .footer-inner { align-items: flex-start; flex-direction: column; }
            .contact-inner h2 { font-size: 23px; }
        }

        @media (max-width: 390px) {
            .brand { font-size: 16px; }
            .nav-links { font-size: 11px; }
            .nav-links a { white-space: nowrap; }
            .section-heading { flex-direction: column; }
            .gallery-grid { grid-template-rows: 180px 130px 130px; }
            .hero-copy { padding: 36px 20px; }
            .values { grid-template-columns: 1fr; }
            .stat-row { grid-template-columns: 64px minmax(0, 1fr); gap: 8px; }
            .stat-row > div { min-width: 0; }
        }
    </style>
</head>
<body>
    <header class="site-header">
        <div class="container nav-wrap">
            <a class="brand" href="#beranda" aria-label="Sekolah Kita, beranda">
                <span class="brand-mark">S</span>
                <span>Sekolah Kita</span>
            </a>
            <nav class="nav-links" aria-label="Navigasi utama">
                <a href="#berita">Berita</a>
                <a href="#galeri">Galeri</a>
                <a href="#tentang">Tentang Sekolah</a>
            </nav>
            <a class="nav-cta" href="#kontak">Hubungi Kami <span aria-hidden="true">↗</span></a>
        </div>
    </header>

    <main>
        <section class="hero" id="beranda">
            <div class="container">
                <div class="hero-grid">
                    <div class="hero-copy">
                        <p class="eyebrow">Ruang tumbuh generasi masa depan</p>
                        <h1>Belajar hari ini, memimpin esok hari.</h1>
                        <p>Lingkungan belajar yang mendukung setiap siswa untuk mengenali potensi, membangun karakter, dan berani berkarya.</p>
                        <a class="button-primary" href="#tentang">Kenali sekolah kami <span aria-hidden="true">→</span></a>
                    </div>
                    <div class="hero-photo" role="img" aria-label="Suasana belajar siswa di dalam kelas">
                        <div class="photo-note">Belajar dengan makna<span>Bertumbuh bersama setiap hari</span></div>
                    </div>
                </div>
                <div class="quick-facts" aria-label="Sekilas tentang sekolah">
                    <div class="fact"><strong>25+</strong><span>Tahun mendampingi perjalanan belajar</span></div>
                    <div class="fact"><strong>32</strong><span>Ruang untuk belajar dan berkolaborasi</span></div>
                    <div class="fact"><strong>18</strong><span>Kegiatan untuk mengembangkan minat</span></div>
                </div>
            </div>
        </section>

        <section class="content-section" id="tentang">
            <div class="container about-grid">
                <div class="about-image" role="img" aria-label="Siswa sekolah merayakan kelulusan"></div>
                <div class="about-copy">
                    <p class="eyebrow">Tentang sekolah</p>
                    <h2>Bekali masa depan dengan pengalaman belajar terbaik.</h2>
                    <p>Sekolah Kita mendampingi setiap siswa untuk berkembang melalui pembelajaran yang bermakna, guru yang peduli, dan ruang untuk mencoba hal baru. Kami percaya setiap anak punya potensi untuk bersinar.</p>
                    <div class="values">
                        <div class="value">Belajar aktif dan kreatif</div>
                        <div class="value">Guru yang berpengalaman</div>
                        <div class="value">Karakter dan kepedulian</div>
                        <div class="value">Lingkungan yang suportif</div>
                    </div>
                    <a class="button-outline" href="#kontak">Kenali sekolah kami <span aria-hidden="true">→</span></a>
                </div>
            </div>
        </section>

        <section class="content-section programs-section" id="program">
            <div class="container">
                <div class="section-heading">
                    <div><p class="eyebrow">Ruang untuk berkembang</p><h2>Program dan kegiatan sekolah</h2></div>
                    <a class="text-link" href="#kegiatan">Lihat kegiatan unggulan <span aria-hidden="true">→</span></a>
                </div>
                <div class="program-grid">
                    <article class="program-card"><div class="program-image" style="background-image: url('https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=800&q=80')"></div><div class="program-body"><h3>Akademik</h3><p>Belajar aktif untuk memahami ilmu dan mengasah rasa ingin tahu.</p><div class="program-meta"><span>Belajar bersama</span><span aria-hidden="true">→</span></div></div></article>
                    <article class="program-card"><div class="program-image" style="background-image: url('https://images.unsplash.com/photo-1529390079861-591de354faf5?auto=format&fit=crop&w=800&q=80')"></div><div class="program-body"><h3>Olahraga</h3><p>Melatih kebugaran, disiplin, dan semangat kerja sama.</p><div class="program-meta"><span>Aktif dan sehat</span><span aria-hidden="true">→</span></div></div></article>
                    <article class="program-card"><div class="program-image" style="background-image: url('https://images.unsplash.com/photo-1513364776144-60967b0f800f?auto=format&fit=crop&w=800&q=80')"></div><div class="program-body"><h3>Seni dan budaya</h3><p>Wadah bagi siswa untuk berekspresi dan berkarya.</p><div class="program-meta"><span>Kreatif berkarya</span><span aria-hidden="true">→</span></div></div></article>
                    <article class="program-card"><div class="program-image" style="background-image: url('https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&w=800&q=80')"></div><div class="program-body"><h3>Teknologi</h3><p>Mengenal keterampilan digital untuk menghadapi masa depan.</p><div class="program-meta"><span>Siap berkembang</span><span aria-hidden="true">→</span></div></div></article>
                </div>
                <div class="center-action"><a class="button-outline" href="#galeri">Jelajahi semua kegiatan</a></div>
            </div>
        </section>

        <section class="content-section popular-section" id="kegiatan">
            <div class="container">
                <div class="section-heading"><p class="eyebrow">Belajar di luar kelas</p><h2>Kegiatan unggulan siswa</h2></div>
                <div class="program-grid">
                    <article class="program-card"><div class="program-image" style="background-image: url('https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=800&q=80')"></div><div class="program-body"><h3>Klub komputer</h3><p>Eksplorasi teknologi dan keterampilan digital.</p><div class="program-meta"><span>Ekstrakurikuler</span><span aria-hidden="true">→</span></div></div></article>
                    <article class="program-card"><div class="program-image" style="background-image: url('https://images.unsplash.com/photo-1516979187457-637abb4f9353?auto=format&fit=crop&w=800&q=80')"></div><div class="program-body"><h3>Klub literasi</h3><p>Membangun kebiasaan membaca dan menulis.</p><div class="program-meta"><span>Ekstrakurikuler</span><span aria-hidden="true">→</span></div></div></article>
                    <article class="program-card"><div class="program-image" style="background-image: url('https://images.unsplash.com/photo-1529390079861-591de354faf5?auto=format&fit=crop&w=800&q=80')"></div><div class="program-body"><h3>Tim olahraga</h3><p>Berlatih bersama dan tumbuh sebagai tim.</p><div class="program-meta"><span>Ekstrakurikuler</span><span aria-hidden="true">→</span></div></div></article>
                    <article class="program-card"><div class="program-image" style="background-image: url('https://images.unsplash.com/photo-1513364776144-60967b0f800f?auto=format&fit=crop&w=800&q=80')"></div><div class="program-body"><h3>Kelompok seni</h3><p>Mengembangkan kreativitas lewat karya.</p><div class="program-meta"><span>Ekstrakurikuler</span><span aria-hidden="true">→</span></div></div></article>
                </div>
            </div>
        </section>

        <section class="content-section">
            <div class="container stats-layout">
                <div class="stats-copy"><p class="eyebrow">Tumbuh bersama</p><h2>Tempat belajar yang membuat potensi berkembang.</h2><div class="stat-list"><div class="stat-row"><strong>900+</strong><div><h3>Siswa aktif</h3><p>Belajar, berteman, dan bertumbuh bersama di lingkungan yang suportif.</p></div></div><div class="stat-row"><strong>40+</strong><div><h3>Guru dan tenaga pendidik</h3><p>Mendampingi proses belajar dengan perhatian dan pengalaman.</p></div></div><div class="stat-row"><strong>18</strong><div><h3>Kegiatan pengembangan diri</h3><p>Beragam pilihan untuk mengeksplorasi minat dan bakat siswa.</p></div></div></div></div>
                <div class="stats-photos"><div style="background-image: url('https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=900&q=80')"></div><div style="background-image: url('https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=700&q=80')"></div><div style="background-image: url('https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?auto=format&fit=crop&w=700&q=80')"></div></div>
            </div>
        </section>

        <section class="content-section join-section">
            <div class="container join-grid"><div class="join-photo" role="img" aria-label="Guru mendampingi siswa belajar"></div><div class="join-copy"><p class="eyebrow">Bersama membangun masa depan</p><h2>Jadilah bagian dari perjalanan belajar mereka.</h2><p>Kami percaya kolaborasi antara sekolah, siswa, dan keluarga menciptakan pengalaman belajar yang lebih berarti.</p><a class="button-outline" href="#kontak">Hubungi sekolah <span aria-hidden="true">→</span></a></div></div>
        </section>

        <section class="content-section">
            <div class="container"><div class="section-heading"><div><p class="eyebrow">Kata mereka</p><h2>Cerita dari keluarga sekolah</h2></div></div><div class="testimonial-grid">
                <article class="testimonial"><div class="stars" aria-label="5 dari 5 bintang">★★★★★</div><p>“Guru-gurunya perhatian dan anak saya jadi lebih percaya diri untuk mencoba hal-hal baru.”</p><div class="person"><img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=100&q=80" alt=""><div>Rina Andari<span>Orang tua siswa</span></div></div></article>
                <article class="testimonial"><div class="stars" aria-label="5 dari 5 bintang">★★★★★</div><p>“Banyak kegiatan menarik. Saya bisa belajar sekaligus menemukan kegiatan yang saya sukai.”</p><div class="person"><img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=100&q=80" alt=""><div>Rafi Pratama<span>Siswa</span></div></div></article>
                <article class="testimonial"><div class="stars" aria-label="5 dari 5 bintang">★★★★★</div><p>“Lingkungan sekolahnya ramah. Komunikasi dengan guru juga terasa terbuka dan nyaman.”</p><div class="person"><img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&w=100&q=80" alt=""><div>Dewi Lestari<span>Orang tua siswa</span></div></div></article>
            </div></div>
        </section>

        <section class="content-section gallery-section" id="galeri">
            <div class="container">
                <div class="section-heading"><div><p class="eyebrow">Momen kebersamaan</p><h2>Galeri kegiatan sekolah</h2></div><a class="text-link" href="#galeri">Lihat semua momen <span aria-hidden="true">→</span></a></div>
                <div class="gallery-grid">
                    <div class="gallery-item" role="img" aria-label="Siswa belajar bersama di kelas" style="background-image: url('https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=1100&q=80')"><span>Belajar bersama</span></div>
                    <div class="gallery-item" role="img" aria-label="Siswa mengikuti kegiatan sekolah" style="background-image: url('https://images.unsplash.com/photo-1529390079861-591de354faf5?auto=format&fit=crop&w=800&q=80')"><span>Aktif berkegiatan</span></div>
                    <div class="gallery-item" role="img" aria-label="Siswa membaca buku" style="background-image: url('https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=800&q=80')"><span>Gemar membaca</span></div>
                    <div class="gallery-item" role="img" aria-label="Suasana lingkungan sekolah" style="background-image: url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=800&q=80')"><span>Lingkungan nyaman</span></div>
                    <div class="gallery-item" role="img" aria-label="Siswa berdiskusi bersama" style="background-image: url('https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?auto=format&fit=crop&w=800&q=80')"><span>Ide dan kolaborasi</span></div>
                </div>
            </div>
        </section>

        <section class="content-section" id="berita">
            <div class="container">
                <div class="section-heading">
                    <div><p class="eyebrow">Cerita dari sekolah</p><h2>Kabar dan kegiatan terbaru</h2></div>
                    <a class="text-link" href="#berita">Lihat semua berita <span aria-hidden="true">→</span></a>
                </div>
                <div class="news-grid">
                    <article class="news-card">
                        <div class="news-image" style="background-image: url('https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=1000&q=80')"></div>
                        <div class="news-body"><span class="category">Kegiatan</span><h3>Pekan kreativitas siswa hadirkan karya penuh inspirasi</h3><p>Siswa menampilkan beragam karya dan ide dalam kegiatan tahunan sekolah.</p><span class="date">12 September 2026</span></div>
                    </article>
                    <article class="news-card">
                        <div class="news-image" style="background-image: url('https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?auto=format&fit=crop&w=900&q=80')"></div>
                        <div class="news-body"><span class="category">Akademik</span><h3>Belajar kolaboratif, tumbuh lebih percaya diri</h3><p>Suasana kelas yang aktif mendorong siswa bertukar gagasan.</p><span class="date">8 September 2026</span></div>
                    </article>
                    <article class="news-card">
                        <div class="news-image" style="background-image: url('https://images.unsplash.com/photo-1529390079861-591de354faf5?auto=format&fit=crop&w=900&q=80')"></div>
                        <div class="news-body"><span class="category">Prestasi</span><h3>Tim sekolah raih prestasi di ajang olahraga pelajar</h3><p>Kerja keras dan semangat tim membawa pulang pengalaman berharga.</p><span class="date">2 September 2026</span></div>
                    </article>
                </div>
            </div>
        </section>

        <section class="contact-band" id="kontak">
            <div class="container contact-inner">
                <div><h2>Mari tumbuh dan belajar bersama kami.</h2><p>Ingin tahu lebih banyak tentang sekolah? Kami siap membantu.</p></div>
                <a class="contact-button" href="mailto:info@sekolah.sch.id">Hubungi sekolah <span aria-hidden="true">↗</span></a>
            </div>
        </section>
    </main>

    <footer>
        <div class="container footer-inner">
            <a class="brand" href="#beranda"><span class="brand-mark">S</span><span>Sekolah Kita</span></a>
            <span>© {{ date('Y') }} Sekolah Kita. Semua hak dilindungi.</span>
            <div class="footer-links"><a href="#berita">Berita</a><a href="#galeri">Galeri</a><a href="#tentang">Tentang</a></div>
        </div>
    </footer>
</body>
</html>
