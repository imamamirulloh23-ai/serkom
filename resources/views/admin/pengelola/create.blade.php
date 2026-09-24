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
                                                <h5 class="m-b-10">Create Pengelola</h5>
                                            </div>
                                            <ul class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                                <li class="breadcrumb-item"><a href="#!">Administator</a></li>
                                                <li class="breadcrumb-item"><a href="#!">Create Pengelola</a></li>
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
                                            <form action="{{ route('pengelola.store') }}" method="post">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="name">Nama Pengguna:</label>
                                                    <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="{{ old('name') }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="username">Username:</label>
                                                    <input type="text" class="form-control" id="username" placeholder="Enter username" value="{{ old('username') }}" name="username" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password">Password:</label>
                                                    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="role">Role:</label>
                                                    <select name="role" id="role" class="form-control">
                                                        <option value="admin">Admin</option>
                                                        <option value="operator">Operator</option>
                                                    </select>
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
