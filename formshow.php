<?php
$servername = "localhost";
$username = "root";
$password = "KARTHIK@2004";
$dbname = "om";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT form_content, is_active FROM forms WHERE id=1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$form_content = $row['form_content'];
$form_is_active = $row['is_active'];

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Viewport meta tag for responsive design -->
    <title>Website</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    document.addEventListener('DOMContentLoaded', (event) => {
        // Get the scroll message element
        const scrollMessage = document.querySelector('.scroll-message');

        // Add click event listener to the scroll message
        scrollMessage.addEventListener('click', () => {
            // Calculate the center of the page
            const centerPosition = document.body.scrollHeight / 2 - window.innerHeight / 2;

            // Smoothly scroll to the center position
            window.scrollTo({
                top: centerPosition,
                behavior: 'smooth'
            });
        });
    });
    </script>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif; /* Consistent font across devices */
        }
        .always-visible {
    font-family: 'Arial', sans-serif; /* Modern and readable font */
    color: #333; /* Dark grey color for contrast */
    text-align: center; /* Centered text for a clean look */
    padding: 20px; /* Add some padding around the text */
    border-radius: 8px; /* Slightly rounded corners */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
    background-color: #f4f4f4; /* Light gray background */
    border: 1px solid #ddd; /* Light border to define the section */
}

.always-visible p {
    font-size: 18px; /* Slightly larger font size for readability */
    line-height: 1.6; /* Increased line height for better spacing */
}

.always-visible p strong {
    color: #d9534f; /* Highlight color for emphasis */
}
        .scroll-message {
            font-size: 22px;
            color: #007bff;
            font-weight: bold;
            margin-top: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .page {
            display: flex;
            flex-direction: column;
            align-items: center;
            background: #161623;
            padding: 20px; /* Added padding for better mobile view */
        }
        .eventcon {
            display: flex;
            flex-direction: column;
            align-items: center;
            max-width: 100%; /* Ensure it fits the screen width */
        }
        .eventcard {
            width: 100%;
            max-width: 400px; /* Maximum width for larger screens */
            margin: 15px;
            box-shadow: 20px 20px 50px rgba(0, 0, 0, 0.5);
            border-radius: 15px;
            background: rgba(255,255,255,0.1);
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            border-top: 1px solid rgba(255,255,255,0.5);
            border-left: 1px solid rgba(255,255,255,0.5);
            backdrop-filter: blur(5px);
            position: relative;
        }
        .eventcard .data {
            padding: 20px;
            text-align: center;
            transform: translateY(100px);
            opacity: 0;
            transition: 0.5s;
        }
        .eventcard:hover .data {
            transform: translateY(0px);
            opacity: 1;
        }
        .eventcard .data h2 {
            position: absolute;
            top: -80px;
            right: 30px;
            font-size: 3em; /* Scaled down for mobile */
            color: rgba(255,255,255,0.5);
        }
        .eventcard .data h3 {
            font-size: 1.5em; /* Scaled down for mobile */
            color: white;
        }
        .eventcard .data p {
            font-size: 1em;
            color: white;
            font-weight: 100;
        }
        .eventcard .data a {
            padding: 8px 20px;
            margin-top: 15px;
            background: white;
            color: black;
            border-radius: 20px;
            text-decoration: none;
            font-weight: 500;
            box-shadow: gray;
        }
        .imgdiv {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
        }
        .imgdiv img {
            width: 100%;
            height: auto;
        }
        /* Responsive adjustments for smaller screens */
        @media (max-width: 768px) {
            .always-visible p {
                font-size: 16px; /* Smaller font size for mobile */
            }
            .scroll-message {
                font-size: 18px; /* Smaller font size for mobile */
            }
            .eventcard .data h2 {
                font-size: 2em; /* Smaller size for mobile */
            }
            .eventcard .data h3 {
                font-size: 1.2em; /* Smaller size for mobile */
            }
        }

        .qr-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 20px 0;
            text-align: center;
        }
        .qr-container img {
            margin-bottom: 15px;
            border: 2px solid #000; /* Optional: Add a border to the QR code */
            padding: 10px;
            border-radius: 10px;
        }
        .qr-container .qr-label {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 5px;
            color: #000;
        }
        .qr-container .upi-label {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 5px;
            color: #000;
        }
        .qr-container .upi-value {
            font-size: 18px;
            color: #333;
            font-weight: bold;
        }
    </style>
</head>
<body>
<header class="text-gray-600 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" href="index.php">
     
       <img src="logo.png" width="70px" height="70px">
      </svg>
      <span class="ml-3 text-xl">TECHIE-HUB</span>
    </a>
    <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
      <a class="mr-5 hover:text-gray-900" href="index.php">Home</a>
      <a class="mr-5 hover:text-gray-900" href="about.html">About</a>
      <a class="mr-5 hover:text-gray-900" href="gallery.php">Gallery</a>
      
    </nav>
    <a href="contactUs.php"> <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Contact Admin
      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
        <path d="M5 12h14M12 5l7 7-7 7"></path>
      </svg>
    </button>  </a>
  </div>
</header>

<div class="always-visible">
    <p>Welcome to the Events Page! 🎉</p>
    <p>Looking for something exciting to register for? Well, you’re in the right place!</p>
    <p><strong>Is the form missing?</strong> 😲 Don't worry, it’s just taking a coffee break ☕. Register yourselves for the next big thing!</p>
    <p class="scroll-message">Tap or Scroll down for more events!</p>
</div>
<br>
<div class="qr-container">
    <div class="qr-label">QR</div>
    <?php
    // Fetch QR and UPI from the database
    $servername = "localhost";
    $username = "root";
    $password = "KARTHIK@2004";
    $dbname = "om";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM qr";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<img src='qrimg.php?id={$row['id']}' width='250' height='250'>";
            $upi = isset($row['upi']) ? $row['upi'] : 'N/A';
            echo "<div class='upi-label'>UPI</div>";
            echo "<div class='upi-value'>{$upi}</div>";
        }
    } else {
        echo "No QR/UPI data found.";
    }

    $conn->close();
    ?>
</div>
<div class="imgdiv">
  <div class="imgdiv1">
<?php
                $servername = "localhost";
                $username = "root";
                $password = "KARTHIK@2004";
                $database = "om";
                $conn = mysqli_connect($servername, $username, $password, $database);
                
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $sql = "SELECT * FROM pavani";
                $result = $conn->query($sql);

                if (!$result) {
                    die("Invalid query: " . mysqli_error($conn));
                }

                while ($row = $result->fetch_assoc()) {
                    echo "<tr >";
                   echo "<td><img src='posimg.php?id={$row['id']}' width='380' height='750'></td>";

                    //echo "<td>{$row['id']}</td>";
                   
                    
                

                    echo "</tr>";
                }
                ?>
  </div>
                <div class="imgdiv2">
    <?php if ($form_is_active): ?>
        <?php echo $form_content; ?>
    <?php endif; ?>
    </div>
    </div>
    <div class="imgdiv">
  <div class="imgdiv1">
<?php
                $servername = "localhost";
                $username = "root";
                $password = "KARTHIK@2004";
                $database = "om";
                $conn = mysqli_connect($servername, $username, $password, $database);
                
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $sql = "SELECT * FROM pos1";
                $result = $conn->query($sql);

                if (!$result) {
                    die("Invalid query: " . mysqli_error($conn));
                }

                while ($row = $result->fetch_assoc()) {
                    echo "<tr >";
                   echo "<td><img src='posimg1.php?id={$row['id']}' width='500' height='750'></td>";

                    //echo "<td>{$row['id']}</td>";
                   
                    
                

                    echo "</tr>";
                }
                ?>
  </div>
                <div class="imgdiv2">
    <?php if ($form_is_active): ?>
        <?php echo $form_content; ?>
    <?php endif; ?>
    </div>
    </div>
    <!--
    third poster and table
    -->
    <div class="imgdiv">
  <div class="imgdiv1">
<?php
                $servername = "localhost";
                $username = "root";
                $password = "KARTHIK@2004";
                $database = "om";
                $conn = mysqli_connect($servername, $username, $password, $database);
                
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $sql = "SELECT * FROM pos2";
                $result = $conn->query($sql);

                if (!$result) {
                    die("Invalid query: " . mysqli_error($conn));
                }

                while ($row = $result->fetch_assoc()) {
                    echo "<tr >";
                   echo "<td><img src='posimg2.php?id={$row['id']}' width='500' height='750'></td>";

                    //echo "<td>{$row['id']}</td>";
                   
                    
                

                    echo "</tr>";
                }
                ?>
  </div>
                <div class="imgdiv2">
    <?php if ($form_is_active): ?>
        <?php echo $form_content; ?>
    <?php endif; ?>
    </div>
    </div>
    <!-- single form
    -->
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
 <div class="imgdiv">
  <div class="imgdiv1">
<?php
                $servername = "localhost";
                $username = "root";
                $password = "KARTHIK@2004";
                $database = "om";
                $conn = mysqli_connect($servername, $username, $password, $database);
                
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $sql = "SELECT * FROM pos3";
                $result = $conn->query($sql);

                if (!$result) {
                    die("Invalid query: " . mysqli_error($conn));
                }

                while ($row = $result->fetch_assoc()) {
                    echo "<tr >";
                   echo "<td><img src='posimg3.php?id={$row['id']}' width='380' height='750'></td>";

                    //echo "<td>{$row['id']}</td>";
                   
                    
                

                    echo "</tr>";
                }
                ?>
  </div>
                <div class="imgdiv2">
    <?php if ($form_is_active): ?>
        <?php echo $form_content; ?>
    <?php endif; ?>
    </div>
    </div>
</body>
</html>