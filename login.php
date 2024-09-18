<?php
//session_start(); // Start the session

$login_success = false;

if (isset($_POST['login_phone']) && isset($_POST['login_password'])) {
    $login_phone = $_POST['login_phone'];
    $login_password = $_POST['login_password'];

    $server = "localhost";
    $username = "root";
    $password = "KARTHIK@2004";
    $database = "om";
    $con = mysqli_connect($server, $username, $password, $database);

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    try {
        // Check if the user exists with the provided phone number
        $stmt = $con->prepare("SELECT * FROM clients WHERE phone=?");
        $stmt->bind_param("s", $login_phone);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            // User found, verify the password
            $row = $result->fetch_assoc();

            if (password_verify($login_password, $row['password'])) {
                $login_success = true;

                // Store login_phone in a session variable
                //$_SESSION['login_phone'] = $login_phone;

                header("Location: inde.php");
                exit();
            } else {
                throw new Exception("Invalid password");
            }
        } else {
            throw new Exception("User not found");
        }
    } catch (Exception $e) {
        // Handle the exception
        echo "<script>alert('Error: " . $e->getMessage() . "');</script>";
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
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        
    </style>
</head>
<body>
    <div class="m">
        <br>
        <?php if ($login_success) : ?>
            <p>Login successful!</p>
        <?php endif; ?>

        <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    
    <title>Login Page </title>
</head>


<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="navreg.php" method="post">
                <h1>Create Account</h1>
                
                
                <input type="text" name="rollno"  class="rollno" id="rollno"  placeholder="Enter your Rollno" required><br>
    <input type="text"  name="class" class="class" id="class" placeholder="Enter your Class" ><br>
       <input type="text"  name="name" class="name" id="name"  placeholder="Enter your name" required ><br>
       <input type="email" name="email" class="email" id="email" placeholder="Enter your Email ID"><br>
       <input type="phone"  name="phone" class="phone" id="phone"  placeholder="Enter your phone no" required><br>
       <input type="year" name="year" class="year" id="year" placeholder="Enter your Year"><br>
       <input type="password" name="password"  class="password" id="password"  placeholder="Set your password" required><br>
       
      
       <button class="v">Submit</button>

            </form>
        </div>
        <div class="form-container sign-in">
            <form action="login.php" method="post">
                <h1>Sign In</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <input type="phone" name="login_phone" placeholder="Enter your phone number" required><br>
            <input type="password" name="login_password" placeholder="Enter your password" required><br>
            <button type="submit" class="v">Signin</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome!</h1>
                    <p>Enter your details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Register with your details for a crazy drive!!</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>
<?php
// Close the session
session_write_close();
?>