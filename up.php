<?php
$uploadDir = "uploads/";
$uploadFile = $uploadDir . basename($_FILES['image']['name']);
$description = $_POST['description'];
$uploadedBy = "Admin"; // You can change this to the logged-in admin's username

if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
    $imageUrl = $uploadFile;

    // Insert image details into database
    $connection = mysqli_connect("localhost", "root", "KARTHIK@2004", "sample");
    $query = "INSERT INTO gallery_images (image_url, description, uploaded_by) VALUES ('$imageUrl', '$description', '$uploadedBy')";
    mysqli_query($connection, $query);
    mysqli_close($connection);

    // Redirect back to admin panel with success message
    header("Location: admin_panel.php?upload=success");
} else {
    echo "Error uploading file.";
}
?>
