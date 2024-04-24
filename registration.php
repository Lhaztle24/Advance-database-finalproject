 <?php 

include ("registration.php");

if ($_SERVER ["REQUEST_METHOD] = "POST) {

 $Full_name = $_POST ['name'];
 $Email = $_POST ['email'];
 $Destination = $_POST ['destination'];
 $date = $_POST ['date'];
 $user_id = $_POST ['user_id'];


 $stmt = $conn prepare ("INSERT INTO register (Full_name, Email, Destination, date, user_id) VALUES (?, ?, ?, ?, ?)");

 $stmt bind_param("ssssi", $Full_name, $Email, $Destination, $Date, $user_id);

 if ($stmt excute()) {
  echo "order placed successfully";
 }
 else{
  echo "Error: " . $stmt error;
 }
    ?>
 

