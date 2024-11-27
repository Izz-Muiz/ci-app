<div class="container">
	<h3 class="mt-3">
		List Person
	</h3>

	<div class="row">
		<div class="col-md-4">
			<form action="<?= base_url('person'); ?>" method="post">
				<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="Search..." name="keyword" autocomplete="off" autofocus">
					<input type="submit" value="Submit" name="submit">
				</div>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<h5>Results : <?= $total_rows; ?></h5>
			<table class="table">
				<thead>
					<tr>
						<th>No</th>
						<th>Name</th>
						<th>Email</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php if (empty($person)) : ?>
						<tr>
							<td colspan="4">
								<div class="alert alert-danger" role="alert">
									No Data Found
								</div>
							</td>
						</tr>
					<?php endif; ?>

					<?php foreach ($person as $p) : ?>

						<tr>
							<td><?= ++$start ?></td>
							<td><?= $p['name']; ?></td>
							<td><?= $p['email'] ?></td>
							<td>
								<a href="" class="badge text-bg-warning">Detail</a>
								<a href="" class="badge text-bg-success">Update</a>
								<a href="" class="badge text-bg-danger">Delete</a>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
			<?= $this->pagination->create_links();
			?>
		</div>
	</div>
</div>
