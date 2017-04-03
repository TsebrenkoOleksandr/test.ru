<?php 


 echo '<form name="addform" action="index.php?id=7" method="post">'; 
 echo '<br><h2 align=center>Додати тварину</h2></br>'; 
 echo '<br><b>Вид тварини</b></br>';  
 $q1 = "SELECT * FROM type_pet";
$result1 = mysql_query($q1);
while ($r1 = mysql_fetch_array($result1))
{
echo '<input type="radio" name="id_type_pet" value='.$r1['id_type_pet'].'>'.$r1['name_type'].'<br>';
}
echo "<br><b>Ім'я</b></br>";
echo '<br><input type="text" name="name_pet" value=""></br>';

echo "<br><b>Порода</b></br>";
echo '<br><input type="text" name="poroda" value=""></br>';

echo "<br><b>Опис</b></br>";
echo '<br><textarea rows="5" cols="27" name="description" value=""></textarea> </br>';





  echo '<br><th1><input type="submit" value="Зберегти" class="button24"></th1></br>';
echo '</form>'; 

?>
<html>
       <form action="upload.php" method="post" enctype="multipart/form-data">
       <input type="file" name="filename"><br> 
       <input type="submit" value="Загрузить"><br>
       </form>
</htlm>