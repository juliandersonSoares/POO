<?php
class Veiculo{
public $modelo;
public $cor;
public $ano;
public function Andar(){
    echo"Andou ";
    
 }
public function Parar(){
    echo"<br>";
    echo "Parou ";
    
 }
}

class Carro extends Veiculo{
    public function ligarLimpador(){
        echo"Limpando 321";
        echo"<br>";
    }
}
class Moto extends Veiculo{
    public function darGrau(){
        echo "Enpinando a Moto";
        echo"<br>";
    }
}

$carro = new Carro();
$carro->modelo='gol';
$carro->cor = 'vermelho';
$carro->ano=2018;
$carro->Andar();
echo"<br>";
$carro->ligarLimpador();
var_dump($carro);
echo "<br>";

$moto = new Moto();
$moto->modelo='Honda Biz';
$moto->cor = 'Azul';
$moto->ano=2017;
$moto->Parar();
echo"<br>";
$moto->darGrau();
var_dump($moto);
?>