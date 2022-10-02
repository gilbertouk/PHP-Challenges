<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../__css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>PHP Challenges</title>
</head>
<body>
    <div>
        <form action="challenge-29.php" method="get">
            <label for="nomeFuncionario">
                Infome o nome: <input type="text" name="nomeFuncionario" id="nomeFuncionario" size="40" maxlength="40"><br>
            </label>
            <label for="salario">
                Informe o salário: <input type="text" name="salario" id="salario"><br>
            </label>
            <label for="anosDeEmpresa">
                Quantos anos voce trabalha na empresa: <input type="number" name="anosDeEmpresa" id="anosDeEmpresa"><br>
            </label>
            <input type="submit" value="Calcular novo salário">
        </form>
        <?php
            require_once '../__includes/funcoes.php';
            /*
            * 29) Desenvolva um programa que leia o nome de um funcionário, seu salário,
            * quantos anos ele trabalha na empresa e mostre seu novo salário, reajustado de
            * acordo com a tabela a seguir:
            * - Até 3 anos de empresa: aumento de 3%
            * - entre 3 e 10 anos: aumento de 12.5%
            * - 10 anos ou mais: aumento de 20%
            */

            function validaNome(string $nomeFuncionario): void
            {
                if (strlen($nomeFuncionario) < 5 || is_numeric($nomeFuncionario) || $nomeFuncionario == null) {
                    echo "<p>Nome precisa ter pelo menos 5 caracteres e nao pode ser numerico.</P>";
                    voltar();
                    exit();
                }
            }
            function reajusteSalario(float $salario, int $anosDeEmpresa): float
            {
                $novoSalario = $salario;
                if ($anosDeEmpresa < 3) {
                    $novoSalario += $salario * 3 / 100;
                } elseif ($anosDeEmpresa < 10) {
                    $novoSalario += $salario * 12.5 / 100;
                } else {
                    $novoSalario += $salario * 20 / 100;
                }
                return $novoSalario;
            }

            $nomeFuncionario = $_GET['nomeFuncionario'] ?? null;
            $salario = $_GET['salario'] ?? 0;
            $anosDeEmpresa = $_GET['anosDeEmpresa'] ?? 0;

            validaNome($nomeFuncionario);

            if (!is_numeric($salario) || $salario == null) {
                echo "<p>Informe o salário.</p>";
                voltar();
                exit();
            } elseif (!is_numeric($anosDeEmpresa) || $anosDeEmpresa == null) {
                echo "<p>Informe quantos anos de empresa o funcionário tem.</p>";
                voltar();
                exit();
            } else {
                $novoSalario = reajusteSalario($salario, $anosDeEmpresa);
                echo "<p>O funcionario $nomeFuncionario com $anosDeEmpresa anos de empresa com salario de R$" . number_format($salario, 2) . " vai receber agora R$" . number_format($novoSalario, 2) . ".</p>";
            }

            voltar();
        ?>
    </div>
</body>
</html>