<?php

if(isset($_POST['submit']) && !empty($_POST['login']) && !empty($_POST['senha']))
{
    include_once("conexao.php");
    $email=$_POST['login'];
    $senha=$_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE login='$email'and senha='$senha'";

    $result=$conn->query($sql);
    
    if(mysqli_num_rows($result)<1)
    {
        header('Location: login.php');
    }
    else
    {
        header('Location: index.html');
    }
}

?>