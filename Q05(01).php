<?php
// 24. Write program start type name in input field the get Suggestions (hit) name with ajax.

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

// get name input value
$name = $_POST["name"];

// search for names that start with input value
$result = mysqli_query($conn, "SELECT name FROM mysg WHERE name LIKE '$name%'");

// display name suggestions
while ($row = mysqli_fetch_assoc($result)) {
    echo $row["name"] . "<br>";
}

// close database connection
mysqli_close($conn);
?>