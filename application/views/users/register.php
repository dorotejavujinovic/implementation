
<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<br><h1 class="text-center"><?= $title; ?></h1>
			<div class="form-group">
				<label><h6>First Name</h6></label>
				<input type="text" class="form-control" name="name" placeholder="First Name">
			</div>
			<div class="form-group">
				<label><h6>Last Name</h6></label>
				<input type="text" class="form-control" name="last_name" placeholder="Last Name">
			</div>
			<div class="form-group">
				<label><h6>Email Address</h6></label>
				<input type="email" class="form-control" name="contact" placeholder="Email Address">
			</div>
			<div class="form-group">
				<label><h6>Password</h6></label>
				<input type="password" class="form-control" name="password" placeholder="Password">
			</div>
			<div class="form-group">
				<label><h6>Confirm Password</h6></label>
				<input type="password" class="form-control" name="password2" placeholder="Confirm Password">
			</div>

			<button type="submit" class="btn btn-primary btn-block">Register</button>
	</div>
</div>
	<?php echo form_close(); ?>