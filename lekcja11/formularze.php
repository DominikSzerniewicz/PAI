<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
		$string = "Robimy zadanie rozgrzewkowe twoje liczby to";
            $liczby = array(11,22,33,44,34,36,37,56,17,19);
			echo "$string <br>";
		foreach($liczby as $item){
        echo " $item <br>";
		
		//Zadanie 2
		
		$tabzdania = explode(" ", "Tojest zdanie z 6 słów");
		print_r($tabzdania);
		
    }
        ?>
    </body>
</html>