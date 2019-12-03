<?php

require "./Conn.php";

$Dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$conn = new Conn();

// INSERINDO DADOS
if (!empty($Dados['SendCadUser'])) :
    unset($Dados['SendCadUser']);

    $result_cadastrar = "INSERT INTO cadLivro (livro, autor, editora) VALUES (:livro, :autor, :editora)";
    $cadastrar = $conn->getConn()->prepare($result_cadastrar);

    $cadastrar->bindParam(':livro', $Dados['livro'], PDO::PARAM_STR);
    $cadastrar->bindParam(':autor', $Dados['autor'], PDO::PARAM_STR);
    $cadastrar->bindParam(':editora', $Dados['editora'], PDO::PARAM_STR);
    $cadastrar->execute();
endif;

// SELECIONANDO DADOS
$result_livro = "SELECT * FROM cadLivro";
$resultado_livro = $conn->getConn()->prepare($result_livro);
$resultado_livro->execute();
