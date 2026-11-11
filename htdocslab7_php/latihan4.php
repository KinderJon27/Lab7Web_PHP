<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 4 - Membuat Fungsi</title>
</head>
<body>
    <h2>Fungsi Diskon Belanja</h2>
    <?php
    function hitungDiskon($harga, $persen) {
        $diskon = $harga * ($persen / 100);
        $total = $harga - $diskon;
        return $total;
    }

    $hargaAsli = 150000;
    $persenDiskon = 20;
    $hargaAkhir = hitungDiskon($hargaAsli, $persenDiskon);

    echo "Harga Asli: Rp " . number_format($hargaAsli, 0, ',', '.') . "<br>";
    echo "Diskon: $persenDiskon%<br>";
    echo "Harga Setelah Diskon: Rp " . number_format($hargaAkhir, 0, ',', '.') . "<br>";
    ?>
    <br>
    <a href="index.php">&larr; Kembali ke Menu Utama</a>
</body>
</html>