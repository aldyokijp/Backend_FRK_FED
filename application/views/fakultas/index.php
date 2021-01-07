<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Fakultas Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('fakultas/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Fakultas Kode</th>
						<th>Fakultas Nama</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($fakultas as $f){ ?>
                    <tr>
						<td><?php echo $f['fakultas_kode']; ?></td>
						<td><?php echo $f['fakultas_nama']; ?></td>
						<td>
                            <a href="<?php echo site_url('fakultas/edit/'.$f['fakultas_kode']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('fakultas/remove/'.$f['fakultas_kode']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
