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
        $stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?"); // 1. กำหนดคำสั่ง SQL ให้ดึงสินค้าตามรหัสสินค้า
        $stmt->bindParam(1,$_GET["username"]); // 2. นำค่า pid ที่สงมากับ URL กำหนดเป็นเงื่อนไข
        $stmt->execute(); // 3. เริ่มค้นหา
        $row = $stmt->fetch(); // 4. ดึงผลลัพธ์ (เนื่องจากมีข้อมูล 1 แถวจึงเรียกเมธอด fetch เพียงครั้งเดียว)
    ?>
    <div >
    
        <div style="padding: 15px">
        <img src='../member_photo/<?= $row["username"] ?>.jpg' width='100'><br>
            ชื่อสมาชิก: <?= $row["name"] ?><br>
            ที่อยู่: <?= $row["address"] ?> <br>
            อีเมล์: <?= $row["email"] ?> <br>
        </div>
        <hr>
    </div>
</body> 