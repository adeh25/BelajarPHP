<?php

$mahasiswa = [
    [
        "nim" => "22416255201204",
        "nama" => "Akbar",
        "alamat" => "Cikampek",
        "prodi" => "Informatika"
    ],
    [
        "nim" => "22416255201138",
        "nama" => "Fajar",
        "alamat" => "Telagasari",
        "prodi" => "Informatika"
    ],
    [
        "nim" => "22416255201165",
        "nama" => "Bisma",
        "alamat" => "isekai",
        "prodi" => "Informatika"
    ],
    [
        "nim" => "22416255201152",
        "nama" => "Putra",
        "alamat" => "Purwasari",
        "prodi" => "Informatika"
    ],
    [
        "nim" => "22416255201249",
        "nama" => "Fahri",
        "alamat" => "Telagasari",
        "prodi" => "Informatika"
    ]

   
    ];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP - Array assosiative</title>
</head>
<body>
    <h2 align = "center">Daftar Mahasiswa</h2>
     <table border ="1" cellpadding="4" align = "center"> 
        <tr>
            <th> NIM</th>
            <th> Nama</th>
            <th> Alamat</th>
            <th> Prodi</th>
        </tr>

        <?php foreach($mahasiswa as $a) : ?>
        <tr>
            <td><?php echo $a["nim"] ?></td>
            <td><?php echo $a["nama"] ?></td>
            <td><?php echo $a["alamat"] ?></td>
            <td><?php echo $a["prodi"] ?></td>
        </tr> 
        <?php endforeach; ?>
    </table> 
</body>
</html>