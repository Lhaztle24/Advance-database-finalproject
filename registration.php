<?php
// Include the database configuration file
include("db_config.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve form data
    $Full_name = $_POST['name'];
    $Email = $_POST['email'];
    $Destination = $_POST['destination'];
    $Date = $_POST['date'];

    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO registration (Full_name, Email, Destination, Date) VALUES (?, ?, ?, ?)");

    // Bind parameters
    $stmt->bind_param("ssss", $Full_name, $Email, $Destination, $Date);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Order placed successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>

