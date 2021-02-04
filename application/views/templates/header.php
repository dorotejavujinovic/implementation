
<html>
<head>
	<title>Ballerina's Notebook</title>
	<link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

</head>
	<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	 
			<a class="navbar-brand" href="<?php echo base_url(); ?>posts">Ballerina's Notebook</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
   				<span class="navbar-toggler-icon"></span>
  			</button>
			<div class="collapse navbar-collapse" id="navbarColor01">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="<?php echo base_url(); ?>posts">Home
							<span class="sr-only">(current)</span>
						</a>
					</li>
				
				
			<?php if(!$this->session->userdata('logged_in')) : ?>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url(); ?>users/login">Login
						<span class="sr-only">(current)</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url(); ?>users/register">Register
						<span class="sr-only">(current)</span>
					</a>
				</li>
			<?php endif; ?>

			<?php if($this->session->userdata('logged_in')) : ?>
				<li class="nav-item ">
					<a class="nav-link" href="<?php echo base_url(); ?>posts/create">Create Post
						<span class="sr-only">(current)</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url(); ?>members">Members
						<span class="sr-only">(current)</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url(); ?>choreographies">Choreogrphy
						<span class="sr-only">(current)</span>
					</a>
				</li>


				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url(); ?>events">Event
						<span class="sr-only">(current)</span>
					</a>
				</li>
				<li class="nav-item ">
					<a class="nav-link" href="<?php echo base_url(); ?>events/create">Create Event
						<span class="sr-only">(current)</span>
					</a>
				</li>


				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url(); ?>users/logout">Logout
						<span class="sr-only">(current)</span>
					</a>
				</li>
				<?php endif; ?>
				
		</ul>
		
	</div>
</nav>
<div class="container">
	<?php if($this->session->flashdata('user_registered')): ?>
		<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
		<?php endif; ?>

	<?php if($this->session->flashdata('post_created')): ?>
		<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
		<?php endif; ?>

	<?php if($this->session->flashdata('post_updated')): ?>
		<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
		<?php endif; ?>

	<?php if($this->session->flashdata('post_deleted')): ?>
		<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
		<?php endif; ?>
		<?php if($this->session->flashdata('event_created')): ?>
		<?php echo '<p class="alert alert-success">'.$this->session->flashdata('event_created').'</p>'; ?>
		<?php endif; ?>

	<?php if($this->session->flashdata('event_updated')): ?>
		<?php echo '<p class="alert alert-success">'.$this->session->flashdata('event_updated').'</p>'; ?>
		<?php endif; ?>

	<?php if($this->session->flashdata('event_deleted')): ?>
		<?php echo '<p class="alert alert-success">'.$this->session->flashdata('event_deleted').'</p>'; ?>
		<?php endif; ?>


		<?php if($this->session->flashdata('login_failed')): ?>
		<?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('user_loggedin')): ?>
		<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('user_loggedout')): ?>
		<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
		<?php endif; ?>