<?php
// built-in function untuk manifulasi string
// explode, implode, strlen, strcmp

// strlen = mengetahui panjang string/kata
echo strlen("Hello world"), "<br>"; // 11 karakter
echo strlen("Selamat datang di BLK karawang"), "<br>"; // 30 karakter

// str_word_count = menghitung jumlah kata
echo str_word_count("lorem ipsum dolar, sit amet consektetur adipisicing elit."), "<br>";

// strcmp = untuk membandingkan dua buah string/kata
// strcasecmp = membandingkan 2 string berdasarkan ukuran huruf
$kata1 = "katak";
$kata2 = "katak";

if (strcmp($kata1, $kata2) !== 0){
    echo "$kata1 tidak sama dengan kata $kata2";
}else {
    echo "$kata1 sama dengan $kata2";
}
echo ("<br>");

// explode = untuk memecah string
print_r (explode("-", "AYAM-GORENG-ENAK-SEKALI"));
echo("<br>");
print_r(explode(",", "Adeh, ratna, miftah"));
echo("<br>");

// implode = untuk menggabungkan array menjadi string
$str = array("selamat", "datang", "di", "pemogramman", "PHP");
echo implode(" ", $str);
echo ("<br>");
// strtolower = untuk merubah huruf besar menjadi huruf kecil
echo strtolower("HARAP TENANG! SEDANG BELAJAR");
echo("<br>");

// strrtoupper = untuk merubah huruf kecil menjadi huruf besar
echo strtoupper("ada udang di balik batu");
echo("<br>");

// substr = untuk mengambil beberapa karakter di dalam string
$kata3 = "pelatihan";
echo substr($kata3, 2, 5), "<br>";
echo substr($kata3, -7, 5); // ngambil dari belakang
?>