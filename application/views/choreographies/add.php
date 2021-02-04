<div class="container">
    <h2><?php echo $title; ?></h2>
    
    <!-- Display status message -->
    <?php if(!empty($success_msg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-success"><?php echo $success_msg; ?></div>
    </div>
    <?php }elseif(!empty($error_msg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-danger"><?php echo $error_msg; ?></div>
    </div>
    <?php } ?>
    
    <div class="row">
        <div class="col-md-6">
            <form method="post">
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label>Choreography Name</label>
                        <input type="text" class="form-control" name="choreography_title" placeholder="Enter Choreography Name" >
                        <?php echo form_error('choreography_title','<div class="invalid-feedback">','</div>'); ?>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Dance Type</label>
                        <input type="text" class="form-control" name="dance_type" placeholder="Enter dance type" >
                        <?php echo form_error('dance_type','<div class="invalid-feedback">','</div>'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Music</label>
                    <input type="text" class="form-control" name="music" placeholder="Enter music">
                    <?php echo form_error('music','<div class="invalid-feedback">','</div>'); ?>
                </div>
                
                <a href="<?php echo site_url('choreographies'); ?>" class="btn btn-secondary">Back</a>
                <input type="submit" name="memSubmit" class="btn btn-success" value="Submit">
            </form>
        </div>
    </div>
</div>
