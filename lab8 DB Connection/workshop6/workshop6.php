<!DOCTYPE html>
<?php include "../connect.php"; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script>
        function confirmDelete(username) { // ฟังก์ชันจะถูกเรียกถ้าผู้ใช้ คลิกที่link ลบ
            var ans = confirm("ต้องการลบ " + username); // แสดงกล่องถามผู้ใช้
            if (ans == true) // ถ้าผู้ใช้กด  OK จะเข้าเงื่อนไขนี้
                document.location = "confirmDelete.php?username=" + username; 
        }
    </script>
</head>
<body>
<?php
    $stmt = $pdo->prepare("SELECT * FROM member");
    $stmt->execute();
    while ($row = $stmt->fetch()) {
        echo "username  : " . $row["username"] . "<br>";
        echo "name  :" . $row["name"] . "<br>";
        echo "address : " . $row["address"] . "<br>";
        echo "mobile: " . $row["mobile"] . " <br>";
        echo "<a href='editform.php?username=" . $row["username"] . "'>แก้ไข</a> | ";
        echo "<a href='confirmDelete.php' onclick=\"confirmDelete('" . $row["username"] . "')\">ลบ</a>";
        echo "<hr>\n";
    }
    ?>
</body>
</html>