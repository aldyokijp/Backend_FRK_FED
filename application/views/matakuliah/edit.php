<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Matakuliah Edit</h3>
            </div>
			<?php echo form_open('matakuliah/edit/'.$matakuliah['matakuliah_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="matakuliah_nama" class="control-label"><span class="text-danger">*</span>Matakuliah Nama</label>
						<div class="form-group">
							<input type="text" name="matakuliah_nama" value="<?php echo ($this->input->post('matakuliah_nama') ? $this->input->post('matakuliah_nama') : $matakuliah['matakuliah_nama']); ?>" class="form-control" id="matakuliah_nama" />
							<span class="text-danger"><?php echo form_error('matakuliah_nama');?></span>
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