@extends('landingpage')
@section('content')
    <main id="beranda">
        <section class="program-section py-4 py-lg-5" id="program">
            <div class="container px-3 px-lg-4">
                <div class="program-heading d-flex align-items-center justify-content-between gap-3 mb-4">
                    <h1 class="h2 mb-0 fw-semibold">Berita sekolah</h1>
                    <a class="link-underline link-underline-opacity-0 fw-semibold text-nowrap" style="color: var(--school-purple)" href="#akademik">
                        Lihat Semua Berita <span aria-hidden="true">→</span>
                    </a>
                </div>

                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-3 g-lg-4">
                    @foreach ($berita as $item)
                    <div class="col" id="akademik">
                        <article class="card program-card h-100 border-0 shadow-sm">
                            <img class="card-img-top program-image" src="{{ asset('storage/' . $item->gambar) }}" alt="Siswa mengikuti kegiatan belajar di kelas">
                            <div class="card-body d-flex flex-column p-3">
                                <h2 class="card-title h6">{{ $item->judul }}</h2>
                                <p class="card-text mb-3">{{ $item->deskripsi }}</p>
                                <a class="program-link d-flex align-items-center justify-content-between mt-auto" href="{{ route('berita.show', $item->slug) }}">
                                    <span>Baca Selengkapnya</span><span class="program-arrow" aria-hidden="true">→</span>
                                </a>
                            </div>
                        </article>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>
    </main>
@endsection
