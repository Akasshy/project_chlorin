<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show/Hide Password</title>
    <!-- Link ke Font Awesome untuk icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .input-group {
            position: relative;
            width: 100%;
            max-width: 400px;
            margin: auto;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            font-size: 16px;
        }

        .input-group-append {
            position: absolute;
            top: 0;
            right: 0;
            height: 100%;
            display: flex;
            align-items: center;
            padding-right: 10px;
            cursor: pointer;
        }

        .input-group-append i {
            font-size: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Toggle Password Visibility</h2>
    <div class="input-group">
        <input id="password" type="password" class="form-control" placeholder="Enter your password">
        <div class="input-group-append">
            <i class="fas fa-eye" id="toggle-icon" onclick="togglePasswordVisibility()"></i>
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
