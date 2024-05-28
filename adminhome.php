<?php
session_start();

// Check if the user is not logged in, redirect to login page
if (!isset($_SESSION["loggedin"])) {
    header("location: log-in.php");
    exit;
}

require_once("config.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Basic-icons.css">
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="77">
    <nav class="navbar navbar-light navbar-expand-md fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#">GEGONU <span style="color: yellow">Administrator</span></a><button data-bs-toggle="collapse" class="navbar-toggler navbar-toggler-right" data-bs-target="#navbarResponsive" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" value="Menu"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item nav-link"><a class="nav-link active" href="adminhome.php">Home</a></li>
                    <li class="nav-item nav-link"><a class="nav-link " href="admin.php">Update</a></li>
                    <li class="nav-item"><a class="nav-link" href="log-in.php" style="padding-bottom: 9px; color: red;margin-top: 9px;padding-top: 8px;">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead" style="background-image:url('assets/img/intro-bg.jpg');">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h1 class="brand-heading" style="margin-top: 100px;">GEGONU Website</h1>
                        <?php
                        // Check if the user is logged in
                        if (isset($_SESSION["loggedin"])) {
                            // Check if the logged-in user is an admin
                            if (isset($_SESSION["is_admin"]) && $_SESSION["is_admin"]) {
                                // Display "Welcome ADMIN [username]"
                                echo '<p class="intro-text">Welcome <span style="color: yellow">ADMIN ' . $_SESSION["username"] . '</span></p>';
                            } else {
                                // Display "Welcome USER [username]"
                                echo '<p class="intro-text">Welcome <span style="color: yellow">' . $_SESSION["username"] . '</span></p>';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <footer>
        <div class="container text-center">
            <p>Copyright ©&nbsp;Brand 2024</p>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/grayscale.js"></script>
</body>

</html>
