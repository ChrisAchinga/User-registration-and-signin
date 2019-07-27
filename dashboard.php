<!-- Now Create a Dashboard Page
After created index page now you have create dashboard page. 
Basically, This is Profile Section. 
Now Create a file named “dashboard.php” and paste these codes. -->


<!-- this page has same functionality as "index.php" -->


<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="form">
<p>Dashboard</p>
<p>This is another secured page.</p>
<p><a href="index.php">Index</a></p>
<a href="logout.php">Logout</a>
</div>
</body>
</html>