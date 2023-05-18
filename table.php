<!DOCTYPE html>
<html lang="pl">

<head>
	<title>Tabliczka mnożenia</title>
	<link href="styles.css" rel="stylesheet">
</head>

<body>
	<h1>Tabliczka mnożenia</h1>
	<?php
	function tabliczka($w, $k)
	{
		echo '<table><tr>';
		for ($i = 0; $i <= $k; $i++) {
			echo "<th>$i</th>";
		}
		echo '</tr>';
		$x = 0;
		while ($x++ < $w) {
			echo "<tr>";
			echo "<th>$x</th>";
			$y = 1;
			do {
				echo "<td>" . $x * $y++ . "</td>";
			} while ($y <= $k);
			echo "</tr>";
		}
		echo '</table>';
	}
	tabliczka($_POST['w'], $_POST['k']);
	?>
</body>

</html>