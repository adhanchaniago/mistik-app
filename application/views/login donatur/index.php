<!doctype html>
<html id="home">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
	 crossorigin="anonymous">

	<!-- My Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
	 crossorigin="anonymous">

	<!-- My CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?= base_url(); ?>assets/img/mistik.ico">

	<title>
		<?php echo $judul; ?>
	</title>
</head>

<body>

	<!-- Just an image -->
	<header class="header-no-option">
		<div class="container-fluid">
			<a href="<?= base_url(); ?>" class="site-logo">
				<img src="<?= base_url(); ?>assets/img/logo-2.png">
			</a>
		</div>
	</header>
	<div class="container-fluid main">
		<div class="row float-left">
		</div>
		<div class="row float-right">
			<div class="hello">
				<h2>Hallo, <br>Selamat Datang</h2>
			</div>
			<div class="box-login">
				<h5><Span>Login</Span> dengan akun anda</h5>
				<div class="tabel-login">
					<?= form_open('Login_donatur') ?>
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username">
						<?php if (validation_errors()) : ?>
						<small><span class="text-danger">
								<?= form_error('username'); ?></span></small>
						<?php endif ?>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Password">

						<?php if (validation_errors()) : ?>
						<small><span class="text-danger">
								<?= form_error('password'); ?></span></small>
						<?php endif ?>
						<!-- Memperbaiki loginnya -->
						<?php if ($this->session->flashdata('error')) : ?>
						<small><span class="text-danger">
								<?= $this->session->flashdata('error'); ?></span></small>
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
