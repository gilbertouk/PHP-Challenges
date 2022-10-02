<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../__css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>PHP Challenges</title>
</head>
<body>
    <div>
        <form action="challenge-27.php" method="get">
            <label for="nota1">Informe a primeira nota:
                <input type="text" name="nota1" id="nota1"><br>
            </label>
            <label for="nota2">Informe a segunda nota:
                <input type="text" name="nota2" id="nota2"><br>
            </label>
            <input type="submit" value="Calcular Média">
        </form>
        <?php
            require_once '../__includes/funcoes.php';
            /*
            * 27) Crie um programa que leia duas notas de um aluno e calcule a sua média,
            * mostrando uma mensagem no final, de acordo com a média atingida:
            * - Média até 4.9: REPROVADO
            * - Média entre 5.0 e 6.9: RECUPERAÇÃO
            * - Média 7.0 ou superior: APROVADO
            */

            function verificaMedia(float $nota1, float $nota2): string
            {
                $media = ($nota1 + $nota2) / 2;

                if ($media <= 4.9) {
                    $resultado = "<p>Aluno com a media $media esta REPROVADO</p>";
                } elseif ($media <= 6.9) {
                    $resultado = "<p>Aluno com a media $media esta de RECUPERAÇÃO</p>";
                } else {
                    $resultado = "<p>Aluno com a media $media esta APROVADO</p>";
                }
                return $resultado;
            }

            $nota1 = $_GET['nota1'] ?? 0;
            $nota2 = $_GET['nota2'] ?? 0;

            if (!is_numeric($nota1) || !is_numeric($nota2) || $nota1 == null || $nota2 == null) {
                echo "<p>Voce precisa informar as notas.</p>";
                voltar();
                exit();
            } else {
                echo verificaMedia($nota1, $nota2);
            }
            voltar();
        ?>
    </div>
</body>
</html>