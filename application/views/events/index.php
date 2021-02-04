<br><h2><?= $title ?></h2>
<?php foreach ($events as $event) : ?> 
	<br><h3><?php echo $event['title']; ?></h3>
	<div class="row">
		<div class="col-md-9">
			<h6><small class="post-date">Happening on <?php echo $event['event_date']; ?> at <?php echo $event['event_place']; ?></small></h6><br>
			<p class="mb-0"><?php echo $event['event_description']; ?></p>
			<br><br>
			<p><a class="btn btn-info" href="<?php echo site_url('/events/'.$event['slug']); ?>">See More</a></p>

			
		
		</div>
		
	</div>	
	
<?php endforeach; ?>