


<!DOCTYPE html>
<html>
<head>
    <title>Table Example</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        
        th {
            background-color: #f2f2f2;
            text-align: left;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Degree</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>update</th>
            <th>delete</th>
        </tr>
        <tbody>
        <?php

include "conn.php";

$selecquery = "select * from register";
$query = mysqli_query($con,$selecquery);
$nums = mysqli_num_rows($query);

while($res=mysqli_fetch_array($query)){
    ?>
    <tr>
        <td><?php echo $res['id'];?></td>
        <td><?php echo $res['name'];?></td>
        <td><?php echo $res['degree'];?></td>
        <td><?php echo $res['mobile'];?></td>
        <td><?php echo $res['email'];?></td>
        <td><a href="update.php?id=<?php echo $res['id'];?> ">update</a></td>
        <td><a href="delete.php?id=<?php echo $res['id'];?>">delete</a></td>
    </tr>
    <?php
}?>

        </tbody>
    </table>
</body>
</html>
