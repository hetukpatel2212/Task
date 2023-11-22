function user_register() {
    jQuery('.field_error').html('');
    var name = jQuery("#name").val();
    var email = jQuery("#email").val();
    var password = jQuery("#password").val();
    var address = jQuery("#address").val();
    var mobile = jQuery("#mobile").val();
    var gender = jQuery("#gender").val();
    var photo = jQuery("#photo").val();
    var company = jQuery("#company").val();
    var nameRegex = /^[a-zA-Z]+$/;
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    var contactRegex = /^\d{10}$/;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
    var is_error = '';
    if (name == "") {
        jQuery('#name_error').html('Please enter name');
        is_error = 'yes';
    } else {
        if (!nameRegex.test(name)) {
            jQuery('#name_error').html('Please enter latter.');
            is_error = 'yes';
        }
    }
    if (email == "") {
        jQuery('#email_error').html('Please enter email.');
        is_error = 'yes';
    } else {
        if (!emailRegex.test(email)) {
            jQuery('#email_error').html('Please enter a valid email address.');
            is_error = 'yes';
        }
    }

    if (password == "") {
        jQuery('#password_error').html('Please enter password.');
        is_error = 'yes';
    } else {
        if (!passwordRegex.test(password)) {
            jQuery('#password_error').html('Password must contain at least one uppercase letter, one lowercase letter, one number, and one special character. It should be at least 8 characters long.');
            is_error = 'yes';
        }
    }
    if (address == "") {
        jQuery('#address_error').html('Please enter address.');
        is_error = 'yes';
    }
    if (mobile == "") {
        jQuery('#mobile_error').html('Please enter mobile.');
        is_error = 'yes';
    } else {
        if (!contactRegex.test(mobile)) {
            jQuery('#mobile_error').html('Contact number should contain exactly 10 digits.');
            is_error = 'yes';
        }
    }
    if (gender == "") {
        jQuery('#gender_error').html('Please enter gender.');
        is_error = 'yes';
    }
    if (photo == "") {
        jQuery('#photo_error').html('Please choose photo.');
        is_error = 'yes';
    } else {
        if (!allowedExtensions.exec(photo)) {
            jQuery('#photo_error').html('Only JPG and PNG images are allowed.');
            is_error = 'yes';
        }
    }
    if (company == "") {
        jQuery('#company_error').html('Please enter company.');
        is_error = 'yes';
    }
    if (is_error == '') {
        jQuery.ajax({
            url: 'register_submit.php',
            type: 'post',
            data: 'name=' + name + '&email=' + email + '&password=' + password + '&address=' + address + '&mobile=' + mobile + '&gender=' + gender + '&photo=' + photo + '&company=' + company,
            success: function(result) {
                if (result == 'email_present') {
                    jQuery('#email_error').html('Email id already present');
                }
                if (result == 'insert') {
                    window.location.href = 'home.php';
                }
            }
        });
    }

}

function user_login() {
    jQuery('.field_error').html('');
    var email = jQuery("#login_email").val();
    var password = jQuery("#login_password").val();
    var is_error = '';
    if (email == "") {
        jQuery('#login_email_error').html('Please enter email');
        is_error = 'yes';
    }
    if (password == "") {
        jQuery('#login_password_error').html('Please enter password');
        is_error = 'yes';
    }
    if (is_error == '') {
        jQuery.ajax({
            url: 'login_submit.php',
            type: 'post',
            data: 'email=' + email + '&password=' + password,
            success: function(result) {
                if (result == 'wrong') {
                    jQuery('.login_msg p').html('Please enter valid login details');
                }
                if (result == 'valid') {
                    window.location.href = 'home.php';
                }
            }
        });
    }
}
