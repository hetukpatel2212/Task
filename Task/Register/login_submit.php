<?php
require('connection.php');
require('functions.php');

$email=get_safe_value($con,$_POST['email']);
$password=get_safe_value($con,$_POST['password']);

$res=mysqli_query($con,"select * from users where email='$email' and password='$password'");
$check_user=mysqli_num_rows($res);
if($check_user>0){
	$row=mysqli_fetch_assoc($res);
	$_SESSION['user_id'] = mysqli_insert_id($con);
    $_SESSION['user_name'] = $name;
    $_SESSION['user_email'] = $email;
	echo "valid";
}else{
	echo "wrong";
}
?>
