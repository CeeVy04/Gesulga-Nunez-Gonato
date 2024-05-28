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
        <div class="container"><a class="navbar-brand" href="adminhome.php">GEGONU <span style="color: yellow">Administrator</span></a><button data-bs-toggle="collapse" class="navbar-toggler navbar-toggler-right" data-bs-target="#navbarResponsive" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" value="Menu"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item nav-link"><a class="nav-link" href="adminhome.php">HOME</a></li>
                    <li class="nav-item nav-link"><a class="nav-link active" href="admin.php">UPDATE  </a></li>
                    <li class="nav-item"><a class="nav-link" href="log-in.php" style="padding-bottom: 9px;color: red;margin-top: 9px;padding-top: 8px;">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead" style="background-image:url('assets/img/intro-bg.jpg');">
       <?php
require_once('config.php');
$id = $Fullname = $Age = $Address = $Gender = $Bday  = $Email = $Phone = "";


$id = $_GET['id'];

$sqlquery = "SELECT * FROM raffle_draw WHERE id = '$id' ";

if ($results = mysqli_query($conn, $sqlquery)) {
        $data = mysqli_fetch_assoc($results);
        $Fullname = $data['Fullname'];
        $Age = $data['Age'];
        $Address = $data['Address'];
        $Gender = $data['Gender'];
        $Bday = $data['Bday'];
        $Email = $data['Email'];
        $Phone = $data['Phone'];
    }
?>


    <div class="container" style="color: black">
        <div class="row mt-5 d-flex justify-content-center">
            <div class="col-sm-6">
                <div class="card p-4";>
                    <h1>Registree Details</h1>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="Fullname"><b>Fullname:</b></label>
                           <p><?php echo $Fullname;?></p>
                        </div>
                        <div class="form-group">
                            <label for="Age"><b>Age:</b></label>
                            <p><?php echo $Age;?></p>
                        </div>
                        <div class="form-group">
                            <label for="Address"><b>Address:</b></label>
                            <p><?php echo $Address;?></p>
                        </div>
                        <div class="form-group">
                            <label for="Gender"><b>Gender:</b></label>
                            <p><?php echo $Gender;?></p>
                        </div>
                        <div class="form-group">
                            <label for="Bday"><b>Birth Date:</b></label>
                            <p><?php echo $Bday;?></p>
                        </div>
                        <div class="form-group">
                            <label for="Email"><b>Email:</b></label>
                            <p><?php echo $Email;?></p>
                        </div>
                        <div class="form-group">
                            <label for="Phone"><b>Phone Number:</b></label>
                            <p><?php echo $Phone;?></p>
                        </div>
                        <div><center><a href="admin.php" id="myLink" class="btn btn-primary mt-4" style="color: black">Return</a></center>
                    </form><br>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>

<?php

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $Fullname = $_POST['Fullname'];
        $Age = $_POST['Age'];
        $Address = $_POST['Address'];
        $Gender = $_POST['Gender'];
        $Bday = $_POST['Bday'];
        $Email = $_POST['Email'];
        $Phone = $_POST['Phone'];

        $sqlquery = "UPDATE raffle_draw SET Fullname='$Fullname', Age='$Age', Address='$Address', Gender='$Gender', Bday='$Bday', Email='$Email', Phone='$Phone' WHERE id='$id' ";

        if (mysqli_query($conn, $sqlquery)) {
            echo "<script> alert('Successfully Updated'); window.location.href='index2.php #contact';</script>";
        }else{
            echo mysqli_error($conn);
        }
    }
?>
    <footer>
        <div class="container text-center">
            <p>Copyright ©&nbsp;Brand 2024</p>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/grayscale.js"></script>
</body>

</html>