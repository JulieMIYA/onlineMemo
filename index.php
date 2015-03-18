<?php include_once('statics/header.php');
	  include_once('libs/list_todo.php');
	  include_once('libs/delete_todo.php');
?>

			<div id="mainContent" class="clearfix">
				<div id="head">
					<h2>Manage Todo</h2><br/><br/>
					<div id="add more">
						<a href="add_new.php" class="btn btn-success"> + Add New</a>
					</div>
				</div><!-- end head-->
				<div id="mainBody" class="test">
					<?php	if(isset($error)){
						echo '<div class="alert alert-error">'.$error.'</div>';
					}
					?>	
					<?php   if(isset($success)){
						echo '<div class="alert alert-success">'.$success.'</div>';
					}
					?>
					<table class="table table-striped">
					 	<thead>
					 		<tr>
					 			<td>Title</td>
					 			<td>Snippet</td>
					 			<td>Due Date</td>
					 			<td>Time Left</td>
					 			<td>Progress</td>
					 		    <td>Actions</td>
					 		</tr>
					 	</thead>
					 	<tbody>
					 			<!-- <td>Todo</td>	
					 			<td>Should Complete it</td>
					 			<td>2011-03-11</td>
					 			<td>18 hours</td>
					 			<td>
					 				<div class="progress progress-striped">
									<div class="bar" style="width: 20%;"></div>
									</div>
					 			<td>edit | delete</td> -->
					 			<?php
					 			if($list_todo !==0 ){
					 				foreach($list_todo as $key=>$value){
					 					$today=strtotime("now");
					 					$due_date=strtotime($value['due_date']);
					 					if($due_date>$today){
						 					$hours=$due_date - $today;
						 					$hours=$hours / 3600;
						 					$time_left=$hours / 24;
						 					if($time_left<1){
						 						$time_left="Less than one day";
						 					}
						 					else{
						 						$time_left=round($time_left).' days remaining';
						 					}
					 					}
					 					else{
					 						$time_left="expired";
					 					}
					 					
					 					?>
					 				<tr>
									<td><?php echo $value['title']; ?></td>
									<td><?php echo $value['description']; ?></td>
									<td><?php echo $value['due_date']; ?></td>
									<td><?php echo $time_left; ?></td>
									<td>
										<div class="progress progress-striped active">
									    <div class="bar" style="width: <?php echo $value['progress']; ?>%"></div>
									</div></td>
									<td> 
										<a href="edit.php?id=<?php echo $value['id'];?>" title="<?php echo $value['title'];?>">edit </a>|
										<a href="index.php?delete=<?php echo $value['id'];?>" title="<?php echo $value['title'];?>">delete </a>
									</td>
								</tr>
									<?php	
					 				}
					 			} 
					 			else{
					 				
					 				echo '<td/><td/><td/>
					 				      <td>  No more todos under this session </td>
					 				      <td/><td/>';
					 			}
					 			?>
					 		
					 	</tbody>
					</table>
				</div><!--mainbody--> 


		</div><!--end of container-->
	</div><!--end of mainwrapper-->
</body>
</html>