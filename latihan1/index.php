<?php
function hitungHari($jumlah_Hari) {
    $namaHari = date('l', strtotime(date("Y-m-d") . "+" . $jumlah_Hari . " days"));

    switch ($namaHari) {
        case 'Monday':
            $transletHari = "Senin";
            break;
        case 'Tuesday':
            $transletHari = "Selasa";
            break;
        case 'Wednesday':
            $transletHari = "Rabu";
            break;
        case 'Thursday':
            $transletHari = "Kamis";
            break;
        case 'Friday':
            $transletHari = "Jum'at";
            break;
        case 'Saturday':
            $transletHari = "Sabtu";
            break;
        case 'Sunday':
            $transletHari = "Minggu";
            break;
        default:
            $transletHari = "Nama hari tidak valid";
            break;
    }
    return $transletHari;
}

$jumlah_Hari = 100;

echo "$jumlah_Hari hari setelah hari ini adalah hari " . hitungHari($jumlah_Hari);
?>



