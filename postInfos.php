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


$mensagem = array(
    "nome" => $nome,
    "titulo" => 'Dados API',
    "texto" => $nome." está desenvolvendo o consumo de API em JavaScript.",
    "data" => date("d/m/Y"),
    "hora" => date("H:i"),
    "EntreDataHora" => "às"
);

print_r(json_encode($mensagem));






