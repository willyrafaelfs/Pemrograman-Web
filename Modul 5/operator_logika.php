<?php
$nilai = 85;
$lulus = true;

// Operator Logika AND (&&)
echo ($nilai > 80 && $lulus) ? "Siswa lulus dengan nilai baik" : "Belum memenuhi syarat";
echo "<br>";
// Operator Logika NOT (!)
echo !$lulus ? "Belum lulus" : "Sudah lulus";
?>