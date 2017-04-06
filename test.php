<li><?php session_start(); if(!isset($_SESSION["name"])) { echo "<a href=\"login.html\">Log In</a>"; } else { echo "<a href=\"mem_index.php\">Member Home</a>";} ?></li>
<?php
echo "Session Name variable: " . $_SESSION["name"];
?>