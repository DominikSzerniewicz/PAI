<!DOCTYPE html>
<html>
<head>

</head>
<body>

	<form action="./lekcja12.php" method="POST">
		<p><input type="text" name="tekst" placeholder="Tekst" value="" /></p>
		<input type="submit" name="Przycisk" />
		<input type="submit" name="TUsun" value="Usuń" />
	</form>

	<form action="./lekcja12.php" method="POST">
		<p><input type="number" name="liczba" placeholder="Number" value="" /></p>
		<input type="submit" name="Przycisk1"/>
		<input type="submit" name="Usun" value="Usuń"/>
	</form>
	<hr>

	<?php

		$tablica = array(1, 2, 3);
		$tablica2 = array('Dominik', 'Michał', 'Szymon');

		if (isset($_POST['Przycisk'])) {
			if (isset($_POST['tekst'])) {
				array_push($tablica2, $_POST['tekst']);
				echo "Zawartość tablicy: ";
				foreach ($tablica2 as $tab2) {
					echo $tab2 . " ";
				}
			}
		}

		if (isset($_POST['Przycisk1'])) {
			if (isset($_POST['liczba'])) {
				array_push($tablica, $_POST['liczba']);
				echo "Zawartość tablicy:";
				foreach ($tablica as $tab) {
					echo $tab . " ";
				}
			}
		}

		if (isset($_POST['TUsun'])) {
			$usunTekst = array_pop($tablica2);
			echo "Zawartość tablicy po usunięciu: ";
			foreach ($tablica2 as $tab2) {
					echo $tab2 . " ";
				}
		}

		if (isset($_POST['Usun'])) {
			$usunTekst = array_pop($tablica);
			echo "po usunięciu: ";
			foreach ($tablica as $tab) {
					echo $tab . " ";
				}
		}
	?>


</body>
