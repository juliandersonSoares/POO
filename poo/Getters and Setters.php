<?php
class Login{
    public $email;
    public $senha;

    public function Logar(){
        if ($this->email == "teste@teste.com" and $this->senha=="123456"):
            echo "Logado com sucesso!";
        else:
            echo "Dados inválidos";
        endif ;       

        
    }
    
}
?>