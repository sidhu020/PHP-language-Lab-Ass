<?php

// 22.Write program using mysqli_num_fields data counted with mysql database.
// connect to database

$server = "localhost";
$username = "root";
$pass = "";
$db = "labass";

$conn = mysqli_connect("$server", "$username", "$pass", "$db");

// check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// get number of fields in table
$result = mysqli_query($conn, "SELECT * FROM mytable");
$num_fields = mysqli_num_fields($result);

echo "Number of fields in mytable: " . $num_fields;

// close database connection
mysqli_close($conn);
?>