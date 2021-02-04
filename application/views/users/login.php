<?php echo form_open('users/login'); ?>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<br><h1 class="text-center"><?php echo $title; ?></h1>
			<div class="form-group">
				<input type="text" name="name" class="form-control" placeholder="Enter Name" required autofocus>
				
			</div> 
			<div class="form-group">
				<input type="text" name="last_name" class="form-control" placeholder="Enter Last Name" required autofocus>
				
			</div> 
			<div class="form-group">
				<input type="password" name="password" class="form-control" placeholder="Enter Password" required autofocus>
				
			</div> 
			<button type="submit" class="btn btn-primary btn-block">Log in</button>
		</div>
	</div>
<?php echo form_close(); ?>