<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 2 - Variabel, Operator, dan Percabangan</title>
</head>
<body>
    <h2>Penilaian Mahasiswa</h2>
    <?php
    $nama = "Budi";
    $tugas = 80;
    $uts = 75;
    $uas = 85;

    $nilaiAkhir = ($tugas * 0.3) + ($uts * 0.3) + ($uas * 0.4);

    if ($nilaiAkhir >= 85) {
        $predikat = "A";
        $status = "Lulus";
    } elseif ($nilaiAkhir >= 70) {
        $predikat = "B";
        $status = "Lulus";
    } elseif ($nilaiAkhir >= 60) {
        $predikat = "C";
        $status = "Lulus";
    } else {
        $predikat = "D";
        $status = "Tidak Lulus";
    }

    echo "Nama: $nama <br>";
    echo "Nilai Akhir: $nilaiAkhir <br>";
    echo "Predikat: $predikat <br>";
    echo "Status: $status <br>";
    ?>
    <br>
    <a href="index.php">&larr; Kembali ke Menu Utama</a>
</body>
</html>