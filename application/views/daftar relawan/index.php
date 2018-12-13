<link rel="stylesheet" href="<?= base_url(); ?>assets/css/fixed-navbar.css">

<!-- My CSS -->
<link rel="stylesheet" href="assets/css/daftar-relawan.css">

<div class="kotak"></div>
<div class="container">
	<div class="card relawan">
		<div class="card-body">
			<div class="container-fluid">
				<p class="title">Daftar Akun Relawan</p>
				<form action="" method="post">
					<div class="row">
						<div class="col-6">
							<div class="form-group">
								<p class="subtitle">Informasi Pribadi</p>
								<label for="namadepan">Nama Depan</label>
								<input type="text" class="form-control" name="namadepan" placeholder="Nama Depan" />
								<?php if (validation_errors()) : ?>
								<small><span class="text-danger">
										<?= form_error('namadepan'); ?></span></small>
								<?php endif ?>
							</div>
							<div class="form-group">
								<label for="namabelakang">Nama Belakang</label>
								<input type="text" name="namabelakang" class="form-control" placeholder="Nama Belakang" />
								<?php if (validation_errors()) : ?>
								<small><span class="text-danger">
										<?= form_error('namabelakang'); ?></span></small>
								<?php endif ?>
							</div>
							<div class="form-group">
								<label for="ttl">Tempat Tanggal Lahir</label>
								<input type="text" name="ttl" class="form-control" placeholder="Masukkan Tempat tanggal lahir"></input>
								<?php if (validation_errors()) : ?>
								<small><span class="text-danger">
										<?= form_error('ttl'); ?></span></small>
								<?php endif ?>
							</div>
							<div class="form-group">
								<label for="agama">Agama</label><br>
								<select class="custom-select" name="agama">
									<option selected value="Islam">Islam</option>
									<option value="Kristen">Kristen</option>
									<option value="Budha">Budha</option>
									<option value="Hindu">Hindu</option>
								</select>
							</div>
							<div class="form-group">
								<label for="jenkel">Jenis Kelamin</label><br>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="jenkel" id="jenkel" value="Laki-laki">
									<label class="form-check-label" for="jenkel"> Laki-laki</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="jenkel" id="jenkel" value="Perempuan">
									<label class="form-check-label" for="jenkel">Perempuan</label>
								</div>
							</div>
							<div class="form-group">
								<label for="jenisidentitas" >Jenis Identitas</label><br>
								<select class="custom-select" name="jenisidentitas">
									<option selected value="KTP">KTP</option>
									<option value="SIM">SIM</option>
									<option value="Lainnya">Lainnya</option>
								</select>
							</div>
							<div class="form-group">
								<label for="noid">No. Identitas</label>
								<input type="text" name="noid" class="form-control" placeholder="Masukkan No.Identitas">
								<?php if (validation_errors()) : ?>
								<small><span class="text-danger">
										<?= form_error('noid'); ?></span></small>
								<?php endif ?>
							</div>
							<div class="form-group">
								<label for="alamat">Alamat</label>
								<textarea name="alamat" class="form-control"></textarea>
								<?php if (validation_errors()) : ?>
								<small><span class="text-danger">
										<?= form_error('alamat'); ?></span></small>
								<?php endif ?>
							</div>
							<div class="form-group">
								<label for="pos">Kode POS</label>
								<input type="text" name="pos" id="pos" class="form-control" placeholder="Masukkan kode POS" />
								<?php if (validation_errors()) : ?>
								<small><span class="text-danger">
										<?= form_error('pos'); ?></span></small>
								<?php endif ?>
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<p class="subtitle">Informasi Akun</p>
								<label for="username">Username</label>
								<input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username">
								<?php if (validation_errors()) : ?>
								<small><span class="text-danger">
										<?= form_error('username'); ?></span></small>
								<?php endif ?>
							</div>
							<div class="form-group">
								<label for="mail">Email</label>
								<input type="mail" class="form-control" id="email" name="email" placeholder="Masukan email">
								<?php if (validation_errors()) : ?>
								<small><span class="text-danger">
										<?= form_error('email'); ?></span></small>
								<?php endif ?>
							</div>
							<div class="form-group">
								<label for="notelp"> No. Telepon</label>
								<input type="text" class="form-control" id="notelp" name="notelp" placeholder="Masukan no Telepon">
								<?php if (validation_errors()) : ?>
								<small><span class="text-danger">
										<?= form_error('notelp'); ?></span></small>
								<?php endif ?>
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password">
								<?php if (validation_errors()) : ?>
								<small><span class="text-danger">
										<?= form_error('password'); ?></span></small>
								<?php endif ?>
							</div>
							<div class="form-group">
								<label for="repeat">Ulangi Password</label>
								<input type="password" class="form-control" id="repeat" name=repeat placeholder="Ulangi Password">
								<?php if (validation_errors()) : ?>
								<small><span class="text-danger">
										<?= form_error('repeat'); ?></span></small>
								<?php endif ?>
							</div>
							<?php if ($this->session->flashdata('flash')) : ?>
							<div class="form-group">
								<div class="alert alert-success alert-dismissible fade show" role="alert">
									<strong>Data telah</strong>
									<?= $this->session->flashdata('flash'); ?>.
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
							</div>
							<?php endif ?>
							<div class="invisible">
								<label for="level">Role</label>
								<input type="number" value="2" class="form-control" id="level" name="level" placeholder="Ulangi Password">
							</div>
						</div>
					</div>
			</div>
			<button class="btn btn-daftar" type="submit">Daftar</button>
			</form>
		</div>
	</div>
</div>
</div>
