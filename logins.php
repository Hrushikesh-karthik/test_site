<?php
// Check if the user is already logged in by checking the login cookie
if(isset($_COOKIE['login_status']) && $_COOKIE['login_status'] === 'logged_in') {
    // User is already logged in, redirect to the homepage
    header("Location: homepage.php");
    exit();
}

// If not logged in, display the login form
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>

    <h2>Login Page</h2>

    <form action="process_login.php" method="post">
        <!-- Your login form fields go here -->
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        
        <button type="submit">Login</button>
    </form>

</body>
</html>
