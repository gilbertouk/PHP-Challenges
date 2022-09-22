<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../__css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>PHP Challenges</title>
</head>
<body>
    <div>
        <form action="challenge-18.php" method="get">
            Informe seu ano de nascimento: <input type="number" name="ano" id="ano" placeholder="YYYY"><br>
            <input type="submit" value="Enviar">
        </form>
        <?php
            require_once '../__includes/funcoes.php';
            /*
            18) Faça um programa que leia o ano de nascimento de uma pessoa, calcule a idade
            dela e depois mostre se ela pode ou não votar.
            */

            $ano = $_GET['ano'] ?? null;
            if(is_null($ano)){
                echo "Voce deve informar seu ano de nascimento.";
                exit();
            } else {
                $idade = date('Y') - $ano;
                echo "Sua idade e: " . $idade . "<br>";
                
                if($idade < 16){
                    echo "Voce nao pode votar";
                } else if($idade < 18) {
                    echo "Voce pode votar, mas seu voto nao e obrigatorio!";
                } else {
                    echo "Seu voto e obrigatorio!";
                }
            }            

            voltar();
        ?>
    </div>
</body>
</html>