<?php

$conn = mysqli_connect("localhost", "root", "", "havana");
session_start();

function strip_tag($string) { 

	// strip html & php tags
	$string = strip_tags($string);
	// strip control characters
	return preg_replace('/[[:punct:]]/', ' ', $string);

}


if (isset($_POST['submit'])) {
	

	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];

	//Error handlers
	//Check if inputs are empty
	if (empty($uid) || empty($pwd)) {
		header("Location: ../index.php");
		exit();
	} else {
		$sql = "SELECT * FROM usersandemail WHERE username='$uid' OR user_email='$uid'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
			header("Location: ../index.php?login=error");
			exit();
		} else {
			if ($row = mysqli_fetch_assoc($result)) {
				//De-hashing the password
				$hashedPwdCheck = password_verify($pwd, $row['user_password']);
				if ($hashedPwdCheck == false) {
					echo 'Please try again, invalid username or password. <a href="<a href=C:\xampp\htdocs\prac\LOGIN_2_SYA\LOGIN_2_SYA\rootfolder\KHAI_HOMEPAGE\LOGIN_khai\rootfolder\index.php">Return to Homepage </a> ';
					exit();
				} elseif ($hashedPwdCheck == true) {
					//Log in the user here
					$_SESSION['user_id'] = $row['user_id'];
					$_SESSION['user_email'] = $row['user_email'];
					$_SESSION['user_uid'] = $row['username'];
					$_SESSION['role']= $row['role'];



					/*if($_POST['token'] == $_SESSION['token']){
					  $age_token = time() - $_SESSION['token_time'];
					  if($age_token <= 30){ //limit the validity of token. counts in min? we give 30mins? 60*30=1800
*/
					    //so if you don't have a session id, never login so, redirect to index.php
					    if(!isset($_SESSION['user_id'])){
					      header("Location: ../index.php");

					    }else{

					      //if the session has been set, the if else loop will check if user is an admin or not 
					      if($_SESSION['role'] == 'admin'){
					        //if admin, then redirect them to the admin page
					        header("Location: ../crudINDEX.php");
					      }else{
					        //if it is not an admin, it would be a normal user
					        //redirect to member page
					        header("Location: ../index.php");

					      
					    }

					  } 
					
/*

					}
					}

					else{
					  //if the token is not set then means that the session token has expired.
					  header("Location: ../index.php?session=timeout");
					  
					}
*/
					      
					    }

					exit();
				}
			}
		}
	}
 else {
	header("Location: ../index.php?login=error");
	exit();
}
