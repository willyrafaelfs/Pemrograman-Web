<?php
// Penugasan variabel
$int_tujuh = 7; // Bilangan 7 ditugaskan ke variabel $int_tujuh

// Menampilkan nilai variabel
echo "Nilai dari \$int_tujuh: " . $int_tujuh . "<br>";

// Menampilkan tipe data variabel menggunakan gettype()
echo "Tipe data dari \$int_tujuh: " . gettype($int_tujuh) . "<br>";

// Mengubah nilai dan tipe data variabel
$int_tujuh = "Tujuh"; // Variabel sekarang berisi string

// Menampilkan nilai dan tipe data setelah perubahan
echo "Nilai baru dari \$int_tujuh: " . $int_tujuh . "<br>";
echo "Tipe data baru dari \$int_tujuh: " . gettype($int_tujuh) . "<br>";
?>