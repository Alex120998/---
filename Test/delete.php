<?php
include('includes/connection.php');
if(isset($_POST['id_user'])){
 
  
        $id = mysqli_real_escape_string($connection, $_POST['id_user']);
         
        $query ="DELETE FROM user WHERE id_user = '$id'";
        $result = mysqli_query($connection, $query) ;
        if ($query) { 
            echo '<p>Данные успешно удалены из таблицы.</p>';
          } else {
            echo '<p>Произошла ошибка: ' . mysqli_error($connection) . '</p>';
          };
     
        mysqli_close($connection);
}
?>
<a href="user.php" >Назад </a>