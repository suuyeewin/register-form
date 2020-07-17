<?php

	// //Connect to mysqli server
	 $link = mysqli_connect('localhost','root',"");
	 if(!$link) {
	 	die('Failed to connect to server: ' . mysqli_error());
	 }

	// //Select database
	 $db = mysqli_select_db( $link,'registers');
	 if(!$db) {
	 	die("Unable to select database");
	 }

	//Sanitize the POST values
	$login = $_POST['username'];
	$password = $_POST['password'];

	//Create query
	$qry="SELECT * FROM account WHERE username='$login' AND password='$password'";
	$result=mysqli_query($link,$qry);

	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			//Login Successful
			session_start();
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['id'];
			$_SESSION['SESS_FIRST_NAME'] = $member['username'];
			header("location: undeli.php");
			exit();
		}
		else {
			//Login failed
			header("location: admin.php");
			exit();
			  }
			}
	else {
		die("Query failed");
	}
?>
