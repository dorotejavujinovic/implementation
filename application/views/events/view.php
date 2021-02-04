<br><h2><?php echo $event['title']; ?></h2>
<small class="post-date">Happening on <?php echo $event['event_date']; ?></small><br>

<div class="post-body">
	<?php echo $event['event_description']; ?>	
</div>
<?php if($this->session->userdata('userid') == $event['user_id']): ?>
	<hr>
	<a class= "btn btn-primary" href="<?php echo base_url(); ?>events/edit/<?php echo $event['slug']; ?>">Edit</a>
	<?php echo form_open('/events/delete/'.$event['event_id']); ?>
		<input type="submit" value="Delete" class="btn btn-danger">

	</form>
<?php endif; ?>
