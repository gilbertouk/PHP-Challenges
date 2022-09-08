<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../__css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>PHP Challenges</title>
</head>
<body>
    <div>
        <form action="challenge-8.php" method="get">
            Digite uma distância em metros: <input type="text" name="metros" id="metros"><br>
            <input type="submit" value="Envar">
        </form>
        <?php
            require_once '../__includes/funcoes.php';
            /*
            8) Desenvolva um programa que leia uma distância em metros e mostre os valores
            relativos em outras medidas.
            Ex:
            Digite uma distância em metros: 185.72
            A distância de 85.7m corresponde a:
            0.18572Km       1857.2dm
            1.8572Hm        18572.0cm
            18.572Dam       185720.0mm
            */
            $metros = $_GET['metros'] ?? 0;
            if(!is_numeric($metros) || $metros == null){
                echo "Voce deve informar uma distância em metros!";
            } else {
                echo ($metros / 1000) . "Km <br>";
                echo ($metros / 100) . "Hm <br>";
                echo ($metros / 10) . "Dam <br>";
                echo ($metros * 10) . "dm <br>";
                echo number_format($metros * 100, 1, ".", "") . "cm <br>";
                echo number_format($metros * 1000, 1, ".", "") . "mm <br>";
            }
            voltar();
        ?>
    </div>
</body>
</html>