<?php

$buku = [
    ["judul" => "Laskar Pelangi", "pengarang" => "Andrea Hirata", "tahun" => 2005],
    ["judul" => "Bumi Manusia", "pengarang" => "Pramoedya A. Toer", "tahun" => 1980],
    ["judul" => "Ronggeng Dukuh Paruk", "pengarang" => "Ahmad Tohari", "tahun" => 1982],
];

// Menghitung jumlah buku
echo "<p>Jumlah buku: " . count($buku) . "</p>";

// Mengurutkan buku berdasarkan tahun
usort($buku, fn($a, $b) => $a['tahun'] <=> $b['tahun']);

// Menampilkan tabel
echo "<table border='1' cellpadding='6'>";
echo "<tr>
        <th>No</th>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Tahun</th>
      </tr>";

foreach ($buku as $i => $b) {
    echo "<tr>
            <td>" . ($i + 1) . "</td>
            <td>{$b['judul']}</td>
            <td>{$b['pengarang']}</td>
            <td>{$b['tahun']}</td>
          </tr>";
}

echo "</table>";

?>
