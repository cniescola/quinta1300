<?php

$valor1 = $_POST['valor1'];
$operador = $_POST['operador'];
$valor2 = $_POST['valor2'];

if($operador == '+'){
    $res = $valor1 + $valor2;
}else if ($operador == '*'){
    $res = $valor1 * $valor2;
}
else if ($operador == '-'){
    $res = $valor1 - $valor2;
}
else if ($operador == '/'){
    $res = $valor1 / $valor2;
}
else if ($operador == 'q'){
    $res = sqrt($valor1 + $valor2);
} else{
    echo "DIGITA CERTO BOSTA";
}

echo "o resultado eh: $res";



?>