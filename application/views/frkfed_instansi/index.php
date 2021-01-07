<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Frkfed Instansi Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('frkfed_instansi/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Instansi Id</th>
						<th>Instansi Pt</th>
						<th>Instansi Fakultas</th>
						<th>Instansi Prodi</th>
						<th>Instansi Logo</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($frkfed_instansi as $f){ ?>
                    <tr>
						<td><?php echo $f['instansi_id']; ?></td>
						<td><?php echo $f['instansi_pt']; ?></td>
						<td><?php echo $f['instansi_fakultas']; ?></td>
						<td><?php echo $f['instansi_prodi']; ?></td>
						<td><?php echo $f['instansi_logo']; ?></td>
						<td>
                            <a href="<?php echo site_url('frkfed_instansi/edit/'.$f['instansi_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('frkfed_instansi/remove/'.$f['instansi_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
