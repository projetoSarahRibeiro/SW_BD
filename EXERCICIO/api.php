<?php
    header('Content-Type:application/json');
    include 'conexao.php';

    $metodo = $_SERVER['REQUEST_METHOD'];
    //echo json_encode($metodo);

    $url = $_SERVER['REQUEST_URI'];

    //echo json_encode($url);

    $path = parse_url($url, PHP_URL_PATH);
    $path = trim($path,'/');

    //echo json_encode($path);

    $pathparts = explode('/',$path);

    echo json_encode($pathparts[2]);

    //CRIANDO AS VARIAVEIS PARA CADA PARTE DA URL

    $primeira = isset($pathparts[0]) ? $pathparts[0] : '';
    $segunda = isset($pathparts[1]) ? $pathparts[1] : '';
    $terceira = isset($pathparts[2]) ? $pathparts[2] : '';
    $quarta = isset($pathparts[3]) ? $pathparts[3] : '';

    //MOTANDO A RESPOTA DA API EM JSON

    $response = [
       'metodo' => $metodo,
       'primeiraParte' => $primeira,
       'segundaParte' => $segunda,
       'terceiraParte' => $terceira,
       'quartaParte' => $quarta

    ];

    //MOSTRANDO A RESPOSTA
    //echo json_encode($response);

    //SELEÇÃO DO MÉTODO

    switch($metodo){
        case 'GET':
            //LOGICA PARA GET
            break;
        case 'PUT':
             //LOGICA PARA PUT
            break;
        case 'POST':
             //LOGICA PARA POST
            break;
        case 'DELETE':
             //LOGICA PARA DELETE
            break;
        default:
        echo json_encode(
            [
                'messagem' => 'Método não permitido!'
            ]
            );
    };
    
?>