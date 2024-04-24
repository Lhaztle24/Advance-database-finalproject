 <?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $destination = $_POST['destination'];
    $date = $_POST['date'];
    
    // Save the data to a file, database, or send it via email
    // For example, you can save it to a text file
    $file = fopen("registered_tickets.txt", "a");
    fwrite($file, "Name: $name\n");
    fwrite($file, "Email: $email\n");
    fwrite($file, "Destination: $destination\n");
    fwrite($file, "Date of Travel: $date\n");
    fwrite($file, "-----------------\n");
    fclose($file);

    // Redirect to a thank you page
    header("Location: thankyou.html");
    exit;
} else {
    // If accessed directly without form submission, redirect to home page
    header("Location: index.html");
    exit;
}

    ?>
  </div>
</body>
</html>
