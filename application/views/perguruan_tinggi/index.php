<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Perguruan Tinggi Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('perguruan_tinggi/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Pt Id</th>
						<th>Pt Akreditasi Id</th>
						<th>Pt Nama</th>
						<th>Pt Alamat</th>
						<th>Pt Website</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($perguruan_tinggi as $p){ ?>
                    <tr>
						<td><?php echo $p['pt_id']; ?></td>
						<td><?php echo $p['pt_akreditasi_id']; ?></td>
						<td><?php echo $p['pt_nama']; ?></td>
						<td><?php echo $p['pt_alamat']; ?></td>
						<td><a href="<?php echo $p['pt_website']; ?>"><?php echo $p['pt_website']; ?></td>
						<td>
                            <a href="<?php echo site_url('perguruan_tinggi/edit/'.$p['pt_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('perguruan_tinggi/remove/'.$p['pt_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
