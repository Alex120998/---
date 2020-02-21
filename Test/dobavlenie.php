<?php

include('includes/connection.php');
 //Вставляем данные, подставляя их в запрос
 $n = $_POST['s_name'];
 $s = $_POST['f_name'];
 $z = $_POST['phone'];
 if (empty($n)||empty($s)||empty($z))
  echo 'Введите во все поля данные';
  else{
 $sql = mysqli_query($connection,"INSERT INTO `user` (`s_name`, `f_name` , `phone`) VALUES  ('".$n."','".$s."','".$z."')");
  //Если вставка прошла успешно
 
  if ($sql) { 
    echo '<p>Данные успешно добавлены в таблицу.</p>';
  } else {
    echo '<p>Произошла ошибка: ' . mysqli_error($connection) . '</p>';
  }
}
?>
<a href="user.php" >Назад </a>
<!-- ('{$_POST['s_name']}', '{$_POST['f_name']}', '{$_POST['phone']}')") -->