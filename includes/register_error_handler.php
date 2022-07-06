<?php

    if(isset($_GET['success'])){
        if($_GET['success'] == "true"){
            header("location: ../index.php");
        }else if($_GET['success'] == "false"){
            if(isset($_GET['error'])){
               $error = $_GET['error'];
               if($error == "empty"){
                    echo "<h1>All fields are required!</h1>";
               }else if($error == "short_pass"){
                    echo "<h1>pass must at be least 8 char long!</h1>";
               }
            }
        }
    }else{
        echo "<h1>REGISTER PAGE</h1>";
    }
?>