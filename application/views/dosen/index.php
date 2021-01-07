<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Dosen Listing</h3>
				<div class="box-tools">
					<a href="<?php echo site_url('dosen/add'); ?>" class="btn btn-success btn-sm">Add</a>
				</div>
			</div>

			<div class="box-body">
				<?php foreach ($dosen as $d) { ?>
					<div class="col-md-2">
						<div class="card border-dark " style="width: 18rem;">
							<div class="card-header">

								<h5 class="card-title"><?php echo $d['dosen_nama']; ?></h5>
							</div>
							<img style="widht:50px;height:50px" class="card-img-top" src="<?= base_url('resources/'); ?>img/<?= $d['dosen_profil']; ?> " alt="Card image cap">
							<div class="card-body">
								<p class="card-text"><?php echo $d['NIDN']; ?></p>
								<p class="card-text"><small class="text"><?php echo $d['dosen_jabatanfungsional']; ?></small></p>
								<a href="<?php echo site_url('dosen/edit/' . $d['NIDN']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
								<a href="<?php echo site_url('dosen/remove/' . $d['NIDN']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
							</div>
						</div>
					</div>

				<?php } ?>

			</div>
			<div class="pull-right">
				<?php echo $this->pagination->create_links(); ?>
			</div>
		</div>
	</div>
</div>
</div>