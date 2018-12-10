<link rel="stylesheet" href="<?= base_url(); ?>asset/css/style.css">
<link rel="stylesheet" href="<?= base_url(); ?>asset/css/fixed-navbar.css">

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
		<img src="<?= base_url(); ?>assest/img/bg-login-01.png">
	</div>
	<div class="row float-right">
		<div class="hello">
			<h2>Hallo, <br>Selamat Datang</h2>
		</div>
		<div class="box-login">
			<h5><Span>Login</Span> dengan akun anda</h5>
			<div class="tabel-login">
				<form action="" method="post">
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Password">
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
	$('html, body').css({
		overflow: 'hidden',
		height: '100%'
	});

</script>
