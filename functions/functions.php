<?php

// Connecting to the Database
$conn = mysqli_connect("","","","");

if(mysqli_connect_error()){
	echo "The Connection was not established:".mysqli_connect_error();
}

// Getting User Ip Address
function getIp() {
    $ip = $_SERVER['REMOTE_ADDR'];

    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    return $ip;
}



?>
