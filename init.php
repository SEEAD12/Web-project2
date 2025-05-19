<?php 
// initial file
require_once  'controllers/functions.php';
use Controllers\functions;
$functions = new functions();



function get_user($arg){
    global $db_connection;
    
    if(isset($_SESSION['email'])){
        $get   = "select * from users where email='".$_SESSION['email']."'";
        $query = mysqli_query($db_connection,$get);
        if(mysqli_num_rows($query) > 0){
            $fetch = mysqli_fetch_assoc($query);
            return $fetch[$arg];
        }
    }else{
        return false;
    }
    
}
