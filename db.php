<?php
   
    $con = mysqli_connect("","0","","");
    
    if (mysqli_connect_errno()){
        echo "Nepodarilo sa mi pripojit do db " . mysqli_connect_error();
    }

    
