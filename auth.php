<!-- This file creates session, for security and store cookies. -->


<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>