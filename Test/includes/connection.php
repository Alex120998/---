<?php
$connection=mysqli_connect('localhost','root','','polzovatel');
if($connection==false)
{
    echo 'не удалось подклчюиться к БД';
    echo mysqli_connect_error();
    exit;
}