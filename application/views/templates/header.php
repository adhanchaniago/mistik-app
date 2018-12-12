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

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?= base_url(); ?>assets/img/mistik.ico">

	<title>
		<?php echo $judul; ?>
	</title>
</head>

<body>

	<!-- Navigation Bar -->
	<nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top">
		<div class="container-fluid">
			<a class="navbar-brand page-scroll" href="<?= base_url(); ?>#home"><img src="<?= base_url(); ?>asset/img/logo.svg" alt=" logo"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
			aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<a class="nav-item nav-link active page-scroll" href="<?= base_url(); ?>#home">Home <span class="sr-only">(current)</span></a>
					<a class="nav-item nav-link page-scroll" href="<?= base_url(); ?>#program">Program</a>
					<a class="nav-item nav-link page-scroll" href="<?= base_url(); ?>#contact">Contact</a>
					<a class="nav-item nav-link" href="<?= base_url(); ?>"><span>About</span></a>
					<a class="nav-item btn tombol" href="<?= base_url(); ?>Daftar_donatur">Sign Up</a>
				</div>
			</div>
		</div>
	</nav>

	<!-- End Navigation -->
