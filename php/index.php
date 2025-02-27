<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <form action="config.php" method="post">
            <div class="bunitim">
                <label for=""> Digite o primeiro numero</label>
                <input type="number" name="valor1">
            </div>
            <div class="bunitim">
                <label for=""> Digite o operador</label>
                <input type="text" name="operador">
            </div>
            <div class="bunitim">
                <label for=""> Digite o segundo numero</label>
                <input type="number" name="valor2">
            </div>
            <div class="bunitim">
                <input type="submit" value="enviar">
            </div>

        </form>
    </main>
</body>
</html>