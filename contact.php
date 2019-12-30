<?php
include('config.php');
$thisPage = "Contact";
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
				<h1>Contact <?php echo $compname; ?></h1>
				<p>
				<img border="0" src="img/contact-pic.jpg" align="right" width="300" height="225"></p>
				<p>If you have any questions or concerns use the contact options below.</p>
				<p><b><?php echo $compname; ?></b><br /><?php echo $address; ?><br /><?php echo $city; ?>, <?php echo $state; ?>, <?php echo $zip; ?></p>
				<p><b>Phone:</b> <?php echo $phone; ?><br /></p>
				<p><b>Email: </b><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
				<p><b>If you need immediate assistance, please give us a call at <?php echo $phone; ?>.</b></p>
			</div>
			
			<br clear="all">
	
		</div>
		
		<?php include('footer.php'); ?>
	
	</div>

</div>

</body>
</html>