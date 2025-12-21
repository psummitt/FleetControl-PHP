<?php
require_once('../../_private/initialize.php');

$errors = [];
$vehicle = [];

if (is_post_request()) {
  // collect form values
  $vehicle['yrVehicleYear'] = $_POST['yrVehicleYear'] ?? '';
  $vehicle['txtVehicleMake'] = $_POST['txtVehicleMake'] ?? '';
  $vehicle['txtVehicleModel'] = $_POST['txtVehicleModel'] ?? '';
  $vehicle['txtVehicleIdentifier'] = $_POST['txtVehicleIdentifier'] ?? '';
  $vehicle['intLicenseState'] = $_POST['intLicenseState'] ?? '';
  $vehicle['txtLicenseNumber'] = $_POST['txtLicenseNumber'] ?? '';
  $vehicle['txtColor'] = $_POST['txtColor'] ?? '';
  $vehicle['intOdometer'] = $_POST['intOdometer'] ?? '';
  $vehicle['txtKeyIgnition'] = $_POST['txtKeyIgnition'] ?? '';
  $vehicle['txtKeyDoor'] = $_POST['txtKeyDoor'] ?? '';
  $vehicle['dPurchaseDate'] = $_POST['dPurchaseDate'] ?? '';
  $vehicle['curPurchasePrice'] = $_POST['curPurchasePrice'] ?? '';
  $vehicle['txtNotes'] = $_POST['txtNotes'] ?? '';

  $result = insert_vehicle($vehicle);
  if ($result === true) {
    $new_id = mysqli_insert_id($db);
    $_SESSION['message'] = "Vehicle created successfully";
    redirect_to(url_for('/vehicles/showVehicle.php?id=' . $new_id));
  } else {
    $errors = $result;
  }
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
    <title>FleetControl Add Vehicle</title>
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
      <h1 class="slidetext display-1 text-bg-dark p-3">Add Vehicle</h1>        <div class="row">
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
                        <h5 class="card=title">Use the form below to add a new vehicle to your fleet</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
      <hr class="text-light">
      <br>
      <?php if (!empty($errors)) { echo display_errors($errors); } ?>
      <div class="container">
        <form class="needs-validation" novalidate action="<?php echo url_for('addvehicle.php'); ?>" method="post">
          <div class="mb-3">
            <label class="form-label text-light h4">Year</label>
            <input id="yrVehicleYear" class="form-input" type="text" name="yrVehicleYear" placeholder="Year of Vehicle" Title="Enter the year of the Vehicle" required="" value="<?php echo h($vehicle['yrVehicleYear'] ?? ''); ?>" />
          </div>
          <div class="mb-3">
            <label class="form-label text-light h4">Make</label>
            <input id="txtVehicleMake" class="form-input" type="text" name="txtVehicleMake" placeholder="Make of Vehicle" Title="Enter the make of the Vehicle" required="" value="<?php echo h($vehicle['txtVehicleMake'] ?? ''); ?>" />
          </div>
          <div class="mb-3">
            <label class="form-label text-light h4">Model</label>
            <input id="txtVehicleModel" class="form-input" type="text" name="txtVehicleModel" placeholder="Model of Vehicle" Title="Enter the model of the Vehicle" required="" value="<?php echo h($vehicle['txtVehicleModel'] ?? ''); ?>" />
          </div>
          <div class="mb-3">
            <label class="form-label text-light h4">Identifier (VIN/Plate)</label>
            <input id="txtVehicleIdentifier" class="form-input" type="text" name="txtVehicleIdentifier" placeholder="VIN or License Plate Number" Title="Enter the VIN or License Plate Number of the Vehicle" required="" value="<?php echo h($vehicle['txtVehicleIdentifier'] ?? ''); ?>" />
          </div>
          <div class="mb-3">
            <label class="form-label text-light h4">License State</label>
            <input id="txtLicenseState" class="form-input" type="text" name="txtLicenseState" placeholder="License State" Title="Enter the license state of the Vehicle" required="" value="<?php echo h($vehicle['txtLicenseState'] ?? ''); ?>" />
          </div>
          <div class="mb-3">
            <label class="form-label text-light h4">License Number</label>
            <input id="txtLicenseNumber" class="form-input" type="text" name="txtLicenseNumber" placeholder="License Number" Title="Enter the license number of the Vehicle" required="" value="<?php echo h($vehicle['txtLicenseNumber'] ?? ''); ?>" />
          </div>
          <div class="mb-3">
            <label class="form-label text-light h4">Color</label>
            <input id="txtColor" class="form-input" type="text" name="txtColor" placeholder="Color of Vehicle" Title="Enter the color of the Vehicle" required="" value="<?php echo h($vehicle['txtColor'] ?? ''); ?>" />
          </div>
          <div class="mb-3">
            <label class="form-label text-light h4">Odometer</label>
            <input id="intOdometer" class="form-input" type="text" name="intOdometer" placeholder="Odometer Reading" Title="Enter the odometer reading of the Vehicle" required="" value="<?php echo h($vehicle['intOdometer'] ?? ''); ?>" />
          </div>
          <div class="mb-3">
            <label class="form-label text-light h4">Ignition Key</label>
            <input id="txtKeyIgnition" class="form-input" type="text" name="txtKeyIgnition" placeholder="Ignition Key" Title="Enter the ignition key of the Vehicle" required="" value="<?php echo h($vehicle['txtKeyIgnition'] ?? ''); ?>" />
          </div>
          <div class="mb-3">
            <label class="form-label text-light h4">Door Key</label>
            <input id="txtKeyDoor" class="form-input" type="text" name="txtKeyDoor" placeholder="Door Key" Title="Enter the door key of the Vehicle" required="" value="<?php echo h($vehicle['txtKeyDoor'] ?? ''); ?>" />
          </div>
          <div class="mb-3">
            <label class="form-label text-light h4">Purchase Date</label>
            <input id="dPurchaseDate" class="form-input" type="date" name="dPurchaseDate" value="<?php echo h($vehicle['dPurchaseDate'] ?? ''); ?>" />
          </div>
          <div class="mb-3">
            <label class="form-label text-light h4">Purchase Price</label>
            <input id="curPurchasePrice" class="form-input" type="text" name="curPurchasePrice" placeholder="Purchase Price" Title="Enter the purchase price of the Vehicle" required="" value="<?php echo h($vehicle['curPurchasePrice'] ?? ''); ?>" />
          </div>
          <div class="mb-3">
            <label class="form-label text-light h4">Notes</label>
            <textarea id="txtNotes" class="form-input" type="text" name="txtNotes" placeholder="Notes about the Vehicle" Title="Enter any notes about the Vehicle" required="" rows="4"><?php echo h($vehicle['txtNotes'] ?? ''); ?></textarea>
          </div>

          <div>
            <button class="btn btn-primary" type="submit">Submit</button>
            <a class="btn btn-secondary" href="<?php echo url_for('/vehicles/vehicle.php'); ?>">Cancel</a>
          </div>
        </form>
        <hr class="text-light">
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
