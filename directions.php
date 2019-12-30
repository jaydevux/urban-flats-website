<?php
include('config.php');
$thisPage = "Directions";
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
				<h1>Directions to <?php echo $compname; ?></h1>
				<p><b><?php echo $compname; ?></b><br /><?php echo $address; ?><br /><?php echo $city; ?>, <?php echo $state; ?>, <?php echo $zip; ?><br /><b>Phone:</b> <?php echo $phone; ?><br /></p>
				<p><iframe width="620" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=55+West+Church+St.+Suite+128+Orlando,+FL,+32801&amp;aq=&amp;sll=27.698638,-83.804601&amp;sspn=12.683443,23.774414&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=55+W+Church+St+%23128,+Orlando,+Florida+32801&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe></p>
			</div>
			
			<br clear="all">
	
		</div>
		
		<?php include('footer.php'); ?>
	
	</div>

</div>

</body>
</html>