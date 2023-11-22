<?php
require('connection.php');
require('functions.php');

$name=get_safe_value($con,$_POST['name']);
$email=get_safe_value($con,$_POST['email']);
$password=get_safe_value($con,$_POST['password']);
$address=get_safe_value($con,$_POST['address']);
$mobile=get_safe_value($con,$_POST['mobile']);
$gender=get_safe_value($con,$_POST['gender']);
$photo=get_safe_value($con,$_POST['photo']);
$company=get_safe_value($con,$_POST['company']);


$check_user=mysqli_num_rows(mysqli_query($con,"select * from users where email='$email'"));
if($check_user>0){
	echo "email_present";
}else{

	mysqli_query($con,"insert into users(name,email,password,address,mobile,gender,photo,company) values('$name','$email','$password','$address','$mobile','$gender','$photo','$company')");
	
	echo "insert";
	
}
?>
