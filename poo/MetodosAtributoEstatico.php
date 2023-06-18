<?php
class Login{
    public static $user;

    public static function verificarLogin(){
        echo "O usuário ".self::$user." está logado";
        echo "<br>";
    }
    public function sairSistema(){
        echo "O usuário saiu do sistema";
    }
}

//Login::$user="Mestre";
//Login::verificarLogin();
$login = new Login();
$login->sairSistema();
?>