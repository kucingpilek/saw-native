<?php
$nama  = "Pulpen";   // string
$harga = 2500;       // int
$diskon = 0.1;       // float
$member = true;      // bool
var_dump($nama, $harga, $diskon, $member);

$qty = 3;
$total = $harga * $qty * (1 - $diskon);
echo "<p>Total bayar: Rp " . number_format($total, 0, ',', '.') . "</p>";