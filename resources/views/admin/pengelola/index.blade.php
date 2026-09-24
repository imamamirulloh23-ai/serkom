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
                                                <h5 class="m-b-10">Data Pengelola</h5>
                                            </div>
                                            <ul class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                                <li class="breadcrumb-item"><a href="#!">Administator</a></li>
                                                <li class="breadcrumb-item"><a href="#!">Data Pengelola</a></li>
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
                                                    <h5>Data Pengelola</h5>
                                                </div>
                                                <div class="col-md-6 d-flex justify-content-end">
                                                    <a href="{{ route('pengelola.create') }}" class="btn btn-sm btn-primary">Add Data</a>
                                                </div>
                                            </div>
                                            {{-- <span class="d-block m-t-5"></span> --}}
                                        </div>
                                        <div class="card-body table-border-style">
                                            @session('success')
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                            @endsession
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Nama Pengguna</th>
                                                            <th>Username</th>
                                                            <th>Role</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($pengelola as $item)
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td>{{ $item->name }}</td>
                                                                <td>{{ $item->username }}</td>
                                                                <td>{{ $item->role }}</td>
                                                                <td>
                                                                    <a href="{{ route('pengelola.edit', $item->id_user) }}" class="btn btn-sm btn-info">Edit</a>
                                                                    <a href="{{ route('pengelola.delete', $item->id_user) }}" onclick="return confirm('Hapus Data {{ $item->username }} ?')" class="btn btn-sm btn-danger">Hapus</a>
                                                                </td>
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
