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
        $stmt = $pdo->prepare("INSERT INTO member VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bindParam(1, $_POST["username"]);
        $stmt->bindParam(2, $_POST["password"]);
        $stmt->bindParam(3, $_POST["name"]);
        $stmt->bindParam(4, $_POST["address"]);
        $stmt->bindParam(5, $_POST["mobile"]);
        $stmt->bindParam(6, $_POST["email"]);
        $stmt->execute(); 
        if ($_FILES["picture"]["tmp_name"]) {
            $targetfile = '../img/' . $_POST["username"] . '.jpg'; 
            $upload = move_uploaded_file($_FILES["picture"]["tmp_name"], $targetfile);
        }
        
        
    ?>
    เพิ่มสมาชิกสำเร็จ username คือ : <?=$_POST["username"]?>
</html> 
</body>
</html>