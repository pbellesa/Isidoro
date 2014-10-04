<?php
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
?>
