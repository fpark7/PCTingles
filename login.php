<?php
session_start();

$db = new mysqli('localhost', 'root', '', 'pctingles');
if ($db->connect_error):
	die ("Could not connect to db: " . $db->connect_error);
endif;

//Read POST/whatever array here to get login info
//Set email and password in $email and $pass
$email = $_POST["email"];
$pass = $_POST["password"];
$name = "unset - ERROR";

//Form the input to compare if success
$input = $email . " " . $pass;
$success = false;

$userArray = array();
$query = "SELECT * FROM login";
$result = $db->query($query);
while($row = $result->fetch_assoc()) {
	$loginSet = $row["email"] . " " . $row["password"];
	$userArray[] = $loginSet;
	if(strcmp($input, $loginSet) == 0) {
		$success = true;
		$name = $row["name"];
	}
}

echo "<table><tr><th>Username</th><th>Password</th></tr>";
foreach($userArray as $user) {
	$userSplit = explode(" ", $user);
	echo "<tr><td>" . $userSplit[0] . "</td><td>" . $userSplit[1] . "</td></tr>";
}
echo "</table>";

echo "<br>";

if($success) {
	$_SESSION["name"] = $name; //DID I DO THIS RIGHT?
	$_SESSION["email"] = $email;
	echo "Login Success" . " |||||| $name";
	header("Location: mem_index.php"); //Either redirect to success page or make this page be success
} else {
	echo "Login Fail";
	//header("Location: login_fail.html"); //Redirect to fail page
}

/*
To make a page redirect if a user isn't logged in copy and paste this at the top:
session_start();
if(!isset($_SESSION["name"])) {
	header("Location: index.html");
}
*/
?>