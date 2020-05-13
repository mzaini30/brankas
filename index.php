<?php
include "base.php";
if (!$_SESSION["login"]){
  header("Location: /login.php");
}