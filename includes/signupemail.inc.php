<?php

$conn=mysqli_connect('localhost','root','','havana');

function strip_tag($string) { 

	// strip html & php tags
	$string = strip_tags($string);
	// strip control characters
	return preg_replace('/[[:punct:]]/', ' ', $string);

}

if (isset($_POST['submit'])) {
	
	$firstname = htmlspecialchars(strip_tag($_POST['firstname']));
	$lastname = htmlspecialchars(strip_tag($_POST['lastname']));
	//email dont have strip tag used cause if strip tag is used, @ will disappear. 
	$email = htmlspecialchars($_POST['email']);
	$username = htmlspecialchars(strip_tag($_POST['username']));
	$password = htmlspecialchars(strip_tag($_POST['pwd']));
	$repassword = htmlspecialchars(strip_tag($_POST['repwd']));
	
	//check if any input is empty
	if (empty($firstname) || empty($lastname) || empty($email) || empty($username) || empty($password) || empty($repassword)) 
	{
		header("Location: /inputempty.php");
		exit();
	} 
	else
	{
		//check if first & last name adheres to required pattern
		if (!preg_match("/^[a-zA-Z]*$/", $firstname) || !preg_match("/^[a-zA-Z]*$/", $lastname))
		{
			header("Location: ../invalidinput.php");
			exit();
		}
		else
		{
			//check if email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
			{
				header("Location: ../invalidemail.php");
				exit();
			}
		else
		{
			//sql statement
		$sql = "SELECT user_id FROM usersandemail WHERE user_email=?";
		
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
			if($rowcount>0)
			{
				printf ("Email used. Try again.");
			}
			else
			{
				
				$query = "SELECT user_id FROM usersandemail WHERE username=?";
		
		//prepared statement , init stands for initialize.
		$stmt= mysqli_stmt_init($conn);
		
		//prepare prepared statement, make use of the sql statement and do if statement
		if(!mysqli_stmt_prepare($stmt,$query)) //if function here doesnt succeed then proceed to if loop
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
			
			$rows= mysqli_fetch_assoc($results);
			$rowcounts=mysqli_num_rows($results);
			
			if($rowcounts >0)
			{
				printf ("Username taken. Please try again.");
			}
			else
			{
						//initialize token to use as a key to verify email and account
						$token='qazzwsxedcrfvtgbyhnujmikolp';
						$TOKEN=str_shuffle($token);
						
						//key for encryption
						$key = 'SecretKeySecretKeySecret'; //i made it 24 bits instead.
						$encryptedpwd=$password;
						$iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
						//create IV with random numbers from 0 to 99999
						$iv = mt_rand(0,99999);
						//get iv size
						$encryptedtext = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $encryptedpwd, MCRYPT_MODE_ECB, $iv);
						
						//configuration for captcha 
						$secretKey="6Le6ukAUAAAAANWzrVAdzQrKBRGpZHntHeXK_qXf";
						$responseKey=$_POST['g-recaptcha-response'];
						$url="https://www.google.com/recaptcha/api/siteverify?=$secretKey&response=$responseKey";
						$response=file_get_contents($url);
						$response=json_decode($response);
						
						//prepared statement for inserting data into database
						$queryquery = "INSERT INTO usersandemail (user_firstname, user_lastname, username, user_email, user_password, email_verified, token)  
															VALUES (?,?,?,?,?,?,?)";
															$verify=0;
												$statement = $conn->prepare($queryquery);
												$statement->bind_param("sssssis", $firstname, $lastname, $username, $email, $encryptedtext, $verify, $TOKEN);
												$statement->execute(); 
					
						//mailing porton
						$body ="Hi, $firstname $lastname. Thank you for signing up with HAVANA. Click here to verify your email: http://localhost/HAVANA_PROJECT-master.
						                  With love, 
						                  Team HAVANA";
						$headers = 'From: havana@gmail.com' . "\r\n" 
            .'Reply-To: havana@gmail.com';	
			mail("$email","Subject",$body,$headers);
						header("Location: ../signupsuccessful.php");
						//echo "Done.";
						exit();
						}
		}
		}
					//if($resultCheck > 0)
					//{
					//	echo "Email used, try again";
					//}
						//else
					//{
						//echo "Email not used,carry on";
					//else
					//{
					//	header("Location: ../captchanotchecked.php");
					//} 
			
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