<!DOCTYPE html>
<html lang="en">
<head>
    <title>Soal 5</title>
</head>
<body>
    <h1>Soal 5</h1>

    <form action="" method="post">
        <label for="bilangan">Masukkan bilangan (5-20):</label>
        <input type="number" id="bilangan" name="bilangan" min="5" max="20" required>

        <label for="pilihan">Pilih:</label>
        <select id="pilihan" name="pilihan">
            <option value="ganjil">Ganjil</option>
            <option value="genap">Genap</option>
        </select>

        <button type="submit">Tampilkan</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bilangan = $_POST["bilangan"];
        $pilihan = $_POST["pilihan"];

        for ($i = 1; $i <= $bilangan; $i++) {
            if ($pilihan == "ganjil" && $i % 2 != 0) {
                echo "$i Afif<br>";
            } elseif ($pilihan == "genap" && $i % 2 == 0) {
                echo "$i Afif<br>";
            } else {
                echo "$i<br>";
            }
        }
    }
    ?>
</body>
</html>