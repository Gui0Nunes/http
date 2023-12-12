<?php
header('Access-Control-Allow-Origin: *');
//header('Content-Type: application/json');
//JSON_UNESCAPED_UNICODE

if (isset($_REQUEST['login'])) {
    if (!empty($_REQUEST['login'])) {
        $login = $_REQUEST['login'];
    } else {
        http_response_code(401);
        print_r(json_encode("Erro! O conteúdo de login não pode estar vazio!"));
        die();
    }
} else {
    http_response_code(401);
    print_r(json_encode("Erro! Você precisa enviar o login!"));
    die();
}

if (isset($_REQUEST['senha'])) {
    if (!empty($_REQUEST['senha'])) {
        $senha = $_REQUEST['senha'];
    } else {
        http_response_code(401);
        print_r(json_encode("Erro! O conteúdo de login não pode estar vazio!"));
        die();
    }
} else {
    http_response_code(401);
    print_r(json_encode("Erro! Você precisa enviar o login!"));
    die();
}



$mensagem = array(
    "login" => $login,
    "titulo" => 'Teste API Login e Senha',
    "response" => $nome." login realizado com sucesso.",
    "data" => date("d/m/Y H:i")
);

print_r(json_encode($mensagem));






