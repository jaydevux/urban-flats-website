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
		
				<br />
				<h1 style="text-align: center">Thank You!</h1>
				<p style="text-align: center;">
				<img border="0" src="img/ok.png" width="48" height="48"></p>
				<p style="text-align: center"><b>Your submission was 
				successfully received</b></p>
				

				<p style="text-align: center"><font size="4">If you need 
				immediate assistance, please call us at 
				<font color="#C71717"><b><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></b></font>.</font></p>
				<p style="text-align: center"><a href="/"><b>Click 
				here to return to homepage</b></a></p>
	
		</div>
		
		<?php include('footer.php'); ?>
	
	</div>

</div>

</body>
</html>