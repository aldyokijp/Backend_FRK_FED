<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Frk Add</h3>
            </div>
            <?php echo form_open('frk/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="frk_jenis" class="control-label">Frkfed Jenis</label>
						<div class="form-group">
							<select name="frk_jenis" class="form-control">
								<option value="">select frkfed_jenis</option>
								<?php 
								foreach($all_frkfed_jenis as $frkfed_jenis)
								{
									$selected = ($frkfed_jenis['frkfed_id'] == $this->input->post('frk_jenis')) ? ' selected="selected"' : "";

									echo '<option value="'.$frkfed_jenis['frkfed_id'].'" '.$selected.'>'.$frkfed_jenis['frkfed_kategori'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="frk_status" class="control-label">Frk Status</label>
						<div class="form-group">
							<select name="frk_status" class="form-control">
								<option value="">select</option>
								<?php 
								$frk_status_values = array(
									'0'=>'Menunggu',
									'1'=>'Diterima',
								);

								foreach($frk_status_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('frk_status')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="frk_dosen" class="control-label">Frk Dosen</label>
						<div class="form-group">
							<input type="text" name="frk_dosen" value="<?php echo $this->input->post('frk_dosen'); ?>" class="form-control" id="frk_dosen" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="frk_date" class="control-label">Frk Date</label>
						<div class="form-group">
							<input type="datetime-local" name="frk_date" value="<?php echo $this->input->post('frk_date'); ?>" class="form-control" id="frk_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="frk_ak" class="control-label">Frk Ak</label>
						<div class="form-group">
							<input type="text" name="frk_ak" value="<?php echo $this->input->post('frk_ak'); ?>" class="form-control" id="frk_ak" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="frk_kual" class="control-label">Frk Kual</label>
						<div class="form-group">
							<input type="text" name="frk_kual" value="<?php echo $this->input->post('frk_kual'); ?>" class="form-control" id="frk_kual" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="frk_kuan" class="control-label">Frk Kuan</label>
						<div class="form-group">
							<input type="text" name="frk_kuan" value="<?php echo $this->input->post('frk_kuan'); ?>" class="form-control" id="frk_kuan" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="frk_waktu" class="control-label">Frk Waktu</label>
						<div class="form-group">
							<input type="text" name="frk_waktu" value="<?php echo $this->input->post('frk_waktu'); ?>" class="form-control" id="frk_waktu" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="frk_tahun" class="control-label">Frk Tahun</label>
						<div class="form-group">
							<input type="text" name="frk_tahun" value="<?php echo $this->input->post('frk_tahun'); ?>" class="form-control" id="frk_tahun" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="frk_semester" class="control-label">Frk Semester</label>
						<div class="form-group">
							<select name="frk_semester" class="form-control">
								<option value="">select</option>
								<?php 
								$frk_semester_values = array(
									'1'=>'gasal',
									'2'=>'genap',
								);

								foreach($frk_semester_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('frk_semester')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
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