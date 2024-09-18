<?php
$servername = "localhost";
$username = "root";
$password = "KARTHIK@2004";
$dbname = "om";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['add_form'])) {
        $sql = "UPDATE form SET is_active=1 WHERE id=1";
        $conn->query($sql);
    } elseif (isset($_POST['remove_form'])) {
        $sql = "UPDATE form SET is_active=0 WHERE id=1";
        $conn->query($sql);
    }
}

$sql = "SELECT is_active FROM form WHERE id=1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$form_is_active = $row['is_active'];

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Single form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <br><br>
<a class='btn btn-primary btn-sm' href="formshow.php" role="button" style="background-color:blue; width:200px; font-size:20px">Show output</a> 
<a class='btn btn-primary btn-sm' href="formadmin.php" role="button" style="background-color:green; width:100px; font-size:20px">Back</a><hr>
    <h1>Single Event</h1>
    <form method="post">
        <?php if ($form_is_active): ?>
            <input type="submit" name="remove_form" value="Remove Registration Form">
        <?php else: ?>
            <input type="submit" name="add_form" value="Add Registration Form">
        <?php endif; ?>

    </form>
    <?php
$servername = "localhost";
$username = "root";
$password = "KARTHIK@2004";
$dbname = "om";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT form_content, is_active FROM form WHERE id=1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$form_content = $row['form_content'];
$form_is_active = $row['is_active'];

$conn->close();
?>
<hr>

<a class='btn btn-primary btn-sm' href="poscreate3.php" role="button" style="background-color:green; width:200px; font-size:20px">Add poster 1</a>
<a class='btn btn-primary btn-sm' href="eventimg3.php" role="button" style="background-color:blue; width:200px; font-size:20px">View Poster</a>
    <?php if ($form_is_active): ?>
        <?php echo $form_content; ?>
    <?php endif; ?>
    <br>

<hr> 
</body>
</html>
