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
        <div class="container"><a class="navbar-brand" href="index.php">GEGONU</a><button data-bs-toggle="collapse" class="navbar-toggler navbar-toggler-right" data-bs-target="#navbarResponsive" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" value="Menu"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item nav-link"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item nav-link"><a class="nav-link active" href="#download">Register</a></li>
                    <li class="nav-item nav-link"><a class="nav-link" href="#contact">contact</a></li>
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
                        <h1 class="brand-heading" style="margin-top: 100px;">Welcome</h1>
                        <p class="intro-text">To<br><br>GEGONU Website -&nbsp; your go-to for thrilling game events and raffle draws! Get ready to win big and dive into excitement. Join us and let the games begin!<br></p><a class="btn btn-link btn-circle" role="button" href="#about"><i class="fa fa-angle-double-down animated"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="text-center content-section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2>About GEGONU</h2>
                    <p>This website is your premier destination for gaming events, including thrilling raffle draws and more! Founded by gaming enthusiasts Mr. Gesulga, Mr. Gonato, and Ms. Nunez, our mission is to bring the excitement of gaming to everyone. Whether you're vying for top prizes or simply looking for a good time, GEGONU has something for you. Join us and experience the adrenaline rush of gaming like never before. Welcome to GEGONU – where every event is an opportunity for adventure!</p>
                    <p>Ready to join the fun? Scroll down to register and unlock your ticket to gaming excitement!</p>
                    <p></p>
                </div>
            </div>
        </div>
    </section>
    <section class="text-center download-section content-section" id="download" style="background-image:url('assets/img/downloads-bg.jpg');">
        <div class="container">
            <div class="col-lg-8 mx-auto">
                <h1>Register <span style="color: gold">Raffle Draw</span> Event</h1>
                <p>Be the lucky one!<br>Click Here to Register for Our Raffle Draw Event.<br></p><a class="btn btn-primary btn-lg btn-default" role="button" href="index2.php">ENTER EVENT</a>
            </div>
        </div>
    </section>
   <section class="text-center content-section" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2>Contact us</h2>
                <p>If you have any concerns, feel free to contact us on our platforms.</p>
                <ul class="list-inline banner-social-buttons">
                    <li class="list-inline-item">
                        <a class="btn btn-primary btn-lg btn-default" role="button" href="https://www.google.com/gmail/">
                            <i class="fa fa-google-plus fa-fw"></i>
                            <span class="network-name"> Google+</span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn btn-primary btn-lg btn-default" role="button" href="https://facebook.com">
                            <i class="fa fa-facebook-f fa-fw"></i>
                            <span class="network-name"> Facebook</span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn btn-primary btn-lg btn-default" role="button" href="https://instagram.com">
                            <i class="fa fa-instagram fa-fw"></i>
                            <span class="fs-6 network-name"> Instagram</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

    <footer>
        <div class="container text-center">
            <p>Copyright ©&nbsp;Brand 2024</p>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/grayscale.js"></script>
</body>

</html>