<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../__css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>PHP Challenges</title>
</head>
<body>
    <div>
        <form action="challenge-23.php" method="get">
            Nome: <input type="text" name="name" id="name" size="40" maxlength="40"><br>
            Sexo:
            <select name="sexo" id="sexo">
                <option value="f">Feminino</option>
                <option value="m">Masculino</option>
            </select><br>
            Valor das compras: <input type="text" name="value" id="value">
            <input type="submit" value="Calcule o preço">
        </form>
        <?php
            require_once '../__includes/funcoes.php';
            /*
            23) Numa promoção exclusiva para o Dia da Mulher, uma loja quer dar descontos
            para todos, mas especialmente para mulheres. Faça um programa que leia nome,
            sexo e o valor das compras do cliente e calcule o preço com desconto. Sabendo
            que:
                - Homens ganham 5% de desconto
                - Mulheres ganham 13% de desconto
            */

            function calculatePriceMan($value): string
            {
                $discount = $value * 5 / 100;
                $price = ($value - $discount);
                $text = "R$". number_format($discount, 2) . " e vai pagar R$" . number_format($price, 2);

                return $text;
            }
            function calculatePriceWoman($value): string
            {
                $discount = $value * 13 / 100;
                $price = ($value - $discount);
                $text = "R$". number_format($discount, 2) . " e vai pagar R$" . number_format($price, 2);

                return $text;
            }


            $name = $_GET['name'] ?? 'customer';
            $sexo = $_GET['sexo'] ?? null;
            $value = $_GET['value'] ?? 0;

            if ($sexo == 'f') {
                $sexo = "Feminina";
                $text = calculatePriceWoman($value);
                echo "A $name por ser $sexo vai ganhar um desconto $text";
            } else {
                $sexo = "Masculino";
                $text = calculatePriceMan($value);
                echo "O $name por ser $sexo vai ganhar um desconto $text";
            }

            voltar();
        ?>
    </div>
</body>
</html>