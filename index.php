<?php

// Composer�ǥ��󥹥ȡ��뤷���饤�֥������ɤ߹���
require_once __DIR__ . '/vendor/autoload.php';

$inputString = file_get_contents('php://input');
error_log($inputString);

?>
