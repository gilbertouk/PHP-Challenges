<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../__css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>PHP Challenges</title>
</head>
<body>
    <div>
        <form action="challenge-25.php" method="get">
            Informe o valor de A: <input type="number" name="ladoA" id="ladoA"><br>
            Informe o valor de B: <input type="number" name="ladoB" id="ladoB"><br>
            Informe o valor de C: <input type="number" name="ladoC" id="ladoC"><br>
            <input type="submit" value="Verificar se é possível formar um triângulo">
        </form>
        <?php
            require_once '../__includes/funcoes.php';
            /*
            * 25) [DESAFIO] Crie um programa que leia o tamanho de três segmentos de reta.
            * Analise seus comprimentos e diga se é possível formar um triângulo com essas
            * retas. Matematicamente, para três segmentos formarem um triângulo, o comprimento
            * de cada lado deve ser menor que a soma dos outros dois.
            */

            function verificaLadosTriangulo(int $ladoA, int $ladoB, int $ladoC): bool
            {
                $a = $ladoA;
                $b = $ladoB;
                $c = $ladoC;
                //$formaTriangulo = false;

                if (($a + $b) > $c && ($a + $c) > $b && ($b + $c) > $a) {
                    $formaTriangulo = true;
                } else {
                    $formaTriangulo = false;
                }
                return $formaTriangulo;
            }

            $ladoA = $_GET['ladoA'] ?? 0;
            $ladoB = $_GET['ladoB'] ?? 0;
            $ladoC = $_GET['ladoC'] ?? 0;

            if (!is_numeric($ladoA) || !is_numeric($ladoB) || !is_numeric($ladoC) || $ladoA == null || $ladoB == null || $ladoC == null) {
                echo "<p>Voce precisa informa o valor de todos os lados.</p>";
            } else {
                if (verificaLadosTriangulo($ladoA, $ladoB, $ladoC)) {
                    echo "<p>Os lados informados $ladoA, $ladoB e $ladoC é possível formar um triângulo com essas medidas.</p>";
                } else {
                    echo "<p>Os lados informados $ladoA, $ladoB e $ladoC nao é possível formar um triângulo com essas medidas.</p>";
                }
            }

            voltar();
        ?>
    </div>
</body>
</html>