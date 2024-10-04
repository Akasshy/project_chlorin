@extends('template.pasang-template-teacher')
@section('content')
<header class="main-header">
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top bg-white pl-30"
        style="border-bottom-left-radius: 40px;border-bottom-right-radius: 40px;">
        <!-- Sidebar toggle button-->

        <div class="navbar-custom-menu ">
            <ul class="nav navbar-nav d-flex">
                <!-- full Screen -->
                <li class="btn-group nav-item pt-1">
                    <a href="#" class="waves-effect waves-light nav-link rounded svg-bt-icon text-dark"
                        data-toggle="push-menu" role="button">
                        <i class="nav-link-icon mdi mdi-menu" style="font-size: 30px;"></i>
                    </a>
                </li>
                <!-- Notifications -->
                <li class="dropdown notifications-menu pt-15">
                    <h3>Tugas</h3>
                </li>

                <!-- User Account-->
                <li class="dropdown user user-menu">
                    <a href="#" class="waves-effect waves-light rounded dropdown-toggle p-0" data-toggle="dropdown"
                        title="User">
                        <img src="../images/avatar/1.jpg" alt="">
                    </a>
                    <ul class="dropdown-menu animated flipInX">
                        <li class="user-body">
                            <a class="dropdown-item" href="#"><i class="ti-user text-muted mr-2"></i>
                                Profile</a>
                            <a class="dropdown-item" href="#"><i class="ti-wallet text-muted mr-2"></i> My
                                Wallet</a>
                            <a class="dropdown-item" href="#"><i class="ti-settings text-muted mr-2"></i>
                                Settings</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="ti-lock text-muted mr-2"></i> Logout</a>
                        </li>
                    </ul>
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
                        <div class="box-header with-border">
                            <h3 class="box-title text-dark">Data Tugas</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="complex_header" class="table table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Tugas</th>
                                            <th>Detail</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($task as $key => $item)
                                            <tr class="fw-bold">
                                                <td>{{ $key+1 }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>
                                                    <a href="/task/detail/{{ $item->id }}" class="btn text-white fw-bold"
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
