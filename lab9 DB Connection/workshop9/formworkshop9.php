<!DOCTYPE html>
<?php include "../connect.php"; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // 1. กำหนดค่าส่ง SQL ให้ดึงข้อมูลตามusername
        $stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
        $stmt->bindParam(1, $_GET["username"]); // 2. นำค่า username ที่สงมากับ ่ URL กำหนดเป็นเงื่อนไข
        $stmt->execute(); // 3. เริ่มค้นหา
        $row = $stmt->fetch(); // 4. ดึงผลลัพธ์ (เนื่องจากมีข้อมูล 1 แถวจึงเรียกเมธอด fetch เพียงครั้งเดียว)
    ?>
    
    <form action="editworkshop9.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="username" value="<?=$row["username"]?>"><br>
    password : <input type="text" name="password" value="<?=$row["password"]?>"><br>
    name : <input type="text" name="name" value="<?=$row["name"]?>"><br>
    address : <input type="text" name="address" value="<?=$row["address"]?>"><br>
    mobile : <input type="text" name="mobile" value="<?=$row["mobile"]?>"><br>
    email : <input type="text" name="email" value="<?=$row["email"]?>"><br>
    picture : <input type="file" name="picture" id="picture"><br>
    <input type="submit" value="แก้ไขรายละเอียดสมาชิก ">
    </form>

</body>
</html>