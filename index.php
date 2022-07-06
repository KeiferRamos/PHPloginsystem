<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Document</title>
    </head>
    <body>
        <div class="wrapper">
            
            <?php
                include "./includes/login_error_handler.php"
            ?>

            <form action="./includes/login.php" method="POST">
                <input type="text" name="username" placeholder="username">
                <br/>
                <input type="password" name="password" placeholder="password">
                <br/>
                <button name="submit">login</button>
                <a href="./pages/register.php" name="submit">register</a>
            </form>
        </div>
        
    </body>
</html>