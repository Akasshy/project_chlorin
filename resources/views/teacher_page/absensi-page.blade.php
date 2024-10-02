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
                    <h3>Absensi</h3>
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

                <div class="col-xl-12">
                    <div class="card mb-5 shadow text-white" style="border-radius: 15px; border: none; cursor:pointer;background: #6DA5C0;">
                        <div class="row g-0 ">
                            <div class="col-md-12 ">
                                <div class="card-body d-flex">
                                    <i class="fi fi-rr-calendar-days p-1 fs-4" style="margin-right: 12px;"></i>
                                    <h5 class="pt-2" style="margin-right: 73%;">13 April 2024</h5>
                                    <a href="#" class="btn btn-outline-primary border-primary fw-bold">Pilih Tanggal</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card mb-3 shadow text-white" style="border-radius: 15px; border: none; cursor:pointer;background: rgb(220, 220, 220);">
                        <div class="row g-0 ">
                            <div class="col-md-12 pull-up">
                                <div class="ml" style="border-radius: 15px;background: #00D715;  ">
                                    <div class="card-body d-flex ms-3" style="background: #bdffcb; border-end-end-radius: 15px;border-top-right-radius: 15px;" >
                                        <img src="images/iman_3.jpg" style="width: 70px; border-radius: 15px;object-fit: cover;" alt="">
                                        <div class="d-flex flex-column ml-3 text-dark">
                                            <h5>Hilman Agus</h5>
                                            <h5>13-08-2023 <span>04:55:40</span></h5>
                                            <h5>Dalam Kawasan</h5>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card mb-3 shadow text-white" style="border-radius: 15px; border: none; cursor:pointer;background: rgb(220, 220, 220);">
                        <div class="row g-0 ">
                            <div class="col-md-12 pull-up">
                                <div class="ml" style="border-radius: 15px;background: #00D715;  ">
                                    <div class="card-body d-flex ms-3" style="background: #bdffcb; border-end-end-radius: 15px;border-top-right-radius: 15px;" >
                                        <img src="images/iman_3.jpg" style="width: 70px; border-radius: 15px;object-fit: cover;" alt="">
                                        <div class="d-flex flex-column ml-3 text-dark">
                                            <h5>Hilman Agus</h5>
                                            <h5>13-08-2023 <span>04:55:40</span></h5>
                                            <h5>Dalam Kawasan</h5>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card mb-3 shadow text-white" style="border-radius: 15px; border: none; cursor:pointer;background: rgb(220, 220, 220);">
                        <div class="row g-0 ">
                            <div class="col-md-12 pull-up">
                                <div class="ml" style="border-radius: 15px;background: #FF0000;  ">
                                    <div class="card-body d-flex ms-3" style="background: #ffbdbd; border-end-end-radius: 15px;border-top-right-radius: 15px;" >
                                        <img src="images/iman_3.jpg" style="width: 70px; border-radius: 15px;object-fit: cover;" alt="">
                                        <div class="d-flex flex-column ml-3 text-dark">
                                            <h5>Hilman Agus</h5>
                                            <h5>13-08-2023 <span>04:55:40</span></h5>
                                            <h5>Dalam Kawasan</h5>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card mb-3 shadow text-white" style="border-radius: 15px; border: none; cursor:pointer;background: rgb(220, 220, 220);">
                        <div class="row g-0 ">
                            <div class="col-md-12 pull-up">
                                <div class="ml" style="border-radius: 15px;background: #FF0000;  ">
                                    <div class="card-body d-flex ms-3" style="background: #ffbdbd; border-end-end-radius: 15px;border-top-right-radius: 15px;" >
                                        <img src="images/iman_3.jpg" style="width: 70px; border-radius: 15px;object-fit: cover;" alt="">
                                        <div class="d-flex flex-column ml-3 text-dark">
                                            <h5>Hilman Agus</h5>
                                            <h5>13-08-2023 <span>04:55:40</span></h5>
                                            <h5>Dalam Kawasan</h5>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
