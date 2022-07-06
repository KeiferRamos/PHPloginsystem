<?php

    include "./database.php";

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM loginsystem WHERE username = '$username';";
        $result = mysqli_query($conn,$sql);
        $checkresult = mysqli_num_rows($result);

        if($checkresult > 0){
            while($row = mysqli_fetch_assoc($result)){
                if(password_verify($password, $row['user_pwd'])){
                    header("location: ../index.php?success=true");
                }else{
                    header("location: ../index.php?success=false&error=incorrect_pass");
                }
            }
        }else{
            header("location: ../index.php?success=false&error=invalid_email");
        }
    }
?>