<?php
require 'classes/produto.php';
require 'models/produto.php';
// USE é uma forma de chamar uma classe com um name space para que ela seja instaciada e chamar seus metodos
// o AS é uma forma de apelidar os namespace e passar para o obejto que está instanciando a classe usando o apelido dado depois do (AS).

use models\Produto as productModel;
use classes\Produto as productClass;

$produto = new productModel();
$produto->mostrarDetalhes();

echo"<br>";

$produto2 = new productClass();
$produto2->mostrarDetalhes();



