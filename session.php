<?php
require("connect_db.php");
error_reporting(E_ERROR | E_PARSE);
error_reporting(E_ALL ^ E_DEPRECATED);
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("$host", "$username", "$password");
// Selecting Database
$database = mysql_select_db("$db", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['usersession'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select userName from user_host where userName='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['userName'];
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header ("location:login_host.html");
}
?>