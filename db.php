<?php
   
    $con = mysqli_connect("46.229.230.164","hz024700","dhynydor","hz024703db");
    
    if (mysqli_connect_errno()){
        echo "Nepodarilo sa mi pripojit do db " . mysqli_connect_error();
    }

    