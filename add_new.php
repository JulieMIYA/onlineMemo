 <?php
	include_once('statics/header.php');
	include_once('libs/create_todo.php');
?>
			<div id="mainContent">
				<div id="head">
					<h2>Create Todo</h2>
				</div>
				<form method="post" action="add_new.php">
					<div id="mainBody">
					<?php	if(isset($error)){
						echo '<div class="alert alert-error">'.$error.'</div>';
					}
					?>	
					<?php   if(isset($success)){
						echo '<div class="alert alert-success">'.$success.'</div>';
					}
					?>
						<div class="form_feild">
							<label for="title">Title</label>
							<input type="text" name="title" id="title">
						</div>

						<div class="form_field">
							<label for="desc">Description<small>(Optional)</small></label>
							<textarea name="desc" id="desc"></textarea>
						</div>

						<div class="form_field">
							<label for="datepicker">Due Date</label>
							<input type="text" name="due_date" id="datepicker"/>
						</div>

						<div class="form_field">
							<label for="label_under">Label Under</label>
							<select name="label_ubder" id="label_ubder">
								<option value=""> Select</option>
								<option value="Inbox"> Inbox</option>
								<option value="Read Later"> Read Later</option>
								<option value="Important"> Important</option>
							</select>
						</div>

						<div class="form_field">
							<input type="submit" name="create_todo" value="Create" id="create_todo"  class="btn btn-info">
						</div>
					</div>
				</form>
			</div>

		</div><!--end of container-->
	</div><!--end of mainwrapper-->
</body>
</html>