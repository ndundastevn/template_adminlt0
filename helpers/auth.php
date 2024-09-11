<?php
require_once('../functions/reusableQuery.php');

/* Add Users */
if (isset($_POST['Add_User'])) {
	//dd($_POST);
    $user_names = mysqli_real_escape_string($mysqli, $_POST['user_names']);
    $user_email = mysqli_real_escape_string($mysqli, $_POST['user_email']);
    $user_phone_number = mysqli_real_escape_string($mysqli, $_POST['user_phone_number']);
    $user_access_level = mysqli_real_escape_string($mysqli, $_POST['user_access_level']);
    $user_password = sha1(md5(mysqli_real_escape_string($mysqli, $pass)));

    /* Prevent Duplications */
    $prevent_duplications = "SELECT * FROM users WHERE user_email = '{$user_email}' || user_phone_number = '{$user_phone_number}'";
    $res = mysqli_query($mysqli, $prevent_duplications);
    if (mysqli_num_rows($res) > 0) {
        $err = "A user with the same email or phone number already";
    } else {
        /* Persist */
        $add_sql = "INSERT INTO users (user_names, user_email, user_phone_number, user_access_level, user_password)
        VALUES('{$user_names}', '{$user_email}', '{$user_phone_number}', '{$user_access_level}', '{$user_password}')";

        /* Load mailer */
        //require_once('../mailers/staff_welcome.php');
        if (mysqli_query($mysqli, $add_sql)) {
			 /* Bind Session Variables */
			 $_SESSION['user_id'] = $user_id;
			 $_SESSION['user_access_level'] = $user_access_level;
			 $_SESSION['user_email'] = $user_email;
			 $_SESSION['user_names'] = $user_names;
			 $_SESSION['success'] = 'Login successful';
	 
	 
			 /* Log This Operation */
			 $log_sql = "INSERT INTO logs (log_user_id, log_user_type, log_date, log_ip_address, log_device) 
			 VALUES ('{$_SESSION['user_id']}', '{$_SESSION['user_access_level']}', NOW(), '{$_SERVER['REMOTE_ADDR']}', '{$_SERVER['HTTP_USER_AGENT']}')";
			 mysqli_query($mysqli, $log_sql);
	 
			header('Location: dashboard');
            exit;
        } else {
            $err = "Failed, please try again";
        }
    }
}

/* Login */
if (isset($_POST['Login'])) {
    $user_email = mysqli_real_escape_string($mysqli, $_POST['user_email']);
    $user_password = sha1(md5(mysqli_real_escape_string($mysqli, $_POST['user_password'])));

    /* Process Login  */
    $login_sql = "SELECT * FROM users  WHERE user_email = '{$user_email}' AND user_password = '{$user_password}'";
    $res = mysqli_query($mysqli, $login_sql);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);

        /* Bind Session Variables */
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['user_access_level'] = $row['user_access_level'];
        $_SESSION['user_email'] = $row['user_email'];
        $_SESSION['user_names'] = $row['user_names'];
        $_SESSION['success'] = 'Login successful';


        /* Log This Operation */
        $log_sql = "INSERT INTO logs (log_user_id, log_user_type, log_date, log_ip_address, log_device) 
        VALUES ('{$_SESSION['user_id']}', '{$_SESSION['user_access_level']}', NOW(), '{$_SERVER['REMOTE_ADDR']}', '{$_SERVER['HTTP_USER_AGENT']}')";
        mysqli_query($mysqli, $log_sql);


        if ($row['user_change_password'] == '0') {
            $_SESSION['success'] = 'Logged in successfully';
            header('Location: dashboard');
            exit;
        } else {
            /* Force Password Reset If User Account Marked To Reset Password */
            $_SESSION['success'] = 'Please change your password to proceed';
            header('Location: force_password_reset');
            exit;
        }
    } else {
        $err = "Invalid login credentials";
    }
}



/* Force Password Reset If User Account Marked To Reset Password */
if (isset($_POST['Change_Password'])) {
    $user_id = mysqli_real_escape_string($mysqli, $_SESSION['user_id']);
    $new_password = sha1(md5(mysqli_real_escape_string($mysqli, $_POST['new_password'])));
    $confirm_password = sha1(md5(mysqli_real_escape_string($mysqli, $_POST['confirm_password'])));

    /* Persist */
    $update_password_sql = "UPDATE users SET user_password = '{$confirm_password}', user_change_password = '0' 
    WHERE user_id = '{$user_id}'";
    if (mysqli_query($mysqli, $update_password_sql)) {
        $_SESSION['success'] = 'Logged in successfully';
        header('Location: dashboard');
        exit;
    } else {
        $err = "Failed, please try again later";
    }
}


/* Reset Password Step 1 */
if (isset($_POST['Reset_Password_Step_1'])) {
    $user_email = mysqli_real_escape_string($mysqli, $_POST['user_email']);
    $reset_token = mysqli_real_escape_string($mysqli, $tk);
    $reset_url = $url . $reset_token;

    /* Check If This Account Exists */
    $staff_check_sql = "SELECT * FROM users WHERE user_email = '{$user_email}'";
    $res = mysqli_query($mysqli, $staff_check_sql);
    if (mysqli_num_rows($res) > 0) {
        /*Persist Reset Token */
        $reset_token_sql = "UPDATE users SET user_password_reset_token = '{$reset_token}' WHERE user_email = '{$user_email}'";

        include('../mailers/reset_password.php');
        if (mysqli_query($mysqli, $reset_token_sql)) {
            $success = "Password reset instructions sent to your email";
        } else {
            $err = "Failed to reset account password, please try again later";
        }
    } else {
        $err = "Email does not exist";
    }
}


/* Reset Password Step 2 */
if (isset($_POST['Reset_Password_Step_2'])) {
    $reset_token = mysqli_real_escape_string($mysqli, $_GET['token']);
    $new_password = sha1(md5(mysqli_real_escape_string($mysqli, $_POST['new_password'])));
    $confirm_password = sha1(md5(mysqli_real_escape_string($mysqli, $_POST['confirm_password'])));

    /* Check If Passwords Match */
    if ($confirm_password != $new_password) {
        $err = "Failed, please try again";
    } else {

        /* Update staff password */
        $staff_check_sql = "SELECT * FROM users WHERE user_password_reset_token = '{$reset_token}'";
        $res = mysqli_query($mysqli, $staff_check_sql);
        if (mysqli_num_rows($res) > 0) {
            /* Update staff passwords */
            $update_password_sql = "UPDATE users SET user_password = '{$new_password}', user_password_reset_token = '' WHERE user_password_reset_token = '{$reset_token}'";
            if (mysqli_query($mysqli, $update_password_sql)) {
                $_SESSION['success'] = "Password reset successful, proceed to login";
                header('Location: login');
                exit;
            } else {
                $err = "Failed, please try again later";
            }
        }
    }
}
