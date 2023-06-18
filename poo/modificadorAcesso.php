<?php
    class Veiculo{
        protected $modelo;
        public $cor;
        public $ano;

        public function Andar(){
            echo "Andou";
        }
        public function Parar(){
            echo "Parou";
        }

        public function getModelo(){
            return $this->modelo;
        }
        public function setModelo($m){
            $this->modelo = $m;
        }
    }

    class Carro extends Veiculo{
        public function ligarLipador(){
            echo "Limpando em 321";
        }
    }
    class Moto extends Veiculo{
        public function darGrau(){
            echo "Dando grau em 321";
        }
    }

    $veiculo = new Veiculo();
    $veiculo->setModelo('HILUX');
    echo $veiculo->getModelo();

?>