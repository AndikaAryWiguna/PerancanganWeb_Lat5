<?php

$sukupertama = $_POST['sukupertama'];
$sukukedua = $_POST['sukukedua'];
$Baris = $_POST['banyaksuku'];

echo "Keterangan :<br>";
echo "Suku Ke-1 = $sukupertama <br>";
echo "Suku Ke-2 = $sukukedua <br>";
echo "Banyak Baris = $Baris <br><br>";

echo "
    <table border=1>
        <tr align=right>
            <td>i</td>
            <td>x</td>
        </tr>";
$hasil = $sukukedua;
$beda = $sukukedua - $sukupertama;

for ($i = 1; $i <= $Baris; $i++) {
    if ($i == 1) {
        echo "
        <tr align=right>
            <td>$i</td>
            <td>$sukupertama</td>
        </tr>";
    } elseif ($i == 1) {
        echo "
        <tr align=right>
            <td>$i</td>
            <td>$sukukedua</td>
        </tr>";
    } else {
        echo "
        <tr align=right>
        <td>$i</td>
        <td>$hasil</td>
        </tr>";
        $hasil = $hasil + $beda;
    }
    
    }

echo "</table>";
