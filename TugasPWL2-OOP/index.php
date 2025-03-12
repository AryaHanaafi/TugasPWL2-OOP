<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Mahasiswa</title>
</head>

<body>

    <h2>Form Input Mahasiswa</h2>
    <form action="proses.php" method="POST">
        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" required>
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
        <button type="submit" name="simpan">Simpan</button>
    </form>

</body>

</html>