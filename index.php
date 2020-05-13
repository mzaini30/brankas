<?php
include "base.php";
if ($_SESSION["login"] != "iya"){
  header("Location: /login.php");
}