<?php 
require_once('../functions/reusableQuery.php');

/* Add News */
if (isset($_POST['Add_News'])) {
	unset($_POST['Add_News']);
	$_POST['news_user_id'] = $_SESSION['user_id'];

	//dd($_POST);

	
	$res = saveData($_POST, 'news');    
	
    if ($res) {
		$success ="Save dsuccessful";
    } else {
        $err = "Failed, please try again";
    }
}

/* Update News */
if (isset($_POST['Update_News'])) {
	unset($_POST['Update_News']);
	$_POST['news_user_id'] = $_SESSION['user_id'];
	if(empty($_POST['published_status'])){
		$_POST['published_status'] = 'Off';
	}

	//dd($_POST);

	
	$res = updateDetails($_POST, 'news', 'news_id', $_POST['news_id']);
	
    if ($res) {
		$success ="Updated Successful";
    } else {
        $err = "Failed, please try again";
    }
}

/* Delete News */
if (isset($_POST['deleteNews'])) {
	unset($_POST['deleteNews']);
	
	//dd($_POST);
	
	$delete_querry = "DELETE FROM news WHERE news_id ='{$_POST['news_id']}'";
    if (mysqli_query($mysqli, $delete_querry)) {
        $success = "Deleted Successful";
    } else {
        $err = "Failed, please try again";
    }
}
