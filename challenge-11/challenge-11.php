<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../__css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>PHP Challenges</title>
</head>
<body>
    <div>
        <form action="challenge-11.php" method="get">
            Informe o valor de A: <input type="text" name="a" id="a"><br>
            Informe o valor de B: <input type="text" name="b" id="b"><br>
            Informe o valor de C: <input type="text" name="c" id="c"><br>
            <input type="submit" value="Calcular Delta">
        </form>
        <?php
            require_once '../__includes/funcoes.php';
            /*
            11) Desenvolva uma lógica que leia os valores de A, B e C de uma equação do
            segundo grau e mostre o valor de Delta.
            */
            $a = $_GET['a'] ?? 0;
            $b = $_GET['b'] ?? 0;
            $c = $_GET['c'] ?? 0;
            if(!is_numeric($a) || is_null($a)){
                echo "Voce deve informar um valor numerico para A.";
            } elseif(!is_numeric($b) || is_null($b)){
                echo "Voce deve informar um valor numerico para B.";
            }elseif(!is_numeric($c) || is_null($c)){
                echo "Voce deve informar um valor numerico para C.";
            } else {
                $delta = pow($b, 2) - 4 * $a * $c;
                echo "O valor de Delta e: $delta";
            }

            voltar();
        ?>
    </div>
</body>
</html>