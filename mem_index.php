<!DOCTYPE HTML>
<?php
session_start();
if(!isset($_SESSION["name"])) {
    header("Location: index.html");
}
?>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>P.C.Tingles</title>
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
											<li><a href="logout.php">Log Out</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

                <!-- Main -->
                <article id="main">
                    <header>
                        <h2>Welcome</h2>
                        <p>A tech rental company<br />
                        for students : by students<br />
                    </header>
                    <section class="wrapper style5">
                        <div class="inner">
            
                            <section>
                                <div class="row">
                                    <div class="4u 12u$(medium)">
                                        <h3>Services</h3>
                                        <ul class="actions vertical 10u">
                                            <li><a href="mem_support.php" class="button special icon fa-wrench fit">Support Request</a></li>
                                            <li><a href="mem_update.php" class="button icon fa-pencil fit">Update Info</a></li>
                                        </ul>
                                    </div>
                                    <div class="8u 12u$(medium)">
                                        <h3>Reviews</h3>
                                        <p><i>"Very Professional. On-time delivery, with the nicest, polite deliverymen ever seen. The laptop is in pristine condition and their tech service is unmatched."</i><br />
                                        &emsp; &ensp;- Alfred C. Weaver, Ph.D<br /><br />
                                        <i>"This is nuts!"</i><br />
                                        &emsp; &ensp;- Jiu Moon, B.S. Computer Science<br /><br />
                                        <i>"I couldn't figure out how to start a computer until I found P.C.Tingles."</i><br />
                                        &emsp; &ensp;- Edward Kao, Student<br /></p>
                                    </div>
                                    <div class="12u$ 12u$(medium)">
                                        <h3>Available Computers</h3>
                                        <div class="table-wrapper">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Description</th>
                                                        <th>Price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Wahoo Laptop<span class="image checkmark"><img src="images/xandra.png" alt="" /></span></td>
                                                        <td>UVa's Xandra: Automated Cyber Reasoning System. Does a lot of stuff. Got a lot of memory. Many cores. Much Power.</td>
                                                        <td>$999.00 + tax
                                                            <span>
                                                                <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top"><input type="hidden" name="cmd" value="_s-xclick"><input type="hidden" name="hosted_button_id" value="3WPEDL5HAPFZG"><input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"><img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1"></form>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    
                                                    
                                                </tbody>
                                                
                                            </table>
                                        </div>
                                    </div>
                                </div>
            
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
							<li>&copy; P.C.Tingles</li>
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
