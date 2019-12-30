<?php
include('config.php');
$thisPage = "Menu";
?>
<html>
<head>
<!--<link rel="alternate" type="application/rss+xml" title="RSS Feed" href="/rss.xml" />-->
<link rel="shortcut icon" href="/favicon.png" />

<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta name="keywords" content="<?php echo $meta_keywords; ?>">
<meta name="description" content="<?php echo $meta_description; ?>">
<meta name="category" content="<?php echo $meta_category; ?>" />

<link rel="stylesheet" type="text/css" href="css/style.php" />
<script type="text/javascript" src="js/scripts.js"></script>

<title><?php echo $thisPage .' | '. $compname .' - '. $headline; ?></title>

</head>

<body>

<div class="wrapper">

	<div class="holder">

		<?php include('header.php'); ?>
		
		<?php include('menu.php'); ?>
		
		<div class="content">
		
		<?php include('sidebar.php'); ?>
		
			<div class="main">
				<h1><?php echo $compname; ?> Menu</h1>
				<p><b>Coming Soon!</b></p>
			</div>
			
			<br clear="all">
	
		</div>
		
		<?php include('footer.php'); ?>
	
	</div>

</div>

</body>
</html>