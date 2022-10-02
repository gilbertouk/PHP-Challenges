<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../__css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>PHP Challenges</title>
</head>
<body>
    <div>
        <form action="challenge-24.php" method="get">
            Qual a distancia da viagem em Km: <input type="number" name="qtdKm" id="qtdKm"><br>
            <input type="submit" value="Calcular preço da passagem"><br>
        </form>
        <?php
            require_once '../__includes/funcoes.php';
            /*
            24) Faça um algoritmo que pergunte a distância que um passageiro deseja
            percorrer em Km. Calcule o preço da passagem, cobrando R$0.50 por Km para
            viagens até 200Km e R$0.45 para viagens mais longas.
            */

            function calcularPassagem(int $qtdKm): float
            {
                $distancia = $qtdKm;
                $preco = 0;

                if ($distancia <= 200) {
                    $preco = $distancia * 0.50;
                } else {
                    $preco = $distancia * 0.45;
                }
                return $preco;
            }

            $qtdKm = $_GET['qtdKm'] ?? 0;

            if (!is_numeric($qtdKm) || $qtdKm == 0) {
                echo "";
            } else {
                echo "O valor da passagem para $qtdKm Km e: R$ " . number_format(calcularPassagem($qtdKm), 2);
            }

            voltar();
        ?>
    </div>
</body>
</html>