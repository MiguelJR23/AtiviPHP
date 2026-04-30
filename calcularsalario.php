<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do salário</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="resultado">
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $horas = $_POST["txthoras"];
                $valor = $_POST["txtvalor"];
                $salario = $horas * $valor;

                echo "<h1>Resultado</h1>";
                echo "<p>O salário é:</p>";
                echo "<strong>R$ " . number_format($salario, 2, ",", ".") . "</strong>";
            }
        ?>
    </div>

</body>
</html>
