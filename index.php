<?php session_start();?>
<?php include "blocks/header.php";?>
<?php include "blocks/menu.php";?>
<?php include "connectt.php";?>
<html>


<body >

<div id="content">	  

	
	
<?php If(isset($_GET['id']))
{
        $id = $_GET['id'];
}else{
        $id = 0;
}
switch($id){
case '0': include 'avtoriz.php'; break;
case '1': include 'exit.php'; break;
case '2': include 'client.php'; break;
case '3': include 'activation.php'; break;
case '4': include 'register_form.php'; break;
case '5': include 'register.php'; break;
case '6': include 'add_pet_form.php'; break;
case '7': include 'add_pet.php'; break;
case '9': include 'pet_menu.php'; break;
case '10': include 'udal_pet.php'; break;
}
?>

</div>

</body>

</html>