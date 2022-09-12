<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../__css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>PHP Challenges</title>
</head>
<body>
    <div>
        <form action="challenge-10.php" method="get">
            Informe a largura: <input type="text" name="largura" id="largura"><br>
            Informe a altura: <input type="text" name="altura" id="altura"><br>
            <input type="submit" value="Calcular">
        </form>
        <?php
            require_once '../__includes/funcoes.php';
            /*
            10) Faça um algoritmo que leia a largura e altura de uma parede, calcule e
            mostre a área a ser pintada e a quantidade de tinta necessária para o serviço,
            sabendo que cada litro de tinta pinta uma área de 2metros quadrados.
            */

            $largura = $_GET['largura'] ?? 0;
            $altura = $_GET['altura'] ?? 0;
            if(!is_numeric($largura) || is_null($altura)){
                echo "Voce deve informar a largura corretamente em metros.";
            } elseif (!is_numeric($altura) || is_null($altura)){
                echo "Voce deve informar a altura corretamente em metros.";
            } else {
                $area = $altura * $largura;
                $tintaNecessaria = $area / 2;
                echo "A área a ser pintada e $area e a quantidade de tinta necessária para o serviço e $tintaNecessaria litros.";
            }

            voltar();
        ?>
    </div>
</body>
</html>