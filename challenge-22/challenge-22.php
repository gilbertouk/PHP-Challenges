<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../__css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>PHP Challenges</title>
</head>
<body>
    <div>
        <form action="challenge-22.php" method="get">
            Informe seu ano de nascimento: <input type="number" name="year" id="year"><br>
            <input type="submit" value="Verificar situação militar"><br>
        </form>
        <?php
            require_once '../__includes/funcoes.php';
            /*
            22) Escreva um programa que leia o ano de nascimento de um rapaz e mostre a sua situação em relação ao alistamento militar.
            - Se estiver antes dos 18 anos, mostre em quantos anos faltam para o alistamento.
            - Se já tiver depois dos 18 anos, mostre quantos anos já se passaram do alistamento.
            */

            function verificaSituacaoMilitar(int $year): string
            {
                $currentYear = date('Y');
                $checkAge = $currentYear - $year;
                if ($checkAge < 18) {
                    $yearLess = 18 - $checkAge;
                    $mensagem = "Voce tem $checkAge anos e falta $yearLess anos para o seu alistamento.";
                } else {
                    $yearsMore = $checkAge - 18;
                    $mensagem = "Voce tem $checkAge anos e já se passaram $yearsMore anos do seu alistamento.";
                }
                return $mensagem;
            }

            $year = $_GET['year'] ?? 0;

            if ($year == 0) {
                echo "Informe o ano de nascimento <br>";
            } else {
                echo verificaSituacaoMilitar($year);
            }

            voltar();
        ?>
    </div>
</body>
</html>