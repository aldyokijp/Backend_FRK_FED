<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Role Add</h3>
            </div>
            <?php echo form_open('role/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="roles_nama" class="control-label"><span class="text-danger">*</span>Roles Nama</label>
						<div class="form-group">
							<input type="text" name="roles_nama" value="<?php echo $this->input->post('roles_nama'); ?>" class="form-control" id="roles_nama" />
							<span class="text-danger"><?php echo form_error('roles_nama');?></span>
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