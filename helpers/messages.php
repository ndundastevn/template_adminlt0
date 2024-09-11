<?php 
require_once('../functions/reusableQuery.php');



/* Update Profile */
if (isset($_POST['sendMassage'])) {
	unset($_POST['sendMassage']);

	//dd($_POST);
	$user_fname = mysqli_real_escape_string($mysqli, $_POST['user_fname']);
	$user_lname = mysqli_real_escape_string($mysqli, $_POST['user_lname']);
	$user_email = mysqli_real_escape_string($mysqli, $_POST['user_email']);
	$user_phone = mysqli_real_escape_string($mysqli, $_POST['user_phone']);
	$inquiry_subject = mysqli_real_escape_string($mysqli, $_POST['inquiry_subject']);
	$inquiry_message = mysqli_real_escape_string($mysqli, $_POST['inquiry_message']);

	
	
	$res = saveData($_POST, 'inquirys');    
	
    if ($res) {
		/* inquiry Email */
		include('../mailers/inquiry.php');
		$success ="message send successful";
    } else {
        $err = "Failed, please try again";
    }
}
