<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 5 - Form GET</title>
</head>
<body>
    <h2>Form Pencarian (GET)</h2>
    <form method="GET" action="">
        <label>Kata Kunci:</label>
        <input type="text" name="kata" required>
        <button type="submit">Cari</button>
    </form>

    <?php
    if (isset($_GET['kata'])) {
        $kataKunci = htmlspecialchars($_GET['kata'], ENT_QUOTES, 'UTF-8');
        echo "<br>Hasil Pencarian: " . $kataKunci;
    }
    ?>
    <br><br>
    <a href="index.php">&larr; Kembali ke Menu Utama</a>
</body>
</html>