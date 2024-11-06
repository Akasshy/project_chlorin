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
                    <a href="/school-page" class="ml-3 fw-bold"  style="text-decoration:none ; color : #294D61"><i class="fi fi-rr-angle-left fs-3 fw-bold"></i></a> <!-- Margin left for left spacing -->
                    <h3 class="ml-3 fw-bold">Edit School</h3> <!-- Margin left for left spacing -->
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
                        <form action="/admin/update/profile/school/{{$school->id}}" class="p-3 pt-5" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <label for="nisn" class="ms-2">Npsn</label>
                                            <input class="form-control mt-2 border-0 pt-2 pb-2" value="{{$school->npsn}}" style="border-radius: 12px; background-color: #F6F6F6;" type="number" name="npsn" id="nisn">
                                        </div>
                                        <div class="col-md-2" style="margin-top: -50px;">
                                            <div class="row">
                                                <div class="col-md-12 " >
                                                    <div class="image-preview">
                                                        <img src="{{$school->icon?asset('/storage/image_profile/'.$school->icon):asset('assets/default.png')}}" alt="Preview" class="image-preview">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="file" id="fileInput" class="file-input" name="image">
                                                    <label for="fileInput" class="custom-label " >Edit Photo</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12" style="margin-top:-30px ;">
                                    <label for="nama" class="ms-2">Nama Sekolah</label>
                                    <input type="text" value="{{$school->name}}" class="form-control mt-2 border-0 pt-2 pb-2" style="border-radius: 12px; background-color: #F6F6F6; " name="name" id="nama">
                                </div>

                                <div class="col-md-12 mt-3">
                                    <label for="alamat" class="ms-2">Alamat</label>
                                    <textarea name="address" class="form-control mt-2 border-0" style="border-radius: 12px; background-color: #F6F6F6;" id="alamat" rows="4">{{$school->address}}</textarea>
                                </div>
                                <div class="col-md-12 mt-3" >
                                    <label for="npsn" class="ms-2">Nama Kepala Sekolah</label>
                                    <input type="text" value="{{$school->headmaster}}" class="form-control mt-2 border-0  pt-2 pb-2" style="border-radius: 12px; background-color: #F6F6F6;" name="headmaster" id="npsn">
                                </div>
                                <div class="col-md-12 mt-5 pt-5">
                                    <a href="/admin/delete/profile/school/{{$school->id}}" class="btn btn-danger pe-5 ps-5 me-5 text-white" style="border-radius:20px">Hapus</a>
                                    <button class="btn ps-5 pe-5 text-white " style="background-color: #294D61; border-radius: 20px;" type="submit">Edit</button>
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
