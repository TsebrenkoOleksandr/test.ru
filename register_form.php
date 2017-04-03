<!doctype html>
<html>
<head>
<meta charset="windows-1251">

<link rel="stylesheet" href="style.css">
<script src="jquery-1.6.3.min.js"></script>
<script src="jquery.validate.min.js"></script>
<script src="form.js"></script>
</head>
<body>

	
<div class="container mregister">
<div id="login">
 <h1>Реєстрація</h1>
<form action="index.php?id=5" method="post" name="signup" id="signup">
<div> <p><label>ПІБ<br>
 <input class="input"  name="FIO" size="32"  required type="text" value=""></label></p></div>
<div><p><label>E-mail<br>
<input class="input"  name="email" size="32" type="text" value=""></label></p></div>
<div><p><label>Логін<br>
<input class="input" name="login" size="20" required type="text" value=""></label></p></div>
<div>

<div><p><label>Дата народження<br>
<input class="input" name="data_rozhd" required type="date" value=""></label></p></div>
<div>

<div><p><label>Адреса<br>
<input class="input" name="adresa" size="50" required type="text" value=""></label></p></div>
<div>

<div><p><label>Телефон<br>
<input class="input" name="phone" size="20" required type="text" value=""></label></p></div>
<div>

<div><p><label>Місце роботи<br>
<input class="input" name="work" size="20" required type="text" value=""></label></p></div>
<div>





	<label>Пароль</label>
	<input class="input" name="password" type="password" id="password">
	</div>
	<div>
    <label>Підтвердіть пароль</label>
     <input class="input" name="confirm_password" type="password" id="confirm_password">
	</div>

	
<div><p><p class="submit"><input class="button" name= "register" type="submit" align="right" value="Зареєструватися"></p></p></div>
	 <div> <a href= "avtoriz.php">Увійти</a>!</div>
 </form>
</div>
</div>
</html>