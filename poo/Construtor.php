<?php
    class Login{
    private $email;
    private $senha;
    private $nome;

    public function __construct($email,$senha,$nome){
        $this->nome=$nome;
        $this->setEmail($email);
        $this->setSenha($senha);
    }

    public function getNome(){
        return $this->nome;
    }
    public function getEmail($e){
        $this->email=$e;
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
$logar = new Login("teste@teste.com","123456","Julianderson");
$logar->Logar();
echo "<br>";
echo $logar->getNome();
?>