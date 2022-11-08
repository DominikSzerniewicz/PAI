<?php
$hostname = 'localhost'; 
$database = 'wedkowanie'; 
$username = 'root'; 
$password = ''; 

$conn = mysqli_connect($hostname, $username, $password, $database);

$query = "SELECT * FROM lowisko";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_row($result)){
    echo "Akwen: ".$row[2]. ' '."Województwo: ". $row[3]. ' '."<br>";
}

mysqli_close($conn);
?>
