<?php
	include_once('classes/manageTodo.php');
	include_once('session.php');
	$init=new ManageTodo();

	if (isset($_POST['create_todo']) ){
		$title =$_POST['title'];
		$desc=$_POST['desc'];
		$due_date=$_POST['due_date'];
		$label=$_POST['label_ubder'];
	    if(empty($title)||empty($due_date)||empty($label)){
	    	$error= 'All fields are required accept the optional one';
	    }
	    else{
	    	$title=strip_tags($title);
	    	$desc=strip_tags($desc);
	    	// $title=mysql_real_escape_string($title);
	    	// $desc=mysql_real_escape_string($desc);
	    	$username=$session_name;
	    	$create_date=date("m/d/Y");
	    	$create_todo=$init->createTodo($username,$title,$desc,$due_date,$create_date,$label);
	    	if($create_todo==1){
	    		$success="Todo created successfully";
	    	}
	    	else{
	    		$error="There was an error";
	    	}
	    }
	}
?>