<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Fed Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('fed/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Fed Id</th>
						<th>Fed Frk Id</th>
						<th>Fed Tahun</th>
						<th>Fed Semester</th>
						<th>Fed Status</th>
						<th>Fed Ak</th>
						<th>Fed Kuan</th>
						<th>Fed Kual</th>
						<th>Fed Waktu</th>
						<th>Fed Biaya</th>
						<th>Fed Skp</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($fed as $f){ ?>
                    <tr>
						<td><?php echo $f['fed_id']; ?></td>
						<td><?php echo $f['fed_frk_id']; ?></td>
						<td><?php echo $f['fed_tahun']; ?></td>
						<td><?php echo $f['fed_semester']; ?></td>
						<td><?php echo $f['fed_status']; ?></td>
						<td><?php echo $f['fed_ak']; ?></td>
						<td><?php echo $f['fed_kuan']; ?></td>
						<td><?php echo $f['fed_kual']; ?></td>
						<td><?php echo $f['fed_waktu']; ?></td>
						<td><?php echo $f['fed_biaya']; ?></td>
						<td><?php echo $f['fed_skp']; ?></td>
						<td>
                            <a href="<?php echo site_url('fed/edit/'.$f['fed_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('fed/remove/'.$f['fed_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
