<?php
//Classes  Atributos e Métodos
class Pessoa{
    public $nome;
    public $idade;

    public function Falar(){
        echo "Olá mundo!";
        //outra forma de chamar as variaveis é utilizando o $this->variavel.
        echo $this->nome." de".$this->idade." acabou de falar ";
    }
}

$julio = new Pessoa();
//var_dump($julio);
$julio->nome="julianderson";
$julio->idade=22;
$julio->Falar();
echo $julio->nome;
?>