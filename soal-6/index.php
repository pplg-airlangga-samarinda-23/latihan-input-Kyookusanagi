<form action="" method="post">
    <label for="n">Masukkan bilangan bulat:</label>
    <input type="number" id="n" name="n">
    <input type="submit" name="submit" value="Submit">
</form>

<?php

if (isset($_POST['submit'])) {
    $n = (int) $_POST['n'];

    for ($i = $n; $i >= 1; $i--) {
        for ($j = 1; $j <= $n - $i; $j++) {
            echo "&nbsp;&nbsp;";
        }

        for ($k = 1; $k <= 2 * $i - 1; $k++) {
            echo "*&nbsp;";
        }

        echo "<br>";
    }
}

?>