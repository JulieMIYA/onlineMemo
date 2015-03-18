<?php
	include_once('classes/manageTodo.php');
	include_once('session.php');

	$init=new ManageTodo();
	$id;
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		$list_todo=$init->listIndTodo(array('id'=>$id),$session_name);
		  // print_r($list_todo);
	}
	else{
		if(isset($_GET['label'])){
		$label=$_GET['label'];
		$list_todo=$init->listTodo($session_name,$label);
		}
		else{
			$list_todo=$init->listTodo($session_name);
		}
		// print_r($list_todo);
	}

?>