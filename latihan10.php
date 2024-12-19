<?php

$hari = ["senin", "selasa", "rabu"];

echo "array awal : ";
print_r($hari);
echo "<hr>";

echo "arraysetelah di poop:";
$hasil = array_pop($hari);
print_r($hari);
echo "<br>elemen yang di pop : $hasil <hr>";

echo "array setelah di publish :";
$hasil = array_push($hari, "kamis", "jum'at");
print_r($hari);
echo "<hr>";

echo "array setelah di shift :";
$hasil = array_shift($hari);
print_r($hari);
echo "<br>elemen yang di shift : $hasil<hr>";

echo "array setelah di unshift :";
$hasil =array_unshift($hari, "lemen", "ditambahkan");
print_r($hari);

?>