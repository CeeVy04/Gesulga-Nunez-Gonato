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
        /* Define your custom styles here */
        .table-bordered tbody tr:nth-child(even) {
            background-color: white; /* Even rows background color */
        }
        .table-bordered tbody tr:nth-child(odd) {
            background-color: white; /* Odd rows background color */
        }
        /* Change background color of table head */
        .table-bordered thead th {
            background-color: teal; /* Light background color */
            text-align: center; /* Center align text in table head */
            color: black;
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
            <a class="navbar-brand" href="adminhome.php">GEGONU <span style="color: yellow">Administrator</span></a>
            <button data-bs-toggle="collapse" class="navbar-toggler navbar-toggler-right" data-bs-target="#navbarResponsive" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" value="Menu">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item nav-link"><a class="nav-link" href="adminhome.php">HOME</a></li>
                    <li class="nav-item nav-link"><a class="nav-link active" href="admin.php">Update</a></li>
                    <li class="nav-item"><a class="nav-link" href="log-in.php" style="padding-bottom: 9px; color: red;margin-top: 9px;padding-top: 8px;">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead" style="background-image:url('assets/img/intro-bg.jpg');">
       
   
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
        <a href="admin.php"><button type="button" style="background-color: green;">Refresh</button></a>
        <button type="button" onclick="window.location.href='names.php';">Show All Names</button>

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
                        <th>Actions</th>
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
                            echo "<td><a href='update.php?id=". $row['id']."'>Update</a> | <a href='delete.php?id=". $row['id']."'>Delete</a> | <a href='view.php?id=". $row['id']."'>View</a></td>";
                            echo "</tr>";
                        }
                    }

                    ?>
                </tbody>
            </table>
        </div>
    </div>

<div>
    <p><b>Total Entries: </b><?php echo mysqli_num_rows($results); ?></p>
</div>
 </header>    <section id="contact">


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
