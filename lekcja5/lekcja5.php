<!DOCTYPE html>
<meta charset="utf-8">
<html>
    <head>
        <title>Hello World</title>
    </head>
    <body>
	
<?php

	$liczba = 0;
	
	for($liczba = -11; $liczba <11; ++$liczba)
    {
		if($liczba % 5==0)
		{
			continue;
		}
			echo $liczba;
			echo "<br>";
	}

?>

    </body>
</html>
