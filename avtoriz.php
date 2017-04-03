<html>

<body>
<?php
require "connectt.php";
    if (empty($_SESSION['login']) or empty($_SESSION['id_client']))//ne avtorizovan
    {
?>

<div class="container mlogin">
<div id="login">
<h1>Вхід</h1>
<form action="proverca.php" method="post">
<p><label>Ваш логін<br>
<input class="input"  name="login" size="20" type="text" value=""></label></p>
<p><label>Пароль<br>
 <input class="input"  name="password" size="20"   type="password" value=""></label></p> 
	<p><input type= "submit" class=button value="Увійти">
	<a href="?id=4" class=button1 >Зареєструватися</a></p>
   </form>
 </div>
  </div>
  

<?php
    }
    else   
    {
	
		 $login=$_SESSION['login'];
		 

$sqlCart = mysql_query("SELECT * FROM clients WHERE login='$login'",$db);




 while($row = mysql_fetch_array($sqlCart)) 
 {

$name = $row["FIO"];

$pass=$row['password'];

   
  }
  
  



    echo "
<div align='center'
style='border: 0px solid blue; position:relative; top:100px; left:350px; height:100px; width:300px;'>

	<font color='green'>Вітаємо,: "."<font color='red'>".$name."</font>!</font>
	<br/>
	Тепер Ви можете розпочати роботу із сайтом!<br></br>
	<br/>
      <a href='index.php?id=1' class='button1'>ВИЙТИ</a> 
   <br/>

</div>";
}
  	
   include "blocks/footer.php"; 

	
?>
</body>
</html>