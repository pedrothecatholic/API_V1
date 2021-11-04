<?php

#IMPORTAÇÃO DO ARQUIVO DE CONEXÃO
include('connection.php');

#FUNÇÃO DE LEITORA DE DADOS (SEM CRITÉRIO)
function read($conn)
{

    $sql = "SELECT * FROM tbl_pessoa";

    if ($resultado = mysqli_query($conn, $sql)) {

        $dados = mysqli_fetch_all($resultado);

        echo json_encode(array("status" => "success", "data" => $dados));
    } else {

        echo json_encode(array("status" => "success", "data" => mysqli_error($conn)));
    }
}

#FUNÇÃO DE LEITORA DE DADOS (SEM CRITÉRIO)
function create($nome, $sobrenome, $email, $celular, $fotografia, $conexao)
{

    $sql = "INSERT INTO tbl_pessoa (nome, sobrenome, celular, fotografia) 
            VALUES ('$nome', '$sobrenome', '$email', '$celular', '$fotografia')";

    if (mysqli_query($conn, $sql)) {
        echo json_encode(array("status" => "success", "data" => "Dados inseridos com sucesso"));
    } else {
        echo json_encode(array("status" => "success", "data" => "Erro ao inserir os dados"));
    }
    
}
