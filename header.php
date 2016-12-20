<!DOCTYPE html>
<html lang="sv-SE">
<head>

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title>Boilerplate</title>

	<?php include('partials/head-icons.php'); ?>

	<?php
		// Prevent CSS Caching
		$css_link = '/build/css/master.css';
		$css_file = '/build/css/master.css';

		// rand string for cache busting
		$rand = substr(md5(microtime()),rand(0,26),5);
	?>

	<link rel="stylesheet" type="text/css" href="<?php echo $css_link . '?' . $rand; ?>" />

	<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.js"></script>
		<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
