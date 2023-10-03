<!DOCTYPE html>
<?php include "../connect.php"; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $stmt = $pdo->prepare("SELECT * FROM member WHERE username LIKE ?");
        if(!empty($_GET)){
            $value = '%' .$_GET["username"]. '%';
        }
        $stmt->bindParam(1,$value);
        $stmt->execute();
        $row = $stmt->fetch()
    ?>

    <div style="display:flex">
            <div style="padding: 15px;"><br>
            username: <?=$row["username"]?><br>
            ชื่อ: <?=$row["name"]?><br>
            ที่อยู่: <?=$row["address"]?><br>
            เบอร์โทร <?=$row["mobile"]?><br>
            อีเมลล์ <?=$row["email"]?>
            <div><img src="../member_photo/<?=$row["username"]?>.jpg" width="200"><br></div>

        </div>
    </div>
    </body>
</html>