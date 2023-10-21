<?php
$keyword = $_GET["keyword"];
$con = mysqli_connect('localhost', 'root', '', 'blueshop');
$sql = "SELECT * FROM member WHERE username LIKE '%$keyword%'";
$result = mysqli_query($con, $sql);
?>

<table border="1">
    <tr>
        <th>Image</th>
        <th>Username</th>
        <th>Name</th>
        <th>Address</th>
        <th>Mobile</th>
        <th>Email</th>
    </tr>
    <?php while ($row = mysqli_fetch_array($result)): ?>
        <tr>
            <td><img src="../member_photo/<?php echo $row["username"] ?>.jpg" width="100"></td>
            <td><?php echo $row["username"] ?></td>
            <td><?php echo $row["name"] ?></td>
            <td><?php echo $row["address"] ?></td>
            <td><?php echo $row["mobile"] ?></td>
            <td><?php echo $row["email"] ?></td>
        </tr>
    <?php endwhile; ?>
</table>
