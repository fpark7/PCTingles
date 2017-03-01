<?php
$db = new mysqli('localhost', 'root', '', 'pctingles');
if ($db->connect_error):
	die ("Could not connect to db: " . $db->connect_error);
endif;
$split[0] = $_POST["name"];
$split[1] = $_POST["email"];
$split[2] = $_POST["password"];
$split[3] = $_POST["school"];
$split[4] = $_POST["year"];
$split[5] = $_POST["newsletter"];
$split[6] = $_POST["address"];
$split[7] = $_POST["city"];
$split[8] = $_POST["state"];
$split[9] = $_POST["zip-code"];
$split[10] = $_POST["demo-message"];

$email = $split[1];
$password = $split[2];
$name = $split[0];
$school = $split[3];
$year = $split[4];
if(strcmp($split[5], "on") == 0) {
	$newsletter = 1;
} else {
	$newsletter = 0;
}
$address = $split[6];
$city = $split[7];
$state = $split[8];
$zip = $split[9];
$extra = $split[10];

$query = "INSERT INTO Login (email, password, name, school, year, newsletter, address, city, state, zip, extra) VALUES ('$email', '$password', '$name', '$school', '$year', '$newsletter', '$address', '$city', '$state', '$zip', '$extra')";
$result = $db->query($query);

if(!$result) {
	die("Query failed: " . $db->error);
}

//Have a condition 
header("Location: confirm.html");

print_r ($split); 

?>