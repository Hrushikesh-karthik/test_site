<?php
session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION['admin_logged_in']) || !$_SESSION['admin_logged_in']) {
    header("Location: access.php"); // Redirect to login page
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Page - Add Buttons</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            margin: 20px 0;
        }
        label {
            display: inline-block;
            width: 100px;
        }
        input[type="text"] {
            padding: 5px;
            width: 200px;
        }
        input[type="submit"] {
            padding: 5px 10px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Add New Button</h1>
    <form method="post" action="admbutton.php">
        <label for="label">Button Label:</label>
        <input type="text" id="label" name="label" required>
        <br>
        <label for="url">Button URL:</label>
        <input type="text" id="url" name="url" required>
        <br>
        <input type="submit" value="Add Button">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $label = $_POST['label'];
        $url = $_POST['url'];

        $conn = new mysqli('localhost', 'root', 'KARTHIK@2004', 'om');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("INSERT INTO buttons (label, url) VALUES (?, ?)");
        $stmt->bind_param('ss', $label, $url);
        $stmt->execute();
        $stmt->close();
        $conn->close();

        echo "Button added successfully!";
    }
    ?>
</body>
</html>
