<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Perguruan Tinggi Edit</h3>
            </div>
			<?php echo form_open('perguruan_tinggi/edit/'.$perguruan_tinggi['pt_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="pt_akreditasi_id" class="control-label">Akreditasi</label>
						<div class="form-group">
							<select name="pt_akreditasi_id" class="form-control">
								<option value="">select akreditasi</option>
								<?php 
								foreach($all_akreditasi as $akreditasi)
								{
									$selected = ($akreditasi['akreditasi_id'] == $perguruan_tinggi['pt_akreditasi_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$akreditasi['akreditasi_id'].'" '.$selected.'>'.$akreditasi['akreditasi'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="pt_nama" class="control-label"><span class="text-danger">*</span>Pt Nama</label>
						<div class="form-group">
							<input type="text" name="pt_nama" value="<?php echo ($this->input->post('pt_nama') ? $this->input->post('pt_nama') : $perguruan_tinggi['pt_nama']); ?>" class="form-control" id="pt_nama" />
							<span class="text-danger"><?php echo form_error('pt_nama');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="pt_alamat" class="control-label">Pt Alamat</label>
						<div class="form-group">
							<input type="text" name="pt_alamat" value="<?php echo ($this->input->post('pt_alamat') ? $this->input->post('pt_alamat') : $perguruan_tinggi['pt_alamat']); ?>" class="form-control" id="pt_alamat" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="pt_website" class="control-label">Pt Website</label>
						<div class="form-group">
							<input type="text" name="pt_website" value="<?php echo ($this->input->post('pt_website') ? $this->input->post('pt_website') : $perguruan_tinggi['pt_website']); ?>" class="form-control" id="pt_website" />
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