<div class="container">
   <br> <h2><?php echo $title; ?></h2> <br>
    <div class="col-md-6">
        <div class="card" style="width:400px">
            <div class="card-body">
                <h4 class="card-title"><?php echo $member['name'].' '.$member['last_name']; ?></h4>
                <p class="card-text"><b>Email:</b> <?php echo $member['contact']; ?></p>
                <p class="card-text"><b>Role:</b> <?php echo $member['role']; ?></p>
                <p class="card-text"><b>Nationality:</b> <?php echo $member['nationality']; ?></p>
                <p class="card-text"><b>Year of birth:</b> <?php echo $member['birth_year']; ?></p>
                <a href="<?php echo site_url('members'); ?>" class="btn btn-primary">Back To List</a>
            </div>
        </div>
    </div>
</div>