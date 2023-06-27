<?php

$username = "root";
$password = "";
$server = "localhost";
$db = "CRUD";

$con = mysqli_connect($server, $username, $password, $db);
if ($con){
    ?><script>alert("connection succsesful")</script>
    <?php
}else {
    die("Connection failed: " . mysqli_connect_error());
}
?>