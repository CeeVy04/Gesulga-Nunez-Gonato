<?php
$sqlquery = "CREATE TABLE IF NOT EXISTS raffle_draw (
    id int AUTO_INCREMENT PRIMARY KEY,
    Fullname varchar(255),
    Age int,
    Address varchar(255),
    Gender varchar(255),
    Bday date,
    Email varchar(255),
    Phone varchar(15)
)";

if (!mysqli_query($conn, $sqlquery)) {
    print mysqli_error($conn);
}
?>
