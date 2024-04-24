<?php
// Include the database configuration file
include("db_config.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve form data
    $User_ID = $_POST['ID'];
    $Full_Name = $_POST['name'];
    $Email = $_POST['email'];
    $Destination = $_POST['destination'];
    $Date_of_Travel = $_POST['date'];

    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO registration1 (Full_Name, Email, Destination, Date_of_Travel) VALUES (?, ?, ?, ?)");

    // Bind parameters
    $stmt->bind_param("ssss", $Full_Name, $Email, $Destination, $Date_of_Travel);

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

