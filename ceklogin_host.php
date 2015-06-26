<?php
session_start():
 error_reporting(E_ALL ^ E_DEPRECATED);
require("connect_db.php"); 
 
mysql_connect("$host", "$username", "$password")or die("koneksi gagal");
mysql_select_db("$db")or die("database tidak bisa dipilih");
 
// mengambil data username dan password dari index.php
// bila form method nya GET maka ganti POST menjadi GET
$userName=$_POST['user'];
$password=$_POST['pass'];
 
// untuk keamanan
$userName = stripslashes($userName);
$password = stripslashes($password);
$username = mysql_real_escape_string($userName);
$password = mysql_real_escape_string($password);
 
$sql="SELECT * FROM user_host WHERE userName='$userName' and pass='$password'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
 
if($count==1){
$_SESSION['usersession']=$username;
header("location:halamanprofil_host.php");}

else {
echo "Username atau Password yang anda masukkan salah";
}
?>
