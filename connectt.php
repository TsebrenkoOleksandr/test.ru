<?php
$host="db3.ho.ua";
$username="scorpion";
$pwd="scorpion1";
$db =mysql_pconnect ($host, $username, $pwd);
if (!$db) {
	echo "Невозможно подключиться к базе данных!";
	exit;
};
$database = "scorpion";	
mysql_select_db ($database);
 mysql_query("SET NAMES utf8");
?>