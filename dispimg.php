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
        <h2>Students Registered</h2>
        <a class="btn" href="create.php" role="button">Create</a>
  <br>
  <table class="table">
    <thead>
        <tr>
            
            <th>Name</th>
            <th>Phone</th>
            <th>rollno</th>
            <th>password</th>
            <th>other</th>
            <th>image</th>
        </tr>
    </thead>
    <tbody>
  <?php
    $servername="localhost";
    $username="root";
    $password="KARTHIK@2004";
    $database="om";
    $conn=mysqli_connect($servername,$username,$password,$database);
    if(!$conn)
    {
        die("error");
    }
    //echo "connected";
    $sql= "SELECT * FROM kar";
    $result=$conn->query($sql);
    if(!$result){
        die("Invalid");
    }
    while($row=$result->fetch_assoc()){
        echo "
        <tr>
            <td>$row[name]</td>
            <td>$row[phone]</td>
            <td>$row[rollno]</td>
            <td>$row[password]</td>
            <td>$row[other]</td>
            <td>$row[image]</td>
            <td>
                <a class='btn btn-primary btn-sm' href='edit.php?id=$row[rollno]'>Edit</a>
                <a class='btn btn-danger btn-sm' href='delete.php?id=$row[rollno]'>Delete</a></td>
        </tr>
        ";
    }

?>


        
    </tbody>
  </table>
  
  
    </div>
</body>
</html>