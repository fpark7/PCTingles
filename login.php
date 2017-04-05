<?php
session_start();

$db = new mysqli('localhost', 'root', '', 'pctingles');
if ($db->connect_error):
	die ("Could not connect to db: " . $db->connect_error);
endif;

//Read POST/whatever array here to get login info
//Set email and password in $email and $pass
$email = "felix@virginia.edu";
$pass = "asdf";

$userArray = array();
$query = "SELECT * FROM login";
$result = $db->query($query);
while($row = $result->fetch_assoc()) {
	$loginSet = $row["email"] . " " . $row["password"];
	$userArray[] = $loginSet;
}

//Form the input to compare if success
$input = $email . " " . $pass;
$success = false;

echo "<table><tr><th>Username</th><th>Password</th></tr>";
foreach($userArray as $user) {
	if(strcmp($input, $user) == 0) {
		$success = true;
	}
	$userSplit = explode(" ", $user);
	echo "<tr><td>" . $userSplit[0] . "</td><td>" . $userSplit[1] . "</td></tr>";
}
echo "</table>";

echo "<br>";

if($success) {
	echo "Login Success";
} else {
	echo "Login Fail";
}

/*
To make a page redirect if a user isn't logged in copy and paste this at the top:
if(!isset($_SESSION["username"])) {
	header("Location: login.php");
}
*/
?>