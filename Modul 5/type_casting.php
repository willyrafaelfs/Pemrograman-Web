<?php
// Type casting dari float ke integer
$float_var = 12.8;
$int_var = (int) $float_var;

echo "Nilai float: $float_var<br>";
echo "Nilai setelah di-cast ke integer: $int_var<br><br>";

// Type casting dari integer ke string
$int_var2 = 100;
$string_var = (string) $int_var2;

echo "Nilai integer: $int_var2<br>";
echo "Nilai setelah di-cast ke string: $string_var<br><br>";

// Type casting dari string ke array
$string_var2 = "Hello, world!";
$array_var = (array) $string_var2;

echo "Nilai string: $string_var2<br>";
echo "Nilai setelah di-cast ke array:<br>";
print_r($array_var);
echo "<br><br>";

// Type casting dari array ke object
$array_var2 = ["nama" => "Willy", "usia" => 21];
$object_var = (object) $array_var2;

echo "Nilai array:<br>";
print_r($array_var2);
echo "<br>Nilai setelah di-cast ke object:<br>";
print_r($object_var);
echo "<br>";
?>