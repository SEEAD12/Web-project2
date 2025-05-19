<?php 
require_once  '../db_connection.php';
$get = 'delete from '.$_POST['table'].' where id in('.$_POST['ids'].')';
$query = mysqli_query($db_connection,$get);