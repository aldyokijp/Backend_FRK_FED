<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Frkfed Jenis Edit</h3>
            </div>
			<?php echo form_open('frkfed_jenis/edit/'.$frkfed_jenis['frkfed_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="frkfed_kategori" class="control-label"><span class="text-danger">*</span>Frkfed Kategori</label>
						<div class="form-group">
							<input type="text" name="frkfed_kategori" value="<?php echo ($this->input->post('frkfed_kategori') ? $this->input->post('frkfed_kategori') : $frkfed_jenis['frkfed_kategori']); ?>" class="form-control" id="frkfed_kategori" />
							<span class="text-danger"><?php echo form_error('frkfed_kategori');?></span>
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