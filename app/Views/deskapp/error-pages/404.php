<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Project Manegment System </title>
   
	<!-- Site favicon -->
	<link rel="sfhm-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>/assets/endors/images/sfhm-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>/assets/endors/images/sfhm-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>/assets/endors/images/sfhm-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/endors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/endors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/endors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
	<div class="error-page d-flex align-items-center flex-wrap justify-content-center pd-20">
		<div class="pd-10">
			<div class="error-page-wrap text-center">
				<h1>404</h1>
				<h3>Error: 404 Page Not Found</h3>
				<p>Sorry, the page you’re looking for cannot be accessed.<br>Either check the URL</p>
				<div class="pt-20 mx-auto max-width-200">
					<a href="<?php echo base_url('public/dashboard'); ?>" class="btn btn-primary btn-block btn-lg">Back To Home</a>
				</div>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="<?php echo base_url(); ?>/assets/endors/scripts/core.js"></script>
	<script src="<?php echo base_url(); ?>/assets/endors/scripts/script.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/endors/scripts/process.js"></script>
	<script src="<?php echo base_url(); ?>/assets/endors/scripts/layout-settings.js"></script>
</body>
</html>