<?php 
 session_start();
 

switch ( $_GET["action"] ) 
{ 
  
    
   case "delete":
   delete();break;
   
}


function delete() 
{ 
  $query = "DELETE  FROM `pets` WHERE `pets`.`id_pet`=".$_GET['id_pet']." AND `id_client`=".$_SESSION['id_client']; 
  mysql_query ( $query ); 
  echo "<p><h2>Тварина успішно видалена!</h2></p>";
  echo '<a href="?id=2" class="button1">До списку тварин</a>';
} 


?>



