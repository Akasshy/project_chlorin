<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-solid-straight/css/uicons-solid-straight.css'> 
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
<style>
    body{
        scroll-behavior: smooth;
        margin: auto 0px;
    }
    .up{
        background-image:url(img/fbg.PNG) ;
        background-size: cover;
        padding-bottom: 48%;
        
    }
    .sigin{
        background-color:#082D33;
       color: white;
    }
    .sigin:hover{
        background-color: white;
        color: #082D33;
        cursor: pointer;
    }
    a.nav-link:hover{
        border-bottom: 2px solid black;
        cursor: pointer;
        margin-top: -4px;
        animation: infinite;
    }
    img#otomotip{
        filter: grayscale(100%);
    }
    img#otomotip2{
        filter: grayscale(100%);
    }
    img#otomotip:hover{
        cursor: pointer;
        filter: none;
        width: 210px;
        animation: reverse;
    }
    img#otomotip2:hover{
        cursor: pointer;
        filter: none;
        width: 230px;
        animation: reverse;
    }
    .scroll-container {
      white-space: nowrap;         
      overflow-x: auto;            
      padding: 10px;
    }
    /* Set item untuk tampil inline */
    .scroll-item {
      display: inline-block;     
      width: 200px;                
      height: 150px;               
      margin-right: 10px;         
      /* background-color: #f8f9fa;   */
      text-align: center;
      /* line-height: 150px;          */
      /* border-radius: 8px; */
      /* border: 1px solid #ddd;      */
    }
    .scroll-container::-webkit-scrollbar {
      height: 8px;                 /* Tinggi scrollbar horizontal */
      background-color: transparent;  /* Buat transparan saat tidak di-hover */
    }

    /* Ubah warna scrollbar track saat di-hover */
    .scroll-container:hover::-webkit-scrollbar {
      background-color: #ddd;      /* Track scrollbar saat di-hover */
    }

    /* Warna dan gaya dari thumb scrollbar */
    .scroll-container::-webkit-scrollbar-thumb {
      background-color: transparent; /* Buat transparan saat tidak di-hover */
    }

    /* Thumb scrollbar saat di-hover */
    .scroll-container:hover::-webkit-scrollbar-thumb {
      background-color: #888;      /* Warna thumb scrollbar saat di-hover */
      border-radius: 4px;
    }

        .contact-form {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .newsletter-box {
            background-color: #e9ecef;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .newsletter-box h4 {
            margin-bottom: 15px;
            font-size: 24px;
            color: #343a40;
        }
        .footer-contact {
            background-color: #0d6efd;
            color: white;
            padding: 20px;
            border-radius: 10px;
        }
</style>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <div class="up container-fluid" id="up" >
        <nav class="navbar navbar-expand-lg ms-5 me-5 " style="background-color: #ffffff71; border-radius: 40px; top: 20px; position: fixed; width: 90%; z-index: 10;">
            <div class="container">
              <a class="navbar-brand fw-bold fs-4 ms-4 text-body" href="#up">PKLzone</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-lg-0 fw-bold ms-5" style="gap: 20px;">
                    <li class="nav-item" style="margin-left: 10rem; ">
                        <a class="nav-link active text-body"  aria-current="page" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-body" aria-current="page" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-body" aria-current="page" href="#vacancy">Vacancy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-body" aria-current="page" href="#company">Company</a>
                    </li>
                    <li class="nav-item" style="margin-left: 14rem;">
                        <a class="sigin nav-link ps-5 pe-5"  style=" border-radius: 20px;" href="login.html"">Sig In</a>
                    </li>
                </ul>
              </div>
            </div>
          </nav>
          <div class="row">
            <div class="col-md-6 mt-3">
                <div class="lefet" style="position: absolute;">
                    <h2 class="fw-bold" style="margin: 200px 0px 0px 120px; color: #082D33; width: 340px;">Temukan Peluang PKL yang tepat untuk mu di Sini</h2>
                    <p style="width: 300px; margin: 12px 0px 0px 120px;">Membantu siswa untuk menemukan tempat<b> PKL </b>yang sesuai dengan jurusan dan keahlian.</p>
                    <a href="" class="btn text-white ps-3 pe-3 mt-2" style="background-color: #0E939A; border-radius: 20px; margin-left: 120px;">Temukan Sekarang!!</a>
                </div>
            </div>
            <div class="col-md-6">
                <img src="img/laptop.png" width="450px" style="position: absolute; z-index: 1; top: 160px; margin-left: 100px;" h alt="">
            </div>
          </div>
    </div>
    <div class="container pb-5" id="about">
        <div class="about pt-5">
            <h2 class="text-center fw-bold">About Us</h2>
            <p class="text-center mt-5">
                About Us Selamat datang di <b>PKLzone</b>, website yang diperuntukan bagi siswa menemukan tempat PKL yang sesuai dengan jurusan dan kemampuan yang dimiliki oleh siswa, serta membantu perusahaan dalam menemukan bakat - bakat baru yang siap berkontribusi.
            </p>
            <div class="row ms-5 ps-5 mt-5" style="gap: 40px;">
                <div class="col-md-5">
                    <img src="img/Frame 37.png" width="100%" alt="">
                </div>
                <div class="col-md-5">
                    <img src="img/Frame 36.png" width="100%" alt="">
                </div>
            </div>
            <div class="row mt-5" style="margin-left: 200px; gap: 20px;">
                <div class="col-md-2 ms-5" >
                    <h3 class="fw-bold">Our</h3>
                    <h3 class="fw-bold">Mission</h3>
                </div>
                <div class="col-md-6" style="margin-left: 150px;">
                    <div class="text d-flex">
                        <i class="fi fi-ss-check-circle fs-5 me-4"></i>
                        <p class="fw-bold">Mempermudah Akses</p>
                    </div>
                    <div class="text d-flex mt-2" >
                        <i class="fi fi-br-chart-simple fs-5 me-4"></i>
                        <p class="fw-bold">Meningkatkan Kualitas</p>
                    </div>
                    <div class="text d-flex mt-2" >
                        <i class="fi fi-br-career-growth fs-5 me-4"></i>
                        <p class="fw-bold">Mendukung Perkembangan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="vacancy">
        <div class="vacancy">
            <h2 class="text-center fw-bold">Vacancy</h2>
            <div class="row mt-5 ">
                <div class="col-md-3">
                    <img id="otomotip" src="img/otomotip.png" width="200px" alt="">
                </div>
                <div class="col-md-3">
                    <img id="otomotip2" src="img/otomotip.png" width="220px" alt="">
                </div>
                <div class="col-md-3">
                    <img id="otomotip" src="img/otomotip.png" width="200px" alt="">
                </div>
                <div class="col-md-3">
                    <img id="otomotip2" src="img/otomotip.png" width="220px" alt="">
                </div>
                <div class="col-md-3">
                    <img id="otomotip2" src="img/otomotip.png" width="220px" alt="">
                </div>
                <div class="col-md-3 mt-4">
                    <img id="otomotip" src="img/otomotip.png" width="200px" alt="">
                </div>
                <div class="col-md-3">
                    <img id="otomotip2" src="img/otomotip.png" width="220px" alt="">
                </div>
                <div class="col-md-3 mt-4">
                    <img id="otomotip" src="img/otomotip.png" width="200px" alt="">
                </div>
                <div class="col-md-3">
                    <img id="otomotip" src="img/otomotip.png" width="200px" alt="">
                </div>
                <div class="col-md-3 mt-4">
                    <img id="otomotip2" src="img/otomotip.png" width="220px" alt="">
                </div>
                <div class="col-md-3">
                    <img id="otomotip" src="img/otomotip.png" width="200px" alt="">
                </div>
                <div class="col-md-3 mt-4">
                    <img id="otomotip2" src="img/otomotip.png" width="220px" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container pt-5 pb-5" id="company">
        <div class="company pt-5">
            <h2 class="text-center fw-bold">Company</h2>
            <div class="scroll-container">
                <a class="text-body" href="https://chlorinedigitalmedia.com/">
                    <div class="scroll-item">
                        <img src="img/chlorin.png"  alt="">
                        <p class="mt-2 fw-bold" >Chlorine</p>
                    </div>
                </a>
                <a href="https://www.astra-honda.com/" class="text-body">
                    <div class="scroll-item">
                        <img src="img/honda.png"  alt="">
                        <p class="mt-2 fw-bold" >Honda</p>
                    </div>
                </a>
                <a class="text-body" href="https://chlorinedigitalmedia.com/">
                    <div class="scroll-item">
                        <img src="img/chlorin.png"  alt="">
                        <p class="mt-2 fw-bold" >Chlorine</p>
                    </div>
                </a>
                <a href="https://www.astra-honda.com/" class="text-body">
                    <div class="scroll-item">
                        <img src="img/honda.png"  alt="">
                        <p class="mt-2 fw-bold" >Honda</p>
                    </div>
                </a>
                <a class="text-body" href="https://chlorinedigitalmedia.com/">
                    <div class="scroll-item">
                        <img src="img/chlorin.png"  alt="">
                        <p class="mt-2 fw-bold" >Chlorine</p>
                    </div>
                </a>
                <a href="https://www.astra-honda.com/" class="text-body">
                    <div class="scroll-item">
                        <img src="img/honda.png"  alt="">
                        <p class="mt-2 fw-bold" >Honda</p>
                    </div>
                </a>
                <a class="text-body" href="https://chlorinedigitalmedia.com/">
                    <div class="scroll-item">
                        <img src="img/chlorin.png"  alt="">
                        <p class="mt-2 fw-bold" >Chlorine</p>
                    </div>
                </a>
                <a href="https://www.astra-honda.com/" class="text-body">
                    <div class="scroll-item">
                        <img src="img/honda.png"  alt="">
                        <p class="mt-2 fw-bold" >Honda</p>
                    </div>
                </a>
                <a class="text-body" href="https://chlorinedigitalmedia.com/">
                    <div class="scroll-item">
                        <img src="img/chlorin.png"  alt="">
                        <p class="mt-2 fw-bold" >Chlorine</p>
                    </div>
                </a>
                <a href="https://www.astra-honda.com/" class="text-body">
                    <div class="scroll-item">
                        <img src="img/honda.png"  alt="">
                        <p class="mt-2 fw-bold" >Honda</p>
                    </div>
                </a>
              </div>  
            </div>
        </div>
    </div>
    <div class="container-fluid pb-5" id="contact">
        <div class="contact">
            <div class="text pt-5 pb-5" style="background-color: #6799B4;">
                <p class="fw-bold fs-1 text-white" style="position: absolute; margin: -60px 0px 0px 100px;">< ></p>
                <p class="fw-bold fs-1 text-white" style="position: absolute; margin: 20px 0px 0px 900px;">< ></p>
                <p class="fw-bold fs-1 text-white" style="position: absolute; margin: -80px 0px 0px 700px;">< ></p>
                <p class="fw-bold fs-1 text-white" style="position: absolute; margin: 60px 0px 0px 500px;">< ></p>
                <p class="fw-bold fs-1 text-white" style="position: absolute; margin: -50px 0px 0px 1200px;">< ></p>
                <p class="fw-bold fs-1 text-white" style="position: absolute; margin: 0px 0px 0px 200px;">< ></p>
                <h2 class="text-center fw-bold text-white">Contact Us</h2>
            </div>
            <div class="container py-5">
                <div class="row g-4">
                    <div class="col-lg-8">
                        <div class="contact-form p-4">
                            <form>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="email" style="background-color: #ddd; border-radius: 40px;" class="form-control border-0 p-3" name="" placeholder="email" id="">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" style="background-color: #ddd; border-radius: 40px;" class="form-control border-0 p-3" name="" placeholder="No Handphone" id="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-4">
                                        <input type="text" style="background-color: #ddd; border-radius: 40px;" class="form-control border-0 p-3" name="" placeholder="Name" id="">
                                    </div>
                                    <div class="col-md-12 mt-4">
                                        <textarea name="" id="" rows="5" style="background-color: #ddd; border-radius: 40px;" class="form-control border-0 p-3 " placeholder="Mesage"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-dark w-25 mt-5" style="border-radius: 40px; background-color: #082D33;">Send</button>
                            </form>
                        </div>
                    </div>
        
                    <div class="col-lg-4">
                        <div class="newsletter-box" >
                            <h4>Our Newsletters</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget risus vitae erat.</p>
                            <form>
                                <div class="mb-3">
                                    <input type="email" style="background-color: #ddd; border-radius: 40px;" class="form-control border-0 p-3" id="newsletter-email" placeholder="Email">
                                </div>
                                <button type="submit" class="btn btn-dark w-100" style="border-radius: 40px; background-color: #082D33;">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
        
                <div class="row g-4 mt-4">
                    <div class="col-md-6">
                        <div class="footer-contact text-start" style="background-color: #0C8C91;">
                            <div class="upp d-flex">
                                <i class="fi fi-ss-clipboard-user fs-2" style="margin-top: -10px;"></i>
                                <p class="ms-3"><strong>+62 8765432198</strong></p>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget risus vitae erat.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-contact text-start" style="background-color: #0C8C91;">
                            <div class="upp d-flex">
                                <i class="fi fi-ss-clipboard-user fs-2" style="margin-top: -10px;"></i>
                                <p class="ms-3"><strong>octagram@gmail.com</strong></p>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget risus vitae erat.</p>
                        </div>
                    </div>
                    <!-- <div class="col-md-6">
                        <div class="footer-contact text-start" style="background-color: #0C8C91;">
                            <p><strong> <i class="fi fi-sr-envelope"></i> octagram@gmail.com</strong></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget risus vitae erat.</p>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</body>
</html>