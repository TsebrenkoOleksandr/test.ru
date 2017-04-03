<?php
include "connectt.php";

  echo '<h2 align=center>Особистий кабінет</h2>'; 
  $query = "SELECT * FROM clients WHERE `id_client`=".$_SESSION['id_client']; 
  $res = mysql_query( $query ) or die ("Для перегляду необхідно авторизуватися!"); 
  $i = mysql_fetch_array( $res ); 
 
 
  echo '<table border=1 align=center>';
 echo '<tr>'; 
   echo '<th>ПІБ</th>'; 
echo '<td>'.$i['FIO'].'</td>';
  echo '</tr>';  

 

  echo '<tr>'; 
  echo '<th>Телефон</th>';
   echo '<td>'.$i['phone'].'</td>'; 
  echo '</tr>';
  
  
  echo '<tr>'; 
  echo '<th>email</th>';
   echo '<td>'.$i['email'].'</td>'; 
  echo '</tr>';
  
  
  echo '</table>';
echo "<br>";

echo "<a href='?id=6' title='Додати тварину'><img src='/images/button4.png' border='0' align='center'></a>";
echo "<a href='?id=9' title='Мої тваринки'><img src='/images/button5.png' border='0' align='center'></a>";

echo "<p>";
echo "<br>";

?>



 
