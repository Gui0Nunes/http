<?php

header('Content-Type: application/json');
//JSON_UNESCAPED_UNICODE

$json = file_get_contents('php://input');

if (!empty($json)) {
    $dados = json_decode($json);
    if (isset($dados->telefone)) {
        $telefone = $dados->telefone;
    } else {
        http_response_code(401);
        print_r(json_encode("Erro! Você não enviou o nome"));
        die();
    }
    if (isset($dados->mensagem)) {
        $mensagem = $dados->mensagem;
    } else {
        http_response_code(401);
        print_r(json_encode("Erro! Você não enviou a empresa"));
        die();
    }
} else {
    http_response_code(401);
    print_r(json_encode("Você precisa enviar alguma informação!"));
    die();
}



$payload = " Enviar para oa telefone:$telefone, esta mensagem: $mensagem";
print_r(json_encode($payload));






