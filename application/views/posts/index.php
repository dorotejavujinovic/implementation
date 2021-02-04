<br><h2><?= $title ?></h2>
<?php foreach ($posts as $post) : ?> 
	<br><h3><?php echo $post['title']; ?></h3>
	<div class="row">
		<div class="col-md-3">
		<img class="post-thumb" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['content']; ?>">
		</div>
		<div class="col-md-9">
			<small class="post-date">Posted on: <?php echo $post['created_at']; ?> by <strong><?php echo $post['name']; ?> <?php echo $post['last_name']; ?></strong></small><br>
			<?php echo word_limiter($post['caption'], 60); ?>
			<br><br>
			<p><a class="btn btn-info" href="<?php echo site_url('/posts/'.$post['slug']); ?>">See More</a></p>
		
		</div>
		
	</div>	
	
<?php endforeach; ?>