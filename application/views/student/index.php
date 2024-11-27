<div class="container mt-3">
	<?php if ($this->session->flashdata('flash')): ?>
		<div class="row mt-3">
			<div class="col-md-6">
				<div class="alert alert-success alert-dismissible fade show" role="alert">Student Data
					<strong>successfully</strong> <?= $this->session->flashdata('flash'); ?>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<div class="row">
		<div class="col-md-6 mt-3">
			<a href="<?= base_url(); ?>student/add" class="btn btn-primary">Add Student</a>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-6">
			<form action="" method="post">
				<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="Search Students" name="keyword">
					<button class="btn btn-outline-secondary" type="submit" id="search">Search</button>
				</div>
			</form>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-6">
			<h3>Student Information</h3>
			<?php if (empty($students)): ?>
				<div class="alert alert-danger" role="alert">
					No Student Data Found
				</div>
			<?php endif; ?>

			<ul class="list-group">
				<?php foreach ($students as $student) : ?>
					<li class="list-group-item"><?= $student['nama'] ?>
						<a href="<?= base_url(); ?>student/delete/<?= $student['id']; ?>" class="badge text-bg-danger float-end" onclick="return confirm('Delete?');">Delete</a>
						<a href="<?= base_url(); ?>student/update/<?= $student['id']; ?>" class="badge text-bg-warning float-end">Update</a>
						<a href="<?= base_url(); ?>student/detail/<?= $student['id']; ?>" class="badge text-bg-primary float-end">Detail</a>
					</li>
				<?php endforeach ?>
			</ul>
		</div>
	</div>
</div>
