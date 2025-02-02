<?php
session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION['admin_logged_in']) || !$_SESSION['admin_logged_in']) {
    header("Location: access.php"); // Redirect to login page
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
    <div class="a my-5">
        <h2 style="text-align: center;">Students Registered</h2>
        <form action="searching.php" method="GET">
        
        <input type="text" id="search" name="search" placeholder="Enter your search term" style="width:300px">
        <button type="submit">Search</button>
    </form><br>
        <a class='btn btn-primary btn-sm' href="create.php" role="button" style="background-color:green; width:100px; font-size:20px">Create</a>
        <a class='btn btn-primary btn-sm' href="admset.php" role="button" style="background-color:green; width:100px; font-size:20px">Back</a>
        <br><br>
        <table class="table">
            <thead>
                <tr>
                    <th>Image</th>
                   <!-- <th>ID</th> -->
                    <th>Roll no</th>
                    <th>Event</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Transaction ID</th>
                    <th>Class</th>
                    <th>Created at</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "KARTHIK@2004";
                $database = "om";
                $conn = mysqli_connect($servername, $username, $password, $database);
                
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $sql = "SELECT * FROM clients";
                $result = $conn->query($sql);

                if (!$result) {
                    die("Invalid query: " . mysqli_error($conn));
                }

                while ($row = $result->fetch_assoc()) {
                    echo "<tr >";
                   echo "<td><img src='getImage.php?id={$row['id']}' width='150' height='150'></td>";

                    //echo "<td>{$row['id']}</td>";
                    echo "<td style='padding-top:60px'>{$row['rollno']}</td>";
                    echo "<td style='padding-top:60px'>{$row['class']}</td>";
                    echo "<td style='padding-top:60px'>{$row['name']}</td>";
                    echo "<td style='padding-top:60px'>{$row['email']}</td>";
                    echo "<td style='padding-top:60px'>{$row['years']}</td>";
                    echo "<td style='padding-top:60px'>{$row['year']}</td>";
                    echo "<td style='padding-top:60px'>{$row['created_at']}</td>";
                    echo "<td style='padding-top:60px'>
                            <a class='btn btn-primary btn-sm' href='edit.php?id={$row['id']}'>Edit</a>
                            <a class='btn btn-danger btn-sm' href='delete.php?id={$row['id']}'>Delete</a>
                            <a class='btn btn-primary btn-sm' href='view.php?id={$row['id']}'>View</a>
                          
                        </td>";
                

                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
