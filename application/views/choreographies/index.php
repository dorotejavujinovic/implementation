<div class="container">
   <br> <h2><?php echo $title; ?></h2> <br>
    
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
        <div class="col-md-12 search-panel">
            <!-- Search form -->
            <form method="post">
                <div class="input-group mb-3">
                    <input type="text" name="searchKeyword" class="form-control" placeholder="Search by keyword..." value="<?php echo $searchKeyword; ?>">
                    <div class="input-group-append">
                        <input type="submit" name="submitSearch" class="btn btn-outline-primary" value="Search">
                        <input type="submit" name="submitSearchReset" class="btn btn-outline-primary" value="Reset">
                    </div>
                </div>
            </form>
	     <div class="float-right">
                <a href="<?php echo site_url('choreographies/add/'); ?>" class="btn btn-success"><i class="plus"></i> New Choreography</a>
            </div>
	</div>
	 <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Choreography Name</th>
                    <th>Dance Type</th>
                    <th>Music</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($Choreography)){ foreach($Choreography as $row){ ?>
                <tr>
                    
                    <td><?php echo $row['choreography_title']; ?></td>
                    <td><?php echo $row['dance_type']; ?></td>
                    <td><?php echo $row['music']; ?></td>
                </tr>
                <?php } }else{ ?>
                <tr><td colspan="7">No choreography found...</td></tr>
                <?php } ?>
            </tbody>
        </table>
	<div class="pagination pull-right">
            <?php echo $this->pagination->create_links(); ?>
        </div>
    </div>
</div>	