<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../__css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>PHP Challenges</title>
</head>
<body>
    <div>
        <form action="challenge-12.php" method="get">
            Informe o valor do Produto: <input type="text" name="valor" id="valor"><br>
            <input type="submit" value="Calcular desconto">
        </form>
        <?php
            require_once '../__includes/funcoes.php';
            /*
            12) Crie um programa que leia o preço de um produto, calcule e mostre o seu
            PREÇO PROMOCIONAL, com 5% de desconto.
            */
            $valor = $_GET['valor'] ?? 0;
            if(!is_numeric($valor) || is_null($valor)){
                echo "Informe o valor do produto corretamente.";
            } else {
                $desconto = ($valor / 100) * 5;
                $valorComDesconto = $valor - $desconto;
                echo "Valor do produto: R$" . number_format($valor, 2, '.', ',') . "<br>";
                echo "Desconto 5%: R$" . number_format($desconto, 2, '.', ',') . "<br>";
                echo "Valor do produto: R$" . number_format($valorComDesconto, 2, '.', ',') . "<br>";
            }
            voltar();
        ?>
    </div>
</body>
</html>