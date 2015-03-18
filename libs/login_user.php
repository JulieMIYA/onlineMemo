<?php
 	include_once('classes/manageUser.php');
	if (isset($_POST['register'])){
		session_start();
		$user= new  manageUser();
		$username=$_POST['username'];
		$password=$_POST['password'];
		$email=$_POST['email'];
		$repassword=$_POST['repassword'];
		$ip_address=$_SERVER['REMOTE_ADDR'];
		$date=date("Y-m-d");
		$time=date("H:i:s");
		if(empty($username)||empty($password)||empty($email)||empty($repassword)){
			$error ='All fields are required';
		}
		else if ($password!==$repassword){
			$error= 'Passwords not match ';
		}
		else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
		{
			$error='Email is not valid';
		}
		else {
			$check_availability=$user->GetUserInfo($username);
			if($check_availability==0){
				$register_user=$user->registerUsers($username,$email,$password,$ip_address,$time,$date);
				if($register_user==1){
					$make_sessions=$user->GetUserInfo($username);
					foreach($make_sessions as $userSession){
						$_SESSION['todo_name']=$userSession['username'];
						if(isset($_SESSION['todo_name'])){
							header("location:index.php");
						}
					}
					// print_r($make_sessions);
					//echo var_dump($make_sessions);
				}
			}
			else
			{
				$error="Username already exist";
			}
		}
	}


		if (isset($_POST['login'])){
		session_start();
		include_once('classes/manageUser.php');
		$user= new  manageUser();
		$username=$_POST['username'];
		$password=$_POST['password'];
		if(empty($username)||empty($password)){
			$error ='All fields are required';
		}
		else {
			$check_availability=$user->GetUserInfo($username);
			if($check_availability==0){
				$error="Username doesn't exist";
			}
			else
			{
				$true_pw=$user->GetUserInfo($username)[0]['password'];
				// echo $true_pw;
				if($true_pw!==$password){
				 	$error="Password is incorrect";
			    }
			    else{
			    	$make_sessions=$user->GetUserInfo($username);
					foreach($make_sessions as $userSession){
						$_SESSION['todo_name']=$userSession['username'];
						if(isset($_SESSION['todo_name'])){
							header("location:index.php");
						}
					}
			    }

			}

		}

	}
?>