<!-- create a page named “index.php” -->
<!-- this is the page a user lands when the login details are correct
    content can be added here using simple html and styling depending on the web content
-->


<?php
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="form">
<h1 >Welcome <?php echo $_SESSION['username']; ?>!</h1>
<p >This is your secured index.</p>
<p><a href="dashboard.php">Your Dashboard</a></p>
<a href="logout.php">Logout</a>
</div>
</body>
</html>