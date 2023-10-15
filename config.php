<?php
    $conx = mysqli_connect("localhost","root","","final_db");
    if(!$conx){
        echo 'Connection Failed';
    }
