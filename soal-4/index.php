<!DOCTYPE html>
<html lang="en">
<head>
    <title>Soal 4</title>
</head>
<body>
    <h1>Soal 4</h1>

    <form>
        <label for="TanggalLahir">Masukkan tanggal lahir:</label>
        <input type="date" id="TanggalLahir" name="TanggalLahir"><br>
        <input type="submit" value="Hitung umur">
    </form>

    <?php
        if (isset($_GET['TanggalLahir'])) {
            $TanggalLahir = $_GET['TanggalLahir'];
            $today = date("Y-m-d");
            $age = date_diff(date_create($TanggalLahir), date_create($today));
            echo "Umurmu " . $age->y . " Tahun, " . $age->m . " Bulan, dan " . $age->d . " hari.";
        }
    ?>
</body>
</html>