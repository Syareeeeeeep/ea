<?php

    $hostname="localhost";
    $username="root";
    $password="";
    $databasename="ezdeck";

    $db = mysqli_connect($hostname, $username, $password, $databasename);

    if($db -> connect_error){
        echo "error" . $db->connect_error;
        die("ERRORRR");
    }

    // echo "berhasil";
    
?>