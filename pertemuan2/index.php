<?php
// function = program di dalam program

// 1. Built-in function = fungsi yang sudah tersedia di PHP
// 2. user-defined function = fungsi yang di buat oleh programmer

// untuk menentukan tanggal / hari
// date, time, mktime, strtotime

// date (tanggal)
date_default_timezone_set("Asia/jakarta");
echo date("l, d F Y H:i:s");
echo("<br>");
/*
l = untuk nama hari yang lengkap
d = untuk hari, formatnya 01 - 31
j = untuk hari, formatnya 1 -31
M = untuk bulan formatnya 3 karakter (jan, feb, mar,....)
F = untuk nama bulan lengkap
Y = untuk tahun

H = untuk jam
i = untuk menit
s = untuk detik
*/

// time = jumlah detik sejak 1 januari 1970 
echo time();
echo("<br>");

// mktime
echo mktime(0,0,0,9,25,2004); // jumlah detik dari 1970 - tanggal yang di tentukan
echo("<br>");

// strtotime = mengubah string menjadi tanggal
echo strtotime("24 April 2024");
echo("<br>");

// date_parse = memecah tanggal
print_r(date_parse("2024-04-24"));

?>