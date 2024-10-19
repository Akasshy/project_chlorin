<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
    .input-container {
            position: relative;
            width: 100%;
            /* max-width: 400px; */
            margin: auto;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            padding-right: 40px; /* Tambahkan ruang untuk ikon */
            font-size: 16px;
            box-sizing: border-box; /* Agar padding masuk dalam lebar total */
        }

        .input-icon {
            position: absolute;
            top: 70%;
            right: 10px; /* Jarak dari tepi kanan */
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 20px;
        }
    </style>
    <div class="container-fluid" style="width: 100vw; height: 100vh;">
        <div class="row" style="gap: 60px;">
            <div class="col-md-4 left-side d-flex flex-column align-items-center" style="background-color: #6DA5C0; height: 100vh;border-top-right-radius: 50px;border-end-end-radius: 50px;">
                <div class="left-side p-5 mt-5">
                    <h2 class="title fw-bold mb-5 text-white" style="width: 50px;">Praktik Kerja Lapangan</h2>
                    <div class="illustration">
                        <img src="img/logo.png" style="width: 250px;" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-5">
                <div class="form " style=" border: 2px solid #F0F0F0 ; border-bottom: 4px solid #F0F0F0; border-radius: 50px; border-top: none; ">
                    <form class="p-5" method="POST" action="/auth">
                        @csrf
                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                            <h2 class=" me-3 fw-bold mb-3">Login</h2>
                        </div>
                        <!-- {{-- <div data-mdb-input-init class="form-outline mb-3 mt-3">
                            <label class="form-label fw-bold ms-3" for="form3Example1">Username</label>
                            <input type="text" id="form3Example1" style="background-color: #F0F0F0; border-radius: 20px;" class="form-control form-control-lg"
                                placeholder="example" />
                        </div> --}} -->
                        <div data-mdb-input-init class="form-outline mb-3 mt-3">
                            <label class="form-label fw-bold ms-3" for="form3Example2">Email</label>
                            <input type="email" id="form3Example2" style="background-color: #F0F0F0; border-radius: 20px;" class="form-control form-control-lg"
                                placeholder="example@gmail.com" name="email" required value="{{ old('email') }}">
                        </div>
                        <div data-mdb-input-init class="form-outline mb-3 mt-3">
                            <!-- {{-- <div class="input-group-append">
                                <i class="fas fa-eye" id="toggle-icon" onclick="togglePasswordVisibility()"></i>
                            </div> --}} -->
                            <div class="input-container">
                                <label class="form-label fw-bold ms-3" for="password">Password</label>
                                <input type="password" id="password" style="background-color: #F0F0F0; border-radius: 20px;" class="form-control form-control-lg"
                                    placeholder="admin#123" name="password" required value="{{ old('password') }}">
                                <i class="fas fa-eye input-icon" id="toggle-icon" onclick="togglePasswordVisibility()"></i>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input me-3" style="border-radius: 8px; width: 25px; height: 20px; " type="checkbox" value="" id="form2Example3" />
                                <label class="form-check-label" for="form2Example3">
                                    Ingat saya
                                </label>
                            </div>
                            <a href="#!" class="" style="text-decoration: none; color:#470B77;">Lupa password?</a>
                        </div>

                        <div class="text-center text-lg-start mt-4 " style="padding-top: 100px;">
                            <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                class="btn btn-lg w-100  text-center fw-bold"
                                style="padding-left: 2.5rem; padding-right: 2.5rem; border-radius: 30px; background-color: #294D61; color: white;">Login</button>
                            <!-- <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="register.html"
                                    class="link-danger">Register</a></p> -->
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
     function togglePasswordVisibility() {
        var passwordField = document.getElementById('password');
        var toggleIcon = document.getElementById('toggle-icon');

        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            toggleIcon.classList.remove('fa-eye');
            toggleIcon.classList.add('fa-eye-slash');
        } else {
            passwordField.type = 'password';
            toggleIcon.classList.remove('fa-eye-slash');
            toggleIcon.classList.add('fa-eye');
        }
    }
    </script>
</body>
</html>
