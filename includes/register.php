<?php
    include "./database.php";

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $hashedpassword = password_hash($password, PASSWORD_DEFAULT);

        if(!$username && !$password){
            header("location: ../pages/register.php?success=false&error=empty");
        }else{
            if(strlen($password) > 8){
                $sql = "INSERT INTO loginsystem(username,user_pwd) VALUES(?, ?);";
                $stmt = mysqli_stmt_init($conn);

                if(mysqli_stmt_prepare($stmt, $sql)){
                    mysqli_stmt_bind_param($stmt, "ss", $username,  $hashedpassword);
                    mysqli_stmt_execute($stmt);
                    header("location: ../pages/register.php?success=true");
                }else{
                    echo "error";
                }
            }else{
                header("location: ../pages/register.php?success=false&error=short_pass");
            }
        }
    }
?>