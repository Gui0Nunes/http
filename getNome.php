<?php

header('Content-Type: application/json');
//JSON_UNESCAPED_UNICODE

$nome = $_REQUEST['nome'];

print_r(json_encode("$nome"));
