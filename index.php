<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aulas de teste</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<main>
		<form action="processa_dados.php" method="POST">
			
			<div class="bonitim">
				<label for="">Digite o primeiro numero</label>
				<input type="number" name="valor1">
			</div>
			<div class="bonitim">
				<label for="">Digite o operador </label>
				<input type="text" name="operador">
			</div>
			<div class="bonitim">
				<label for="">Digite o segundo numero</label>
				<input type="number" name="valor2">
			</div>

			<div class="bonitim">
				<input type="submit" value="Enviar">
			</div>
		</form>
	</main>

</body>
</html>