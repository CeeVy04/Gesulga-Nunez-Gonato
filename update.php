<?php
require_once('config.php');
$id = $Fullname = $Age = $Address = $Gender = $Bday  = $Email = $Phone = "";

// Fetching data based on ID from the URL
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

<!DOCTYPE html>
<html>
<head>
    <title>Update Record - Unique Identifier</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #222;
        }

        .card {
            border: 1px solid white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            margin: 50px auto;
            background: gray;
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
            color: black;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid black;
            border-radius: 5px;
            box-sizing: border-box;
            background-color: white;
            color: black;
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
            background-color: green;
            color: green;
        }

        a.btn {
            background-color: #555;
            color: #fff;
            text-decoration: none;
            display: inline-block;
            text-align: center;
            padding: 10px 0;
        }

        button[type="submit"]:hover,
        a.btn:hover {
            background-color: blue;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row mt-5 d-flex justify-content-center">
            <div class="col-sm-6">
                <div class="card p-4">
                    <h1>Update Data</h1>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="Fullname"><b>Fullname:</b></label>
                            <input type="text" required name="Fullname" value="<?php echo $Fullname;?>" class="form-control" id="Fullname" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label for="Age"><b>Age:</b></label>
                            <input type="number" required name="Age" value="<?php echo $Age;?>"  class="form-control" id="Age" placeholder="Enter your age">
                        </div>
                        <div class="form-group">
                            <label for="Address"><b>Address:</b></label>
                            <input type="text" required name="Address" value="<?php echo $Address;?>"  class="form-control" id="Address" placeholder="Enter your address">
                        </div>
                        <div class="form-group">
                            <label for="Gender"><b>Gender:</b></label>
                            <select name="Gender" value="<?php echo $Gender;?>"  required class="form-control">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Bday"><b>Birth Date:</b></label>
                            <input type="date" required name="Bday" value="<?php echo $Bday;?>"  class="form-control" id="Bday" placeholder="Enter your birthdate">
                        </div>
                        <div class="form-group">
                            <label for="Email"><b>Email:</b></label>
                            <input type="text" required name="Email" value="<?php echo $Email;?>"  class="form-control" id="Email">
                        </div>
                        <div class="form-group">
                            <label for="Phone"><b>Phone Number:</b></label>
                            <input type="number" required name="Phone" value="<?php echo $Phone;?>"  class="form-control" id="Phone">
                        </div>
                        <button type="submit" class="btn btn-primary mt-4"><b style="color: white">Update</b></button>
                        <a href="admin.php" id="myLink" class="btn btn-secondary mt-4" style="color: white">Cancel</a>
                    </form><br>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
// Handling the form submission for updating data
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
        echo "<script> alert('Successfully Updated'); window.location.href='admin.php';</script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>
