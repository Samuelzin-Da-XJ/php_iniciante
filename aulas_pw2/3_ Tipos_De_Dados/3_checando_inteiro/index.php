<?php

if(is_int(5)){ //true
echo "É um numero inteiro <br>";
}

if(is_int("Não é um numero inteiro")){ //false
echo "É um numero inteiro 2 <>";
}

$A= 10;
if(is_int($A)){ //true
echo "É um numero inteiro 3 <3>";
}

/* checando numeros inteiro
podemos validar se um dado é inteiro
com a função is_int(); 
Caso um nuemro seja inteiro, será retornado true
(um outro tipo de dado);
caso não seja, receberemos um retorno de false
(tipo de dado também);
precisamos utilizar uma estrutura if para validar o valor;
*/
?>