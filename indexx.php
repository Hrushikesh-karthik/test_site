<?php

$insert = false;

if (isset($_POST['name'])) {
    $server = "localhost";
    $username = "root";
    $password = "KARTHIK@2004";
    $database = "om";
    $con = mysqli_connect($server, $username, $password, $database);

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $rollno = $_POST['rollno'];
    $class = $_POST['class'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $year = $_POST['year'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    //$image=$_POST['image'];

    try {
        // Check for duplicate entries
        $duplicate = mysqli_query($con, "SELECT * FROM clients WHERE rollno='$rollno' OR phone='$phone'");
        if (mysqli_num_rows($duplicate) > 0) {
            throw new Exception("Rollno or phone number already exists");
        }

        // Perform the database operation using prepared statements
        $stmt = $con->prepare("INSERT INTO `om`.`clients` (`rollno`, `class`, `name`, `email`, `phone`,`year`,`password`) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $rollno, $class, $name, $email, $phone, $year, $password);
        $stmt->execute();
        $insert = true;
header("Location: index.html");
exit();
      
    } catch (Exception $e) {
        // Handle the exception
        echo "<p>Error: " . $e->getMessage() . "</p>";
    } finally {
        // Close the database connection
        mysqli_close($con);
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <script src="script.js"></script>
    
    <style>
        
        .m{
          
        border-radius: 30px;
          background: linear-gradient(skyblue,pink);
            padding-left: 60px;
            width: 300px;
            height: auto;
            margin-left: 550px;
            margin-top: 30px;
            
            padding: 50px;
        }
        *{
            margin: 0px;
            padding: 0px;
        }
        input{
            display: block;
           margin-left: 30px;
           margin-top: 12px;
           width: 240px;
           padding: 6px;
           border-radius: 10px;

        }
        .bg{
            width:100%;
            position: absolute;
            z-index: -1;
            opacity: 0.6;
        }
        .v{
            margin-left: 100px;
            background-color:limegreen;
            color: black;
            padding: 4px;
            font-weight: bold;
            width: 100px;
            border-radius: 20px;
            font-size: 20px;
        }
        h3{
margin-left: 60px;
font-size: 35px;
        }
        .z{
            color:orange;
            font-size: 40px;
            margin-left: 500px;
        }
        .g{
            margin-left: 100px;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <!--<img class="bg" src="1.jpg" alt="bg">-->
    <div class="m">
        <h3>REGISTER</h3><br>

    <form action="indexx.php" method="post">
    <input type="text" name="rollno"  class="rollno" id="rollno"  placeholder="Enter your Rollno" required><br>
    <input type="text"  name="class" class="class" id="class" placeholder="Enter your Class" ><br>
       <input type="text"  name="name" class="name" id="name"  placeholder="Enter your name" required ><br>
       <input type="email" name="email" class="email" id="email" placeholder="Enter your Email ID"><br>
       <input type="phone"  name="phone" class="phone" id="phone"  placeholder="Enter your phone no" required><br>
       <input type="year" name="year" class="year" id="year" placeholder="Enter your Year"><br>
       <input type="password" name="password"  class="password" id="password"  placeholder="Set your password" required><br>
       
      
       <button class="v">Submit</button>

    </form><br>
    <div class="g">
    <p>Already a user?</p><br>
    <a href="login.php" style="margin-left:20px">Signin</a>
    </div>
    
    </div>
    <br>
    <?php
if($insert==true){
    echo "<p class='z'>Thanks for submitting the form!</p>";
}
?>
    <!--INSERT INTO `kar` (`name`, `phone`, `rollno`, `other`, `date`) VALUES ('Sairam', '9381997834', '21Q91A05Q1', 'TEXT', current_timestamp());
    -->
</body>
</html>