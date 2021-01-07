<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Menu Edit</h3>
            </div>
			<?php echo form_open('menu/edit/'.$menu['menu_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="menu_aktif" value="1" <?php echo ($menu['menu_aktif']==1 ? 'checked="checked"' : ''); ?> id='menu_aktif' />
							<label for="menu_aktif" class="control-label">Menu Aktif</label>
						</div>
					</div>
					<div class="col-md-6">
						<label for="menu_nama" class="control-label"><span class="text-danger">*</span>Menu Nama</label>
						<div class="form-group">
							<input type="text" name="menu_nama" value="<?php echo ($this->input->post('menu_nama') ? $this->input->post('menu_nama') : $menu['menu_nama']); ?>" class="form-control" id="menu_nama" />
							<span class="text-danger"><?php echo form_error('menu_nama');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="menu_tanggalbatas" class="control-label">Menu Tanggalbatas</label>
						<div class="form-group">
							<input type="text" name="menu_tanggalbatas" value="<?php echo ($this->input->post('menu_tanggalbatas') ? $this->input->post('menu_tanggalbatas') : $menu['menu_tanggalbatas']); ?>" class="form-control" id="menu_tanggalbatas" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>