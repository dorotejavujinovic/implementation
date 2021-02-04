<br><h2><?php echo $post['title']; ?></h2>
<small class="post-date">Posted on: <?php echo $post['created_at']; ?></small><br>
<img src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['content']; ?>">
<div class="post-body">
	<?php echo $post['caption']; ?>	
</div>
<?php if($this->session->userdata('userid') == $post['user_id']): ?>
	<hr>
	<a class= "btn btn-primary" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>">Edit</a>
	<?php echo form_open('/posts/delete/'.$post['post_id']); ?>
		<input type="submit" value="Delete" class="btn btn-danger">

	</form>
<?php endif; ?>
