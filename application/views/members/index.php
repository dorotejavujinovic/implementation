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
	</div>
	 <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Nationality</th>
		    <th>Year of birth</th>		
		    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($members)){ foreach($members as $row){ ?>
                <tr>
                    
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['last_name']; ?></td>
                    <td><?php echo $row['contact']; ?></td>
                    <td><?php echo $row['role']; ?></td>
                    <td><?php echo $row['nationality']; ?></td>	
		    <td><?php echo $row['birth_year']; ?></td>

                    <td>
                        <a href="<?php echo site_url('members/view/'.$row['user_id']); ?>" class="btn btn-primary">View</a>
			</td>
                </tr>
                <?php } }else{ ?>
                <tr><td colspan="7">No member(s) found...</td></tr>
                <?php } ?>
            </tbody>
        </table>
	<div class="pagination pull-right">
            <?php echo $this->pagination->create_links(); ?>
        </div>
    </div>
</div>	