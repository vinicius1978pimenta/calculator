<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processo</h1>
    </header>
    <main>
        <?php
          $n = $_GET["nome"];
          $s = $_GET["sobrenome"];
          echo "<p> É UM PRAZER TE CONHECER, <strong>$n $s</strong>! ESSA É MINHA CALCULADORA! ";
       ?>
        <p><a href="javascript:history.go(-1)">voltar para a página anterior</a></p>
    </main>






</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Calculadora PHP</title>
</head>
<body>
    <h2>Calculadora PHP</h2>
    <form method="post" action="">
        <input type="number" name="numero1" placeholder="Número 1" required>
        <select name="operador">
            <option value="soma">+</option>
            <option value="menos">-</option>
            <option value="multiplicacao">*</option>
            <option value="divisao">/</option>
        </select>
        <input type="number" name="numero2" placeholder="Número 2" required>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $operador = $_POST['operador'];

        switch ($operador) {
            case 'soma':
                $resultado = $numero1 + $numero2;
                break;
            case 'menos':
                $resultado = $numero1 - $numero2;
                break;
            case 'multiplicacao':
                $resultado = $numero1 * $numero2;
                break;
            case 'divisao':
                if ($numero2 != 0) {
                    $resultado = $numero1 / $numero2;
                } else {
                    $resultado = "Error: No se puede dividir por cero.";
                }
                break;
            default:
                $resultado = "Operador no válido";
                break;
        }

        echo "<h3>Resultado: $resultado</h3>";
    }
    ?>
</body>
</html>

