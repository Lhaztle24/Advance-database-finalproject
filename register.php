<!DOCTYPE html>
<html>
<head>
  <title>Booking Confirmation</title>
  <style>
    body {
      background-image: url('ticket booking.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      color: white;
      font-family: Arial, sans-serif;
    }

    h1 {
      color: white;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
      text-align: center;
    }

    .container {
      max-width: 400px;
      margin: 0 auto;
      background-color: rgba(0, 0, 0, 0.5);
      padding: 20px;
      border-radius: 5px;
    }

    p {
      color: white;
    }
  </style>
</head>
<body>
  <h1>Booking Confirmation</h1>
  <div class="container">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = $_POST["name"];
      $email = $_POST["email"];
      $destination = $_POST["destination"];
      $date = $_POST["date"];

      // You can add more validation or processing logic here

      echo "<p>Thank you, $name, for booking your ticket to $destination on $date. An email confirmation has been sent to $email.</p>";
    } else {
      echo "<p>Sorry, there was an error processing your request.</p>";
    }
    ?>
  </div>
</body>
</html>
