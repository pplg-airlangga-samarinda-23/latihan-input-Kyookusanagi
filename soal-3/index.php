<!DOCTYPE html>
<html>
    <head>
        <title>Soal 3</title>
    </head>
    <body>
        <h1>Soal 3</h1>
        <form action="" method="post">
            Masukkan angka pertama<input type="text" name="angka1">  <br>
            Masukkan angka kedua <input type="text" name="angka2"> <br>
            Operator: <br>
            <input type="radio" name="operator" value="+"> +
            <input type="radio" name="operator" value="-"> -
            <input type="radio" name="operator" value="x"> x
            <input type="radio" name="operator" value="/"> /
            <br>
            <button type="submit" name="eksekusi">Eksekusi</button>
        </form>
        <?php
            if (isset($_POST['eksekusi'])){
                $angka1 = $_POST['angka1'];
                $angka2 = $_POST['angka2'];
                $operator = $_POST['operator'];

                switch ($operator) {
                    case "+":
                        $result = $angka1 + $angka2;
                        break;
                    case "-":
                        $result = $angka1 - $angka2;
                        break;
                    case "x":
                        $result = $angka1 * $angka2;
                        break;
                    case "/":
                        if ($angka2 != 0) {
                            $result = $angka1 / $angka2;
                        } else {
                            $result = "Error: Division by zero!";
                        }
                        break;
                }

                echo "Hasil: " . $result;
            }
        ?>
    </body>
</html>