<?php

class Pessoa{
    const nome="pizza";
    public function exibirNome(){
        echo self::nome;
    }

}
class Pao extends Pessoa{
    const nome = "sorvete";
    public function exibirNome(){
    echo parent::nome;
}
}
$rodrigo= new Pao();
$rodrigo ->exibirNome();
?>