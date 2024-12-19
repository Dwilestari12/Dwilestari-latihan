<?php

function luas_persegi_panjang ($panjang, $lebar)
{
    $hasil = $panjang * $lebar;
    return $hasil;
}

$hasil = luas_persegi_panjang(2, 5);
echo $hasil; //hasil 10
echo "<br>";

$panjang = 10;
$lebar = 5;
echo "hasil perkalian" . $panjang . "x" . $lebar . "adalah:" . luas_persegi_panjang($panjang, $lebar);

?>