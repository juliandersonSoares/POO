<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: gray;
            color: white;
        }
    </style>
</head>
<body>
    <?php
class Pessoa{
    public $idade;

    public function __clone(){
        echo "Clonagem de objetos.";
    }
}

$pessoa = new Pessoa();
$pessoa->idade = 25;
//utilizando o clone pessoa2 recebe o valor de pessoa que é 25 e pessoa2 não recebe o valor de idade=35;
$pessoa2 = clone $pessoa;
$pessoa2->idade=35;
echo " Idade é igual a ".$pessoa->idade;
//para printa na tela o valor 35 deve chamar o objeto pessoa2
echo "<br>";
echo " Idade é igual a ".$pessoa2->idade;
?>



</body>
</html>
