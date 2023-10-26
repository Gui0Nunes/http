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


if (isset($_REQUEST['requisicao'])) {
    if (!empty($_REQUEST['requisicao'])) {
        $requisicao = $_REQUEST['requisicao'];
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
    "Resposta" => "Parabéns {$nome}! Você conseguiu requisitar com post. Requisição ({$requisicao}).",
    "nome" => $nome,
    "requisicao" => $requisicao
);
print_r(json_encode($mensagem));






