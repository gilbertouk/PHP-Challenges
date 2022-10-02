<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../__css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>PHP Challenges</title>
</head>
<body>
    <div>
        <form action="challenge-28.php" method="get">
            <label for="largura"> 
                Informe a Largura: <input type="text" name="largura" id="largura"><br>
            </label>
            <label for="comprimento">
                Informe o Comprimento: <input type="text" name="comprimento" id="comprimento"><br>
            </label>
            <input type="submit" value="Calcular área do terreno">
        </form>
        <?php
            require_once '../__includes/funcoes.php';
            /*
            * 28) Faça um programa que leia a largura e o comprimento de um terreno
            * retangular, calculando e mostrando a sua área em m². O programa também
            * devemostrar a classificação desse terreno, de acordo com a lista abaixo:
            * - Abaixo de 100m² = TERRENO POPULAR
            * - Entre 100m² e 500m² = TERRENO MASTER
            * - Acima de 500m² = TERRENO VIP
            */

            function calculaAreaTerreno(float $largura, float $comprimento): float
            {
                return $largura * $comprimento;
            }
            function classificacaoTerreno(float $areaTerreno): string
            {
                if ($areaTerreno < 100) {
                    $classificacao = "TERRENO POPULAR";
                } elseif ($areaTerreno < 500) {
                    $classificacao = "TERRENO MASTER";
                } else {
                    $classificacao = "TERRENO VIP";
                }
                return $classificacao;
            }

            $largura = $_GET['largura'] ?? 0;
            $comprimento = $_GET['comprimento'] ?? 0;

            if (!is_numeric($largura) || $largura == null || !is_numeric($comprimento) || $comprimento == null) {
                echo "<p>Voce deve informar a largura e o comprimento corretamente.</p>";
                voltar();
                exit();
            } elseif ($comprimento == $largura) {
                echo "<p>As medidas informadas nao corresponde a um terreno retangular</p>";
                voltar();
                exit();
            } else {
                $areaTerreno = calculaAreaTerreno($largura, $comprimento);
                echo "<p>O terreno tem " . $areaTerreno . "m<sup>2</sup> e sua classificação e: " . classificacaoTerreno($areaTerreno) . "</p>";
            }
        
            voltar();
        ?>
    </div>
</body>
</html>