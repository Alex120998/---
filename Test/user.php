<?php

include('includes/connection.php');
$result=mysqli_query($connection,"SELECT *FROM `user`"); 
?>

<!-- 
<ul>
  <?php
  //  while(($cat=mysqli_fetch_assoc($result)))
  //{
   // echo'<li>',$cat['id_user']," ",$cat['f_name']," ",$cat['s_name']," ",$cat['phone'],'</li>';
 // }
//?>
</ul> -->


<!DOCTYPE html>
<html lang="ru">
<link rel="stylesheet" href="style.css">
<head>
  <meta charset="utf-8">
  <title>Добавить</title>
<body>
</head> 


</div>
</body>

<div class="pan_dob">
  <form method="POST" action="dobavlenie.php">
  
    <label>Ваш логин:<br></label>
    <input name="s_name" type="text" size="15" maxlength="40">
<p>
    <label>Вашa Фамилия:<br></label>
    <input name="f_name" type="text" size="15" maxlength="40" >  
  </p>
  <p>
    <label>Ваш Телефон:<br></label>
    <input name="phone" type="int" size="15" maxlength="40" >  
  </p>


<p>
    <input type="submit" name="submit" value = "добавить пользоветеля">
   
  </p></form>
  
</body>   
</div>
<div class="tablee">
  <table class="table_dark">
	<tr>
    <th>#</th>
		<th>Имя    </th>
		<th>Фамилия</th>
		<th>Телефон</th>
	</tr>

    <?php  
include('includes/connection.php');
  
  $res = ""; 
  $q = mysqli_query($connection,"SELECT * FROM user")->fetch_all(MYSQLI_ASSOC); 
  foreach ($q as $item){ 
    $res .="<tr> <td> ".$item['id_user']. "<td> ".$item['s_name']."</td><td> ".$item['f_name']."</td><td>".$item['phone']."</td><tr>"; 
  } 
  echo $res;
  ?>


</table>
</div>
<div class="del">
  <form method="POST" action="delete.php">

    <label>Введите #:<br></label>
   
    <input name="id_user" type="int" size="15" maxlength="40">
    
    <p>
    <input type="submit" name="submit" value = "удалить пользователя">
   
  </p>
  </form>
</div>