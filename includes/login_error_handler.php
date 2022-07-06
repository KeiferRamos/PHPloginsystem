<?php
    if(isset($_GET['success'])){
        if($_GET['success'] == 'true'){
            header("location: ./pages/home.php");
        }else if($_GET['success'] == 'false'){
            $error = $_GET['error'];
            if($error == "invalid_email"){
                echo "<h1>Invalid email</h1>";
            }else if($error == "incorrect_pass"){
                echo "<h1>Incorrect password</h1>";
            }
        }
    }else{
        echo "<h1>LOGIN PAGE</h1>";
    }
?> 