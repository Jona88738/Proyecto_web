<?php 

    $server = "localhost";
    $user = "root";
    $passw = "";
    $bd = "ikea";
        
    $connect = mysqli_connect($server, $user, $passw, $bd);
    
    if (!$connect){
    }else{
    }
    return $connect;
	
?>