<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Akreditasi Edit</h3>
            </div>
			<?php echo form_open('akreditasi/edit/'.$akreditasi['akreditasi_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="akreditasi" class="control-label"><span class="text-danger">*</span>Akreditasi</label>
						<div class="form-group">
							<input type="text" name="akreditasi" value="<?php echo ($this->input->post('akreditasi') ? $this->input->post('akreditasi') : $akreditasi['akreditasi']); ?>" class="form-control" id="akreditasi" />
							<span class="text-danger"><?php echo form_error('akreditasi');?></span>
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