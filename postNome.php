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


if (isset($_REQUEST['dep'])) {
    if (!empty($_REQUEST['dep'])) {
        $dep = $_REQUEST['dep'];
    } else {
        http_response_code(401);
        print_r(json_encode("Erro! O conteúdo da requisição não pode estar vazio!"));
        die();
    }
} else {
    http_response_code(401);
    print_r(json_encode("Erro! Você precisa enviar a requisição!"));
    die();
}


if (isset($_REQUEST['geral'])) {
    if (!empty($_REQUEST['geral'])) {
        $geral = $_REQUEST['geral'];
    } else {
        http_response_code(401);
        print_r(json_encode("Erro! O conteúdo da requisição não pode estar vazio!"));
        die();
    }
} else {
    http_response_code(401);
    print_r(json_encode("Erro! Você precisa enviar a requisição!"));
    die();
}

$mensagem = array(
    "nome" => $nome,
    "dep" => $dep,
    "geral"=>$geral
);

print_r(json_encode($mensagem));






