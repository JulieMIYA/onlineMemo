 <?php	include_once('statics/header.php');
 		include_once('libs/list_todo.php');
 		include_once('libs/edit_todo.php');
 ?>
			<div id="mainContent">
				<div id="head">
					<h2>Edit Todo</h2>
				</div>
				<form method="post" action="edit.php?id=<?php echo $_GET['id'];?>">
					<div id="mainBody">
					<?php	if(isset($error)){
						echo '<div class="alert alert-error">'.$error.'</div>';
					}
					?>	
					<?php   if(isset($success)){
						echo '<div class="alert alert-success">'.$success.'</div>';
					}
					?>
					<?php foreach ($list_todo as $key=>$td) 
					{
						$given_array=array("Inbox","Read Later","Important");
						$selected_array=array($td['label']);
						$array_remaining=array_diff($given_array, $selected_array);
					?>
						<div class="form_feild">
							<label for="title">Title</label>
							<input type="text" name="title" id="title" value="<?php echo $td['title']; ?>" />
						</div>

						<div class="form_field">
							<label for="desc">Description<small>(Optional)</small></label>
							<textarea name="desc" id="desc"><?php echo $td['description'];?></textarea>
						</div>

						<div class="form_field">
							<label for="datepicker">Due Date</label>
							<input type="text" name="due_date" id="datepicker" value="<?php echo $td['due_date']; ?>"/>
						</div>

						<div class="form_field">
							<label for="label_under">Label Under</label>
							<select name="label_ubder" id="label_ubder" >
								<?php echo '<option	value="'.$td['label'].'">'.$td['label'].'</option>';
								foreach($array_remaining as $arr){
									echo '<option value="'.$arr.'">'.$arr.'</option>';
								}
								?>	
							</select>
						</div>
						
						<div class="form_field">
						<p>
							<label for="amount">Progress:</label>
							<div id="slider-range-max"></div>
							<div id="amount"><?php echo $td['progress'];?>% </div> 
	                        <input type="hidden"  name="progress" value="<?php echo $td['progress'];?>" id="amount_value" style="border:0; color:#f6931f; font-weight:bold;"/>
	                    </p>
						</div>
						<div class="form_field">
							<input type="submit" name="edit_todo" value="Edit" id="edit_todo"  class="btn btn-info">
						</div>
					<?php
					   }
					?>	
					</div>
				</form>
			</div>

		</div><!--end of container-->
	</div><!--end of mainwrapper-->
</body>
</html>