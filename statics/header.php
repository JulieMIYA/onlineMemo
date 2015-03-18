<?php include_once('libs/session.php') ;?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="css/redmond/jquery-ui-1.9.2.custom.css"/>

	<!-- <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'> -->
  	<stript type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  	<script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <script type="text/javascript" src="js/jquery-1.8.3.js"></script>
  	<script type="text/javascript" src="js/jquery-ui-1.9.2.custom.js"></script>
  	<script type="text/javascript">
		$(function() {
		    $( "#datepicker" ).datepicker();
		  });

		// $(function() {
		// 	$( "#seekbar" ).slider({
		// 		range: "max",
		// 		min: 0,
		// 		max: 100,
		// 		value=3;
		// 		slide: function( event, ui ) {
		// 			$( "#progress_value" ).val( ui.value );
		// 			$( "#progress" ).html( ui.value ); //binding progress_value with slider 
		// 		}
		// 	});
		// $( "#progress_value" ).val( $( "#seekbar" ).slider( "value" ) );
	 //    });
		$(function() {
			var currentValue=$('#amount_value').val();
			$( "#slider-range-max" ).slider({
				range: "max",
				min: 0,
				max: 100,
				value:currentValue,
				slide: function( event, ui ) {
					$( "#amount" ).html( ui.value + '%' );
					$( "#amount_value" ).val( ui.value );
				}
			});
			// $( "#amount" ).val( $( "#slider-range-max" ).slider( "value" ) );
		});
  	</script>
</head>
<body>
	<div id="mainWrapper">
		<div class="navbar navbar-inverse ">
		    <div class="navbar-inner">
		  	<div class="container">
				<a class="brand" href="#">
					Todo Maker
				</a>
			</div>
		    </div>
	    </div><!--end of navbar-->
		<!-- <div class="title"><a href="index.php" >TodoMaker</a></div> -->
		<div id="td_container">
			<div id="sidebar">  
				<!-- <ul class="nav nav-list">	
				<li><a href="#"><i class="icon-book"/>   Inbox</a></li>
				<li><a href="#"><i class="icon-book"/>   Read Later</a></li>
				<li><a href="#"><i class="icon-book"/>   Important</a></li>
				</ul> -->
				<ul class="nav nav-pills nav-stacked">
				<!-- <li class="nav-header">List header</li> -->
				<li class="active"><a href="index.php?label=Inbox"><i class="icon-envelope"></i>  Inbox</a></li>
				<li><a href="index.php?label=Read Later"><i class="icon-book"></i>  Read Header</a></li>
				<li><a href="index.php?label=Important"><i class="icon-star"></i>  Important</a></li>
				<li><a href="logout.php"><i class="icon-remove-sign"></i>  Logout</a></li>
				</ul>
			</div>
		
