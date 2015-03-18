<?php
	include_once('classes/manageTodo.php');
	include_once('session.php');

	$init=new ManageTodo();

		if (isset($_POST['edit_todo'])){
			$id=$_GET['id'];	
			$title =$_POST['title'];
			$desc=$_POST['desc'];
			// $desc=mysql_real_escape_string($desc);
			$due_date=$_POST['due_date'];
			$label=$_POST['label_ubder'];
			$progress=$_POST["progress"];
	    	if(empty($title)){
	    		$error= 'All fields are required accept the optional one';
	    	}
    		else{
		    	$title=strip_tags($title);
		    	$desc=strip_tags($desc);
		    	// $title=mysql_real_escape_string($title);
		    	// $desc=mysql_real_escape_string($desc);
		    	$username=$session_name;
		    	$create_date=date("m/d/Y");
		    	$edit_todo=$init->editTodo($username,$id,$title,$desc,$progress,$due_date,$label);
		    	if($edit_todo==1){
		    		$success="Todo edited successfully";
		    	}
		    	else{
		    		$error="There was an error";
	    	    }
    		}
        }
?>