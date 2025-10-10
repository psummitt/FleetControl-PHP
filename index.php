<?php
// We need to use sessions, so you should always initialize sessions using the below function
session_start();
// If the user is logged in, redirect to the home or index page
if (isset($_SESSION['account_loggedin'])) {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="FleetControl">
    <meta property="og:type" content="website">
    <meta name="author" content="Paul M. Summitt">
    <title>FleetControl</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="/public/css/styles.css">
    <script async src="/public/js/index.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script async src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script async src="/public/js/reloading.js "></script>
    <script async src="/public/js/wheelcontroll.js "></script></head>
<body>

    <nav class="navbar navbar-expand-lg bg-dark navbar-expand-sm ">
        <div class="container-fluid">
            <a class="navbar-brand link-light" href="index.php">
                <h1><strong>FleetControl</strong></h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li>
                        <a class="nav-item nav-link active link-light" aria-current="page" href="index.html">HOME</a>
                    </li>
                    <li>
                        <a class="nav-item nav-link link-light" href="about.html">ABOUT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<article>

    <div class="container-fluid">
        <h1 class="slidetext display-1 text-bg-dark p-3">Welcome to FleetControl</h1>
        <div class="row">
            <div class="col">
                <div class="card text-bg-dark p-3">
                    <img src="public/img/Truck_368x368.jpg" class="img-thumbnail" alt="image of a truck">
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <p>Please log in to view or add information about your vehicles.</p>
                    <form action="/FleetControl/_private/authenticate.php" method="post" class="form login-form">
                        <label class="form-label" for="username">Username</label>
                        <div class="form-group">
                            <svg class="form-icon-left" width="14" height="14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                            <input class="form-input" type="text" name="username" placeholder="Username" id="username" required>
                        </div>

                        <label class="form-label" for="password">Password</label>
                        <div class="form-group mar-bot-5">
                            <svg class="form-icon-left" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"/></svg>
                            <input class="form-input" type="password" name="password" placeholder="Password" id="password" required>
                        </div>

                    <button class="btn blue" type="submit">Login</button>
                    
                    <p class="register-link">Don't have an account? <a href="register.php" class="form-link">Register</a></p>

                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</article>
<footer class="bg-dark link-light mar-left-5" >
    <div>
        <!-- Social media and contact links. Add or remove any networks. -->
        <ul>
            <li><a href="mailto:paulmsummitt@gmail.com"><img src="https://res.cloudinary.com/dhfzm8v7y/image/upload/v1656777427/images/opened-email-envelope_icon-icons.com_70656_gx2u5j.png" style="color: white" title="e-mail" width="20px" height="20px">paulmsummitt@gmail.com</a></li>
            <li><a href="https://www.linkedin.com/in/paul-m-summitt/" target="_blank" rel="noopener">
                    <img src="https://res.cloudinary.com/dhfzm8v7y/image/upload/v1656777431/images/LinkedIn_Rounded_icon-icons.com_61573_fhhjjs.png" style="color: white" title="LinkedIn"  width="20px" height="20px">LinkedIn</a></li>
        </ul>
    </div>
    <p id="textbottom">&copy; <?php echo date('Y'); ?> Paul M. Summitt</p>
    </div>
</footer>
</body>
</html>