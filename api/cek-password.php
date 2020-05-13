<?php
include "../base.php";
$username = $_GET["username"];
$password = $_GET["password"];
$cek = $db->table("admin")->where('username', $username)->where('password', $password)->count();
header("Content-Type: application/json");
echo json_encode($cek);