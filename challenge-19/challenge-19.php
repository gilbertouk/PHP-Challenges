<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../__css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>PHP Challenges</title>
</head>
<body>
    <div>
        <form action="challenge-19.php" method="get">
            Nome: <input type="text" name="nome" id="nome"><br>
            Primeira Nota: <input type="text" name="nota1" id="nota1"><br>
            Segunda Nota: <input type="text" name="nota2" id="nota2"><br>
            <input type="submit" value="Calcular Media">
        </form>
        <?php
            require_once '../__includes/funcoes.php';
            /*
            19) Crie um algoritmo que leia o nome e as duas notas de um aluno, calcule a sua
            média e mostre na tela. No final, analise a média e mostre se o aluno teve ou
            não um bom aproveitamento (se ficou acima da média 7.0).
            */

            function calcularMedia(string $nome, float $nota1, float $nota2): string
            {
                $nome = $nome;
                $media = ($nota1 + $nota2) / 2;
                if($media < 7){
                    $msg = "O aluno $nome com media $media nao teve um bom aproveitamento. <br>";
                } else {
                    $msg = "O aluno $nome com media $media teve um bom aproveitamento. <br>";
                }
                return $msg;
            }

            $nome = $_GET['nome'] ?? null;
            $nota1 = $_GET['nota1'] ?? null;
            $nota2 = $_GET['nota2'] ?? null;

            if($nome == null){
                echo "Voce deve informar o nome do aluno!";
            } elseif(!is_numeric($nota1) || !is_numeric($nota2)){
                echo "Voce deve informar as notas corretamente!";
            } 

            echo calcularMedia($nome, $nota1, $nota2);

            voltar();
        ?>
    </div>
</body>
</html>