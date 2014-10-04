  <?php
  	$submitErr = "< Please fill this field.";
  	
  	if(isset($_POST['submit'])){
  	if($_POST['title'] == "" ) {$valid1 = false; } else { $valid1 = true; }
  	if($_POST['firstName'] == "" ) {$valid1 = false; } else { $valid1 = true; }
  	if($_POST['lastName'] == "" ) {$valid2 = false; } else { $valid2 = true; }
  	if($_POST['organization'] == "") {$valid3 = false; } else { $valid3 = true; }
  	if($_POST['email'] == "") {$valid4 = false; } else { $valid4 = true; }
  	if($_POST['phone'] == "") {$valid5 = false; } else { $valid5 = true; }
  	if($_POST['monday'] == "" ) {$valid1 = false; } else { $valid1 = true; }
  	if($_POST['tuesday'] == "" ) {$valid1 = false; } else { $valid1 = true; }
  	if($_POST['t-shirt'] == "" ) {$valid1 = false; } else { $valid1 = true; }
  	}
  	
  	if ( $valid5 == true && $valid4 == true && $valid3 == true && $valid2 == true && $valid1 == true ) {
  		$valid = true;
  	}
  	else {
  		$valid = false;
  	}
	if ( isset($_POST['submit']) && $valid == true) {
		if($_GET) {
			print "Name:         ";
			print $_GET['title'];
			print " ";
			print $_GET['firstName'];
			print " ";
			print $_GET['lastName'];
			print "<br>";
			print "Organization: ";
			print $_GET['organization'];
			print "<br>";
			print "Email:        ";
			print $_GET['email'];
			print "<br>";
			print "Phone:        ";
			print $_GET['phone'];
			print "<br>";
			print "Attending:    ";
			print $_GET['monday'];
			print " ";
			print $_GET['tuesday'];
			print "<br>";
			print "Shirt size:   ";
			print $_GET['t-shirt'];
		}else if($_POST) {
			print "Name:         ";
			print $_POST['title'];
			print " ";
			print $_POST['firstName'];
			print " ";
			print $_POST['lastName'];
			print "<br>";
			print "Organization: ";
			print $_POST['organization'];
			print "<br>";
			print "Email:        ";
			print $_POST['email'];
			print "<br>";
			print "Phone:        ";
			print $_POST['phone'];
			print "<br>";
			print "Attending:    ";
			print $_POST['monday'];
			print " ";
			print $_POST['tuesday'];
			print "<br>";
			print "Shirt size:   ";
			print $_POST['t-shirt'];
	
		}

	}else {?>
<html>
  <head>
    <title>FSOSS Registration</title>
  </head>
  <body>

  <form method="POST" action="">
	<table>
	<tr>
    	<td valign="top">Title:</td>
	<td>
		<table>
		<tr>
		<td><input type="radio" name="title" value="Mr."<?php if ($_POST['title'] == "Mr.") echo "CHECKED"; ?>>Mr</td>
		</tr>
		<tr>
		<td><input type="radio" name="title" value="Mrs."<?php if ($_POST['title'] == "Mrs.") echo "CHECKED"; ?>>Mrs</td>
		</tr>
		<tr>
		<td><input type="radio" name="title" value="Ms."<?php if ($_POST['title'] == "Ms.") echo "CHECKED"; ?>>Ms</td>
		</tr><?php if(($_POST['title'] == "") && ($_POST) ) { print $submitErr;  } ?>
		</table>
	</td>
	</tr><br>
	<tr>
    	<td>First name:</td>
	<td><input name="firstName" type="text" value="<?php if($_POST) { print $_POST['firstName']; } ?>">
	<?php if(($_POST['firstName'] == "") && ($_POST) ) { print $submitErr;  } ?></td>
	</tr>
	<tr>
    	<td>Last name:</td>
	<td><input name="lastName" type="text" value="<?php if($_POST) { print $_POST['lastName']; } ?>">
	<?php if(($_POST['lastName'] == "") && ($_POST) ) { print $submitErr;  } ?></td>
	</tr>
	<tr>
    	<td>Organization:</td>
	<td><input name="organization" type="text" value="<?php if($_POST) { print $_POST['organization']; } ?>">
	<?php if(($_POST['organization'] == "") && ($_POST) ) { print $submitErr;  }?></td>
	</tr>
	<tr>
    	<td>Email address:</td>
	<td><input name="email" type="text" value="<?php if($_POST) { print $_POST['email']; } ?>">
	<?php if(($_POST['email'] == "") && ($_POST) ) { print $submitErr;  } ?></td>
	</tr>
	<tr>
    	<td>Phone number:</td>
	<td><input name="phone" type="text" value="<?php if($_POST) { print $_POST['phone']; } ?>">
	<?php if(($_POST['phone'] == "") && ($_POST) ) { print $submitErr; }?></td>
	</tr>
	<tr>
    	<td>Days attending:</td>
	<td>
		<input name="monday" type="checkbox" value="monday" <?php if ($_POST['monday']) echo "CHECKED"; ?>>Monday
		<input name="tuesday" type="checkbox" value="tuesday" <?php if ($_POST['tuesday']) echo "CHECKED"; ?>>Tuesday
		<?php if(($_POST['monday'] == "" && $_POST['tuesday'] == "") && ($_POST) ) { print " < Choose one";  } ?>
		<td/>
	</tr>
	<tr>
	<td>T-shirt size:</td>
	<td>
	<select name="t-shirt">
	<option value="">--Please choose--</option>
	<option name="s" value="s"<?php if ($_POST['t-shirt'] == 's') echo "SELECTED"; ?>>Small</option>
	<option name="m" value="m"<?php if ($_POST['t-shirt'] == 'm') echo "SELECTED"; ?>>Medium</option>
	<option name="l" value="l"<?php if ($_POST['t-shirt'] == 'l') echo "SELECTED"; ?>>Large</option>
	<option name="xl" value="xl"<?php if ($_POST['t-shirt'] == 'xl') echo "SELECTED"; ?>>X-Large</option>
	</select>	<?php if(($_POST['t-shirt'] == "") && ($_POST) ) { print " < Choose one";  } ?>
	</td>
	</tr>
	<tr><td><br></td></tr>
	<tr>
	<td></td>
	<td><input name="submit" type="submit"></td>
	</tr>
  </form>
  <?php }  ?>
  
  </body>
</html>

