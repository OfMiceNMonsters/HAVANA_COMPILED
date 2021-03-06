<?php

$conn = mysqli_connect("localhost", "root", "", "havana");
session_start();

function strip_tag($string) { 

	// strip html & php tags
	$string = strip_tags($string);

	// strip control characters
	return $string;
}


if (isset($_POST['submit'])) {
	

	$uid = strip_tag($_POST['uid']);
	$pwd = strip_tag($_POST['pwd']);

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
				//Decrypting the password
				$key = 'SecretKeySecretKeySecret'; 
				$encryptedpwd=$pwd;
				$iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_192, MCRYPT_MODE_ECB);
				$iv = mt_rand(0,99999);
				$decryptedtext = mcrypt_decrypt(MCRYPT_RIJNDAEL_192, $key, $encryptedpwd, MCRYPT_MODE_ECB, $iv);
				if ($decryptedtext == false) {
					header("Location: ../wrongpassworderror.php");
					exit();
				} elseif ($decryptedtext == true) {
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
