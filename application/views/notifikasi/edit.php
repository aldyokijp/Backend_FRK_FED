<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Notifikasi Edit</h3>
            </div>
			<?php echo form_open('notifikasi/edit/'.$notifikasi['notif_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="notif_object" class="control-label">Role</label>
						<div class="form-group">
							<select name="notif_object" class="form-control">
								<option value="">select role</option>
								<?php 
								foreach($all_roles as $role)
								{
									$selected = ($role['roles_id'] == $notifikasi['notif_object']) ? ' selected="selected"' : "";

									echo '<option value="'.$role['roles_id'].'" '.$selected.'>'.$role['roles_nama'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="notif_subject" class="control-label">Notif Subject</label>
						<div class="form-group">
							<input type="text" name="notif_subject" value="<?php echo ($this->input->post('notif_subject') ? $this->input->post('notif_subject') : $notifikasi['notif_subject']); ?>" class="form-control" id="notif_subject" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="notif_maker_id" class="control-label">Notif Maker Id</label>
						<div class="form-group">
							<input type="text" name="notif_maker_id" value="<?php echo ($this->input->post('notif_maker_id') ? $this->input->post('notif_maker_id') : $notifikasi['notif_maker_id']); ?>" class="form-control" id="notif_maker_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="notif_date" class="control-label">Notif Date</label>
						<div class="form-group">
							<input type="text" name="notif_date" value="<?php echo ($this->input->post('notif_date') ? $this->input->post('notif_date') : $notifikasi['notif_date']); ?>" class="form-control" id="notif_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="notif_fill" class="control-label">Notif Fill</label>
						<div class="form-group">
							<textarea name="notif_fill" class="form-control" id="notif_fill"><?php echo ($this->input->post('notif_fill') ? $this->input->post('notif_fill') : $notifikasi['notif_fill']); ?></textarea>
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