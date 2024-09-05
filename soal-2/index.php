<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Jarak</title>
</head>
<body>
    <h1>Konversi Jarak dari Kilometer</h1>
    <form method="post" action="">
        <label for="distance">Jarak (dalam km):</label>
        <input type="number" id="distance" name="distance" step="0.01" required>
        <br>
        <label for="unit">Konversi ke:</label>
        <select id="unit" name="unit">
            <option value="m">Meter (m)</option>
            <option value="cm">Sentimeter (cm)</option>
            <option value="mm">Milimeter (mm)</option>
        </select>
        <br>
        <input type="submit" value="Konversi">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $distance = $_POST['distance'];
        $unit = $_POST['unit'];

        // Validasi input
        if (is_numeric($distance) && $distance >= 0) {
            switch ($unit) {
                case 'm':
                    $converted = $distance * 1000;
                    $unit_name = 'meter';
                    break;
                case 'cm':
                    $converted = $distance * 100000;
                    $unit_name = 'sentimeter';
                    break;
                case 'mm':
                    $converted = $distance * 1000000;
                    $unit_name = 'milimeter';
                    break;
                default:
                    $converted = 0;
                    $unit_name = 'unknown';
            }

            echo "<h2>Hasil:</h2>";
            echo "<p>Jarak $distance km adalah " . number_format($converted, 2) . " $unit_name.</p>";
        } else {
            echo "<p>Input tidak valid. Pastikan jarak adalah angka non-negatif.</p>";
        }
    }
    ?>
</body>
</html>