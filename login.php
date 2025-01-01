

<?php  
require_once 'config.php';  
  
$username = $_POST['username'];  
$password = $_POST['password'];  
  
$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";  
$result = $conn->query($query);  
  
if ($result->num_rows > 0) {  
   $user = $result->fetch_assoc();  
   $_SESSION['user_id'] = $user['id'];  
   $_SESSION['username'] = $user['username'];  
   header('Location: dashboard.php');  
   exit;  
} else {  
   echo 'Invalid username or password';  
}  
?>
