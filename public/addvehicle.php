<?php
require_once('../../../private/initialize.php');

require_login();

if (is_post_request()) {

  $page = [];
  $page['subject_id'] = $_POST['subject_id'] ?? '';
  $page['menu_name'] = $_POST['menu_name'] ?? '';
  $page['position'] = $_POST['position'] ?? '';
  $page['visible'] = $_POST['visible'] ?? '';
  $page['content'] = $_POST['content'] ?? '';

  $result = insert_page($page);
  if ($result === true) {
    $new_id = mysqli_insert_id($db);
    $_SESSION['message'] = "Page created successfully";
    redirect_to(url_for('/staff/pages/show.php?id=' . $new_id));
  } else {
    $errors = $result;
  }
} else {

  $page = [];
  $page['subject_id'] = $_GET['subject_id'] ?? '1';
  $page['menu_name'] = '';
  $page['position'] = '';
  $page['visible'] = '';
  $page['content'] = '';
}



$page_count = count_pages_by_subject_id($page['subject_id']) + 1;
$page['position'] = $page_count;

?>
<?php
// We need to use sessions, so you should always initialize sessions using the below function
session_start();
// If the user is logged in, redirect to the home or index page
if (isset($_SESSION['account_loggedin'])) {
    header('Location: index.php');
    exit;
}
?>
<?php $page_title = 'Create Page'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="FleetControl">
    <meta property="og:type" content="website">
    <meta name="author" content="Paul M. Summitt">
    <title>FleetControl - Add Vehicle</title>
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
                        <a class="nav-item nav-link active link-light" aria-current="page" href="index.php">HOME</a>
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
                    <img src="img/Truck_368x368.jpg" class="img-thumbnail" alt="image of a truck" width="300px" height="300px">
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card=title">FleetControl - Add Vehicle</h5>
                </div>
            </div>
        </div>
    </div>

</article>
<?php include(SHARED_PATH . '/footer.php'); ?>
</body>
</html>