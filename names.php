<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Names</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding-top: 50px;
        }
        .container {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            max-width: 600px;
            margin: 0 auto;
        }
        h2 {
            margin-bottom: 20px;
            color: #007bff;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        }
        .btn {
            margin-top: 10px;
            width: 100%;
            padding: 10px;
            transition: all 0.3s ease;
        }
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .btn-primary {
            background: linear-gradient(45deg, #007bff, #3f8cff);
            border: none;
        }
        .btn-secondary {
            background: linear-gradient(45deg, #6c757d, #adb5bd);
            border: none;
        }
        .btn-info {
            background: linear-gradient(45deg, #17a2b8, #6cb2c8);
            border: none;
        }
    </style>
    <script>
        function copyNames() {
            var names = document.getElementById("names").innerText;
            var tempTextarea = document.createElement("textarea");
            tempTextarea.value = names;
            document.body.appendChild(tempTextarea);
            tempTextarea.select();
            tempTextarea.setSelectionRange(0, 99999);
            document.execCommand("copy");
            document.body.removeChild(tempTextarea);
            alert("Names copied to clipboard!");
        }

        function goBack() {
            window.history.back();
        }

        function goToWheelOfNames() {
            window.location.href = "https://wheelofnames.com/";
        }
    </script>
</head>
<body>
    <div class="container">
        <h2 class="text-center">All Registered Names</h2>
        <div id="names">
            <?php
            include 'config.php'; // Include the config file to establish database connection

            $sqlquery = "SELECT Fullname FROM raffle_draw"; // Query to select all Fullname values

            // Fetch data from the database
            if ($results = mysqli_query($conn, $sqlquery)) {
                // Display all Fullname values
                while ($row = mysqli_fetch_array($results)) {
                    echo "<p>".$row['Fullname']."</p>";
                }
            }
            ?>
        </div>
        <button class="btn btn-primary" onclick="copyNames()">Copy Names</button>
        <button class="btn btn-secondary" onclick="goBack()">Go Back</button>
        <a href="https://wheelofnames.com/" class="btn btn-info" role="button">Go to Wheel of Names</a>
    </div>
</body>
</html>
