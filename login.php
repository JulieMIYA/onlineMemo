<?php include_once('libs/login_user.php');?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Todo Maker</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
	<link rel="stylesheet"  type="text/css" href="css/style.css"/ >
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js">js</script>
	<script type="text/javascript">
		$(function(){
			$('#show_register').click(function(){
				$('.login_form').hide();
				$('.register_form').show();
				return false;
			});
			$('#show_login').click(function(){	
				$('.register_form').hide();
				$('.login_form').show();
				return false;
			});
		});
	</script>
</head>
<body>
	<div id="mainWarpper">
		<div class="navbar navbar-inverse ">
		    <div class="navbar-inner">
		  	<div class="container">
				<a class="brand" href="#">
					Todo Maker
				</a>
			</div>
		    </div>
	    </div><!--end of navbar-->

		<div id="content">
			
			<?php
				if(isset($error)){
					echo'<div class="alert alert-error">'.$error.'</div>' ;
				}
			?>
			<div class="login_form">
				<h2>Login Here</h2>
				<div id="form">
					<form method="post" action="login.php">	
						<div class="form_elements">
							<label for="username">Username</label>
							<input type="text" name="username" id="username"/>
						</div>
						<div class="form_elements">
							<label for="password">Password</label>
							<input type="password" name="password" id="password"/>
						</div>
						<div class="form_elements">
							<input type="submit" value="login" name="login" id="login" class="btn btn-success"/>
						</div>
						<a href="#" id="show_register"> Don't have an account? </a>
					</form>
				</div>
			</div>

		  	<div class="register_form">
		  		<form method="post" action="login.php">
			  		<h2>Register Here</h2>
			  		<div class="form_elements">
		  				<label for="username" >	Username</label>
		  				<input type="text" name="username" id="username"/>
		  			</div><!--end of form element-->
		  			<div class="form_elements">
		  				<label for="email" >	Email</label>
		  				<input type="text" name="email" id="email" />
		  			</div><!--end of form element-->
					<div class="form_elements">
		  				<label for="password">	Password</label>
		  				<input type="password" name="password" id="password" />
		  			</div><!--end of form element-->
		  			<div class="form_elements">
		  				<label for="repassword" >	Comfirm Your Password</label>
		  				<input type="password" name="repassword" id="repassword" />
		  			</div><!--end of form element-->
		  			<div class="form_elements">
		  				<input type="submit" value="submit" name="register" id="register" class="btn btn-success" />
		  			</div><!--end of form element-->	
		  		</form>
		  	<br/>
		  	<a href="#" id="show_login">Already have an account? </a>

		  		
		  	</div>
        </div>		
	</div><!--end of mainWrapper-->
	
</body>
</html>