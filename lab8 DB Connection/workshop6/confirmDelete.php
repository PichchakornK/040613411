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
    $stmt = $pdo->prepare("DELETE FROM member WHERE username = ?");
    $stmt->bindParam(1,$_GET["username"]);
    if($stmt->execute())
    header("location:workshop6.php");
    ?>

</body>
</html>