<?php

    if (isset($_POST['n1']) && isset($_POST['n2']) && is_numeric($_POST['n1']) && is_numeric($_POST['n2']))
    {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];

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