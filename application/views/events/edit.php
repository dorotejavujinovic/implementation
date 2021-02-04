<br><h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>
<?php echo form_open('events/update'); ?>
	<input type="hidden" name="event_id" value="<?php echo $event['event_id']; ?>">
  <div class="form-group">
    <label>Event Name</label>
    <input type="text" class="form-control" name="title" placeholder="Add Name" value="<?php echo $event['title']; ?>">
     <label>Event Place</label>
    <input type="text" class="form-control" name="event_place" placeholder="Add Place" value="<?php echo $event['event_place']; ?>">
      <label>Event Date</label>
    <input type="date" class="form-control" name="event_date" placeholder="Add Date" value="<?php echo $event['event_date']; ?>">

</div>
  <div class="form-group">
    <label>Event Description</label>
<textarea id="editor1" class="form-control" name= "event_description" placeholder="Add Description"<?php echo $event['event_description']; ?></textarea>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>