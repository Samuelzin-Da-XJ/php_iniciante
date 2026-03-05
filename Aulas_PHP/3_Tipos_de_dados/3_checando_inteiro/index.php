<?php

if (is_int(5)){ //true
echo "É um número inteiro <br>";
}

if (is_int("Não é um número inteiro")){ //false
    echo "É um número inteiro 2 <br>";
    }


$A= 10;
if (is_int($A)){ //true
    echo "É um número inteiro 3 <br>";
    }
    

/* chegando numero inteiro
podemos validar se um dado é inteiro com a função is_int();

Caso um número seja inteiro, será retornado true (um outro tipo de dado);

Caso não seja inteiro, receberemos um retorno  de false (tipo de dado também);

Precisamos utilizar uma estrutura if para validar o valor;*/

?>



