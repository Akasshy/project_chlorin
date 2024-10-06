@extends('template.pasang-template-admin')
@section('content')
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
                <li class="pt-15">
                    <h3 class="ml-3 fw-bold">Student</h3> <!-- Margin left for left spacing -->
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

<div class="content-wrapper">
    <div class="container-full">
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border d-flex justify-content-between align-items-center">
                            <h3 class="box-title" style="color: #082D33">Data Students</h3>
                            <a href="/admin/add/user/student" class="fs-5" style="color: #082D33; text-decoration: none;">Add Student <i class="fi fi-rr-add"></i></a> <!-- Aligning Data Sekolah and Add Sekolah in one line -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="complex_header" class="table table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th style="width: 28px">No</th>
                                            <th>NISN</th>
                                            <th>Nama Lengkap</th>
                                            <th>Asal Sekolah</th>
                                            <th>Detail</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($student as $key => $item)
                                            <tr class="fw-bold">
                                                <td>{{ $key+1 }}</td>
                                                <td>{{ $item->nisn }}</td>
                                                <td>{{ $item->full_name }}</td>
                                                <td>{{ $item->npsn }}</td>
                                                <td>
                                                    <a href="/admin/update/user/student/{{ $item->id }}" class="btn text-white fw-bold"
                                                        style="background: #294D61;">Pilih</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
