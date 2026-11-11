<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 6 - Form POST</title>
</head>
<body>
    <h2>Form Data Mahasiswa (POST)</h2>
    <form method="POST" action="">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>
        <label>Program Studi:</label><br>
        <input type="text" name="prodi" required><br><br>
        <button type="submit">Kirim</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nama = htmlspecialchars($_POST['nama'], ENT_QUOTES, 'UTF-8');
        $prodi = htmlspecialchars($_POST['prodi'], ENT_QUOTES, 'UTF-8');
        echo "<br>Data Diterima (POST):<br>";
        echo "Nama: $nama<br>";
        echo "Program Studi: $prodi<br>";
    }
    ?>
    <br>
    <a href="index.php">&larr; Kembali ke Menu Utama</a>
</body>
</html>