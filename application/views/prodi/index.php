<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Prodi Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('prodi/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Prodi Kode</th>
						<th>Prodi Akreditasi</th>
						<th>Prodi Nama</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($prodi as $p){ ?>
                    <tr>
						<td><?php echo $p['prodi_kode']; ?></td>
						<td><?php echo $p['prodi_akreditasi']; ?></td>
						<td><?php echo $p['prodi_nama']; ?></td>
						<td>
                            <a href="<?php echo site_url('prodi/edit/'.$p['prodi_kode']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('prodi/remove/'.$p['prodi_kode']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
