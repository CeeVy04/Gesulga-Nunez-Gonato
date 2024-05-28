<?php
    require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #393f43;
        }

        .card {
            border: 1px solid #ced4da;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            margin: 50px auto;
        }

        .card h1 {
            text-align: center;
            margin-bottom: 20px;
            color: white;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            color: white;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button[type="submit"],
        a.btn {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
            display: inline-block;
            margin-top: 10px;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
        }

        a.btn {
            background-color: gray;
            color: #fff;
            text-decoration: none;
            display: inline-block;
            text-align: center;
            padding: 10px 0;
        }

        button[type="submit"]:hover,
        a.btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row mt-5 d-flex justify-content-center">
            <div class="col-sm-6">
                <div class="card p-4">
                    <h1>Fill Up to Register</h1>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="Fullname"><b>Fullname:</b></label>
                            <input type="text" required name="Fullname" class="form-control" id="Fullname" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label for="Age"><b>Age:</b></label>
                            <input type="number" required name="Age" class="form-control" id="Age" placeholder="Enter your age">
                        </div>
                        <div class="form-group">
                            <label for="Address"><b>Address:</b></label>
                            <input type="text" required name="Address" class="form-control" id="Address" placeholder="Enter your address">
                        </div>
                        <div class="form-group">
                            <label for="Gender"><b>Gender:</b></label>
                            <select name="Gender" required class="form-control">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Bday"><b>Birth Date:</b></label>
                            <input type="date" required name="Bday" class="form-control" id="Bday" placeholder="Enter you birthdate">
                        </div>
                        <div class="form-group">
                            <label for="Email"><b>Email:</b></label>
                            <input type="text" required name="Email" class="form-control" id="Email" placeholder="example123@gmail.com">
                        </div>
                        <div class="form-group">
                            <label for="Phone"><b>Phone Number:</b></label>
                            <input type="number" required name="Phone" class="form-control" id="Phone" placeholder="Enter your phone number">
                        </div>
                        <button type="submit" class="btn btn-primary mt-4"><b>Submit</b></button>
                        <a href="index2.php #registreee" id="myLink" class="btn btn-secondary mt-4">Back to data</a>
                    </form><br>
                    <?php
                        if ($_SERVER['REQUEST_METHOD'] == "POST") {
                            $Fullname = $_POST['Fullname'];
                            $Age = $_POST['Age'];
                            $Address = $_POST['Address'];
                            $Gender = $_POST['Gender'];
                            $Bday = date('Y-m-d', strtotime($_POST['Bday'])); // Format the date
                            $Email = $_POST['Email'];
                            $Phone = $_POST['Phone'];

                            $sqlquery = "INSERT INTO raffle_draw VALUES(NULL,'$Fullname',$Age,'$Address','$Gender','$Bday','$Email','$Phone')";

                            if (mysqli_query($conn, $sqlquery)) {
                                echo "<script> alert('Successfully Registered'); window.location.href='index2.php #registreee';</script>";
                            } else {
                                echo mysqli_error($conn);
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
