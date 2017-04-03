<?php
 session_start();
header('Content-Type: text/html; charset=utf-8');

    
require "connectt.php";
	if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
   if (empty($login) or empty($password)) 
    {
    echo "<body><div align='center'><br/><br/><br/><h3>Поверніться назад та заповніть всі поля!"."<a href='index.php?id=0'><b>Назад</b> </a></h3></div></body>";
    }
   
   $login=mysql_real_escape_string($_POST['login']); 
$password=mysql_real_escape_string($_POST['password']); 
//$password=md5(md5($password)); // Encrypted Password
   
  
$result = mysql_query("SELECT * FROM clients WHERE login='$login' AND password='$password' AND activation=1", $db);
    $myrow = mysql_fetch_array($result);
    if (empty($myrow["password"]))
    {
   
    echo "<div align='center'><br/><br/><br/><h3>Ваш логін або пароль невірний." . "<a href='index.php?id=0'> <b>Повернутися назад</b> </a></h3></div>";
    }
    else {
    if ($myrow["password"]==$password) {
    $_SESSION['login']=$myrow["login"]; 
    $_SESSION['id_client']=$myrow["id_client"];
   header("Location:index.php"); 
    }
    }
    ?>