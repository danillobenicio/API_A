<?php

    if (isset($_POST['n1']) && isset($_POST['n2']) && isset($_POST['n3']) && isset($_POST['n4']))
    {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $n3 = $_POST['n3'];
        $n4 = $_POST['n4'];

        $media = ($n1 + $n2 + $n3 + $n4) / 4;

        if ($media <= 39) {
            $situacao = 'REPROVADO';
        } else if ($media > 39 && $media <= 59) {
            $situacao = 'EXAME';
        } else {
            $situacao = 'APROVADO';
        }

        $response = [
            "status" => "Sucesso",
            "resultado" => $media,
            "situacao" => $situacao
        ];
       
    } else {
        $response = [
            "status" => "Erro",
            "resultado" => "Não encontrado",
            "situacao" => "Não encontrado"
        ];
    }

    header('content-type', 'application/json');
    echo json_encode($response);
?>