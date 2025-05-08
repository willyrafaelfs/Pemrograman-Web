<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Nilai Mahasiswa</title>
</head>
<body>
    <h2>Input Nilai Mahasiswa</h2>
    <form method="post">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Nilai:</label><br>
        <input type="number" name="nilai" required><br><br>

        <input type="submit" value="Kirim">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $nilai = $_POST["nilai"];

        echo "<hr>";
        echo "<h3>Hasil Klasifikasi:</h3>";
        echo "Nama: $nama<br>";
        echo "Nilai: $nilai<br>";
        echo "Keterangan: ";

        if ($nilai > 80) {
            echo "A";
        } elseif ($nilai >= 70 && $nilai <= 79) {
            echo "B";
        } elseif ($nilai >= 60 && $nilai <= 69) {
            echo "C";
        } elseif ($nilai >= 50 && $nilai <= 59) {
            echo "D";
        } else {
            echo "Tidak Lulus";
        }
    }
    ?>
</body>
</html>