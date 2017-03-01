<!DOCTYPE html>
<?php
$db = new mysqli('localhost', 'root', '', 'pctingles');
if ($db->connect_error):
	die ("Could not connect to db: " . $db->connect_error);
endif;
$pass = True;
$split[0] = $_POST["name"];
$split[1] = $_POST["email"];
$split[2] = $_POST["password"];
$split[3] = $_POST["school"];
$split[4] = $_POST["year"];
if(isset($_POST["newsletter"])) {
	$split[5] = $_POST["newsletter"];
} else {
	$split[5] = "off";
}
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
	$error = "Looks like your email already exists!  Please use a different one.";
	$pass = False;
}

if ($pass) {
	header("Location: confirm.html");
}
?>

<html>
	<head>
		<script>
		function goBack() {
			window.history.back()
		}
		</script>
		<title>Confirmation | PC Tingles</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.html">P.C.Tingles</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="index.html">Home</a></li>
											<li><a href="about.html">About Us</a></li>
											<li><a href="signup.html">Sign Up</a></li>
											<li><a href="#">Log In</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<article id="main">
						<section class="wrapper style5">
							<div class="inner">
								<h2>Sorry!</h2>
								<p><?PHP echo $error ?></p>

								<hr />

								<ul class = "actions">
									<li><button onclick="goBack()" class="button special">Go back</a></li>
								</ul>
							</div>
						</section>
					</article>

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
							<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
						</ul>
						<ul class="copyright">
							<li>&copy; P.C.Tingles</li><!--<li>Design: <a href="http://html5up.net">HTML5 UP</a></li>-->
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
