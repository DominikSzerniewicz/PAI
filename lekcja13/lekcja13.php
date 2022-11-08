<div class="dane1">
    <b>Twoje dane</b>
    <?php
    $test = new mysqli("localhost", "root", "", "test");
    $login = ["login"];
	?>
</div>
        <?php
        $dane = "SELECT login,haslo,email FROM logowanie WHERE login='$login'";
        $results = mysqli_query($test, $dane);

        if (mysqli_num_rows($results) > 0) {
            echo 'Login: <b>' . $_SESSION["login"] . '</b><br>';
            while ($row = $results->fetch_assoc()) {
                echo 'Hasło: <b>' . $row['haslo'] .  '</b>'
                    . '<br>E-mail: <b>' .$row['email'] . '</b>';
            }
        }
        $test->close();
        ?>
<form method="$_POST" action="mojekonto/wyloguj.php">
    <input class="zatwierdz" type="submit" value="Wyloguj">
</form>