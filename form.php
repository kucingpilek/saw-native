<?php
$errors = [
    
];
$judul = '';
$pengarang = '';
$tahun = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = trim($_POST['judul'] ?? '');
    $pengarang = trim($_POST['pengarang'] ?? '');
    $tahun = trim($_POST['tahun'] ?? '');

    if ($judul === '') {
        $errors[] = 'Judul wajib diisi';
    }

    if ($pengarang === '') {
        $errors[] = 'Pengarang wajib diisi';
    }

    if (!ctype_digit($tahun) || (int)$tahun < 1900 || (int)$tahun > (int)date('Y')) {
        $errors[] = 'Tahun harus angka 1900–' . date('Y');
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Data Buku</title>
</head>
<body>

<h2>Form Input Data Buku</h2>

<form method="post">
    <input name="judul" placeholder="Judul"
        value="<?= htmlspecialchars($judul) ?>">
    <br><br>

    <input name="pengarang" placeholder="Pengarang"
        value="<?= htmlspecialchars($pengarang) ?>">
    <br><br>

    <input name="tahun" placeholder="Tahun"
        value="<?= htmlspecialchars($tahun) ?>">
    <br><br>

    <button type="submit">Simpan</button>
</form>

<?php
if ($errors) {
    foreach ($errors as $e) {
        echo "<p style='color:red'>" . htmlspecialchars($e) . "</p>";
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<p style='color:green'>Data berhasil disimpan!</p>";
    echo "<p>Judul: " . htmlspecialchars($judul) . "</p>";
    echo "<p>Pengarang: " . htmlspecialchars($pengarang) . "</p>";
    echo "<p>Tahun: " . htmlspecialchars($tahun) . "</p>";
}
?>

</body>
</html>
