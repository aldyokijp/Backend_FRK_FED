<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Akreditasi Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('akreditasi/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Akreditasi Id</th>
						<th>Akreditasi</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($akreditasi as $a){ ?>
                    <tr>
						<td><?php echo $a['akreditasi_id']; ?></td>
						<td><?php echo $a['akreditasi']; ?></td>
						<td>
                            <a href="<?php echo site_url('akreditasi/edit/'.$a['akreditasi_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('akreditasi/remove/'.$a['akreditasi_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
