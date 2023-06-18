<?php 
class Animal{
    public function Andar(){
        echo"O Animal andou";
    }

    public function Correr(){
        echo"O animal correu";
    }
}
class Cavalo extends Animal{
    public function Andar(){
        //echo"O Cavalo andou";
        $this->Correr();
    }
}
$animal= new Cavalo();
$animal->Andar();