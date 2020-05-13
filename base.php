<?php
include "vendor/autoload.php";
$db = (new \Pecee\Pixie\Connection('sqlite', [
    'driver'   => 'sqlite',
    'database' => $_SERVER["DOCUMENT_ROOT"] . '/database.sqlite'
]))->getQueryBuilder();