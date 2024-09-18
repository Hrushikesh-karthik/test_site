<?php
// Assuming you have fetched patient details including id, name, age, phone, gender, test from the database
$patient_id = "123"; // Example patient id
$patient_name = "John Doe"; // Example patient name
$patient_age = "30"; // Example patient age
$patient_phone = "1234567890"; // Example patient phone
$patient_gender = "Male"; // Example patient gender
$patient_test = "Blood Test"; // Example test name

// Generate the new report content
$new_report_content = "Patient ID: $patient_id\n";
$new_report_content .= "Name: $patient_name\n";
$new_report_content .= "Age: $patient_age\n";
$new_report_content .= "Phone: $patient_phone\n";
$new_report_content .= "Gender: $patient_gender\n";
$new_report_content .= "Test: $patient_test\n";

// Save the new report content to a text file
$new_report_file = "reports/report_$patient_id.txt";
file_put_contents($new_report_file, $new_report_content);

// Generate the new report image
$new_report_image = imagecreate(500, 200); // Example width and height
$background_color = imagecolorallocate($new_report_image, 255, 255, 255); // White background
$text_color = imagecolorallocate($new_report_image, 0, 0, 0); // Black text
imagestring($new_report_image, 5, 10, 10, $new_report_content, $text_color);

// Load the old report image if it exists
$old_report_file = "reports/old_report_$patient_id.png";
if (file_exists($old_report_file)) {
    $old_report_image = imagecreatefrompng($old_report_file);
    $old_report_width = imagesx($old_report_image);
    $old_report_height = imagesy($old_report_image);
    // Place the old report image on the right side of the new report image
    imagecopy($new_report_image, $old_report_image, 250, 0, 0, 0, $old_report_width, $old_report_height);
}

// Save the new report image
$new_report_image_file = "reports/new_report_$patient_id.png";
imagepng($new_report_image, $new_report_image_file);

// Free up memory
imagedestroy($new_report_image);
if (isset($old_report_image)) {
    imagedestroy($old_report_image);
}

// Redirect to the page where the new report is displayed
header("Location: mediadmin.php");
exit();
?>
