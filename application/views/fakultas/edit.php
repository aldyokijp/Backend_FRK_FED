<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Fakultas Edit</h3>
            </div>
			<?php echo form_open('fakultas/edit/'.$fakultas['fakultas_kode']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="fakultas_nama" class="control-label"><span class="text-danger">*</span>Fakultas Nama</label>
						<div class="form-group">
							<input type="text" name="fakultas_nama" value="<?php echo ($this->input->post('fakultas_nama') ? $this->input->post('fakultas_nama') : $fakultas['fakultas_nama']); ?>" class="form-control" id="fakultas_nama" />
							<span class="text-danger"><?php echo form_error('fakultas_nama');?></span>
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