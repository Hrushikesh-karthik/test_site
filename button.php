<!DOCTYPE html>
<html>
<head>
    <title>User Page - Dynamic Buttons</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        #buttonContainer {
            margin-top: 20px;
        }
        button {
            padding: 10px 20px;
            margin: 5px;
            border: none;
            background-color: #007BFF;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
    <script>
        function handleClick(url) {
            window.location.href = url;
        }
    </script>
</head>
<body>
    <h1>Available Buttons</h1>
    <div id="buttonContainer">
        <?php
        $conn = new mysqli('localhost', 'root', 'KARTHIK@2004', 'om');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $result = $conn->query("SELECT label, url FROM buttons");
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<button onclick=\"handleClick('{$row['url']}')\">{$row['label']}</button>";
            }
        } else {
            echo "No buttons available.";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>
