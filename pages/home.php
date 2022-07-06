<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>homepage</p>

    <?php
        include "../includes/database.php";

        $sql = "SELECT * FROM loginsystem;";
        $result = mysqli_query($conn, $sql);
        $checkresult = mysqli_num_rows($result);

        $datas = array();
        if($checkresult > 0){
            while($rows = mysqli_fetch_assoc($result)){
                array_push($datas, $rows);
            }
        }

        echo "<h1>USERS</h1>";
        echo "users: ".count($datas)."<br/>";

        foreach($datas as $data){
            echo "username: $data[username] </br>";
        };

        
    ?>
</body>
</html>