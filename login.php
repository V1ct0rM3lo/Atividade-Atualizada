<?php
if (isset($_POST['login']) && isset($_POST['senha'])) {
    $login = $_POST['login'];
    $senha = MD5($_POST['senha']);
    $entrar = $_POST['entrar'];
    $connect = new mysqli('localhost', 'root', '', 'loginsystem');


    if (isset($entrar)) {
        $verifica = $connect->query("SELECT * FROM usuarios WHERE login= '$login' AND senha='$senha'")
            or die("erro ao selecionar coluna");

        $rows = $verifica->num_rows;
        if ($rows <= 0) {
            echo "<script language='javascript' type='text/javascript'>
    }
    alerta('login e/ ou senha incorretos');windows.location.href='login.html';</script>";
            die();
        } else {
            setcookie("login", $login);
            header("location:index.html");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stryle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Login</title>
</head>

<body background="Imagens/background.jpg">
    <div class="container text-center">
        <div class="row row-cols-3">
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
        </div>



        <form class="row g-3 was-validated" method="post" action="testLogin.php">


            <h1>Login</h1>
            <div class="m-3">
                <label>E-mail:</label>
                <div class="input-group">
                    <input type="text" class="form-control" aria-describedby="inputGroupPrepend2" required name="login" id="login">
                </div>

                <div class="m-3">
                    <label for="Senha" class="form-label">Senha:</label>
                    <input type="password" name="senha" class="form-control" required placeholder="senha" id="senha">
                    <br>
                    <h5><a href="Cadastro.html">Novo Usuario</a></h5>
                </div>
                <div class="m-3">
                    <input type="submit" value="Enviar" name="submit">
                </div>





                <!--


        LOGIN COM SENHA ADMIN E EMAIL ADMIN@HOTMAIL.COM 

        <form class="row g-3 was-validated">


            <h1>Login</h1>
            <div class="m-3">
                <label>E-mail:</label>
                <div class="input-group">
                    <input type="email" class="form-control" aria-describedby="inputGroupPrepend2" required name="email"
                        id="email">
                </div>

                <div class="m-3">
                    <label for="Senha" class="form-label">Senha:</label>
                    <input type="password" name="senha" class="form-control" required onchange='confirmarsenha();'
                        placeholder="senha" id="senha">
                    <br>
                    <h5><a href="Cadastro.html">Novo Usuario</a></h5>
                </div>
                <div class="m-3">
                    <input type="submit" onclick="Logar(); return false">
                </div>


        </form>


        <script>
            function Logar() {
                var login = document.getElementById('email').value;
                var senha = document.getElementById('senha').value;

                if (login == "admin@hotmail.com" && senha == "admin") {
                    alert("Sucesso");
                    location.href = "index.html";
                }
                else {
                    alert("Usuario ou senha incorretos");
                }
            }
        </script>


-->



                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>