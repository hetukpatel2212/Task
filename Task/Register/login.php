<?php  
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login Page</title>
</head>

<body>


    <form action="" method="POST">
        <div class="login">
            <h2>Login Page</h2>
            <div class="loginDetails">

                <div class="input userName">
                    <label for="">Email</label>
                    <input type="text" name="email" id="login_email" placeholder="Enter Your Email">
                    <span class="field_error" id="login_email_error"></span>

                </div>

                <div class="input userName">
                    <label for="">Password</label>
                    <input type="password" name="password" id="login_password" placeholder="Enter The Password">
                    <span class="field_error" id="login_password_error"></span>

                </div>
                <small>You don't have accounnt ? <a href="register.php">Register</a></small>
                <div class="loginBtn">
                <button type="button" class="fv-btn" onclick="user_login()">Login</button>
                </div>
            </div>
        </div>
    </form>
    <div class="form-output login_msg">
									<p class="form-messege field_error"></p>
								</div>
</body>

</html>     <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" ></script>
	  <script src="script.js" ></script>
