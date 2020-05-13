<?php 
include '../base.php';
inlude '../auth.php';
$kunci = md5(rand());
$jatah = $_POST['jatah'];
$nama_file = $_FILES['file']['name'];
$tmp = $_FILES['file']['tmp_name'];
move_uploaded_file($tmp, $_SERVER['DOCUMENT_ROOT'] . '/file/' . $kunci . '-' . $nama_file);
header('Content-Type: application/json');
echo json_encode($nama_file);