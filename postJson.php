<?php

header('Content-Type: application/json');
//JSON_UNESCAPED_UNICODE

$json = file_get_contents('php://input');

if (!empty($json)) {
    $dados = json_decode($json);
    if (isset($dados->nome)) {
        $nome = $dados->nome;
    } else {
        http_response_code(401);
        print_r(json_encode("Erro! Você não enviou o nome"));
        die();
    }
    if (isset($dados->empresa)) {
        $empresa = $dados->empresa;
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



$mensagem = array(
    "Resposta" => "Parabéns {$nome}! Você conseguiu fazer a requisição post com JSON.",
    "nome" => $nome,
    "empresa" => $empresa
);
print_r(json_encode($mensagem));






