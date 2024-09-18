<?php
session_start();
$insert = false;
$errorMessages = [];
$successMessage = "";

require 'vendor/autoload.php'; // Include the Composer autoload file for PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
    $name = $_POST['name'];
    $email = $_POST['email'];
    $year = $_POST['year'];
    $years = $_POST['years'];
    $class = $_POST['class'];

    // Validation checks
    if (empty($name)) {
        $errorMessages[] = "Name is required.";
    }
    if (empty($email)) {
        $errorMessages[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorMessages[] = "Invalid email format.";
    }
    if (empty($year)) {
        $errorMessages[] = "Year is required.";
    }
    if (empty($class)) {
        $errorMessages[] = "Event name is required.";
    }
    if (empty($rollno)) {
        $errorMessages[] = "Roll number is required.";
    } elseif (strlen($rollno) > 10) {
        $errorMessages[] = "Roll number must not exceed 10 characters.";
    }
    if (empty($years)) {
        $errorMessages[] = "Transaction ID is required.";
    }

    // Handle image upload
    $imageData = null;
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == UPLOAD_ERR_OK) {
        $imageData = handleImageUpload();
    }

    // If there are no validation errors, proceed with database insertion
    if (empty($errorMessages)) {
        try {
            // Perform the database operation using prepared statements
            $stmt = $con->prepare("INSERT INTO clients (name, email, year, class, rollno, image, years) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssss", $name, $email, $year, $class, $rollno, $imageData, $years);
            $stmt->execute();
            $insert = true;
            $successMessage = "Registration successful!";
            sendEmail($email, $name, $rollno, $year, $class, $years);
        } catch (Exception $e) {
            // Handle the exception
            $errorMessages[] = "Database error: " . $e->getMessage();
        } finally {
            // Close the database connection
            mysqli_close($con);
        }
    }
}

function sendEmail($email, $name, $rollno, $year, $class, $years) {
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
        $mail->SMTPAuth = true;
        $mail->Username = 'karthiku1904@gmail.com'; // SMTP username
        $mail->Password = 'orvg lawx wwhz ccyn'; // SMTP password
        $mail->SMTPSecure = 'tls'; // Enable TLS encryption
        $mail->Port = 587; // TCP port to connect to

        // Recipients
        $mail->setFrom('karthiku1904@gmail.com', 'Karthik U');
        $mail->addAddress($email, $name);

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Registration Confirmation';
        $mail->Body    = "
            <h2>Registration Confirmation</h2>
            <p>Dear <strong>$name</strong>,</p>
            <p>Thank you for registering for the event. Your registration details are as follows:</p>
            <ul>
                <li><strong>Name:</strong> $name</li>
                <li><strong>Roll No:</strong> $rollno</li>
                <li><strong>Year:</strong> $year</li>
                <li><strong>Event Name:</strong> $class</li>
                <li><strong>Transaction ID:</strong> $years</li>
            </ul>
            <p>If you have any questions or need further assistance, please feel free to contact us.</p>
            <p>Best regards,</p>
            <p><strong>Event Team</strong></p>
        ";

        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

function handleImageUpload() {
    $targetDirectory = "uploads/";
    $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);

    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check file size
    if ($_FILES["image"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    $allowedFormats = ["jpg", "jpeg", "png", "gif"];
    if (!in_array($imageFileType, $allowedFormats)) {
        echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        // Move the uploaded file to the target directory
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            return file_get_contents($targetFile);
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    return null;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body {
            background:#fec107;
            padding: 0 10px;
        }
        .wrapper {
            max-width: 500px;
            width: 100%;
            background: #fff;
            margin: 20px auto;
            box-shadow: 1px 1px 2px rgba(0,0,0,0.125);
            padding: 30px;
        }
        .wrapper .title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 25px;
            color: #fec107;
            text-transform: uppercase;
            text-align: center;
        }
        .wrapper .form {
            width: 100%;
        }
        .wrapper .form .inputfield {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }
        .wrapper .form .inputfield label {
            width: 200px;
            color: #757575;
            margin-right: 10px;
            font-size: 14px;
        }
        .wrapper .form .inputfield .input,
        .wrapper .form .inputfield .textarea {
            width: 100%;
            outline: none;
            border: 1px solid #d5dbd9;
            font-size: 15px;
            padding: 8px 10px;
            border-radius: 3px;
            transition: all 0.3s ease;
        }
        .wrapper .form .inputfield .textarea {
            width: 100%;
            height: 125px;
            resize: none;
        }
        .wrapper .form .inputfield .custom_select {
            position: relative;
            width: 100%;
            height: 37px;
        }
        .wrapper .form .inputfield .custom_select:before {
            content: "";
            position: absolute;
            top: 12px;
            right: 10px;
            border: 8px solid;
            border-color: #d5dbd9 transparent transparent transparent;
            pointer-events: none;
        }
        .wrapper .form .inputfield .custom_select select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            outline: none;
            width: 100%;
            height: 100%;
            border: 0px;
            padding: 8px 10px;
            font-size: 15px;
            border: 1px solid #d5dbd9;
            border-radius: 3px;
        }
        .wrapper .form .inputfield .input:focus,
        .wrapper .form .inputfield .textarea:focus,
        .wrapper .form .inputfield .custom_select select:focus {
            border: 1px solid #fec107;
        }
        .wrapper .form .inputfield p {
            font-size: 14px;
            color: #757575;
        }
        .wrapper .form .inputfield .btn {
            width: 100%;
            padding: 8px 10px;
            font-size: 15px;
            border: 0px;
            background: #fec107;
            color: #fff;
            cursor: pointer;
            border-radius: 3px;
            outline: none;
        }
        .wrapper .form .inputfield .btn:hover {
            background: #ffd658;
        }
        .wrapper .form .inputfield:last-child {
            margin-bottom: 0;
        }
        @media (max-width: 420px) {
            .wrapper .form .inputfield {
                flex-direction: column;
                align-items: flex-start;
            }
            .wrapper .form .inputfield label {
                margin-bottom: 5px;
            }
            .wrapper .form .inputfield.terms {
                flex-direction: row;
            }
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gallery.php">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contactUs.php">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br>
<a href="formshow.php"><button style="padding:5px;border-radius:8px;background-color:lightcoral;font-weight:bold">More Events</button></a> 
<div class="wrapper">
    <div class="title">
        Registration Form
    </div>


    <?php if (!empty($errorMessages)): ?>
            <div class="alert alert-danger">
                <?php foreach ($errorMessages as $errorMessage): ?>
                    <p><?php echo htmlspecialchars($errorMessage); ?></p>
                <?php endforeach; ?>
            </div>
        <?php elseif ($insert): ?>
            <div class="alert alert-success">
                <p><?php echo htmlspecialchars($successMessage); ?></p>
            </div>
        <?php endif; ?>

    <div class="form">
        <form action="navreg.php" method="post" enctype="multipart/form-data">
            <div class="inputfield">
                <label>Name</label>
                <input type="text" class="input" name="name">
            </div>  
            <div class="inputfield">
                <label>Email ID</label>
                <input type="text" class="input" name="email">
            </div>
            <div class="inputfield">
                <label>Year</label>
                <input type="text" class="input" name="year">
            </div>
            <div class="inputfield">
                <label>Event Name</label>
                <input type="text" class="input" name="class">
            </div>
            <div class="inputfield">
                <label>Roll No</label>
                <input type="text" class="input" name="rollno">
            </div>
            <div class="inputfield">
                <label>Screenshot</label>
                <input type="file" class="input" name="image">
            </div>
            <div class="inputfield">
                <label>Transaction ID</label>
                <input type="text" class="input" name="years">
            </div>
            <div class="inputfield">
                <input type="submit" value="Register" class="btn">
            </div>
        </form>
    </div>
</div>    

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
