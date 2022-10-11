<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<form action="./formularzeZadanie2.php" method="POST">
	<p><input type="text" placeholder="Nick" name="nick" value="" /></p>
	<textarea name='opis' placeholder="Komentarz"></textarea><br>
	
	<input type="submit" />
	
	</form>
	<?php

		if(isset($_POST['nick'])){
			$nickname = $_POST['nick'];
            echo "Twój nick:" . $nickname;
		}

		if(isset($_POST['nick'])){
			$komentarz = $_POST['opis'];
            echo "<br>Komentarz:" . $komentarz;
		}
		if(isset($_POST['nick'])){
			$komentarz = $_POST['opis'];
           echo "<br> komentarz " . htmlspecialchars($_POST['opis']) . ". ";
		}
			
	?>


</body>