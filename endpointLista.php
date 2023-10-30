<?php


$lista_alertas = [];

    $arrayLista = array(
       "0" => array(
            "nome"=> "Guilherme",
            "setor"=> "P&D",
            "ramal"=> 35
        ),
       "1" => array(
        "nome"=> "Murilo",
        "setor"=> "P&D",
        "ramal"=> 37
       ),
       "2" => array(
        "nome"=> "Lucas",
        "setor"=> "P&D",
        "ramal"=> 40
       ),
       "3" => array(
        "nome"=> "Matheus",
        "setor"=> "P&D",
        "ramal"=> 41
       ),              

    );

    array_push($lista_alertas, $arrayLista);


    echo json_encode($lista_alertas);

