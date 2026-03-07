<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="FleetControl Terms and Conditions">
    <meta name="author" content="Paul M. Summitt">
    <title>FleetControl Terms and Conditions</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/styles.css">
    <script async src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
    <script async src="public/js/index.js"></script>
    <script async src="public/js/reloading.js"></script>
    <script async src="public/js/wheelcontroll.js"></script>
    
    <script>
        function handleAcceptance() {
            const checkbox = document.getElementById('acceptCheckbox');
            if (checkbox.checked) {
                window.location.href = 'public/index.php';
            } else {
                alert('Please accept the terms and conditions to continue.');
            }
        }

        function goBackToIndex() {
            window.location.href = 'index.php';
        }
    </script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-dark navbar-expand-sm ">
            <div class="container-fluid">
                <a class="navbar-brand link-light" href="index.php">
                    <h1><strong>FleetControl</strong></h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li>
                            <a class="nav-item nav-link active link-light" href="index.php">HOME</a>
                        </li>
                        <li>
                            <a class="nav-item nav-link link-light" aria-current="page" href="about.php">ABOUT</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item text-light"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active text-light" aria-current="page">Terms</li>
                    </ol>
                </div>
            </div>
        </nav>
    </header>
    <main>

        <div class="container-fluid">
            <h1 class="slidetext display-1 text-bg-dark p-3">Terms and Conditions</h1>
            <div class="row">
                <div class="col">
                    <div class="card text-bg-dark p-3">
                        <center>
                            <img src="public/img/Truck_368x368.jpg" class="img-thumbnail" alt="image of a semi-truck"
                                width="300px" height="300px">
                        </center>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h2>Terms of Service</h2>
                            <p>Welcome to FleetControl. By accessing or using our fleet management software, you agree to comply with and be bound by the following terms and conditions of use. If you do not agree to these terms, please do not use this service.</p>
                            <h3>Acceptance of Terms</h3>
                            <p>By using FleetControl, you acknowledge that you have read, understood, and agree to be bound by these terms. These terms apply to all users of the service.</p>
                            <h3>Use of Service</h3>
                            <p>FleetControl is provided for managing fleet operations. You agree to use the service only for lawful purposes and in accordance with these terms.</p>
                            <h3>User Responsibilities</h3>
                            <p>You are responsible for maintaining the confidentiality of your account and password. You agree to notify us immediately of any unauthorized use of your account.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h2>Conditions</h2>
                            <p>FleetControl reserves the right to modify or discontinue the service at any time without notice. We are not liable for any damages arising from the use or inability to use the service.</p>
                            <h3>Limitation of Liability</h3>
                            <p>In no event shall FleetControl be liable for any indirect, incidental, special, or consequential damages arising out of or in connection with the use of the service.</p>
                            <h3>Governing Law</h3>
                            <p>These terms shall be governed by and construed in accordance with the laws of the jurisdiction in which FleetControl operates.</p>
                            <h3>Changes to Terms</h3>
                            <p>We reserve the right to update these terms at any time. Continued use of the service after changes constitutes acceptance of the new terms.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h2>Privacy Statement</h2>
                            <p>FleetControl is committed to protecting your privacy. This privacy statement explains how we collect, use, and safeguard your information.</p>
                            <h3>Information We Collect</h3>
                            <p>We may collect personal information such as your name, email address, and fleet data when you register or use our service.</p>
                            <h3>How We Use Information</h3>
                            <p>Your information is used to provide and improve our services, communicate with you, and comply with legal obligations.</p>
                            <h3>Data Security</h3>
                            <p>We implement appropriate security measures to protect your data against unauthorized access, alteration, or disclosure.</p>
                            <h3>Third-Party Sharing</h3>
                            <p>We do not sell or rent your personal information to third parties. We may share information only as required by law or with your consent.</p>
                            <h3>Contact Us</h3>
                            <p>If you have questions about this privacy statement, please contact us at paulmsummitt@gmail.com.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <form id="acceptForm" method="POST">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="acceptCheckbox" name="accept" value="yes">
                                    <label class="form-check-label" for="acceptCheckbox">
                                        Show that you accept these conditions by checking the box.
                                    </label>
                                </div>
                                <div class="mt-3">
                                    <button type="button" class="btn btn-primary" onclick="handleAcceptance()">Submit</button>
                                    <button type="button" class="btn btn-secondary" onclick="goBackToIndex()">Decline</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
    </main>

    <footer class="bg-dark link-light">
        <div class="container">
            <div>
                <!-- Social media and contact links. Add or remove any networks. -->
                <ul class="list-group list-group-flush">
                    <li class="list-group list-group-flush"><a href="mailto:paulmsummitt@gmail.com"><img
                                src="img/509-5096820_mail-png-circle-svg-icon-free-download-email-1369349225.png style="
                                color: white" title="email" width="20px" height="20px"> paulmsummitt@gmail.com</a></li>
                    <li class="list-group list-group-flush"><a href="https://www.linkedin.com/in/paul-m-summitt/"
                            target="_blank" rel="noopener">
                            <img src="img/OIP-2203254293.jpg" style="color: white" title="LinkedIn" width="20px"
                                height="20px"> LinkedIn</a></li>
                </ul>
            </div>
            <p id="textbottom">&copy; <?php echo date('Y'); ?> Paul M. Summitt</p>
        </div>
    </footer>
</body>

</html>