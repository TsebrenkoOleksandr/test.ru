<?php 

$cl=$_SESSION['id_client'];
 $type = $_REQUEST['name_type'] ; 
  $name_pet = $_REQUEST['name_pet'] ; 
  $poroda = $_REQUEST['poroda'] ; 
  $desc = $_REQUEST['description'] ; 
  
 $insert_sql = "INSERT INTO `scorpion`.`pets` (`id_pet`, `id_client`, `id_type`, `name_pet`,`poroda`,  `description`) 
 VALUES (NULL, '{$cl} ','{$type}','{$name_pet}', '{$poroda}', '{$desc}')";
 mysql_query($insert_sql) or die("Помилка вставки! Необхідна авторизація.");
echo '<p>Тварина успішно додана!</p>';
echo '<a href="?id=2">Повернутися назад</a>';

 ?>