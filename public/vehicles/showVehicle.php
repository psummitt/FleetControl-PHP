<?php require_once('../../_private/initialize.php'); ?>

<?php
// Get requested ID
$id = $_GET['id'] ?? '1';

// Find the vehicle using the ID
$vehicle = find_vehicle_by_id($id);

if (!$vehicle) {
    redirect_to(url_for('/vehicles/vehicle.php'));
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
    <title>FleetControl View Vehicle</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="/public/css/styles.css">
    <script async src="/public/js/index.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script async src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script async src="/public/js/reloading.js"></script>
    <script async src="/public/js/wheelcontroll.js"></script>
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
                        <a class="nav-item nav-link active link-light" aria-current="page" href="vehicle.php">HOME</a>
                    </li>
                    <li>
                        <a class="nav-item nav-link link-light" href="about.html"></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

  <main>

    <div class="container mt-3">
      <h1 class="slidetext display-1 text-bg-dark p-3">View Vehicle</h1>
              <div class="row">
                <div class="col">
                    <div class="card text-bg-dark p-3">
                        <center>
                            <img src="../img/Truck_368x368.jpg" class="img-thumbnail" alt="image of a semi-truck" width="300px" height="300px">
                        </center>
                    </div>
                </div>
            <div class="col">
                <div class="card text-bg-dark p-3">
                    <div class="card-body">
                        <h5 class="card-title">Vehicle Details</h5>
                        <dl class="row">
                            <dt class="col-sm-4">Year:</dt>
                            <dd class="col-sm-8"><?php echo h($vehicle['vehicle_year']); ?></dd>

                            <dt class="col-sm-4">Make:</dt>
                            <dd class="col-sm-8"><?php echo h($vehicle['vehicle_make']); ?></dd>

                            <dt class="col-sm-4">Model:</dt>
                            <dd class="col-sm-8"><?php echo h($vehicle['vehicle_model']); ?></dd>

                            <dt class="col-sm-4">Identifier:</dt>
                            <dd class="col-sm-8"><?php echo h($vehicle['vehicle_identifier']); ?></dd>

                            <dt class="col-sm-4">License State:</dt>
                            <dd class="col-sm-8"><?php echo h($vehicle['license_state']); ?></dd>

                            <dt class="col-sm-4">License Number:</dt>
                            <dd class="col-sm-8"><?php echo h($vehicle['license_number']); ?></dd>

                            <dt class="col-sm-4">Color:</dt>
                            <dd class="col-sm-8"><?php echo h($vehicle['color']); ?></dd>

                            <dt class="col-sm-4">Odometer:</dt>
                            <dd class="col-sm-8"><?php echo h($vehicle['odometer']); ?></dd>

                            <dt class="col-sm-4">Purchase Date:</dt>
                            <dd class="col-sm-8"><?php echo h($vehicle['purchase_date']); ?></dd>

                            <dt class="col-sm-4">Purchase Price:</dt>
                            <dd class="col-sm-8"><?php echo h($vehicle['purchase_price']); ?></dd>

                            <dt class="col-sm-4">Notes:</dt>
                            <dd class="col-sm-8"><?php echo h($vehicle['notes']); ?></dd>
                        </dl>
                        <div class="mt-3">
                            <a href="<?php echo url_for('/vehicles/vehicle.php'); ?>" class="btn btn-secondary">&laquo; Back to Vehicles</a>
                            <a href="<?php echo url_for('/vehicles/editVehicle.php?id=' . h(u($vehicle['id']))); ?>" class="btn btn-primary">Edit Vehicle</a>
                        </div>
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
                <li class="list-group list-group-flush"><a href="mailto:paulmsummitt@gmail.com"><img src="../img/509-5096820_mail-png-circle-svg-icon-free-download-email-1369349225.png style="color: white" title="email"  width="20px" height="20px"> paulmsummitt@gmail.com</a></li>
                <li class="list-group list-group-flush"><a href="https://www.linkedin.com/in/paul-m-summitt/" target="_blank" rel="noopener">
                        <img src="../img/OIP-2203254293.jpg" style="color: white" title="LinkedIn"  width="20px" height="20px"> LinkedIn</a></li>
            </ul>
        </div>
        <p id="textbottom">&copy; <?php echo date('Y'); ?> Paul M. Summitt</p>
    </div>    
  </footer>

</body>
</html>
