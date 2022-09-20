<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../__css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>PHP Challenges</title>
</head>
<body>
    <div>
        <form action="challenge-13.php" method="get">
            Informe seu salario atual: <input type="text" name="salario" id="salario"><br>
            <input type="submit" value="Calcular Aumento 15%">
        </form>
        <?php
            require_once '../__includes/funcoes.php';
            /*
            13) Faça um algoritmo que leia o salário de um funcionário, calcule e mostre o
            seu novo salário, com 15% de aumento.
            */

            $salario = $_GET['salario'] ?? null;
            if(!is_numeric($salario) || is_null($salario)){
                echo "Voce deve informar seu salario!";
            } else {
                $aumento = ($salario / 100) * 15; 
                $novoSalario = $salario + $aumento;

                echo "Seu novo salario com 15% de aumento e R$: " . number_format($novoSalario, 2, ',', '.');           
            }
            voltar();
        ?>
    </div>
</body>
</html>




