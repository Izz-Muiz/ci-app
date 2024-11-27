<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					Detail
				</div>
				<div class="card-body">
					<h5 class="card-title"><?= $student['nama']; ?></h5>
					<h6 class="card-title mb-2 text-muted"><?= $student['ic']; ?></h6>
					<p class="card-text"><?= $student['alamat']; ?>
						<br>
						<?= $student['umur']; ?>
					</p>
					<a href="<?= base_url() ?>student/index" class="btn btn-primary">Back</a>
				</div>
			</div>
		</div>
	</div>
</div>
