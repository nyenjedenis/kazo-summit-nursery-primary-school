



<?php  
require_once 'config.php';  
  
if (!isset($_SESSION['user_id'])) {  
   header('Location: login.php');  
   exit;  
}  
  
$user_id = $_SESSION['user_id'];  
$username = $_SESSION['username'];  
  
$query = "SELECT * FROM grades WHERE user_id = '$user_id'";  
$result = $conn->query($query);  
  
if ($result->num_rows > 0) {  
   while ($row = $result->fetch_assoc()) {  
      echo $row['grade'] . '<br>';  
   }  
} else {  
   echo 'No grades found';  
}  
?>
