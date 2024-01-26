<?php

    $recebido = getallheaders();

    $json = $recebido['Content-Type'] == 'application/json' ? true : false;

    //Verifica se o pacote de dados do cliente é no formato json

    if ($json) {
        $dados = file_get_contents('php://input');
        $dados = json_decode($dados, true);
    } else {
        $dados = $_POST;
    }

    if (isset($dados['n1']) && isset($dados['n2']) && is_numeric($dados['n1']) && is_numeric($dados['n2']))
    {
        $n1 = $dados['n1'];
        $n2 = $dados['n2'];

        $soma = $n1 + $n2;

        $response = [
            "STATUS" => "SUCESSO",
            "RESULTADO" => $soma
        ];
    } 
    else
    {
        $response = [
            "STATUS" => "ERRO",
            "RESULTADO" => "ERRO NOS PARÂMETROS ENVIADOS"
        ];
    }

    header('Content-Type: application/json');

    echo json_encode($response);

?>