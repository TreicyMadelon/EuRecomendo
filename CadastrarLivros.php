<?php
session_start();
require_once("connection/conexao.php");
header('Content-Type: text/html; charset=utf-8');


$nomelivro = $_POST["nomeLivro"];
$idlivro = $_POST["idLivro"];
$autor = $_POST["autor"];
$livroindependente = isset($_POST["independente"])? $_POST['independente'] : null;;
$livroestrangeiro = isset($_POST["estrangeiro"])? $_POST['estrangeiro'] : null;;
$livropais = $_POST['pais'] = isset($_POST['pais']) ? $_POST['pais'] : null;


$sql = "INSERT INTO `cadastrolivros`  (`nome_livro`, `id_livro`, `autor`, `independente`, `estrangeiro`, `pais` ) VALUES ('$nomelivro', '$idlivro', '$autor', '$livroindependente', '$livroestrangeiro', '$livropais' )";
$resultado_usuario = mysqli_query($con, $sql);

if ($_POST['pais']) {
    echo "Armazenar '{$_POST['pais']}'";
} else {
    echo "Não armazenar nada!";
}


if(!$sql){
    echo(" - Ocorreu um erro durante  inserção na tabela");
} else {
    echo(" - Dados inseridos com sucesso");
}



?>