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
     <style>
        
        .table-bordered tbody tr:nth-child(even) {
            background-color: white; /* Even rows background color */
        }
        .table-bordered tbody tr:nth-child(odd) {
            background-color: white; /* Odd rows background color */
        }
        /* Change background color of table head */
        .table-bordered thead th {
            background-color: gray; /* Light background color */
            text-align: center; /* Center align text in table head */
            color: white;
        }
        /* Center align table */
        .table-responsive {
            display: flex;
            justify-content: center;
        }
        /* Align text boxes */
        .form-container {
            text-align: center;
        }
        .form-container form {
            display: inline-block;
            text-align: left;
        }
        .form-container form .form-group {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .form-container form .form-group label {
            flex: 1;
            text-align: right;
            margin-right: 15px;
        }

        .form-container form .form-group input[type="text"] {
            flex: 2;
            width: 100%;
        }

    </style>
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="77">
    <nav class="navbar navbar-light navbar-expand-md fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="index.php">GEGONU</a>
            <button data-bs-toggle="collapse" class="navbar-toggler navbar-toggler-right" data-bs-target="#navbarResponsive" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" value="Menu">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item nav-link"><a class="nav-link" href="index.php">HOME</a></li>
                    <li class="nav-item nav-link"><a class="nav-link active" href="index2.php">REGISTER</a></li>
                    <li class="nav-item"><a class="nav-link" href="log-in.php" style="padding-bottom: 9px; color: red;margin-top: 9px;padding-top: 8px;">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead" style="background-image:url('assets/img/intro-bg.jpg');">
        <div class="intro-body">
            <div class="container">
                <p class="text-white" style="margin-top: 75px;"><br><span style="color: white;">Welcome to the Raffle Draw Game! Step right up and get ready to experience the thrill of our exhilarating Raffle Draw! We're thrilled to have you join us for an unforgettable journey filled with excitement, anticipation, and the chance to win incredible prizes! Whether you're a seasoned participant or a first-time player, our Raffle Draw offers everyone an opportunity to walk away with amazing rewards. So, gather your lucky charms, purchase your tickets, and brace yourself for an adventure like no other!<br><span><h3>Prizes:</h3></span><br>First Prize: House and Lot <br>Second Prize: Avanza Car <br>Third Prize: Sniper 155 <br>Consolation Prizes:  1 sack of rice each (10 persons)</span><br></p>
            </div><a href="create.php"><button class="btn btn-outline-info" type="button" style="margin-right: 35px;margin-left: 35px;padding-left: 46px;padding-right: 46px;padding-bottom: 10px;padding-top: 12px;">REGISTER</button></a><br>
            <a style="color: yellow" class="btn btn-link" role="button" href="index2.php #registreee"><i class="fa fa-angle-double-down animated"></i></a>
        </div>
    </header>    <section id="registreee">
    <br><br><br><br>

<div class="form-container">
    <h3>Search Registree</h3>
    <form action="" method="POST" style="text-align: center;">
        <div class="form-group">
            <label for="id">Entry Code</label>
            <input type="text" name="id" id="id" placeholder="Enter Entry Code">
        </div>
        <div class="form-group">
            <label for="Fullname">Fullname</label>
            <input type="text" name="Fullname" id="Fullname" placeholder="Enter Representative">
        </div>
        <button type="submit" style="margin-right: 10px;">Search</button>
        <a href="index2.php"><button type="button" style="background-color: green;">Refresh</button></a>
    </form>
</div>
</section>


    <div class="container mt-5">
        <h2>Registered Participants</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Entry Code</th>
                        <th>Full Name</th>
                        <th>Age</th>
                        <th>Address</th>
                        <th>Gender</th>
                        <th>Birthday</th>
                        <th>Email</th>
                        <th>Phone</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'config.php'; // Include the config file to establish database connection

                    $results = null; // Initialize $results variable

                    // Check if the form is submitted
                    if ($_SERVER['REQUEST_METHOD'] == "POST") {
                        $id = $_POST['id'];
                        $Fullname = $_POST['Fullname'];
                        $sqlquery = "SELECT * FROM raffle_draw WHERE id='$id' or Fullname='$Fullname'";
                    } else {
                        $sqlquery = "SELECT * FROM raffle_draw";
                    }

                    // Fetch data from the database
                    if ($results = mysqli_query($conn, $sqlquery)) {
                        // Display the table
                        while ($row = mysqli_fetch_array($results)) {
                            echo "<tr>";
                            echo "<td>".$row['id']."</td>";
                            echo "<td>".$row['Fullname']."</td>";
                            echo "<td>".$row['Age']."</td>";
                            echo "<td>".$row['Address']."</td>";
                            echo "<td>".$row['Gender']."</td>";
                            echo "<td>".$row['Bday']."</td>";
                            echo "<td>".$row['Email']."</td>";
                            echo "<td>".$row['Phone']."</td>";
                            echo "</tr>";
                        }
                    }

                    ?>
                </tbody>
            </table>
        </div>
    </div>

<div style="padding-left: 120px">
    <p><b>Total Entries: </b><?php echo mysqli_num_rows($results); ?></p>
</div>


    <section class="text-center content-section" id="about">
        <div class="container"></div>
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
