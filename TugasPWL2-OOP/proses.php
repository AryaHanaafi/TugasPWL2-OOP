<?php
include "M++ahasiswa.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["simpan"])) {
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];

    $mahasiswa = new Mahasiswa();
    $mahasiswa->setData($nim, $nama);
    $data = $mahasiswa->getData();
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Input</title>
</head>

<body>

    <h2>Data Mahasiswa</h2>
    <table border="1">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
        </tr>
        <tr>
            <td><?= isset($data) ? $data["nim"] : ""; ?></td>
            <td><?= isset($data) ? $data["nama"] : ""; ?></td>
        </tr>
    </table>

    <br>
    <a href="index.php">Kembali</a>

</body>

</html>