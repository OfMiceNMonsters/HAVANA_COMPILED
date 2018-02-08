<?php

$conn=mysqli_connect('localhost','root','','havana');

function strip_tag($string) { 

	// strip html & php tags
	$string = strip_tags($string);
	// strip control characters
	return preg_replace('/[[:punct:]]/', ' ', $string);

}

if (isset($_POST['submit'])) {
	
	$email = htmlspecialchars(strip_tags($_POST['email']));
	$username = htmlspecialchars(strip_tags($_POST['uid']));
	$password = htmlspecialchars(strip_tags($_POST['pwd']));
	$repassword = htmlspecialchars(strip_tags($_POST['pwd']));
	
	//check if any input is empty
	if (empty($email) || empty($username) || empty($password) || empty($repassword)) 
	{
		header("Location: /inputempty.php");
		exit();
	} 
	else
	{
		$sql = "SELECT username FROM usersandemail WHERE user_email=?";
		
		//prepared statement , init stands for initialize.
		$statement= mysqli_stmt_init($conn);
		
		//prepare prepared statement, make use of the sql statement and do if statement
		if(!mysqli_stmt_prepare($statement,$sql)) //if function here doesnt succeed then proceed to if loop
		{
			echo "SQL statement failed";
		}
		else
		{
			//bind parameters to ? //can use s:string i:integet b:blob d:double
			//3rd param is to search for that thing in database
			mysqli_stmt_bind_param($statement, "s", $email);
			
			//run parameters inside database
			mysqli_stmt_execute($statement);
			//get the data
			$result=mysqli_stmt_get_result($statement);
			
			$row= mysqli_fetch_assoc($result);
			//var_dump ($row);
			$rowcount=mysqli_num_rows($result);
			if($rowcount<0)
			{
				printf ("User doesnt exist. Try again.");
			}
		else
		{
				$sqlsql = "SELECT user_email FROM usersandemail WHERE username=?";
		
		//prepared statement , init stands for initialize.
		$stmt= mysqli_stmt_init($conn);
		
		//prepare prepared statement, make use of the sql statement and do if statement
		if(!mysqli_stmt_prepare($stmt,$sql)) //if function here doesnt succeed then proceed to if loop
		{
			echo "SQL statement failed";
		}
		else
		{
			//bind parameters to ? //can use s:string i:integet b:blob d:double
			//3rd param is to search for that thing in database
			mysqli_stmt_bind_param($stmt, "s", $username);
			
			//run parameters inside database
			mysqli_stmt_execute($stmt);
			//get the data
			$results=mysqli_stmt_get_result($stmt);
			
			$row= mysqli_fetch_assoc($results);
			$rowcounts=mysqli_num_rows($results);
			if($rowcounts<0)
			{
				printf ("Email doesnt exist. Try again.");
			}
			else
			{
			$key = 'SecretKeySecretKeySecret'; //i made it 24 bits instead.
			$encryptedpwd=$password;
			$iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_192, MCRYPT_MODE_ECB);
			//create IV with random numbers
			$iv = mt_rand(0,99999);
			//get iv size
			$encryptedtext = mcrypt_encrypt(MCRYPT_RIJNDAEL_192, $key, $encryptedpwd, MCRYPT_MODE_ECB, $iv);		
			$secretKey="6Le6ukAUAAAAANWzrVAdzQrKBRGpZHntHeXK_qXf";
			$responseKey=$_POST['g-recaptcha-response'];
			$url="https://www.google.com/recaptcha/api/siteverify?=$secretKey&response=$responseKey";
			$response=file_get_contents($url);
			$response=json_decode($response);

						//$queryquery = "UPDATE usersandemail SET user_password=? WHERE username=$username" ;  
							//					$statement = $conn->prepare($queryquery);
								//				$statement->bind_param("s",  $encryptedtext);
									//			$statement->execute(); 
									$queryquery = "UPDATE usersandemail SET user_password = ? WHERE username = ?";
									$stmt=$conn->prepare($queryquery);
									$stmt->bind_param('ss',$encryptedtext, $username);
									$stmt->execute();
						$body ="Hi, $username. Your password has been updated. Click here to head down to our page: http://localhost/HAVANA_PROJECT-master/index.php
													With love, 
													Team HAVANA";
						$headers = 'From: havana@gmail.com' . "\r\n" 
            .'Reply-To: havana@gmail.com';	
						header("Location: ../changepasswordsuccessful.php");
			mail("$email","Subject",$body,$headers);
						echo "Email has been sent to confirm whether your password has been changed!";
						exit();
						}
		}
		}
					}
		}
		}
else 
{
	header("Location: ../signup.php");
	exit();
}