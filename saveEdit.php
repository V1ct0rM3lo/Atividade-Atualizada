<?php
  include_once("conexao.php");

  if(isset($_POST['update']))
  {
    $cod_usuario=$_POST['cod_usuario'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sqlUpdate="UPDATE usuarios SET nome='$nome',segundonome='$sobrenome',login='$email',senha='$senha' WHERE cod_usuario='$cod_usuario'";

    $result=$conn->query($sqlUpdate);


  }
header('Location:consultar.php');



?>