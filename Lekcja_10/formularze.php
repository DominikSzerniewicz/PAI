<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<form action="./formularze.php" method="POST">

	<p><input type="login" placeholder="nazwa" name="login" value="" /></p>
	<p><input type="password" placeholder="haslo" name="haslo" value="" /></p>
	
	<p><input type="checkbox" name="Check" value="1" />Tak</p>
	
	<input type="submit" />
	
	</form>
	<?php
	
		if(isset($_POST['login'])){
            echo "Twój login:" . htmlspecialchars($_POST['login']) . ".<br>";
		}
		if(isset($_POST['haslo'])){
			echo "Twoje haslo:" . sha1(htmlspecialchars($_POST['haslo'])) . ". ";
		}
		
        else{
            echo "Wypełnij puste pole";
        }

        if(isset($_POST['Check'])){
		    echo "<br> Zaznaczyłeś";
		    }
		else{
		    echo "<br>Nie zaznaczyłeś";
		}
		
	?>


</body>