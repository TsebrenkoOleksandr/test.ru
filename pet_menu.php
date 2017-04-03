<html>
<h1 align="center">Тваринки</h1>
<?php 
if (!isset($_SESSION['id_client'])) echo "Необхідна авторизація!!!";
else 
{
echo "<a href='?id=6' title='Додати тварину'> <img src='/images/button4.png' border='0' align='center'></a>"; 

$query = "SELECT id_pet, name_pet, description FROM pets WHERE  `id_client`=".$_SESSION['id_client']; 
  $res = mysql_query( $query ) or die ("Для перегляду необхідно авторизуватися!"); 
  
echo '<h2 align=center>Список тварин</h2>'; 
echo "<table border=1 align=center><tr><th>Ім'я тварини</th>";



 echo "<th>Опис</th>";
 
echo '<th>Видалити</th>';
  while ($row = mysql_fetch_array($res)) {
 echo  "<tr><td>".$row['name_pet']."</td><td>".$row['description']."</td>


<td><a href=index.php?id=10&action=delete&id_pet=".$row['id_pet']."  >Видалити</a></td></tr>";
 
}
echo "</table>";}   
  ?> 
</html>