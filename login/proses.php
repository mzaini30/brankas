<?php
include "../base.php";
$cek = $db->table("admin")->where("username", $_GET["username"])->where("password", $_GET["password"])->count();
if ($cek == 1){
  session_start();
  $_SESSION["login"] = true;
  header("Location: /");
}