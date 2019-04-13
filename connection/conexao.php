<?php

header('Content-Type: text/html; charset=utf-8');

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "eurecomendo";

//Criar a conexao
$con = mysqli_connect($servidor, $usuario, $senha, $dbname);
mysqli_set_charset($con, "utf8");

mysqli_query($con,"SET NAMES 'utf8'");
mysqli_query($con,'SET character_set_connection=utf8');
mysqli_query($con,'SET character_set_client=utf8');
mysqli_query($con,'SET character_set_results=utf8');


?>