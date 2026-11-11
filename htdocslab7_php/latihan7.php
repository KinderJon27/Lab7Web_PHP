<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 7 - Pengolahan Data Sederhana</title>
</head>
<body>
    <h2>Form Kalkulator Belanja</h2>
    <form method="POST" action="">
        <label>Nama Barang:</label><br>
        <input type="text" name="barang" required><br><br>
        <label>Harga (Rp):</label><br>
        <input type="number" name="harga" min="0" required><br><br>
        <label>Jumlah:</label><br>
        <input type="number" name="jumlah" min="1" required><br><br>
        <button type="submit" name="hitung">Hitung</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['hitung'])) {
        $barang = htmlspecialchars($_POST['barang'], ENT_QUOTES, 'UTF-8');
        $harga = (float)$_POST['harga'];
        $jumlah = (int)$_POST['jumlah'];

        if ($harga < 0 || $jumlah <= 0) {
            echo "<p style='color:red;'>Error: Harga dan jumlah harus valid!</p>";
        } else {
            $subtotal = $harga * $jumlah;
            echo "<h3>Ringkasan Transaksi:</h3>";
            echo "Nama Barang: $barang<br>";
            echo "Harga Satuan: Rp " . number_format($harga, 0, ',', '.') . "<br>";
            echo "Jumlah: $jumlah<br>";
            echo "Subtotal: Rp " . number_format($subtotal, 0, ',', '.') . "<br>";
        }
    }
    ?>
    <br>
    <a href="index.php">&larr; Kembali ke Menu Utama</a>
</body>
</html>