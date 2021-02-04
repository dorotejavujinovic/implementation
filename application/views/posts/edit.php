<br><h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>
<?php echo form_open('posts/update'); ?>
	<input type="hidden" name="post_id" value="<?php echo $post['post_id']; ?>">
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title" value="<?php echo $post['title']; ?>">
  </div>
  <div class="form-group">
    <label>Caption</label>
<textarea id="editor1" class="form-control" name= "caption" placeholder="Add Caption"<?php echo $post['caption']; ?></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>