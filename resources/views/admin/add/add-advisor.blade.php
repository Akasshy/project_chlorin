@extends('..template/pasang-template-admin')
@section('content')
<style>
    /* Sembunyikan input file default */
    .file-input {
            display: none; /* Sembunyikan input asli */
        }

        .custom-label {
            display: inline-block;
            padding: 10px 20px;
            background-color: #294D61; /* Ganti dengan warna yang diinginkan */
            color: white;
            cursor: pointer;
            border-radius: 12px;
            margin-top: 10px; /* Ruang antara gambar dan tombol */
        }

        .custom-label:hover {
            background-color: #45a049; /* Ganti dengan warna hover yang diinginkan */
        }

        .image-preview {
            width: 100px; /* Sesuaikan ukuran gambar */
            height: 100px;
            border-radius: 50%; /* Membuat gambar menjadi lingkaran */
            object-fit: cover; /* Memastikan gambar tetap proporsional */
            margin-bottom: 10px; /* Ruang antara gambar dan tombol */
        }
</style>
<header class="main-header">
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top bg-white pl-30"
        style="border-bottom-left-radius: 40px; border-bottom-right-radius: 40px;">
        <!-- Sidebar toggle button-->
        <div class="navbar-custom-menu w-100">
            <ul class="nav navbar-nav d-flex w-100 align-items-center">
                <!-- Notifications -->
                <li class="btn-group nav-item pt-1">
                    <a href="#" class="waves-effect waves-light nav-link rounded svg-bt-icon text-dark"
                        data-toggle="push-menu" role="button">
                        <i class="nav-link-icon mdi mdi-menu" style="font-size: 30px;"></i>
                    </a>
                </li>
                <li class="pt-15 d-flex" >
                    <a href="/advisor-page" class="ml-3 fw-bold"  style="text-decoration:none ; color : #294D61"><i class="fi fi-rr-angle-left fs-3 fw-bold"></i></a> <!-- Margin left for left spacing -->
                    <h3 class="ml-3 fw-bold">Create Advisor</h3> <!-- Margin left for left spacing -->
                </li>
                <li class="ml-auto"> <!-- Pushes user account to the right -->
                    <!-- User Account-->
                    <li class="dropdown user user-menu">
                        <a href="#" class="waves-effect waves-light rounded dropdown-toggle p-0" data-toggle="dropdown"
                            title="User">
                            <img src="../images/avatar/1.jpg" alt="" class="mr-3" style="width:40px; height:40px;"> <!-- Margin right for space before image -->
                        </a>
                        <ul class="dropdown-menu animated flipInX">
                            <li class="user-body">
                                <a class="dropdown-item" href="#"><i class="ti-user text-muted mr-2"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="ti-wallet text-muted mr-2"></i> My Wallet</a>
                                <a class="dropdown-item" href="#"><i class="ti-settings text-muted mr-2"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="ti-lock text-muted mr-2"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div class="content-wrapper" style="margin-top:-20px; ">
    <div class="container-full">
        <section class="content">
            <div class="container" >
                <div class="content w-100">
                    <div class="profile p-5  bg-white" style="border-radius: 50px;" >
                        <form action="/admin/add/profile/advisor/{{ $id }}" class="p-3 pt-5" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <label for="nisn" class="ms-2">Nama</label>
                                            <input class="form-control mt-2 border-0 pt-2 pb-2" style="border-radius: 12px; background-color: #F6F6F6;" type="text" name="name" id="nisn">
                                        </div>
                                        <div class="col-md-2" style="margin-top: -50px;">
                                            <div class="row">
                                                <div class="col-md-12 " >
                                                    <img src="https://via.placeholder.com/100" alt="Preview" class="image-preview">
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="file" id="fileInput" class="file-input" name="image">
                                                    <label for="fileInput" class="custom-label " >Add Photo</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12" style="margin-top:-30px ;">
                                    <label for="industry" class="ms-2 "  >Industry</label>
                                    <select name="industry_id" id="industry" class="form-control boder-0 mt-2" style="border-radius: 12px; background-color: #F6F6F6; ">
                                        @foreach ($industry as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                        <option value="">Telkom</option>
                                    </select>
                                </div>

                                <div class="col-md-12 mt-5 pt-5">
                                    <button class="btn ps-5 pe-5 text-white " style="background-color: #294D61; border-radius: 20px;" type="submit">Tambah</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </section>
    </div>
</div>
@endsection
