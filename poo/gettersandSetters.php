<?php
    class Login{
    public $email;
    public $senha;
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($e){
        $this->email=$e;
    }

    public function getSenha(){
        return $this->senha;
    }
    public function setSenha($s){
        $this->senha=$s;
    }
    public function Logar(){
        if ($this->email == "teste@teste.com" and $this->senha=="123456"):
            echo "Logado com sucesso!";
        else:
            echo "Dados inválidos";
        endif ;       

        
    }
    
}
$logar = new Login();
$logar->setEmail("teste@teste.com");
$logar->setSenha("1234567");
$logar->Logar();
echo "<br>";
echo $logar->getEmail();
?>