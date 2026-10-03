@extends('landingpage')
@section('content')
    <main id="beranda">
        <section class="program-section py-4 py-lg-5" id="program">
            <div class="container px-3 px-lg-4">
                <div class="program-heading d-flex align-items-center justify-content-between gap-3 mb-4">
                    <h1 class="h2 mb-0 fw-semibold">Berita sekolah</h1>
                </div>

                <div class="row">
                    <div class="col-lg-8">
                        <article class="card program-card border-0 shadow-sm">
                            <img class="card-img-top program-image" src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}">
                            <div class="card-body p-3">
                                <h2 class="card-title h4">{{ $berita->judul }}</h2>
                                <p class="card-text">{{ $berita->isi }}</p>
                                <p class="text-muted small">Diposting pada {{ $berita->tanggal }}</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
