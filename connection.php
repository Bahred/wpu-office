<?php

$server = "localhost";
$username = "root";
$pass = "";
$db = "github";

$conn = mysqli_connect($server, $username, $pass, $db);

if (!$conn) {
    die("gagal Terhubung!!!");
}
?>