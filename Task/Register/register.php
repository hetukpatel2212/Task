
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register Page</title>
</head>

<body>


    <form action="" method="POST">
        <div class="login">
            <h2>Register Page</h2>
            <div class="loginDetails">
                <div class="input userName">
                    <label for="">Name</label>
                    <input type="text" name="name" id="name"  placeholder="Enter Your Name" required>
                    <span class="field_error" style="color: red;" id="name_error"></span>

                </div>
                <div class="input userName">
                    <label for="">Email</label>
                    <input type="text" name="email" id="email" placeholder="Enter Your Email" required>
                    <span class="field_error" style="color: red;" id="email_error"></span>

                </div>
                <div class="input userName">
                    <label for="">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter The Password" required>
                    <span class="field_error" style="color: red;" id="password_error"></span>

                </div>
                <div class="input userName">
                    <label for="">Address</label>
                    <input type="text" name="address" id="address" placeholder="Enter The Address" required>
                    <span class="field_error" style="color: red;" id="address_error"></span>

                </div>
                <div class="input userName">
                    <label for="">Phone Number</label>
                    <input type="text" name="mobile" id="mobile" placeholder="Enter Your Phone Number" required>
                    <span class="field_error" style="color: red;" id="mobile_error"></span>

                </div>
                <div class="input userName">
                    <label for="">Gender</label>
                    <select name="gender" id="gender">
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="Other">Other</option>
</select>
 </div>
                <div class="input userName">
                    <label for="">Upload Profile Photo</label>
                    <input type="file" name="profile" id="photo" required>
                    <span class="field_error" style="color: red;" id="photo_error"></span>

                </div>
                <br>
                <label for="company">Select Company:</label>
                <br>
    <input type="checkbox" name="company[]" value="Company 1">
    <label for="company">Company 1</label><br>
    <input type="checkbox"  name="company[]" value="Company 2">
    <label for="company">Company 2</label><br>
    <input type="checkbox"  name="company[]" value="Company 3">
    <label for="company">Company 3</label>
    <br>
              									<span class="field_error" id="company_error"></span>
     <br>
                                                <small>Have an account ? <a href="login.php">Login In</a></small>

                <div class="loginBtn">
                <button type="button" class="fv-btn" onclick="user_register()">Register</button>
                </div>
                
            </div>
        </div>
    </form>
								</div>
                                <div class="form-output register_msg">
									<p class="form-messege field_error"></p>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" ></script>
	  <script src="script.js" ></script>
</body>

</html>
