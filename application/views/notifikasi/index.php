<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Notifikasi Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('notifikasi/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Notif Id</th>
						<th>Notif Object</th>
						<th>Notif Subject</th>
						<th>Notif Maker Id</th>
						<th>Notif Date</th>
						<th>Notif Fill</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($notifikasi as $n){ ?>
                    <tr>
						<td><?php echo $n['notif_id']; ?></td>
						<td><?php echo $n['notif_object']; ?></td>
						<td><?php echo $n['notif_subject']; ?></td>
						<td><?php echo $n['notif_maker_id']; ?></td>
						<td><?php echo $n['notif_date']; ?></td>
						<td><?php echo $n['notif_fill']; ?></td>
						<td>
                            <a href="<?php echo site_url('notifikasi/edit/'.$n['notif_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('notifikasi/remove/'.$n['notif_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
