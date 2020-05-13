<?php 
include '../base.php';
$kunci = md5(rand());
$folder = md5(rand());
$jatah = $_GET['jatah'];
$nama_file = $_FILES['file']['name'];