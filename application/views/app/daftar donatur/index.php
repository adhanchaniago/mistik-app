<link rel="stylesheet" href="<?= base_url(); ?>asset/css/fixed-navbar.css">

<div class="kotak"></div>
</div>
<div class="container">
	<div class="card">
		<div class="card-body">
			<h3 class="card-title">Daftar Akun Donatur</h3>
			<div class="tabel-donatur">

				<form action="" method="post">
					<div class="form-group">
						<div class="form-group">
						</div>
					</div>
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" name="username" id="username" placeholder="Masukan Username">
					<?php if (validation_errors()) : ?>
						<span class="text-danger"><?= form_error('username'); ?></span>
					<?php endif ?>
					</div>
					<div class="form-group">
						<label for="ttl">Tanggal Lahir</label>
						<input type="date" class="form-control" name="ttl" id="ttl" placeholder="">
					<?php if (validation_errors()) : ?>
						<span class="text-danger"><?= form_error('ttl'); ?></span>
					<?php endif ?>
					</div>
					<div class="form-group">
						<label for="alamat">Alamat</label>
						<textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
					<?php if (validation_errors()) : ?>
						<span class="text-danger"><?= form_error('alamat'); ?></span>
					<?php endif ?>
					</div>
					<div class="form-group">
						<label for="mail">E-Mail</label>
						<input type="mail" class="form-control" name="email" id="email" placeholder="Masukan E-Mail">
					<?php if (validation_errors()) : ?>
						<span class="text-danger"><?= form_error('email'); ?></span>
					<?php endif ?>
					</div>
					<div class="form-group">
						<label for="notelp">No. Telepon</label>
						<input type="text" class="form-control" name="notelp" id="notelp" placeholder="Masukan No. Telepon">
					<?php if (validation_errors()) : ?>
						<span class="text-danger"><?= form_error('notelp'); ?></span>
					<?php endif ?>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" name="password" id="password" placeholder="Masukan Password">
					<?php if (validation_errors()) : ?>
						<span class="text-danger"><?= form_error('password'); ?></span>
					<?php endif ?>
					</div>
					<div class="form-group">
						<label for="repeat">Ulangi Password</label>
						<input type="password" class="form-control" name="repeat" id="repeat" placeholder="Ulangi Password">
					<?php if (validation_errors()) : ?>
						<span class="text-danger"><?= form_error('repeat'); ?></span>
					<?php endif ?>
					</div>

					<?php if ($this->session->flashdata('flash')) : ?>
					<div class="form-group">
						<div class="alert alert-success alert-dismissible fade show" role="alert">
							<strong>Data telah</strong> <?= $this->session->flashdata('flash'); ?>.
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
					</div>
					<?php endif ?>

					<div class="d-flex justify-content-center">
						<button type="submit" class="btn btn-daftar">Daftar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
