<?php

$con = mysqli_connect("localhost", "root", "","db_base");
$pesq = mysqli_query($con, "SELECT *  FROM client");

while($res = mysqli_fetch_array($pesq)){
    $id = $res['id'];
    $nome = $res['nome'];
    $cpf = $res['cpf'];
    $tel = $res['telefone'];
    $endereco = $res['endereco'];

    echo "<br>- id: $id <br>- nome: $nome <br>- cpf: $cpf <br>- telefone: $tel <br>- endereço: $end <br><br><br>";
}











?>