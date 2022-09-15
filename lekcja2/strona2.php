<!DOCTYPE html>
<meta charset="utf-8">
<html>
    <head>
        <title>Hello World</title>
    </head>
    <body>
	
<?php
/*
	$procent = 65;

    if($procent < 40)
    {
		echo "dostałeś 1";
    }
    elseif($procent >40 and $procent<54)
    {
		echo "dostałeś 2";
    }
    elseif($procent >54 and $procent<69)
    {
		echo "dostałeś 3";
    }
	elseif($procent >69 and $procent<84)
	{
		echo "dostałeś 4";
    }
	elseif($procent >84 and $procent<95)
	{
		echo "dostałeś 5";
    }
	elseif($procent >95 and $procent<100)
	{
		echo "dostałeś 6";
    }
	*/
	$ksiazka = "Akademia pana kleksa";
    switch($ksiazka)
    {
        case "Akademia pana kleksa":
            echo "Jan Brzechwa";
            break;
        case "Dziady":
            echo "Mickiewicz";
            break;
        case "Pan Tadeusz":
            echo "Mickiewicz";
            break;
        case "Lalka":
            echo "B.Prus";
            break;
        case "Wesele":
            echo "Wyspiański";
            break;
			
		default:
			echo "Czytaj książki";
    }
?>

    </body>
</html>