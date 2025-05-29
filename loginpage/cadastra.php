<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ze</title>
    <link rel="stylesheet" href="cadastra.css">
</head>
<body>
    <div class="box">
        <form action="cadastra.php" id="he" method="POST">

            <div id="cadastro"> 
                <h2>CADASTRE-SE </h2>
            </div>

            <div class="inputbox">
                <input type="text" placeholder="Nome completo" name="nome">
            </div>
            <div class="inputbox">
                <input type="text" placeholder="Email" name="email">
            </div>
            <div class="inputbox">
                <input type="password" placeholder="Senha" name="senha">
            </div>
            <div class="inputbox">
                <input type="password" placeholder="Repita sua senha" name="rsenha">
            </div>
            <div class="inputbox" id="anini">
                <input type="submit" value="Cadastrar" id="cadas">
            </div>
                
            <?php
             
             if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['senha'])){

                $nome = $_POST ['nome'];
                $email = $_POST ['email'];
                $senha = $_POST ['senha'];
                $rsenha = $_POST ['rsenha'];

                $con = mysqli_connect("localhost","root","","cadastro");
             
             mysqli_query($con,"INSERT INTO cadastrar (id, nome, email, senha) VALUES (NULL, '$nome', '$email', '$senha')");
             
             }

             ?>
                
        </form>
    </div>
</body>
</html>     