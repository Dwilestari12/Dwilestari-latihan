<?php

$mahasiswa = [
        "001" => "Ahmad",
        "002" => "Budi",
        "003" => "Chika",
        "004" => "Dhini",
        "005" => "Erwin"];
        // untuk memasukkan value, kita harus membuat value key yang mempresentasikan valuenya.
        // tanda "=>" dapat diartikan sebagai merujuk
        // "key" => "value"

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>array Associative</title>
</head>
<body>
    <?php foreach ($mahasiswa as $nrp => $nama) : ?>
        <li><?php echo "$nrp : $nama" ?></li>
    <?php endforeach ?>
</body>
</html>