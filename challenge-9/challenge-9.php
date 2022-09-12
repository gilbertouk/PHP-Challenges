<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../__css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>PHP Challenges</title>
</head>
<body>
    <div>
        <form action="challenge-9.php" method="get">
            Informe quantos R$ voce tem: <input type="text" name="valor" id="valor"><br>
            <input type="submit" value="Converter">
        </form>
        <?php
            require_once '../__includes/funcoes.php';
            /*
            9) Faça um algoritmo que leia quanto dinheiro uma pessoa tem na carteira (em R$)
            e mostre quantos dólares ela pode comprar. Considere US$1,00 = R$3,45.
            */
            $valor = $_GET['valor'] ?? 0;
            if(!is_numeric($valor) || $valor == null){
                echo "Voce deve informar quantos R$ voce tem.";
            } else {
                $conversao = $valor / 3.45;
                echo "Com R$" . number_format($valor, 2, '.', ',') . " voce pode compra $" . number_format($conversao, 2, '.', ',') . "."; 
            }
            
            voltar();
        ?>
    </div>
</body>
</html>