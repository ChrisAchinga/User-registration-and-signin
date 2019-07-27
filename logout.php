<!-- Create Logout File
Basically, this file is to destroy session and redirect to index page. 
So, create a file named “logut.php” -->

<?php
session_start();
if(session_destroy())
{
header("Location: login.php");
}
?>