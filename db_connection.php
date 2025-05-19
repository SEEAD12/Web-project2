<?php 

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname   = 'gaza';


$db_connection = mysqli_connect($hostname,$username,$password);
mysqli_query($db_connection,'USE '.$dbname);
