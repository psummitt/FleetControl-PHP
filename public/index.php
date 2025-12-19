<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="FleetControl">
    <meta property="og:type" content="website">
    <meta name="author" content="Paul M. Summitt">
    <title>FleetControl Options</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="/public/css/styles.css">
    <script async src="/public/js/index.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script async src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script async src="/public/js/reloading.js "></script>
    <script async src="/public/js/wheelcontroll.js "></script>
</head>

<body class="bg-dark">

    <nav class="navbar navbar-expand-lg bg-dark navbar-expand-sm ">
        <div class="container-fluid">
            <a class="navbar-brand link-light" href="../index.php">
                <h1><strong>FleetControl</strong></h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li>
                        <a class="nav-item nav-link link-light" href="index.php">HOME</a>
                    </li>
                    <li>
                        <a class="nav-item nav-link link-light" href="about.php"></a>
                    </li>
                </ul>
            </div>
                            <!-- breadcrumb navigation -->
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active text-light"><a href="../index.php">Home</a></li>
                        <li class="breadcrumb-item active text-light" aria-current="page">Options</li>
                    </ol>
                </div>
        </div>
    </nav>

    <main>

        <div class="container-fluidtext-bg-dark p-3">
            <h1 class="slidetext display-1 text-bg-dark p-3">Welcome to FleetControl</h1>
            <div class="row">
                <div class="col">
                    <div class="card text-bg-dark p-3">
                        <center>
                            <img src="img/Truck_368x368.jpg" class="img-thumbnail" alt="image of a semi-truck" width="300px" height="300px">
                        </center>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-bg-dark p-3">
                        <div class="card-body">
                            <h5 class="card=title">FleetControl Options</h5>
                            <ul>
                                <li><a href="vehicles/vehicle.php" data-toggle="tooltip" title="Vehicles page: Add, edit, or delete vehicles."><button type="button" class="btn btn-primary">Vehicles</button></a></li>
                                <li><a href="repaircenters/services.php" data-toggle="Services" title="Services page: Add service such as fuel, oil, rotation of tires to vehicle's records."><button type="button" class="btn btn-primary">Services</button></a></li>
                                <li><a href="repaircenters/repairs.php" data-toggle="Repairs" title="Repairs page: Enter repairs such as part replacement or damage repair to vehicle's records."><button type="button" class="btn btn-primary">Repairs</button></a></li>
                                <li><a href="repaircenters/servicecenters.php" data-toggle="Service Centers" title="Service Centers page: Add, edit, or delete service centers."><button type="button" class="btn btn-primary">ServiceCenters</button></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer class="bg-dark link-light" >
        <div class="container">
            <div>
            <!-- Social media and contact links. Add or remove any networks. -->
                <ul class="list-group list-group-flush">
                    <li class="list-group list-group-flush"><a href="mailto:paulmsummitt@gmail.com"><img src="img/509-5096820_mail-png-circle-svg-icon-free-download-email-1369349225.png style="color: white" title="email"  width="20px" height="20px"> paulmsummitt@gmail.com</a></li>
                    <li class="list-group list-group-flush"><a href="https://www.linkedin.com/in/paul-m-summitt/" target="_blank" rel="noopener">
                            <img src="img/OIP-2203254293.jpg" style="color: white" title="LinkedIn"  width="20px" height="20px"> LinkedIn</a></li>
                </ul>
            </div>
            <p id="textbottom">&copy; <?php echo date('Y'); ?> Paul M. Summitt</p>
        </div>
    </footer>
</body>

</html>
