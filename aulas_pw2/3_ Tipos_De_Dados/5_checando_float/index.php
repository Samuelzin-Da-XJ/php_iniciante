<?php
$a = "teste";
$b = 10.8;

if (is_float($a));{
    echo "É float 1<br>";
}
if (is_float($b));{
    echo "É float 2!<br>";
}
if (is_float(6565.63));{
    echo "É float 3<br>";
}
if (is_float("teste"));{
    echo "É float 4!<br>";
}



/*
Checando se é float
Podemos utilizar a função is_float()
para verificar se um dado é float;
A função recebe um valor como parâmetro;
Novamente receberemos true or false
 depedendo do dado enviado;
 Precisaremos utilizar uma estrutura if para validar
 o valor
*/
?>