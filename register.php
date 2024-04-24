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
