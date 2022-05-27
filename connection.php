<?php 
    $con=new PDO('mysql:host=localhost;port=3306;dbname=makeup','root','');
    

    if($con){
        echo"connection avec success";
    }
    



?>