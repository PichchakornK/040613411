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
    <form>
        username: <input type="text" name="keyword">
        <input type="submit" value="ค้นหา">
    </form>
    <div style="display:flex">
    <?php
        $stmt = $pdo->prepare("SELECT * FROM member WHERE name LIKE ?");
        if (!empty($_GET)) // ถ้ามีค่าที่ส่งมาจากฟอร์ม
        $value = '%' . $_GET["keyword"] . '%'; // ดึงค่าที่ส่งกำหนดให้กับตัวแปรเงื่อนไข
        $stmt->bindParam(1, $value); // กำหนดชื่อตัวแปรเงื่อนไขที่จุดที่กำหนด ? ไว้
        $stmt->execute(); // เริ่มค้นหา
    ?>
    <?php while ($row = $stmt->fetch()) : ?>
        <div style="padding: 15px; text-align: center">
            <a href="workshop_5detail.php?username=<?=$row["username"]?>">
                <img src='../member_photo/<?=$row["username"]?>.jpg' width='100'><br>
            </a>
            ชื่อสมาชิก : <?=$row ["name"]?><br>
            ที่อยู่ : <?=$row ["address"]?><br>
            อีเมลล์ : <?=$row ["email"]?>
        </div>
    <?php endwhile; ?>
    </div>
</body>
</html>