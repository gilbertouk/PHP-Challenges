<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../__css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>PHP Challenges</title>
</head>
<body>
    <div>
        <form action="challenge-15.php" method="get">
            Informe a quantidade de dias trabalhados: <input type="number" name="dias" id="dias"><br>
            <input type="submit" value="Calcular Salario">
        </form>
        <?php
            require_once '../__includes/funcoes.php';
            /*
            15) Crie um programa que leia o número de dias trabalhados em um mês e mostre o
            salário de um funcionário, sabendo que ele trabalha 8 horas por dia e ganha R$25
            por hora trabalhada.
            */

            $dias = $_GET['dias'] ?? null;

            if(is_null($dias)){
                echo "Voce deve informar a quantidades de dias trabalhados.";
            } else {
                $salario = ($dias * 8) * 25;
                echo "O seu salario esse mes e RS: " . number_format($salario, 2);
            }

            voltar();
        ?>
    </div>
</body>
</html>