<!DOCTYPE html>
<meta charset="utf-8">
<html>
    <head>
        <title>Hello World</title>
    </head>
    <body>
	
<?php
	for($wysokosc = 1; $wysokosc <=5; ++$wysokosc)
    {
		echo "<br>";
	for ($szerokosc = 1; $szerokosc <=6; ++$szerokosc) 
	{
		echo "*";
	}
	}
	echo "<hr>";
	
    for($count = 1; $count <= 10; ++$count)
    {
		echo "<br>";
	for ($count1 = 1; $count1 <= 10; ++$count1) 
	{
		echo($count."*".$count1."=".($count*$count1)."<br>");
	}
	}
?>

    </body>
</html>
