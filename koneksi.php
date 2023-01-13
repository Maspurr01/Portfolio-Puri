<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "db_aplikasicv";

$connect = mysqli_connect ($host, $user, $pass);
$select_db = mysqli_select_db ($connect, $db);

?>