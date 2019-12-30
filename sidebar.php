			<div class="sidebar">
				<div class="content">
					<form id="free_consultation" name="free_consultation" method="POST" action="process.php" onsubmit="return validate_form(this)">
					<input type="hidden" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR'] ?>">
					<table border="0" width="100%" style="border-collapse: collapse; border: 2px solid <?php echo $color; ?>;" bgcolor="#ebebeb" cellpadding="0">
						<tr>
							<td colspan="2" bgcolor="<?php echo $color; ?>" height="40" style="padding-left: 10px" background="/img/table-bg.png">
							<b><font color="#000" size="5">Got question? Email us</font></b></td>
						</tr>
						<tr>
							<td width="100%" colspan="2" height="5"></td>
						</tr>
						<tr>
							<td width="35%" height="25"><b><font size="2">&nbsp; First Name:</font></b></td>
							<td width="62%" height="25">
							<input type="text" name="fname" size="20"></td>
						</tr>
						<tr>
							<td width="35%" height="25"><b><font size="2">&nbsp; Last Name:</font></b></td>
							<td width="62%" height="25">
							<input type="text" name="lname" size="20"></td>
						</tr>
						<tr>
							<td width="35%" height="25"><b><font size="2">&nbsp; Email:</font></b></td>
							<td width="62%" height="25">
							<input type="text" name="email" size="25"></td>
						</tr>
						<tr>
							<td width="35%" height="25"><b><font size="2">&nbsp; Phone:</font></b></td>
							<td width="62%" height="25">
							<input type="text" name="phone" size="20"></td>
						</tr>
						<tr>
							<td width="35%" height="25"><b><font size="2">&nbsp; ZIP Code:</font></b></td>
							<td width="62%" height="25">
							<input type="text" name="zip" size="10"></td>
						</tr>
						<tr>
							<td width="35%" height="25"><b><font size="2">&nbsp; </font></b>
							<font size="2"><b>Comments:</b></font></td>
							<td width="62%" height="25">
							<textarea rows="4" name="comments" cols="20"></textarea></td>
						</tr>
						<tr>
							<td width="97%" colspan="2" height="10"></td>
						</tr>
						<tr>
							<td width="100%" colspan="2" align="center">
							<input type="image" src="img/button-submit.png" border="0" alt="" type="submit" style="border: none;" name="Submit" /></td>
						</tr>
						<tr>
							<td width="97%" colspan="2" height="5"></td>
						</tr>
					</table>
					</form>
					<p></p>
				<p></p>
				<p></p>
					<table border="0" width="100%" style="border-collapse: collapse; border: 2px solid <?php echo $color; ?>;" bgcolor="#ebebeb" cellpadding="0">
						<tr>
							<td bgcolor="<?php echo $color; ?>" height="40" style="padding-left: 10px" background="img/table-bg.png">
							<b><font size="5" color="#0000">Find Us Online</font></b></td>
						</tr>
						<tr>
							<td width="100%" height="5"></td>
						</tr>
						<tr>
							<td width="97%" style="padding: 5px">
							<p><font size="2">
							<a target="_blank" href="https://www.facebook.com/urbanflatsorlando">
							Facebook.com</a></font></p>
							<p><font size="2">
							<a target="_blank" href="https://twitter.com/UrbanFlatsWine">
							Twitter.com</a></font></p>
							</td>
						</tr>
						<tr>
							<td width="97%" height="5"></td>
						</tr>
					</table>

				
				</div>
			</div>