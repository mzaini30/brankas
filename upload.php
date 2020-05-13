<?php 
include 'base.php';
include 'auth.php';
$kunci = md5(rand());
$jatah = $_POST['jatah'];

// upload
// $nama_file = $_FILES['file']['name'];
// $tmp = $_FILES['file']['tmp_name'];
// move_uploaded_file($tmp, $_SERVER['DOCUMENT_ROOT'] . '/file/' . $kunci . '-' . $nama_file);
// upload done

$nama_file = $_FILES['file']['name'];
$pathresolver = new FileUpload\PathResolver\Simple('/file');
$filesystem = new FileUpload\FileSystem\Simple();
$fileupload = new FileUpload\FileUpload($_FILES['file'], $_SERVER);
$fileupload->setPathResolver($pathresolver);
$fileupload->setFileSystem($filesystem);
list($files, $headers) = $fileupload->processAll();

$db->table('brankas')->insert(compact('nama_file', 'kunci', 'jatah'));
// header('Location: /');

header('Content-Type: application/json');
// Outputting it, for example like this
foreach($headers as $header => $value) {
    header($header . ': ' . $value);
}
echo json_encode(['files' => $files]);