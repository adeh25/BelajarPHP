<?php
// PHP di dalam HTML

// cara membuat variable di PHP
// variabel PHP ($)
// scope = cangkupan
// variabel global & variable local
// variabel global = variabel yang bisa di akses di mana saja
// variabel lokal = variabel yang hanya bisa di akses di bagian tertentu

$angka = 20;
echo $angka;
echo"<br>";

$nama = "Adeh kurniasari";

// concatenation -> menggabungkan string
$nama_depan = "Adeh";
$nama_belakang = "Kurniasari";
echo $nama_depan . " " . $nama_belakang;
echo"<br>";

// tipe data di PHP = integer, float, string, boolean

// operator 
var_dump(1 == "1");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP Dasar</title>
</head>
<body>
    <h1>
        <?php echo "Selamat datang $nama" ?>

    </h1>
    
</body>
</html>
