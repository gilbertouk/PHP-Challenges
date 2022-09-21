<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../__css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>PHP Challenges</title>
</head>
<body>
    <div>
        <form action="challenge-16.php" method="get">
            Quantos cigarros fumados por dias: <input type="number" name="cigarros" id="cigarros"><br>
            Quantos anos voce já fumou: <input type="number" name="anos" id="anos"><br>
            <input type="submit" value="Calcular tempo de vida">
        </form>
        <?php
            require_once '../__includes/funcoes.php';
            /*
            16) [DESAFIO] Escreva um programa para calcular a redução do tempo de vida de um
            fumante. Pergunte a quantidade de cigarros fumados por dias e quantos anos ele
            já fumou. Considere que um fumante perde 10 min de vida a cada cigarro. Calcule
            quantos dias de vida um fumante perderá e exiba o total em dias.
            */

            $qtdCigarros = $_GET['cigarros'] ?? null;
            $anos = $_GET['anos'] ?? null;

            if($qtdCigarros == null || $anos == null){
                echo "Voce precisa informar a quantidade de cigarros e quantos anos.";
            } else {
                $totalDias = $anos * 365;
                $totalCigarros = $qtdCigarros * $totalDias;
                $minutosPerdidos = $totalCigarros * 10;
                $diasPerdidos = $minutosPerdidos / 1440;

                echo "Voce perdeu ". number_format($diasPerdidos, 0) . " dias de vida!";
            }
            voltar();
        ?>
    </div>
</body>
</html>


