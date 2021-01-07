<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Menu Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('menu/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Menu Id</th>
						<th>Menu Aktif</th>
						<th>Menu Nama</th>
						<th>Menu Tanggalbatas</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($menu as $m){ ?>
                    <tr>
						<td><?php echo $m['menu_id']; ?></td>
						<td><?php echo $m['menu_aktif']; ?></td>
						<td><?php echo $m['menu_nama']; ?></td>
						<td><?php echo $m['menu_tanggalbatas']; ?></td>
						<td>
                            <a href="<?php echo site_url('menu/edit/'.$m['menu_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('menu/remove/'.$m['menu_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
