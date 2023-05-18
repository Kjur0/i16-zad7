<!DOCTYPE html>
<html lang="pl">

<head>
	<title>Tabliczka mnożenia</title>
	<link href="styles.css" rel="stylesheet">
</head>

<body>
	<h1>Tabliczka mnożenia</h1>
	<form method="post" action="/table.php">
		<h3>Wprowadź:</h3>
		<label for="w">liczbę wierszy: </label><input type="number" name="w" id="w" min="2" max="30" required><br>
		<label for="k">liczbę kolumn: </label><input type="number" name="k" id="k" min="2" max="30" required><br>
		<input type="submit" value="Generuj">
	</form>
</body>

</html>