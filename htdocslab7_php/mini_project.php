<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Mini Project - Formulir Data Mahasiswa</title>
</head>
<body>
    <h2>Formulir Pendaftaran Mahasiswa</h2>
    <form method="POST" action="">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>NIM:</label><br>
        <input type="text" name="nim" required><br><br>

        <label>Program Studi:</label><br>
        <input type="text" name="prodi" required><br><br>

        <label>Semester (1-14):</label><br>
        <input type="number" name="semester" min="1" max="14" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <button type="submit">Daftar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nama = trim($_POST['nama']);
        $nim = trim($_POST['nim']);
        $prodi = trim($_POST['prodi']);
        $semester = (int)$_POST['semester'];
        $email = trim($_POST['email']);

        $errors = [];

        if (empty($nama)) {
            $errors[] = "Nama wajib diisi.";
        }
        if (empty($nim) || !is_numeric($nim)) {
            $errors[] = "NIM wajib diisi dan harus berupa angka.";
        }
        if (empty($prodi)) {
            $errors[] = "Program studi wajib diisi.";
        }
        if ($semester < 1 || $semester > 14) {
            $errors[] = "Semester harus antara 1 sampai 14.";
        }
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Format email tidak valid.";
        }

        if (!empty($errors)) {
            echo "<div style='color:red;'><ul>";
            foreach ($errors as $err) {
                echo "<li>$err</li>";
            }
            echo "</ul></div>";
        } else {
            $s_nama = htmlspecialchars($nama, ENT_QUOTES, 'UTF-8');
            $s_nim = htmlspecialchars($nim, ENT_QUOTES, 'UTF-8');
            $s_prodi = htmlspecialchars($prodi, ENT_QUOTES, 'UTF-8');
            $s_email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');

            echo "<h3>Ringkasan Data Mahasiswa:</h3>";
            echo "Nama: $s_nama<br>";
            echo "NIM: $s_nim<br>";
            echo "Program Studi: $s_prodi<br>";
            echo "Semester: $semester<br>";
            echo "Email: $s_email<br>";
        }
    }
    ?>
    <br>
    <a href="index.php">&larr; Kembali ke Menu Utama</a>
</body>
</html>