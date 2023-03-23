<?php

// 25. Write program using mysql database search name using droup down list.

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

// Get list of names from database
$sql = "SELECT name FROM mysg";
$result = mysqli_query($conn, $sql);

// Generate dropdown list
echo "<form method='post'>";
echo "<select name='name'>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
}
echo "</select>";
echo "<input type='submit' value='Search'>";
echo "</form>";

// Process search query
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $sql = "SELECT * FROM mysg WHERE name='$name'";
    $result = mysqli_query($conn, $sql);

    // Display search results
    echo "<h2>Search Results:</h2>";
    while ($row = mysqli_fetch_array($result)) {

        echo "Name: " . $row['name'] . "<br>";

    }
}
?>