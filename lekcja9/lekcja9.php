<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body>
	<form id='login' action='./login.php' method='post'>

	<label for='nazwa' >nazwa:</label>
	<input type='text' name='nazwa' id='nazwa' />

	<label for='password' >Hasło:</label>
	<input type='password' name='password' id='password' />
	<p><input type="checkbox" name="zapamietaj" value=1 />Zapamiętaj mnie</p>

	<input type='submit' name='Submit' value='prześlij' />


	</form>
        <?php
		
		if(isset($_POST['nazwa'])){
		echo"nazwa: ". htmlspecialchars($_POST['nazwa']);
		echo "Twoje hasło: ". htmlspecialchars (sha1($_POST['password']));
		}
		else{
			echo "Cześć nieznajomy";
		}

        ?>
    </body>
</html>
 