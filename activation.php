<?php
include ("connectt.php");



mysql_query ("DELETE FROM clients WHERE activation='0' AND UNIX_TIMESTAMP() - UNIX_TIMESTAMP(date) > 3600");//удаляем пользователей из базы



if (isset($_GET['code'])) {$code =$_GET['code']; } //код подтверждения
else
{ exit("Ви зайшли на сторінку без коду підтвердження!");}

if (isset($_GET['login'])) {$login=$_GET['login']; } //логин,который нужно активировать
else
{ exit("Ви зайшли на сторінку без логіна!");} 

$result = mysql_query("SELECT id_client FROM clients WHERE login='$login'"); 
$myrow = mysql_fetch_array($result); 

$activation = md5($myrow['id_client']).md5($login);//создаем код подтверждения
if ($activation == $code) {//сравниваем полученный из url и сгенерированный код
	mysql_query("UPDATE clients SET activation='1' WHERE login='$login'");
	echo "Ваш Е-мейл був підтверджений! Тепер Ви можете зайти на сайт під своїм логіном!<a href='index.php'>На сторінку авторизації</a>";
	}
else {echo "Виникла помилка! Ваш Е-мейл не підтверджено! <a href='index.php'>Головна сторінка</a>";

}

?>