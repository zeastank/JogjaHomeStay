<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
header('Refresh: 3;url=login_host.html');
require("connect_db.php");
mysql_connect("$host", "$username", "$password")or die("koneksi gagal");
mysql_select_db("$db")or die("database tidak bisa dipilih");

function NewUser() 
{ 
    $fullname = $_POST['name']; 
    $userName = $_POST['user']; 
    $email = $_POST['email']; 
    $password = $_POST['pass']; 
    $query = "INSERT INTO user_host (fullname,userName,email,pass) VALUES ('$fullname','$userName','$email','$password')"; 
    $data = mysql_query ($query)or die(mysql_error()); 
    if($data)
    {
        echo "YOUR REGISTRATION IS COMPLETED... wait... you will be directed to login page"; 
    } 
    else
    {
        echo "terdapat kesalahan";
    }
} 

function SignUp() 
{ 
    if(!empty($_POST['user'])) //checking the 'user' name which is from Sign-Up.html, is it empty or have some text 
    { 
        $query = mysql_query("SELECT * FROM user_host WHERE userName = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysql_error()); 
     
     if(!$row = mysql_fetch_array($query) or die(mysql_error())) 
     { 
         newuser(); 
     } 
        else 
        { 
            echo "SORRY...YOU ARE ALREADY REGISTERED USER..."; 
        } 
    } 
} 

if(isset($_POST['submit'])) 
{ 
    SignUp(); 
} 

?>
