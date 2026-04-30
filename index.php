<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo do salario</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form action="calcularsalario.php" method="post">
        <h1>Cálculo de Salário</h1>

        <label>
            Digite as horas trabalhadas:
            <input type="text" name="txthoras">
        </label>

        <label>
            Digite o valor da hora:
            <input type="text" name="txtvalor">
        </label>

        <div class="botoes">
            <input type="submit" value="Calcular">
            <input type="reset" value="Limpar">
        </div>
    </form>

</body>
</html>
