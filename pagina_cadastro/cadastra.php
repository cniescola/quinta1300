<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link rel="stylesheet" href="cadastra.css">
  </head>
  <body>
    <div class="box">
      
      <div id="titulo">
        <h2>CADASTRA-SE</h2>
      </div>
      
      <form action="cadastra.php" method="POST">
        <div class="inputbox">
          <input type="text" placeholder="USERNAME" name="nome">
        </div>
        <div class="inputbox">
          <input type="text" placeholder="EMAIL" name="email">
        </div>
        <div class="inputbox">
          <input type="password" placeholder="SENHA" name="senha">
        </div>
        <div class="inputbox">
          <input type="password" placeholder="REPITA SUA SENHA" name="rsenha">
        </div>
        <div class="inputbox">
          <input id=cadas type="submit" value="CADASTRAR">
        </div>
      </form>
    </div>

    <?php
      if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['rsenha'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $rsenha = $_POST['rsenha']; 

        $con = mysqli_connect("localhost","root","","cadastro");

        mysqli_query($con,"INSERT INTO cadastrar (id,nome,email,senha) VALUES (NULL,'$nome','$email','$senha')");
      }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>