<?php
// Assuming you have a database connection
$servername = "localhost";
$username = "root";
$password = "KARTHIK@2004";
$dbname = "om";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the search term from the form submission
$searchTerm = isset($_GET['search']) ? $_GET['search'] : '';

// Perform the search using a prepared statement
$results = array();
if (!empty($searchTerm)) {
    $sql = "SELECT * FROM clients WHERE phone LIKE ?";
    $stmt = $conn->prepare($sql);
    
    // Add wildcard % to search for partial matches
    $searchTerm = '%' . $searchTerm . '%';
    
    $stmt->bind_param("s", $searchTerm);
    $stmt->execute();
    
    $result = $stmt->get_result();
    
    while ($row = $result->fetch_assoc()) {
        $results[] = $row['phone']; // Adjust 'column_name' based on your database structure
    }
    
    $stmt->close();
}

// Display the results
if (!empty($results)) {
    echo "<h2>Search Results:</h2>";
    echo "<ul>";
    foreach ($results as $result) {
        echo "<li>$result</li>";
    }
    echo "</ul>";
} else {
    echo "<p>No results found.</p>";
}

$conn->close();
?>
