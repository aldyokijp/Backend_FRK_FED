<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Frk Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('frk/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Frk Id</th>
						<th>Frk Jenis</th>
						<th>Frk Status</th>
						<th>Frk Dosen</th>
						<th>Frk Date</th>
						<th>Frk Ak</th>
						<th>Frk Kual</th>
						<th>Frk Kuan</th>
						<th>Frk Waktu</th>
						<th>Frk Tahun</th>
						<th>Frk Semester</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($frk as $f){ ?>
                    <tr>
						<td><?php echo $f['frk_id']; ?></td>
						<td><?php echo $f['frk_jenis']; ?></td>
						<td><?php echo $f['frk_status']; ?></td>
						<td><?php echo $f['frk_dosen']; ?></td>
						<td><?php echo $f['frk_date']; ?></td>
						<td><?php echo $f['frk_ak']; ?></td>
						<td><?php echo $f['frk_kual']; ?></td>
						<td><?php echo $f['frk_kuan']; ?></td>
						<td><?php echo $f['frk_waktu']; ?></td>
						<td><?php echo $f['frk_tahun']; ?></td>
						<td><?php echo $f['frk_semester']; ?></td>
						<td>
                            <a href="<?php echo site_url('frk/edit/'.$f['frk_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('frk/remove/'.$f['frk_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
