<?php
$servername = "localhost";
$username = "root";
$password = "KARTHIK@2004";
$dbname = "om";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die(json_encode(['error' => 'Connection failed: ' . $conn->connect_error]));
}

// Fetch data from the database
$sql = "SELECT * FROM hello";
$result = $conn->query($sql);

if (!$result) {
    die(json_encode(['error' => 'Query failed: ' . $conn->error]));
}

// Debugging: Start of JSON response
echo '/* Start of JSON response */';

// Return data as JSON (or any other format you prefer)
echo json_encode($result->fetch_all(MYSQLI_ASSOC));

// Debugging: End of JSON response
echo '/* End of JSON response */';

// Close the database connection
$conn->close();

