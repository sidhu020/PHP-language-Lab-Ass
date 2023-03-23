<?php

//21. Write program using mysqli_fetch_row data create , insert, and view with mysql database.


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

// retrieve data from database
$result = mysqli_query($conn, "SELECT * FROM mytable");
?>

<!-- display data in HTML table -->
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
    </tr>
    <?php while ($row = mysqli_fetch_row($result)) { ?>
        <tr>
            <td>
                <?php echo $row[0]; ?>
            </td>
            <td>
                <?php echo $row[1]; ?>
            </td>
            <td>
                <?php echo $row[2]; ?>
            </td>
        </tr>
    <?php } ?>
</table>

<?php
// check if form submitted
if (isset($_POST["name"]) && isset($_POST["age"])) {
    // get values from form
    $name = $_POST["name"];
    $age = $_POST["age"];

    // insert data into database
    $sql = "INSERT INTO mytable (name, age) VALUES ('$name', '$age')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<!-- display form to insert new data -->
<form method="post">
    <label>Name:</label>
    <input type="text" name="name">
    <br>
    <label>Age:</label>
    <input type="text" name="age">
    <br>
    <input type="submit" value="Submit">
</form>

<?php
// close database connection
mysqli_close($conn);
?>