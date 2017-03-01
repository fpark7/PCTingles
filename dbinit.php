<?php
$db = new mysqli('localhost', 'root', '', 'pctingles');
if ($db->connect_error):
	die ("Could not connect to db: " . $db->connect_error);
endif;
$db->query("drop table Login");
$result = $db->query("create table Login (email varchar(30) primary key not null, password char(32) not null, LName char(30) not null, FName char(30) not null)") or die ("Invalid: " . $db->error);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Database Initialization</title>
	</head>
	<body>
		Database Initialized!  You should see an empty Login table in phpmyadmin now.
		TODO: Need to add more fields to the login table
	</body>
</html>