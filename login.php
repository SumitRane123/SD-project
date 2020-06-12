

<?php
session_start();


$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "rentbike"; /* Database name */


$con = mysqli_connect($host, $user, $password,$dbname);

?>

<?php

     if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $email = mysqli_real_escape_string($con,$_POST['email']);
      $password = mysqli_real_escape_string($con,$_POST['password']); 
      
      $sql = "SELECT id FROM registration WHERE email = '$email' and password = '$password'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);

      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1){
         
         $_SESSION['login_user'] = $email;
         echo "Login successfull";
         header("location: rent.php");
      }else {
         echo "error occured";
      }
   }

?>