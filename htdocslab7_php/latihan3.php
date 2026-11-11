<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 3 - Perulangan dan Array</title>
</head>
<body>
    <h2>Perulangan dan Array</h2>
    <?php
    $mahasiswa = ["Budi", "Ani", "Citra", "Doni"];
    echo "Daftar Mahasiswa (Array):<br>";
    foreach ($mahasiswa as $mhs) {
        echo "- $mhs <br>";
    }

    echo "<br>Perulangan angka 1 sampai 5:<br>";
    for ($i = 1; $i <= 5; $i++) {
        echo "Angka ke-$i <br>";
    }
    ?>
    <br>
    <a href="index.php">&larr; Kembali ke Menu Utama</a>
</body>
</html>