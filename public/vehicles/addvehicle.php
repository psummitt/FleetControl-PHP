<?php
// Corrected Add Vehicle page
// - fixed include path to initialize.php
// - removed duplicated/garbled content
// - simple POST handler that stores a session message and redirects

require_once('../../_private/initialize.php');

require_login();

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

$page_title = 'Add Vehicle';
include(SHARED_PATH . '/header.php');
?>

<div class="container mt-3">
  <h1>Add Vehicle</h1>

  <?php if (!empty($errors)) { echo display_errors($errors); } ?>

  <form action="<?php echo url_for('/vehicles/addvehicle.php'); ?>" method="post">
    <div class="mb-3">
      <label class="form-label">Year</label>
      <input class="form-control" type="text" name="yrVehicleYear" value="<?php echo h($vehicle['yrVehicleYear'] ?? ''); ?>" />
    </div>
    <div class="mb-3">
      <label class="form-label">Make</label>
      <input class="form-control" type="text" name="txtVehicleMake" value="<?php echo h($vehicle['txtVehicleMake'] ?? ''); ?>" />
    </div>
    <div class="mb-3">
      <label class="form-label">Model</label>
      <input class="form-control" type="text" name="txtVehicleModel" value="<?php echo h($vehicle['txtVehicleModel'] ?? ''); ?>" />
    </div>
    <div class="mb-3">
      <label class="form-label">Identifier (VIN/Plate)</label>
      <input class="form-control" type="text" name="txtVehicleIdentifier" value="<?php echo h($vehicle['txtVehicleIdentifier'] ?? ''); ?>" />
    </div>
    <div class="mb-3">
      <label class="form-label">License State</label>
      <input class="form-control" type="text" name="intLicenseState" value="<?php echo h($vehicle['intLicenseState'] ?? ''); ?>" />
    </div>
    <div class="mb-3">
      <label class="form-label">License Number</label>
      <input class="form-control" type="text" name="txtLicenseNumber" value="<?php echo h($vehicle['txtLicenseNumber'] ?? ''); ?>" />
    </div>
    <div class="mb-3">
      <label class="form-label">Color</label>
      <input class="form-control" type="text" name="txtColor" value="<?php echo h($vehicle['txtColor'] ?? ''); ?>" />
    </div>
    <div class="mb-3">
      <label class="form-label">Odometer</label>
      <input class="form-control" type="number" name="intOdometer" value="<?php echo h($vehicle['intOdometer'] ?? ''); ?>" />
    </div>
    <div class="mb-3">
      <label class="form-label">Ignition Key</label>
      <input class="form-control" type="text" name="txtKeyIgnition" value="<?php echo h($vehicle['txtKeyIgnition'] ?? ''); ?>" />
    </div>
    <div class="mb-3">
      <label class="form-label">Door Key</label>
      <input class="form-control" type="text" name="txtKeyDoor" value="<?php echo h($vehicle['txtKeyDoor'] ?? ''); ?>" />
    </div>
    <div class="mb-3">
      <label class="form-label">Purchase Date</label>
      <input class="form-control" type="date" name="dPurchaseDate" value="<?php echo h($vehicle['dPurchaseDate'] ?? ''); ?>" />
    </div>
    <div class="mb-3">
      <label class="form-label">Purchase Price</label>
      <input class="form-control" type="text" name="curPurchasePrice" value="<?php echo h($vehicle['curPurchasePrice'] ?? ''); ?>" />
    </div>
    <div class="mb-3">
      <label class="form-label">Notes</label>
      <textarea class="form-control" name="txtNotes" rows="4"><?php echo h($vehicle['txtNotes'] ?? ''); ?></textarea>
    </div>

    <div>
      <button class="btn btn-primary" type="submit">Submit</button>
      <a class="btn btn-secondary" href="<?php echo url_for('/vehicles/vehicle.php'); ?>">Cancel</a>
    </div>
  </form>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>