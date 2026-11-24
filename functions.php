<?php
function rupiah($angka) {
  return 'Rp ' . number_format($angka, 0, ',', '.');
}
function hitung_total($harga, $qty, $diskon = 0) {
  return $harga * $qty * (1 - $diskon);
}


require_once __DIR__ . '/functions.php';
echo rupiah(hitung_total(25000, 3, 0.1));