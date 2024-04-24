 <?php 

include ("registration");

if ($_SERVER ["REQUEST_METHOD] = "POST) {

 $Full_name = $_POST ['name'];
 $Email = $_POST ['email'];
 $Destination = $_POST ['destination'];
 $date = $_POST ['date'];


 $stmt = $conn prepare ("INSERT INTO register (Full_name, Email, Destination, date) VALUES (?, ?, ?, ?)

 $stmt bind_param("ssssi", $Full_name, $Email, $Destination, $date);

 if ($stmt excute()) {
  echo "order placed successfully";
 }
 else{
  echo "Error: " . $stmt error;
 }
    ?>
  </div>
</body>
</html>
