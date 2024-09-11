<?php 
require_once('../functions/reusableQuery.php');



/* Update Profile */
if (isset($_POST['UpdateProfile'])) {
	//dd($_POST);
	unset($_POST['UpdateProfile']);
	$res = updateDetails($_POST, 'users', 'user_id', $_POST['user_id']);
    // $user_name = mysqli_real_escape_string($mysqli, $_POST['user_names']);
    // $user_email = mysqli_real_escape_string($mysqli, $_POST['user_email']);
    // $user_ward_id = mysqli_real_escape_string($mysqli, $_POST['user_ward_id']);
    // $user_phone_number = mysqli_real_escape_string($mysqli, $_POST['user_phone_number']);
    // $user_access_level = mysqli_real_escape_string($mysqli, $_POST['user_access_level']);
    // $user_id = mysqli_real_escape_string($mysqli, $_SESSION['user_id']);

    // /* Persist */
    // $update_querry = "UPDATE users SET user_names = '{$user_name}', user_email = '{$user_email}', user_ward_id = '{$user_ward_id}', user_phone_number = '{$user_phone_number}', user_access_level = '{$user_access_level}'
    // WHERE user_id ='{$user_id}'";

    if ($res) {
        $success = "Profile updated";
    } else {
        $err = "Failed, please try again";
    }
}

/* Update Personal Password */
if (isset($_POST['UpdatePasswords'])) {
    $user_id = mysqli_real_escape_string($mysqli, $_SESSION['user_id']);
    $old_password = sha1(md5(mysqli_real_escape_string($mysqli, $_POST['old_password'])));
    $new_password = sha1(md5(mysqli_real_escape_string($mysqli, $_POST['new_password'])));
    $confirm_password = sha1(md5(mysqli_real_escape_string($mysqli, $_POST['confirm_password'])));

    /* Check If Old Password  Match  */
    $sql = "SELECT * FROM  users WHERE user_id = '{$user_id}'";
    $res = mysqli_query($mysqli, $sql);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        if ($old_password != $row['user_password']) {
            $err =  "Please enter correct old password";
        } elseif ($new_password != $confirm_password) {
            $err = "Confirmation password does not match";
        } else {
            $update_querry = "UPDATE users SET  user_password = '{$confirm_password}' WHERE user_id ='{$user_id}'";
            if (mysqli_query($mysqli, $update_querry)) {
                $success = "Password updated";
            } else {
                $err = "Failed, please try again";
            }
        }
    }
}


/* Add User */
if (isset($_POST['Add_User'])) {
	// dd($_POST);
    $user_names = mysqli_real_escape_string($mysqli, $_POST['user_name']);
    $user_email = mysqli_real_escape_string($mysqli, $_POST['user_email']);
    $user_password =  sha1(md5(mysqli_real_escape_string($mysqli, 'Makueni102')));
    $user_phone_number = mysqli_real_escape_string($mysqli, $_POST['user_phone_number']);
    $user_access_level =   mysqli_real_escape_string($mysqli, $_POST['user_access_level']);
    $user_ward_id =   mysqli_real_escape_string($mysqli, $_POST['user_ward_id']);
    $user_personal_number =   mysqli_real_escape_string($mysqli, $_POST['user_personal_number']);

    /* Prevent Double Entries */
    $check_user = mysqli_query($mysqli, "SELECT * FROM users WHERE user_email = '{$user_email}'");
    if (mysqli_num_rows($check_user) > 0) {
        $err = "User Already Exists";
    } else {
        if (mysqli_query($mysqli, "INSERT INTO users (user_names, user_email, user_password, user_phone_number, user_access_level, user_ward_id, user_personal_number) 
            VALUES ('{$user_names}', '{$user_email}', '{$user_password}', '{$user_phone_number}', '{$user_access_level}', '{$user_ward_id}', '{$user_personal_number}')")) {
            $success = "User Added Successfully";
            /* Welcome Email */
            include('../mailers/staff_welcome.php');
        } else {
            $err = "Error Adding User";
        }
    }
}


/* Update Users */
if (isset($_POST['Update_User'])) {
	//dd($_POST);

    $user_name = mysqli_real_escape_string($mysqli, $_POST['user_names']);
    $user_email = mysqli_real_escape_string($mysqli, $_POST['user_email']);
    $user_phone_number_number = mysqli_real_escape_string($mysqli, $_POST['user_phone_number_number']);
    $user_access_level = mysqli_real_escape_string($mysqli, $_POST['user_access_level']);
    $user_id = mysqli_real_escape_string($mysqli, $_POST['user_id']);
	$user_personal_number =   mysqli_real_escape_string($mysqli, $_POST['user_personal_number']);
	$user_ward_id =   mysqli_real_escape_string($mysqli, $_POST['user_ward_id']);



    /* Persist */
    $update_querry = "UPDATE users SET user_name = '{$user_name}', user_email = '{$user_email}', user_phone_number_number = '{$user_phone_number_number}', user_access_level = '{$user_access_level}', user_personal_number = '{$user_personal_number}' user_ward_id = '{$user_ward_id}'
    WHERE user_id ='{$user_id}'";
    if (mysqli_query($mysqli, $update_querry)) {
        $success = "User updated";
    } else {
        $err = "Failed, please try again";
    }
}

/* disable Users */
if (isset($_POST['Disable_User'])) {
    $user_id = mysqli_real_escape_string($mysqli, $_POST['user_id']);
	$success = "User disabled";
    // $delete_sql = "DELETE FROM users WHERE user_id = '{$user_id}'";
    // if (mysqli_query($mysqli, $delete_sql)) {
	// 	$success = "User deleted";
    // } else {
    //     $err = "Failed, please try again";
    // }
}


/* Update Office Password Reset */
if (isset($_POST['Update_Officer_Password'])) {
    $user_id = mysqli_real_escape_string($mysqli, $_POST['user_id']);
    $new_password = sha1(md5(mysqli_real_escape_string($mysqli, 'Makueni102')));
    $confirm_password = sha1(md5(mysqli_real_escape_string($mysqli, 'Makueni102')));

    /* Persist */
    if ($new_password != $confirm_password) {
        $err = "Passwords does not match";
    } else {

        $change_password_sql = "UPDATE users SET user_password = '{$confirm_password}' WHERE user_id = '{$user_id}'";

        if (mysqli_query($mysqli, $change_password_sql)) {
            $success = "Password updated";
			 /* Reset Email */
			 //include('../mailers/reset_password.php');
        } else {
            $err = "Failed, please try again";
        }
    }
}

/** Deactivate system user */
if (isset($_POST['deactivate_user'])) {
	
	$datas = [
		'user_active_status' => 0
	];
	
	$res= updateDetails($datas, 'users', 'user_id', $_POST['user_id']);
	if ($res) {
		$success = "User deactivated successfuly";
	}else{
		$err = "Error, Failed to deactivate";
	}
	
}
