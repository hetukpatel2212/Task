<?php 
session_start();

if(isset($_SESSION['name'])){
    header('register.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>

<body>
    <h1> Welcome to Home Page. </h1>
    <a href="logout.php"><button>Logout</button></a>
</body>

</html>
