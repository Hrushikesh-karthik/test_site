<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Students Registered</h2>
        <form action="" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" id="search" name="search" class="form-control" placeholder="Enter your search term">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>

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
            $sql = "SELECT * FROM clients WHERE years LIKE ? OR name LIKE ? OR email LIKE ? OR rollno LIKE ? OR class LIKE ? OR year LIKE ?";
            $stmt = $conn->prepare($sql);
            
            // Add wildcard % to search for partial matches
            $searchTerm = '%' . $searchTerm . '%';
            
            $stmt->bind_param("ssssss", $searchTerm, $searchTerm, $searchTerm, $searchTerm, $searchTerm, $searchTerm);
            $stmt->execute();
            
            $result = $stmt->get_result();
            
            while ($row = $result->fetch_assoc()) {
                $results[] = $row;
            }
            
            $stmt->close();
            
        }

        // Display the results
        if (!empty($results)) {
            echo "<h3>Search Results:</h3>";
            echo "<table class='table'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Roll no</th>";
            echo "<th>Class</th>";
            echo "<th>Name</th>";
            echo "<th>Email</th>";
            echo "<th>Transaction ID</th>";
            echo "<th>Year</th>";
            echo "<th>Created at</th>";
            echo "<th>Action</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            foreach ($results as $row) {
                echo "<tr>";
                echo "<td>{$row['id']}</td>";
                echo "<td>{$row['rollno']}</td>";
                echo "<td>{$row['class']}</td>";
                echo "<td>{$row['name']}</td>";
                echo "<td>{$row['email']}</td>";
                echo "<td>{$row['years']}</td>";
                echo "<td>{$row['year']}</td>";
                echo "<td>{$row['created_at']}</td>";
                echo "<td>
                        <a class='btn btn-primary btn-sm' href='edit.php?id={$row['id']}'>Edit</a>
                        <a class='btn btn-danger btn-sm' href='delete.php?id={$row['id']}'>Delete</a>
                        <a class='btn btn-primary btn-sm' href='view.php?id={$row['id']}'>View</a>
                    </td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
        } else {
            echo "<p>No results found.</p>";
        }

        $conn->close();
        ?>
    </div>
</body>

</html>
