<?php
include "conn.php";

$id = $_GET['id'];

$deletequery = "delete from register where id=$id";

$query = mysqli_query($con,$deletequery);

header('location:find.php');
?>
