<!DOCTYPE html>
<html>
<head>
    <title>Sorteio de Números Aleatórios</title>
</head>
<body>
    <h2>Sorteio de Números Aleatórios</h2>

    <form method="post">
        <label for="quantidade">Quantidade de Números:</label>
        <input type="number" id="quantidade" name="quantidade" min="1" required><br><br>

        <label for="min">Valor Mínimo:</label>
        <input type="number" id="min" name="min" required><br><br>

        <label for="max">Valor Máximo:</label>
        <input type="number" id="max" name="max" required><br><br>

        <button type="submit" name="sortear">Sortear</button>
    </form>

    <?php
    // Função para gerar números aleatórios
    function sortearNumeros($quantidade, $min, $max) {
        echo "<h3>Números Sorteados:</h3>";
        for ($i = 0; $i < $quantidade; $i++) {
            $numero = rand($min, $max);
            echo "$numero ";
        }
    }

    // Verifica se o formulário foi enviado
    if (isset($_POST['sortear'])) {
        $quantidade = $_POST['quantidade'];
        $min = $_POST['min'];
        $max = $_POST['max'];

        sortearNumeros($quantidade, $min, $max);
    }
    ?>
</body>
</html>
