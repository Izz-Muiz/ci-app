<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					Update Student
				</div>
				<div class="card-body">
					<form action="" method="post">
						<input type="hidden" name="id" value="<?= $student['id']; ?>">
						<div class="mb-3">
							<label for="nama" class="form-label">Name: </label>
							<input type="text" class="form-control" id="nama" name="nama" value="<?= $student['nama'] ?>">
							<div class="form-text text-danger"><?= form_error('nama') ?></div>
						</div>
						<div class="mb-3">
							<label for="ic" class="form-label">IC: </label>
							<input type="number" class="form-control" id="ic" name="ic" value="<?= $student['ic'] ?>">
							<div class="form-text text-danger"><?= form_error('ic') ?></div>

						</div>
						<div class="mb-3">
							<label for="alamat" class="form-label">Alamat: </label>
							<input type="text" class="form-control" id="alamat" name="alamat" value="<?= $student['alamat'] ?>">
							<div class="form-text text-danger"><?= form_error('alamat') ?></div>

						</div>
						<div class="mb-3">
							<label for="umur" class="form-label">Umur: </label>
							<input type="number" class="form-control" id="umur" name="umur" value="<?= $student['umur'] ?>">
							<div class="form-text text-danger"><?= form_error('umur') ?></div>

						</div>
						<button type="submit" class="btn btn-primary float-end">Update Student</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>
