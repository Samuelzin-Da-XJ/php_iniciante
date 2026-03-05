<?php

$a = "teste";
$b = 10.8;

if (is_float($a)){
    echo "É float 1!<br>";
    
}

if (is_float($b)){
    echo "É float 2!<br>";
    
}

if (is_float(6565.63)){
    echo "É float 3!<br>";
    
}

if (is_float("teste")){
    echo "É float 4!<br>";
    
}

/* 
Checando se é float
podemos utilizar a função is_float() para verficar se um dado é float;

A função recebe um valor como parâmetro;

Novamente receberemos um true or false, dependendo do dado enviado;

Precisaremos utilizar uma estrutura if para validar o valor 
*/

?>