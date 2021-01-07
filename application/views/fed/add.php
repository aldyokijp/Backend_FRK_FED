<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Fed Add</h3>
            </div>
            <?php echo form_open('fed/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="fed_frk_id" class="control-label"><span class="text-danger">*</span>Frk</label>
						<div class="form-group">
							<select name="fed_frk_id" class="form-control">
								<option value="">select frk</option>
								<?php 
								foreach($all_frk as $frk)
								{
									$selected = ($frk['frk_id'] == $this->input->post('fed_frk_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$frk['frk_id'].'" '.$selected.'>'.$frk['frk_date'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('fed_frk_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="fed_tahun" class="control-label"><span class="text-danger">*</span>Frk</label>
						<div class="form-group">
							<select name="fed_tahun" class="form-control">
								<option value="">select frk</option>
								<?php 
								foreach($all_frk as $frk)
								{
									$selected = ($frk['frk_id'] == $this->input->post('fed_tahun')) ? ' selected="selected"' : "";

									echo '<option value="'.$frk['frk_id'].'" '.$selected.'>'.$frk['frk_tahun'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('fed_tahun');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="fed_semester" class="control-label"><span class="text-danger">*</span>Frk</label>
						<div class="form-group">
							<select name="fed_semester" class="form-control">
								<option value="">select frk</option>
								<?php 
								foreach($all_frk as $frk)
								{
									$selected = ($frk['frk_id'] == $this->input->post('fed_semester')) ? ' selected="selected"' : "";

									echo '<option value="'.$frk['frk_id'].'" '.$selected.'>'.$frk['frk_semester'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('fed_semester');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="fed_status" class="control-label">Fed Status</label>
						<div class="form-group">
							<select name="fed_status" class="form-control">
								<option value="">select</option>
								<?php 
								$fed_status_values = array(
									'0'=>'Menunggu',
									'1'=>'Diterima',
								);

								foreach($fed_status_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('fed_status')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="fed_ak" class="control-label">Fed Ak</label>
						<div class="form-group">
							<input type="text" name="fed_ak" value="<?php echo $this->input->post('fed_ak'); ?>" class="form-control" id="fed_ak" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fed_kuan" class="control-label">Fed Kuan</label>
						<div class="form-group">
							<input type="text" name="fed_kuan" value="<?php echo $this->input->post('fed_kuan'); ?>" class="form-control" id="fed_kuan" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fed_kual" class="control-label">Fed Kual</label>
						<div class="form-group">
							<input type="text" name="fed_kual" value="<?php echo $this->input->post('fed_kual'); ?>" class="form-control" id="fed_kual" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fed_waktu" class="control-label">Fed Waktu</label>
						<div class="form-group">
							<input type="text" name="fed_waktu" value="<?php echo $this->input->post('fed_waktu'); ?>" class="form-control" id="fed_waktu" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fed_biaya" class="control-label">Fed Biaya</label>
						<div class="form-group">
							<input type="text" name="fed_biaya" value="<?php echo $this->input->post('fed_biaya'); ?>" class="form-control" id="fed_biaya" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fed_skp" class="control-label">Fed Skp</label>
						<div class="form-group">
							<input type="text" name="fed_skp" value="<?php echo $this->input->post('fed_skp'); ?>" class="form-control" id="fed_skp" />
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