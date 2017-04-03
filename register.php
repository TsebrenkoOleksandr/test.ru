<?php
	 require "connectt.php"; 
	if(isset($_POST["login"])){
	
	if(!empty($_POST['FIO']) && !empty($_POST['email']) && !empty($_POST['login'])) {
  $FIO= htmlspecialchars($_POST['FIO']);
$email=htmlspecialchars($_POST['email']);
 $login=htmlspecialchars($_POST['login']);

$phone=htmlspecialchars($_POST['phone']);

  $password=htmlspecialchars($_POST['password']);
// $password=md5(md5($password));
 
 


 $query=mysql_query("SELECT * FROM clients WHERE login='".$login."'");
  $numrows=mysql_num_rows($query);
if($numrows==0)
   {
	$sql="INSERT INTO clients
  (id_client, login, password,email, activation, FIO, phone)
	VALUES(NULL,'$login','$password','$email','','$FIO', '$phone')";

  $result=mysql_query($sql);
  
  
          if    ($result=='TRUE')
          {
          $result3    = mysql_query ("SELECT id_client FROM clients WHERE login='$login'");//извлекаем    идентификатор пользователя. Благодаря ему у нас и будет уникальный код    активации, ведь двух одинаковых идентификаторов быть не может.
          $myrow3    = mysql_fetch_array($result3);
          $activation    = md5($myrow3['id_client']).md5($login);//код активации аккаунта. 
          $subject    = "Підтвердження реєстрації на сайті scorpion";
            $message    = "Доброго дня! Дякуємо за реєстрацію! \nВаш логін:    ".$login."\n
            Перейдіть за посиланням, щоб активувати Ваш акаунт:\nhttp://scorpion.ho.ua/index.php?id=3&login=".$login."&code=".$activation."\n З повагою,\n
            Адміністрація    ";
            mail($email,    $subject, $message, "");//отправляем сообщение
                     
            echo    "На Ваш E-mail надіслано листа з посиланням для підтвердження реєстрації. УВАГА! Посилання дійсне протягом 1 години!<a href='index.php'>Головна сторінка</a>"; //говорим о    отправленном письме пользователю
            }
				
					
			}			
			else {
			
			echo "Введений логін вже зареєстровано!";
			}
			
			
}
  }
 
	 ?>