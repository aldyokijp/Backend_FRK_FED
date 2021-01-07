<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Dosen Edit</h3>
            </div>
			<?php echo form_open('dosen/edit/'.$dosen['NIDN']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="dosen_instansi" class="control-label"><span class="text-danger">*</span>Frkfed Instansi</label>
						<div class="form-group">
							<select name="dosen_instansi" class="form-control">
								<option value="">select frkfed_instansi</option>
								<?php 
								foreach($all_frkfed_instansi as $frkfed_instansi)
								{
									$selected = ($frkfed_instansi['instansi_id'] == $dosen['dosen_instansi']) ? ' selected="selected"' : "";

									echo '<option value="'.$frkfed_instansi['instansi_id'].'" '.$selected.'>'.$frkfed_instansi['instansi_pt'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('dosen_instansi');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="dosen_jeniskelamin" class="control-label"><span class="text-danger">*</span>Dosen Jeniskelamin</label>
						<div class="form-group">
							<select name="dosen_jeniskelamin" class="form-control">
								<option value="">select</option>
								<?php 
								$dosen_jeniskelamin_values = array(
									'Perempuan'=>'Perempuan',
								);

								foreach($dosen_jeniskelamin_values as $value => $display_text)
								{
									$selected = ($value == $dosen['dosen_jeniskelamin']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('dosen_jeniskelamin');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="dosen_roles" class="control-label"><span class="text-danger">*</span>Role</label>
						<div class="form-group">
							<select name="dosen_roles" class="form-control">
								<option value="">select role</option>
								<?php 
								foreach($all_roles as $role)
								{
									$selected = ($role['roles_id'] == $dosen['dosen_roles']) ? ' selected="selected"' : "";

									echo '<option value="'.$role['roles_id'].'" '.$selected.'>'.$role['roles_nama'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('dosen_roles');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="dosen_aktifasi" class="control-label">Dosen Aktifasi</label>
						<div class="form-group">
							<select name="dosen_aktifasi" class="form-control">
								<option value="">select</option>
								<?php 
								$dosen_aktifasi_values = array(
									'0'=>'Tidak Aktif',
									'1'=>'Aktif',
								);

								foreach($dosen_aktifasi_values as $value => $display_text)
								{
									$selected = ($value == $dosen['dosen_aktifasi']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="dosen_password" class="control-label"><span class="text-danger">*</span>Dosen Password</label>
						<div class="form-group">
							<input type="text" name="dosen_password" value="<?php echo ($this->input->post('dosen_password') ? $this->input->post('dosen_password') : $dosen['dosen_password']); ?>" class="form-control" id="dosen_password" />
							<span class="text-danger"><?php echo form_error('dosen_password');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="dosen_nama" class="control-label"><span class="text-danger">*</span>Dosen Nama</label>
						<div class="form-group">
							<input type="text" name="dosen_nama" value="<?php echo ($this->input->post('dosen_nama') ? $this->input->post('dosen_nama') : $dosen['dosen_nama']); ?>" class="form-control" id="dosen_nama" />
							<span class="text-danger"><?php echo form_error('dosen_nama');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="dosen_email" class="control-label"><span class="text-danger">*</span>Dosen Email</label>
						<div class="form-group">
							<input type="text" name="dosen_email" value="<?php echo ($this->input->post('dosen_email') ? $this->input->post('dosen_email') : $dosen['dosen_email']); ?>" class="form-control" id="dosen_email" />
							<span class="text-danger"><?php echo form_error('dosen_email');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="dosen_jabatanfungsional" class="control-label"><span class="text-danger">*</span>Dosen Jabatanfungsional</label>
						<div class="form-group">
							<input type="text" name="dosen_jabatanfungsional" value="<?php echo ($this->input->post('dosen_jabatanfungsional') ? $this->input->post('dosen_jabatanfungsional') : $dosen['dosen_jabatanfungsional']); ?>" class="form-control" id="dosen_jabatanfungsional" />
							<span class="text-danger"><?php echo form_error('dosen_jabatanfungsional');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="dosen_hp" class="control-label"><span class="text-danger">*</span>Dosen Hp</label>
						<div class="form-group">
							<input type="text" name="dosen_hp" value="<?php echo ($this->input->post('dosen_hp') ? $this->input->post('dosen_hp') : $dosen['dosen_hp']); ?>" class="form-control" id="dosen_hp" />
							<span class="text-danger"><?php echo form_error('dosen_hp');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="dosen_alamat" class="control-label"><span class="text-danger">*</span>Dosen Alamat</label>
						<div class="form-group">
							<input type="text" name="dosen_alamat" value="<?php echo ($this->input->post('dosen_alamat') ? $this->input->post('dosen_alamat') : $dosen['dosen_alamat']); ?>" class="form-control" id="dosen_alamat" />
							<span class="text-danger"><?php echo form_error('dosen_alamat');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="dosen_kodepos" class="control-label"><span class="text-danger">*</span>Dosen Kodepos</label>
						<div class="form-group">
							<input type="text" name="dosen_kodepos" value="<?php echo ($this->input->post('dosen_kodepos') ? $this->input->post('dosen_kodepos') : $dosen['dosen_kodepos']); ?>" class="form-control" id="dosen_kodepos" />
							<span class="text-danger"><?php echo form_error('dosen_kodepos');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="dosen_s1prodi" class="control-label">Dosen S1prodi</label>
						<div class="form-group">
							<input type="text" name="dosen_s1prodi" value="<?php echo ($this->input->post('dosen_s1prodi') ? $this->input->post('dosen_s1prodi') : $dosen['dosen_s1prodi']); ?>" class="form-control" id="dosen_s1prodi" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="dosen_s1pt" class="control-label">Dosen S1pt</label>
						<div class="form-group">
							<input type="text" name="dosen_s1pt" value="<?php echo ($this->input->post('dosen_s1pt') ? $this->input->post('dosen_s1pt') : $dosen['dosen_s1pt']); ?>" class="form-control" id="dosen_s1pt" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="dosen_s1tahunlulus" class="control-label">Dosen S1tahunlulus</label>
						<div class="form-group">
							<input type="text" name="dosen_s1tahunlulus" value="<?php echo ($this->input->post('dosen_s1tahunlulus') ? $this->input->post('dosen_s1tahunlulus') : $dosen['dosen_s1tahunlulus']); ?>" class="form-control" id="dosen_s1tahunlulus" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="dosen_s2prodi" class="control-label">Dosen S2prodi</label>
						<div class="form-group">
							<input type="text" name="dosen_s2prodi" value="<?php echo ($this->input->post('dosen_s2prodi') ? $this->input->post('dosen_s2prodi') : $dosen['dosen_s2prodi']); ?>" class="form-control" id="dosen_s2prodi" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="dosen_s2pt" class="control-label">Dosen S2pt</label>
						<div class="form-group">
							<input type="text" name="dosen_s2pt" value="<?php echo ($this->input->post('dosen_s2pt') ? $this->input->post('dosen_s2pt') : $dosen['dosen_s2pt']); ?>" class="form-control" id="dosen_s2pt" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="dosen_s2tahunlulus" class="control-label">Dosen S2tahunlulus</label>
						<div class="form-group">
							<input type="text" name="dosen_s2tahunlulus" value="<?php echo ($this->input->post('dosen_s2tahunlulus') ? $this->input->post('dosen_s2tahunlulus') : $dosen['dosen_s2tahunlulus']); ?>" class="form-control" id="dosen_s2tahunlulus" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="dosen_s3prodi" class="control-label">Dosen S3prodi</label>
						<div class="form-group">
							<input type="text" name="dosen_s3prodi" value="<?php echo ($this->input->post('dosen_s3prodi') ? $this->input->post('dosen_s3prodi') : $dosen['dosen_s3prodi']); ?>" class="form-control" id="dosen_s3prodi" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="dosen_s3pt" class="control-label">Dosen S3pt</label>
						<div class="form-group">
							<input type="text" name="dosen_s3pt" value="<?php echo ($this->input->post('dosen_s3pt') ? $this->input->post('dosen_s3pt') : $dosen['dosen_s3pt']); ?>" class="form-control" id="dosen_s3pt" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="dosen_s3tahunlulus" class="control-label">Dosen S3tahunlulus</label>
						<div class="form-group">
							<input type="text" name="dosen_s3tahunlulus" value="<?php echo ($this->input->post('dosen_s3tahunlulus') ? $this->input->post('dosen_s3tahunlulus') : $dosen['dosen_s3tahunlulus']); ?>" class="form-control" id="dosen_s3tahunlulus" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="dosen_profil" class="control-label">Dosen Profil</label>
						<div class="form-group">
							<input type="text" name="dosen_profil" value="<?php echo ($this->input->post('dosen_profil') ? $this->input->post('dosen_profil') : $dosen['dosen_profil']); ?>" class="form-control" id="dosen_profil" />
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