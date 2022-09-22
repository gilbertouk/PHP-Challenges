<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../__css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>PHP Challenges</title>
</head>
<body>
    <div>
        <form action="challenge-17.php" method="get">
            Informe a velocidade do carro em Km: <input type="number" name="km" id="km"><br>
            <input type="submit" value="Verificar">
        </form>
        <?php
            require_once '../__includes/funcoes.php';
            /*
            17) Escreva um programa que pergunte a velocidade de um carro. Caso ultrapasse
            80Km/h, exiba uma mensagem dizendo que o usuário foi multado. Nesse caso, exiba
            o valor da multa, cobrando R$5 por cada Km acima da velocidade permitida.
            */

            $km = $_GET['km'] ?? 0;
            
            if($km <= 80){
                echo "Velocidade permitida";
            } else {
                $valorMulta = ($km - 80) * 5;
                echo "Voce estava acima da velocidade permitida 80km/h e foi multado em R$: " . number_format($valorMulta, 2);
            }

            voltar();
        ?>
    </div>
</body>
</html>