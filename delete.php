<?php

if (!empty($_GET['cod_usuario'])) {

    include_once("conexao.php");

    $cod_usuario = $_GET['cod_usuario'];

    $sqlSelect = "SELECT * FROM usuarios WHERE cod_usuario=$cod_usuario";

    $result = $conn->query($sqlSelect);

    if ($result->num_rows > 0) {

        $sqlDelete = "DELETE FROM usuarios WHERE cod_usuario=$cod_usuario";

        $resultDelete = $conn->query($sqlDelete);
    }
}
header('Location:consultar.php');
