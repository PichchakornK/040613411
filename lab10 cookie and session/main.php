<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <body>
        <?php 
            if($_COOKIE['lang']=='en'){
                echo "Welcome";
            }elseif($_COOKIE['lang']=='th') {
                echo "ยินดีต้อนรับ";
            }
        ?>
</html>
</body>
</html>