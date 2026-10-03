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
                                                <h5 class="m-b-10">Create Berita</h5>
                                            </div>
                                            <ul class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                                <li class="breadcrumb-item"><a href="#!">Administator</a></li>
                                                <li class="breadcrumb-item"><a href="#!">Create Berita</a></li>
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
                                        <div class="card-body table-border-style">
                                            @if($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            @endif
                                            <form action="{{ route('admin.berita.store') }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="name">Judul:</label>
                                                    <input type="text" class="form-control" id="judul" placeholder="Enter Judul" name="judul" value="{{ old('judul') }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="username">Tanggal Publikasi:</label>
                                                    <input type="date" class="form-control" id="tanggal_publikasi" placeholder="Enter Tanggal Publikasi" value="{{ old('tanggal') }}" name="tanggal" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password">Gambar:</label>
                                                    <input type="file" class="form-control" id="gambar" placeholder="Enter gambar" name="gambar" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="isi">Isi Berita:</label>
                                                    <textarea class="form-control" id="isi" name="isi" rows="5" required>{{ old('isi') }}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <input type="submit" value="SIMPAN" name="simpan" class="btn btn-md btn-primary">
                                                </div>
                                            </form>
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
