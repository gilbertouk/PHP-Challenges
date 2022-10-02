<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../__css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>PHP Challenges</title>
</head>
<body>
    <div>
        <form action="challenge-30.php" method="get">
            <label for="ladoA">
                Informe o valor de A: <input type="number" name="ladoA" id="ladoA"><br>
            </label>
            <label for="ladoB">
                Informe o valor de B: <input type="number" name="ladoB" id="ladoB"><br>
            </label>
            <label for="ladoC">
                Informe o valor de C: <input type="number" name="ladoC" id="ladoC"><br>
            </label>
            <input type="submit" value="Verificar se é possível formar um triângulo">
        </form>
        <?php
            require_once '../__includes/funcoes.php';
            /*
            * 30) [DESAFIO] Refaça o algoritmo 25, acrescentando o recurso de mostrar que tipo
            * de triângulo será formado:
            * - EQUILÁTERO: todos os lados iguais
            * - ISÓSCELES: dois lados iguais
            * - ESCALENO: todos os lados diferentes
            */

            function verificaLadosTriangulo(int $ladoA, int $ladoB, int $ladoC): bool
            {
                $a = $ladoA;
                $b = $ladoB;
                $c = $ladoC;

                if (($a + $b) > $c && ($a + $c) > $b && ($b + $c) > $a) {
                    $formaTriangulo = true;
                } else {
                    $formaTriangulo = false;
                }
                return $formaTriangulo;
            }
            function verificaTipoDeTriangulo(int $ladoA, int $ladoB, int $ladoC): string
            {
                if ($ladoA == $ladoB && $ladoA == $ladoC) {
                    $tipoTriangulo = "EQUILÁTERO";
                } elseif ($ladoA == $ladoB || $ladoA == $ladoC || $ladoB == $ladoC) {
                    $tipoTriangulo = "ISÓSCELES";
                } else {
                    $tipoTriangulo = "ESCALENO";
                }
                return $tipoTriangulo;
            }

            $ladoA = $_GET['ladoA'] ?? 0;
            $ladoB = $_GET['ladoB'] ?? 0;
            $ladoC = $_GET['ladoC'] ?? 0;

            if (!is_numeric($ladoA) || !is_numeric($ladoB) || !is_numeric($ladoC) || $ladoA == null || $ladoB == null || $ladoC == null) {
                echo "<p>Voce precisa informa o valor de todos os lados.</p>";
            } else {
                if (verificaLadosTriangulo($ladoA, $ladoB, $ladoC)) {
                    echo "<p>Os lados informados $ladoA, $ladoB e $ladoC é possível formar um triângulo com essas medidas.</p>";
                    echo "<p>E o modelo de triângulo que sera formado com essas medidas é: " . verificaTipoDeTriangulo($ladoA, $ladoB, $ladoC) . "</p>";
                } else {
                    echo "<p>Os lados informados $ladoA, $ladoB e $ladoC nao é possível formar um triângulo com essas medidas.</p>";
                }
            }
            voltar();
        ?>
    </div>
</body>
</html>