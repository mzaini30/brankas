<?php 
include '../base.php';
include '../auth.php';
$data = $db->table('brankas')->get();
header('Content-Type: application/json');
echo json_encode($data);