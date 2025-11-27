<?php
require_once '_private/db_credentials.php';
require_once '_private/initialize.php';

$message = "";
$toastClass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Match form field names and avoid undefined index notices
    $txtUserName = $_POST['username'] ?? '';
    $txtUserPassword = $_POST['password'] ?? '';

    // Check if email already exists (use $db from initialize.php)
    $checkEmailStmt = $db->prepare("SELECT txtUserName FROM tblsignin WHERE txtUserName = ?");
    $checkEmailStmt->bind_param("s", $txtUserName);
    $checkEmailStmt->execute();
    $checkEmailStmt->store_result();

    if ($checkEmailStmt->num_rows > 0) {
        $message = "UserName already exists";
        $toastClass = "#007bff"; // Primary color
    } else {
        // Prepare and bind
        $stmt = $db->prepare("INSERT INTO tblsignin (txtUserName, txtUserPassword) VALUES (?, ?)");
        $stmt->bind_param("ss", $txtUserName, $txtUserPassword);

        if ($stmt->execute()) {
            // Redirect to index.php on successful account creation
            header("Location: index.php");
            exit();
        } else {
            $message = "Error: " . $stmt->error;
            $toastClass = "#dc3545"; // Danger color
        }

        $stmt->close();
    }

    $checkEmailStmt->close();
    db_disconnect($db);
}
?>

<!DOCTYPE html>
<html lang="en">

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
    <script async src="/public/js/wheelcontroll.js "></script>
</head>
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

<body class="bg-light">
    <article>
        <div class="container p-5 d-flex flex-column align-items-center">
            <div class="row">
                <div class="col">
                    <div class="card text-bg-dark p-3">
                        <img src="public/img/Truck_368x368.jpg" class="img-thumbnail" alt="image of a truck">
                    </div>
                </div>
                    <?php if ($message): ?>
                        <div class="toast align-items-center text-white border-0" 
                    role="alert" aria-live="assertive" aria-atomic="true"
                            style="background-color: <?php echo $toastClass; ?>;">
                            <div class="d-flex">
                                <div class="toast-body">
                                    <?php echo $message; ?>
                                </div>
                                <button type="button" class="btn-close
                                btn-close-white me-2 m-auto" 
                                    data-bs-dismiss="toast"
                                    aria-label="Close"></button>
                            </div>
                        </div>
                    <?php endif; ?>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" class="form-control mt-1 p-4"
                                style="height:auto; width:380px;
                                box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px,
                                rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">
                                <div class="row text-center">
                                    <i class="fa fa-user-circle-o fa-3x mt-1 mb-2" style="color: green;"></i>
                                    <h5 class="p-4" style="font-weight: 700;">Create Your Account</h5>
                                </div>
                                <div class="mb-2">
                                    <label for="username"><i 
                                    class="fa fa-user"></i> User Name</label>
                                    <input type="text" name="username" id="username"
                                    class="form-control" required>
                                </div>
                                <div class="mb-2 mt-2">
                                    <label for="password"><i 
                                    class="fa fa-lock"></i> Password</label>
                                    <input type="text" name="password" id="password"
                                    class="form-control" required>
                                </div>
                                <div class="mb-2 mt-3">
                                    <button type="submit" 
                                    class="btn btn-success
                                    bg-success" style="font-weight: 600;">Create
                                        Account</button>
                                </div>
                                <div class="mb-2 mt-4">
                                    <p class="text-center" style="font-weight: 600; 
                                    color: navy;">I have an Account <a href="./index.php"
                                            style="text-decoration: none;">Login</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <script>
        let toastElList = [].slice.call(document.querySelectorAll('.toast'))
        let toastList = toastElList.map(function (toastEl) {
            return new bootstrap.Toast(toastEl, { delay: 3000 });
        });
        toastList.forEach(toast => toast.show());
    </script>
</body>

</html>