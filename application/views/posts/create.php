<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>
<?php echo form_open_multipart('posts/create'); ?>
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title">
  </div>
  <div class="form-group">
    <label>Caption</label>
    <textarea id="editor1" class="form-control" name= "caption" placeholder="Add Caption"></textarea>
  </div>
  <div class="form-group">
  	<label>Upload Image</label>
 	 <input type="file" name="userfile" size="20">
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>