<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Prodi Add</h3>
            </div>
            <?php echo form_open('prodi/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="prodi_akreditasi" class="control-label"><span class="text-danger">*</span>Akreditasi</label>
						<div class="form-group">
							<select name="prodi_akreditasi" class="form-control">
								<option value="">select akreditasi</option>
								<?php 
								foreach($all_akreditasi as $akreditasi)
								{
									$selected = ($akreditasi['akreditasi_id'] == $this->input->post('prodi_akreditasi')) ? ' selected="selected"' : "";

									echo '<option value="'.$akreditasi['akreditasi_id'].'" '.$selected.'>'.$akreditasi['akreditasi'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('prodi_akreditasi');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="prodi_nama" class="control-label"><span class="text-danger">*</span>Prodi Nama</label>
						<div class="form-group">
							<input type="text" name="prodi_nama" value="<?php echo $this->input->post('prodi_nama'); ?>" class="form-control" id="prodi_nama" />
							<span class="text-danger"><?php echo form_error('prodi_nama');?></span>
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