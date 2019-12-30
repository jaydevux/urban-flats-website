<?php
    header("Content-type: text/css; charset: UTF-8");
    include('../config.php');
?>

body, html
{
	background-color: rgb(91, 44, 44);
	font-family: Arial;
	font-size: 11px;
	color: #000;
	margin: 0;
	padding: 0;
	width: 100%;
	height: 100%;
}

.photos a img
{
	margin: 5px;
	color: <?php echo $color; ?>;
}

a
{
	color: <?php echo $colorLinks; ?>;
	text-decoration: none;
}



a:hover
{
	text-decoration: underline;
}

p{
	font-size: 15px;
	line-height: 20px;
}

h1, h2, h3, h4, h5
{
	margin-top: 10px;
	color: <?php echo $colorLinks; ?>;
}

h1
{
	font-size: 35px;
}

h2
{
	font-size: 20px;
}

hr
{
	margin: 25px 0;
}

div.wrapper
{
	margin: 0;
	padding: 0;
	width: 100%;
	height: 100%;
	text-align: center;

}

div.wrapper .holder
{
	width: 956px;
	height: 100%;
	margin: 0 auto;
	background-color: #fff;
	
	text-align: left;
}

/* --- HEADER --- */

div.wrapper .holder .header
{
	width: 956px;
	height: 145px;
	background-color: #f5f5f5;
	background-image: url('../img/header-bg.jpg');
	background-repeat: repeat-x;
}

span.tagline-text {
	
	color:#fff;
	font-size:20px;
	float: left;
	margin-top:50px;
	letter-spacing:2px;
}


div.wrapper .holder .header .logo
{
	float: left;
}

div.wrapper .holder .header .info
{
	float: right;
	width: 388px;
	margin-top: 25px;
	height: 80px;
	background-image: url('../img/header-info-bg.png');
	background-repeat: norepeat;
	text-align: right;
}

div.wrapper .holder .header .info .txt
{
	margin: 10px 10px 0 0;
}

/* --- MENU --- */

div.wrapper .holder .menu
{
	width: 956px;
	height: 40px;
	background-image: url('../img/table-bg.png');
	background-repeat: repeat-x;	
	background-color: <?php echo $color; ?>;
	overflow: hidden;
}

div.wrapper .holder .menu a
{
	display: block;
	width: 180px;
	text-align: center;
	padding-top: 12px;
	height: 40px;
	background-image: url('../img/table-bg.png');
	background-repeat: repeat-x;
	background-color: <?php echo $color; ?>;
	border-right: 1px solid <?php echo $color; ?>;
	font-size: <?php echo $mfontsize; ?>;
	font-weight: bold;
	text-decoration: none;
	color: <?php echo $linkcolor; ?>;
	float: left;
}

div.wrapper .holder .menu a:hover
{
	background-image: url('../img/table-bg.png');
	background-color: <?php echo $color; ?>;
	background-repeat: repeat-x;
	color: #fff;
}

div.wrapper .holder .menu a.active
{
	display: block;
	width: 180px;
	text-align: center;
	padding-top: 12px;
	height: 40px;
	border-right: 1px solid <?php echo $color; ?>;
	font-size: <?php echo $mfontsize; ?>;
	font-weight: bold;
	text-decoration: none;
	float: left;
	background-image: url('../img/table-bg.png');
	background-color: #6E6D68;
	background-repeat: repeat-x;
	color: <?php echo $activelinkcolor; ?>;
}

/* --- CONTENT --- */

div.wrapper .holder .content
{
	width: 956px;
	float: left;
	background-color: #fff;
	position: relative;
}

div.wrapper .holder .content .sidebar
{
	width: 320px;
	background-color: #fff;
	float: left;
}

div.wrapper .holder .content .sidebar .content
{
	width: 300px;
	margin: 10px;
	background-color: #f4f4f4;
	float: left;
}

div.wrapper .holder .content .main
{
	width: 616px;
	margin: 10px;
	float: left;
}

/* --- FOOTER --- */

div.wrapper .holder .footer
{
	width: 956px;
	height: 125px;
	
	background-image: url('../img/footer-bg.jpg');
	background-repeat: repeat-x;
	background-color: #f5f5f5;
	float:left;
}

div.wrapper .holder .footer .logo
{
	float: left;
}