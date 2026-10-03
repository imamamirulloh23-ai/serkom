@extends('admin.template')
@section('content')
<section class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ breadcrumb ] start -->
                            <div class="page-header">
                                <div class="page-block">
                                    <div class="row align-items-center">
                                        <div class="col-md-12">
                                            <div class="page-header-title">
                                                <h5 class="m-b-10">Data Berita</h5>
                                            </div>
                                            <ul class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                                <li class="breadcrumb-item"><a href="#!">Administator</a></li>
                                                <li class="breadcrumb-item"><a href="#!">Data Berita</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- [ breadcrumb ] end -->
                            <!-- [ Main Content ] start -->
                            <div class="row">

                                <!-- [ Hover-table ] start -->
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5>Data Galeri</h5>
                                                </div>
                                                <div class="col-md-6 d-flex justify-content-end">
                                                    <a href="{{ route('admin.berita.create') }}" class="btn btn-sm btn-primary">Add Berita</a>
                                                </div>
                                            </div>
                                            {{-- <span class="d-block m-t-5"></span> --}}
                                        </div>
                                        <div class="card-body table-border-style">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Judul</th>
                                                            <th>Slug</th>
                                                            <th>Isi Berita</th>
                                                            <th>Tanggal</th>
                                                            <th>Gambar</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($berita as $item)
                                                        <tr>
                                                            <th scope="row">{{ $loop->iteration }}</th>
                                                            <td>{{ $item->judul }}</td>
                                                            <td>{{ $item->slug }}</td>
                                                            <td>{{ $item->isi }}</td>
                                                            <td>{{ $item->tanggal }}</td>
                                                            <td><img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" width="100"></td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- [ Hover-table ] end -->

                            </div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
