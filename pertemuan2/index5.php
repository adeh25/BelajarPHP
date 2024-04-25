<?php
// Array
// cara lama bikin array di PHP
$arr = array (1, 3, 4, 7, 9, 11, 30);
print_r($arr);
echo "<br>";

// cara baru bikin array di PHP
$arr2 = ["Adeh", "miftah", "ratna", "alfi", "janah"];
print_r($arr2);
echo "<br>";
var_dump($arr2);
echo "<br>";
echo $arr2[0];
echo "<br>";

// menambahkan isi array
$arr2[5] = "Annisah";
print_r($arr2);
echo "<br>";

// mengganti isi array
$arr2[0] = "sari";
print_r($arr2);
?>