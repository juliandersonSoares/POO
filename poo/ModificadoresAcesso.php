<?php
class Veiculo{
protected $modelo;
public $cor;
public $ano;
public function Andar(){
    echo"Andou ";
    
 }
public function Parar(){
    echo"<br>";
    echo "Parou ";
    
 }
 public function setModelo($m){
    $this->modelo=$m;
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

$veiculo = new Veiculo();
$veiculo->modelo="gol";
echo $veiculo->modelo;

?>