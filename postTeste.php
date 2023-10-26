<?php

header('Content-Type: application/json');
//JSON_UNESCAPED_UNICODE

if (isset($_REQUEST['nome'])) {
    if (!empty($_REQUEST['nome'])) {
        $nome = $_REQUEST['nome'];
    } else {
        http_response_code(401);
        print_r(json_encode("Erro! O conteúdo de nome não pode estar vazio!"));
        die();
    }
} else {
    http_response_code(401);
    print_r(json_encode("Erro! Você precisa enviar o nome!"));
    die();
}

//###OBS: nessa api geral1,geral2 ou geral3 não quebram se não forem enviadas
if (isset($_REQUEST['geral1'])) {
    $geral1 = $_REQUEST['geral1'];
} else {
    $geral1 = '';
}

if (isset($_REQUEST['geral2'])) {
    $geral2 = $_REQUEST['geral2'];
} else {
    $geral2 = '';
}

if (isset($_REQUEST['geral3'])) {
    $geral3 = $_REQUEST['geral3'];
} else {
    $geral3 = '';
}

$mensagem = array(
    "nome" => $nome,
    "geral1" => $geral1,
    "geral2" => $geral2,
    "geral3" => $geral3
);

print_r(json_encode($mensagem));






