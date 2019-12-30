<?php
include('config.php');
$thisPage = "About Us";
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
				<h1>About <?php echo $compname; ?></h1>
				<p><font size="4">
				<img border="0" src="img/about-pic.jpg" align="right" width="300" height="225"></font></p>
				<h2>The Dream</h2>	
				<p>

				As a young girl, Suzanne Bonham dreamed of a career that would fulfill her passion for food, 
					fun and hospitality. Her aspirations would take her to the place famous for making dreams come true-Walt Disney World. 
					Suzanne was fortunate to have traveled the globe, including to Europe and 
					Africa, teaching others the magic of a memorable guest experience.</p>
				<p>
				While this international adventure was truly amazing, Suzanne's life dream was to 
				build her own unique dining experience. In 2004, she founded Urban Flats as a "refined casual" 
				restaurant and wine bar where the centuries-old flatbread is given a modern new twist with interesting, 
				fresh and healthy ingredients. And, the tastefully selected wines from around the world pair perfectly with your gourmet flat.
				</p>
				<h2>The Modern-Urban Casual Experience</h2>	
				<p>Inspired by the exciting vibe of urban renewal, Urban Flats epitomizes the sophistication and chic energy of cities that 
					are "re-inventing" themselves.  From the moment you step inside our "flat", you'll feel a special connection to the past 
					with an impressive photographic collection that quietly whispers each city's unique story. This cosmopolitan sensibility 
					is perfectly complemented by the enchanting aroma of ancient flatbreads baking in the hearth oven. The exposed ducts, 
					painted concrete floors and wrap-around sidewalk cafe add to the urban appeal.</p>
			</div>
			
			<br clear="all">
	
		</div>
		
		<?php include('footer.php'); ?>
	
	</div>

</div>

</body>
</html>