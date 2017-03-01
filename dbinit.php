<?php
$db = new mysqli('localhost', 'root', '', 'pctingles');
if ($db->connect_error):
	die ("Could not connect to db: " . $db->connect_error);
endif;
$db->query("drop table Login");
$result = $db->query("create table Login (email varchar(30) primary key not null, password char(32) not null, name char(30) not null, school char(4) not null, year varchar(10) not null, newsletter BIT, address varchar(40) not null, city varchar(40) not null, state char(2) not null, zip char(5) not null, extra varchar(250))") or die ("Invalid: " . $db->error);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Database Initialization</title>
	</head>
	<body>
		Database Initialized!  You should see an empty Login table in phpmyadmin now.
		TODO: Need to add more tables
		<p>
			If you're a user reading this page - woops you just reset the users table!
			Please leave :'(
		</p>
	</body>
</html>