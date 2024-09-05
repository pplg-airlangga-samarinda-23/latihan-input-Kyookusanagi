<!DOCTYPE html>
<html lang="en">
<head>
    <title>Soal 1</title>
</head>
<body>
    <h1>Soal 1</h1>
    <form method="post">
        Masukkan jari-jari   <input type="number" name="jarijari" required> <br>
        Masukkan tinggi    <input type="number" name="tinggi" required> <br>
        <button type="submit">Hitung Volume</button>
        <button type="reset">Reset</button>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $jarijari = $_POST["jarijari"];
            $tinggi = $_POST["tinggi"];
            $phi = 3.14;
            $volume = $phi * pow($jarijari, 2) * $tinggi;
            echo "Volume tabung: " . number_format($volume, 2) . " cubic units";
        }
    ?>
</body>
</html>