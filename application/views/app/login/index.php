<!-- My CSS -->
<link rel="stylesheet" href="<?= base_url(); ?>asset/css/style.css">

<!-- Just an image -->
<header class="header-no-option">
	<div class="container-fluid">
		<a href="<?= base_url(); ?>" class="site-logo">
			<img src="<?= base_url(); ?>asset/img/logo-2.png">
		</a>
	</div>
</header>
<div class="container-fluid main">
	<div class="row float-left">
		<!-- <img src="<?= base_url(); ?>asset/img/bg-login-01.png" width="1400" height="800"> -->
	</div>
	<div class="row float-right">
		<div class="hello">
			<h2>Hallo, <br>Selamat Datang</h2>
		</div>
		<div class="box-login">
			<h5><Span>Login</Span> dengan akun anda</h5>
			<div class="tabel-login">
				<?= form_open('Login') ?>
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username">
					<?php if (validation_errors()) : ?>
						<small><span class="text-danger"><?= form_error('username'); ?></span></small>
					<?php endif ?>
					</div> 
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Password">
					
					<?php if (validation_errors()) : ?>
						<small><span class="text-danger"><?= form_error('password'); ?></span></small>
					<?php endif ?>

					<?php if ($this->session->flashdata('error')) : ?>
						<small><span class="text-danger"><?= $this->session->flashdata('error'); ?></span></small>
					<?php endif ?>	
						<small><a href="">Lupa password?</a></small>
					</div>
			</div>
			<button type="submit" class="btn btn-login" name="submit">Login</button>
			<div class="d-flex justify-content-center">
				<a href="/daftar_donatur.html" class="buat-akun">Buat Akun</a>
			</div>
			</form>
		</div>
	</div>
</div>

<script>
	$('html', 'body').css({
		overflow: 'hidden',
		height: '100%'
	});
</script>
