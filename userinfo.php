<?php

$con = mysqli_connect('localhost','root');

if($con){
	?>
	<script>
		alert("Account Registered")
	</script>
	<?php
}else{
	?>
	<script>
		alert("Registration Error")
	</script>
	<?php
}

mysqli_select_db($con,'rentbike');

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$password = $_POST["password"];
$address = $_POST["address"];
$city = $_POST["city"];
$state = $_POST["state"];
$zip = $_POST["zip"];

$query= "insert into registration (fname, lname, email, password, address, city, state, zip)
values ('$fname ', '$lname', '$email', '$password', '$address', '$city', '$state', '$zip') ";

mysqli_query($con, $query );


?>
<div class="py-3">
   <a href="register.php#Login" class="stretched-link" style="position: relative;">Return to login page?</a>
</div>