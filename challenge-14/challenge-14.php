<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../__css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>PHP Challenges</title>
</head>
<body>
    <div>
        <form action="challenge-14.php" method="get">
            Km percorridos: <input type="number" name="km" id="km"><br>
            Quantidade de dias: <input type="number" name="dias" id="dias"><br>
            <input type="submit" value="Calcular Valor">
        </form>
        <?php
            require_once '../__includes/funcoes.php';
            /*
            14) A locadora de carros precisa da sua ajuda para cobrar seus serviços. Escreva
            um programa que pergunte a quantidade de Km percorridos por um carro alugado e a
            quantidade de dias pelos quais ele foi alugado. Calcule o preço total a pagar,
            sabendo que o carro custa R$90 por dia e R$0,20 por Km rodado.
            */

            $km = $_GET['km'] ?? null;
            $dias = $_GET['dias'] ?? null;

            if(is_null($km) || is_null($dias)){
                echo "Voce deve informar a quantidade de Km percorridos e quantos dias.";
            } else {
                $valorKm = $km * 0.20;
                $valorDias = $dias * 90;
                $valorTotal = $valorDias + $valorKm;
                echo "Voce deve pagar R$: " . number_format($valorTotal, 2);
            }

            voltar();
        ?>
    </div>
</body>
</html>



