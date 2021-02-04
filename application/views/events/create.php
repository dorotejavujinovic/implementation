<br><h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>
<?php echo form_open_multipart('events/create'); ?>
  <div class="form-group">
    <label>Event Name</label>
    <input type="text" class="form-control" name="title" placeholder="Add Name">
    <label>Event Place</label>   
    <input type="text" class="form-control" name="event_place" placeholder="Add Place">
   <label>Event Date</label> 
   <input type="date" class="form-control" name="event_date" placeholder="Add Date">
  </div>
  <div class="form-group">
    <label>Event Description</label>
    <textarea id="editor1" class="form-control" name= "event_description" placeholder="Add Description"></textarea>
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>