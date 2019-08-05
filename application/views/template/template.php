<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $page_title; ?></title>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</head>

<body style="background: url(<?= base_url() ?>assets/imgs/Background_J.jpg) no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">

	<nav class="navbar navbar-expand-lg navbar-dark">
	<a class="navbar-brand" href="<?= base_url() ?>">
		<img src="<?= base_url() ?>assets/imgs/CDM_Logo.png" class="img-responsive">
	</a>
	<!--
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
-->
	<!--        <div class="collapse navbar-collapse" id="navbarSupportedContent">-->
	<!--<div class="navbar-nav">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item <?php if ($this->uri->segment(2) == "") {
									echo 'active';
								} ?>">
				<a class="nav-link" href="<?= base_url() ?>"> Home</a> </li>
			<li class="nav-item <?php if ($this->uri->segment(2) == "stories") {
									echo 'active';
								} ?>">
				<a class="nav-link" href="<?= base_url() ?>index.php/home/stories">Stories</a>
			</li>
		</ul>
	</div> -->
	<header id="header">
		<nav id="navbar-nav">
			<ul class="menu_nav">
				<li class="nav-link <?php if ($this->uri->segment(2) == "") {
										echo 'active';
									} ?>">
					<a class="tab-link" href=" <?= base_url() ?>">Home</a></li>
				<li class="nav-link <?php if ($this->uri->segment(2) == "stories") {
										echo 'active';
									} ?>">
					<a href="<?= base_url() ?>index.php/home/stories">Stories</a></li>
			</ul>
		</nav>
	</header>
	</nav>
	<div class="svg_line">
		<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1944.04 187.45">
			<defs>
				<style>
					.cls-1 {
						fill: none;
						stroke-miterlimit: 10;
						stroke-width: 10px;
						stroke: url(#Безымянный_градиент_2);
					}
				</style>
				<linearGradient id="Безымянный_градиент_2" x1="-22.41" y1="120.55" x2="1921.64" y2="120.55" gradientUnits="userSpaceOnUse">
					<stop offset="0.09" stop-color="#976b29" />
					<stop offset="0.22" stop-color="#efb21e" />
					<stop offset="0.36" stop-color="#602f11" />
					<stop offset="0.66" stop-color="#ffc808" />
					<stop offset="0.91" stop-color="#643212" />
				</linearGradient>
			</defs>
			<title>Isascs line</title>
			<path class="cls-1" d="M-18.41,170.77S83.12,306.15,1010.83,69.24c222.45-56.8,571.35-57.73,909.17,59.37" transform="translate(22.41 -26.83)" />
		</svg>
	</div>


	<?php echo $body; ?>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
