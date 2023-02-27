<?php

if (!empty($_GET['cod_usuario'])) {


  include_once("conexao.php");

  $cod_usuario = $_GET['cod_usuario'];

  $sqlSelect = "SELECT * FROM usuarios WHERE cod_usuario=$cod_usuario";

  $result = $conn->query($sqlSelect);

  if ($result->num_rows > 0) {
    while ($user_data = mysqli_fetch_assoc($result)) {

      $nome = $user_data['nome'];
      $sobrenome = $user_data['segundonome'];
      $email = $user_data['login'];
      $senha = $user_data['senha'];
    }
  } else {
    header('Location:consultar.php');
  }
}
?>



<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cadastro</title>
  <link rel="stylesheet" href="stryle.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body background="Imagens\background.jpg">


  <center>
    <nav id="Menu">
      <ul>
        <li><a href="index.html">Inicio</a></li>
        <li> <a href="origem.html">Origem</a></li>
        <li><a href="contato.html">Contato</a></li>
        <li><a href="consultar.php">Consultar</a></li>
        <li><a href="Cadastro.html">Cadastrar</a></li>
        <li><a href="login.html">Sair</a></li>

      </ul>
    </nav>
  </center>

  <div class="container text-center">
    <div class="row row-cols-3">
      <div class="col"></div>
      <div class="col"></div>
      <div class="col"></div>
      <div class="col"></div>
    </div>


    <br>
    <br>



    <form class="row g-3 was-validated" method="post" action="saveEdit.php">



      <h1>Editar</h1>


      <div data-bs-theme="" class="m-3">
        <label for="validationDefault01" class="form-label">Primeiro Nome:</label>
        <input type="text" class="form-control" id="validationDefault01" required name="nome" maxlength="50" value="<?php echo $nome ?>">
      </div>

      <div class="m-3">
        <label for="validationDefault02" class="form-label">Sobrenome:</label>
        <input type="text" class="form-control" id="validationDefault02" required name="sobrenome" maxlength="20" value="<?php echo $sobrenome ?>">
      </div>

      <div class=" m-3">
        <label for="validationDefaultUsername" class="form-label">E-mail:</label>
        <div class="input-group">
          <input type="email" class="form-control" id="validationDefaultUsername" name="email" aria-describedby="inputGroupPrepend2" required maxlength="50" value="<?php echo $email ?>">
        </div>

        <div class=" m-3">
          <label for="Senha" class="form-label">Senha:</label>
          <input type="text" name="senha" class="form-control" id="validationDefault04" required onchange='confirmarsenha();' maxlength="20" value="<?php echo $senha ?>">
        </div>


        <input type="hidden"name="cod_usuario" value="<?php echo $cod_usuario ?>">

        <div class="m-3">
          <button class="btn btn-primary" type="submit" name="update" id="update">Atualizar</button>
        </div>

    </form>

  </div>
  </div>

  <script>
    function confirmarsenha() {
      const Senha = document.querySelector('input[name=senha]');
      const Confirmarsenha = document.querySelector('input[name=confirmar]');

      if (Confirmarsenha.value == Senha.value) {
        Confirmarsenha.setCustomValidity('');
      } else {
        Confirmarsenha.setCustomValidity('Senha Digitada Errada');
      }
    }
  </script>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>