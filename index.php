<?php
include('config.php');
$thisPage = "Home";
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
			<h1>Welcome to <?php echo $compname; ?></h1>
			<p>
				From the moment you step inside Urban Flats, you'll feel uplifted by the warm smiles 
				and authentic aroma of our ancient world style flatbreads. Relax in our charming wine bar, 
				or bring the whole family for an evening of food, fun and togetherness. We call it refined 
				casual dining with a dash of chic energy. You'll call it a completely uplifting experience.</p>
				<p style="text-align: center;">
				<img border="0" src="img/intro-pic.jpg" width="600" height="324" title="<?php echo $compname; ?>"></p>
				
			<p>
				At Urban Flats, we are passionate about urban renewal and being part of this special modern 
				renaissance happening around the country. We truly care about these extraordinary cities we now 
				call home. And, we are proud to give back to the surrounding communities. After all, it's the neighborly thing to do. 
</p>
			
			
				<h2>Experience Your Own Urban Renewal!</h2>
				</div>
			
			<br clear="all">
	
		</div>
		
		<?php include('footer.php'); ?>
	
	</div>

</div>

</body>
</html>
