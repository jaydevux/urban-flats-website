<?php

include('config.php');
$ip = $_POST['ip'];

header( 'Location: thankyou.php' );

if ($ip == ''  && $email == '') {echo 'Problem with your submission, please go back!'; exit;}
else {}

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$zip = $_POST['zip'];
$comments = $_POST['comments'];

// --- SAVE FORM TO FILE
$filename = "signup.txt";

foreach ($_POST as $key => $value) {
$posted_titles .= $key."|";
$posted_values .= $value."|";
}

$somecontent = $posted_titles."\n".$posted_values;
$fh = fopen($filename, 'a') or die("can't open file");
$stringData = $somecontent;
fwrite($fh, $stringData);
fclose($fh);


// --- SEND EMAIL TO PARS
$to = "parsmediagroup@gmail.com";

// subject
$subject = 'Urban Flats Orlando - Form Submission';

// message
$message = '
<html>
<head>
  <title>Urban Flats Orlando- Form Submission</title>
</head>
<body>

<h2>Personal Info</h2>

<table border="1" width="600" bordercolor="#CCCCCC" style="border-collapse: collapse" cellpadding="2">
	<tr>
		<td align="left" style="padding: 3px;" width="250"><b>Registration submitted on:</b></td>
		<td align="left" style="padding: 3px;">'.$todayis = date("l, F j, Y, g:i a").'</td>
	</tr>
	<tr>
		<td align="left" style="padding: 3px;" width="250"><b>First Name:</b></td>
		<td align="left" style="padding: 3px;">'.$_POST["fname"].'</td>
	</tr>
	<tr>
		<td align="left" style="padding: 3px;" width="250"><b>Last Name:</b></td>
		<td align="left" style="padding: 3px;">'.$_POST["lname"].'</td>
	</tr>
	<tr>
		<td align="left" style="padding: 3px;" width="250"><b>Email:</b></td>
		<td align="left" style="padding: 3px;">'.$_POST["email"].'</td>
	</tr>
	<tr>
		<td align="left" style="padding: 3px;" width="250"><b>Phone:</b></td>
		<td align="left" style="padding: 3px;">'.$_POST["phone"].'</td>
	</tr>
	<tr>
		<td align="left" style="padding: 3px;" width="250"><b>Zip Code:</b></td>
		<td align="left" style="padding: 3px;">'.$_POST["zip"].'</td>
	</tr>
	<tr>
		<td align="left" style="padding: 3px;" width="250"><b>Comments</b></td>
		<td align="left" style="padding: 3px;">'.$_POST["comments"].'</td>
	</tr>
</table>

</body>
</html>
';

// To send HTML mail, the Content-type header must be set

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To: UrbanFlats <parsmediagroup@gmail.com>' . "\r\n";
$headers .= 'From: UrbanFlats<parsmediagroup@gmail.com>' . "\r\n";

// Mail it
mail($to, $subject, $message, $headers);


?>