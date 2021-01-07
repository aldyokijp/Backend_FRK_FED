<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Frkfed Instansi Add</h3>
            </div>
            <?php echo form_open('frkfed_instansi/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="instansi_pt" class="control-label">Perguruan Tinggi</label>
						<div class="form-group">
							<select name="instansi_pt" class="form-control">
								<option value="">select perguruan_tinggi</option>
								<?php 
								foreach($all_perguruan_tinggi as $perguruan_tinggi)
								{
									$selected = ($perguruan_tinggi['pt_id'] == $this->input->post('instansi_pt')) ? ' selected="selected"' : "";

									echo '<option value="'.$perguruan_tinggi['pt_id'].'" '.$selected.'>'.$perguruan_tinggi['pt_nama'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="instansi_fakultas" class="control-label">Fakultas</label>
						<div class="form-group">
							<select name="instansi_fakultas" class="form-control">
								<option value="">select fakultas</option>
								<?php 
								foreach($all_fakultas as $fakultas)
								{
									$selected = ($fakultas['fakultas_kode'] == $this->input->post('instansi_fakultas')) ? ' selected="selected"' : "";

									echo '<option value="'.$fakultas['fakultas_kode'].'" '.$selected.'>'.$fakultas['fakultas_nama'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="instansi_prodi" class="control-label">Prodi</label>
						<div class="form-group">
							<select name="instansi_prodi" class="form-control">
								<option value="">select prodi</option>
								<?php 
								foreach($all_prodi as $prodi)
								{
									$selected = ($prodi['prodi_kode'] == $this->input->post('instansi_prodi')) ? ' selected="selected"' : "";

									echo '<option value="'.$prodi['prodi_kode'].'" '.$selected.'>'.$prodi['prodi_nama'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="instansi_logo" class="control-label">Instansi Logo</label>
						<div class="form-group">
							<input type="text" name="instansi_logo" value="<?php echo $this->input->post('instansi_logo'); ?>" class="form-control" id="instansi_logo" />
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