<!DOCTYPE html>
<?php include "connect.php";?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $stmt = $pdo->prepare("SELECT * FROM product");

    $stmt->execute();

    echo "<table border='1'  >";
    echo "<thead>";
        echo "<tr>";
            echo "<th>รหัสสินค้า</th>";
            echo "<th>ขื่อสินค้า</th>";
            echo "<th>รายละเอียด</th>";
            echo "<th>ราคา</th>";
        echo "</tr>";
    echo "</thead>";

    echo "<tbody>";
    while ($row = $stmt->fetch()) {
        echo "<tr>";
            echo "<td>" . $row["pid"] . "</td>";
            echo "<td>" . $row["pname"] . "</td>";
            echo "<td>" . $row["pdetail"] . "</td>";
            echo "<td>" . $row["price"] . " บาท" . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
    ?>
    
</body>
</html>