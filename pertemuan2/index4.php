<?php

// user defined function
/*
function namafungsi($param1, $param2, $param3,....){
    // perintah di eksekusi
}
*/

function penjumlahan($a, $b){
    return $a + $b;
}
echo penjumlahan(4,3);
echo "<br>";

function luasSegitiga($alas, $tinggi) {
    return 0.5 * $alas * $tinggi;
}

$alas = 4;
$tinggi = 5;
echo "Luas segitiga dengan panjang alas $alas dan tinggi $tinggi
 adalah ".luasSegitiga($alas, $tinggi);

// contoh parameter default
function sapa($waktu, $nama){
    if ($waktu === "" && $nama === "") {
        return "Selamat datang, user!";
    }else {
        return "Selamat $waktu, $nama";
    }
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP - function</title>
</head>
<body>
    <h1><?php echo sapa("siang", "Adeh!")?>
</body>
</html>