
<?php

  //Если форма отправлена
  if(isset($_POST['submit'])) {

 //Проверка Поля ИМЯ
  if(trim($_POST['contactname']) == '') {
  $hasError = true;
  } else {
  $name = trim($_POST['contactname']);
  }
 //Проверка поля ТЕМА
  if(trim($_POST['subject']) == '') {
  $hasError = true;
  } else {
  $subject = trim($_POST['subject']);
  }
 //Проверка правильности ввода EMAIL
  if(trim($_POST['email']) == '')  {
  $hasError = true;
  } else if (!preg_match("/[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}/i", trim($_POST['email']))) {
  $hasError = true;
  } else {
  $email = trim($_POST['email']);
  }
 //Проверка наличия ТЕКСТА сообщения
  if(trim($_POST['message']) == '') {
  $hasError = true;
  } else {
  if(function_exists('stripslashes')) {
  $comments = stripslashes(trim($_POST['message']));
  } else {
  $comments = trim($_POST['message']);
  }
  }
 //Если ошибок нет, отправить email
  if(!isset($hasError)) {
  $emailTo = 'finzvit@mail.ua'; 
  $body = "Name: $name \n\nEmail: $email \n\nSubject: $subject \n\nComments:\n $comments";
  $headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;
 mail($emailTo, $subject, $body);
  $emailSent = true;
 echo("<script type='text/javascript'>");
 echo("alert('Повідомлення надіслано!');</script>");
 }
else{


 echo("<script type='text/javascript'>");
 echo("alert('Виникла помилка при відправці повідомлення!');</script>");}
  }
  ?>

<div id="contact-wrapper">
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform">
  <div>
  <label for="name"><strong>Ім'я:</strong></label><br>
  <input type="text" size="25" name="contactname" id="contactname" class="required" value="" />
  </div>
 <div>
  <label for="email"><strong>Email:</strong></label><br>
  <input type="text" size="25" name="email" id="email" class="required email" value="" />
  </div>
 <div>
  <label for="subject"><strong>Тема:</strong></label><br>
  <input type="text" size="25" name="subject" id="subject" class="required" value="" />
  </div>
 <div>
  <label for="message"><strong>Повідомлення:</strong></label><br>
  <textarea rows="5" cols="27" name="message" id="message" class="required" ></textarea>
  </div>

  <input type="submit" value="Надіслати" name="submit" />
  

  </form>
  </div>
 