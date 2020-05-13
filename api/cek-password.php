<?php
include "../base.php";
$cek = $db->table("admin")->where("username", $_GET["username"])->where("password", $_GET["password"])->count();
header("Content-Type: application/json");
echo json_encode($cek);