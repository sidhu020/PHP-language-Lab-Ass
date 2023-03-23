<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if the username and password are correct (replace this with your own authentication logic)
    if ($_POST['username'] === 'myusername' && $_POST['password'] === 'mypassword') {
        // Authentication successful, set session variables and redirect to homepage
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $_POST['username'];
        header('Location: homepage.php');
        exit;
    } else {
        // Authentication failed, show error message
        $errorMessage = 'Invalid username or password';
    }
}
?>

<html>

<head>
    <title>Login</title>
</head>

<body>
    <?php if (isset($errorMessage)): ?>

    <?php endif; ?>
    <form method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        <button type="submit">Login</button>
    </form>
</body>

</html>


<?php
session_start();
session_destroy();
header('Location: login.php');
exit;
?>