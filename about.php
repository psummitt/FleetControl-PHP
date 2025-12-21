<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="FleetControl">
    <meta property="og:type" content="website">
    <meta name="author" content="Paul M. Summitt">
    <title>FleetControl About Page</title>
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
                        <li class="breadcrumb-item active text-light" aria-current="page">About</li>
                    </ol>
                </div>
            </div>
        </nav>
    </header>
    <main>

        <div class="container-fluid">
            <h1 class="slidetext display-1 text-bg-dark p-3">About FleetControl</h1>
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
                            <p class="::first-letter">
                                FleetControl is a fleet management software designed to help trucking
                                companies optimize their operations, improve efficiency, and enhance overall
                                productivity. With FleetControl, fleet managers can easily track and monitor their
                                vehicles, drivers, and routes in real-time.
                            </p>
                            <p>
                                FleetControl offers a range of features, including GPS tracking, route optimization,
                                maintenance scheduling, fuel management, and driver performance monitoring. The software
                                provides detailed analytics and reporting tools that allow fleet managers to make
                                data-driven decisions and identify areas for improvement.</p>
                            <p>
                                Whether you're managing a small fleet or a large one, FleetControl is designed to meet
                                the needs of any size fleet.</p>
                            <p>
                                With its user-friendly interface and powerful features, FleetControl is the ultimate
                                solution for fleet management.</p>
                            <p>
                                FleetControl began as a tool to manage a television station's production and news
                                department vehicles. It began as a Microsoft Access Application. Another television
                                station requested that it be available on the Web. >
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