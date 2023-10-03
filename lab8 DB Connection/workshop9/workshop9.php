<!DOCTYPE html>
<?php include "../connect.php"; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function confirmDelete(username) { 
        var ans = confirm("ต้องการลบผู้ใช้ " + username); 
        if (ans==true) 
        document.location = "confirmDelete.php?username=" + username;
        }
    </script>
</head>
<body>
    <?php
        $stmt = $pdo->prepare("SELECT * FROM member");
        $stmt->execute();
        
        while ($row = $stmt->fetch()) {
        echo "username : ".$row ["username"]."<br>";
        echo "password : ".$row ["password"]."<br>";
        echo "name : ".$row ["name"]."<br>";
        echo "address : ".$row ["address"]."<br>";
        echo "mobile : ".$row ["mobile"]."<br>";
        echo "email : ".$row ["email"]."<br>";
        echo "<a href='formworkshop9.php?username=".$row["username"]."'>แก้ไข</a> | ";
        echo "<a href='#' onclick='confirmDelete(`{$row["username"]}`)'>ลบ</a>";
        echo "<hr>\n";
    }
    ?>
</body>
</html>