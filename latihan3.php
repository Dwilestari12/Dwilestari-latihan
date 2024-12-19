<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modul 2 - latihan 1</title>
    <style>
        .grid-container {
            display: grid;
            grid-template-columns: repeat(3, 50px); /* 3 columns with equal width */
            grid-template-rows: repeat(3, 50px); /* 3 rows with equal height */
            gap: 10px; /* space between the boxes */
            justify-content: center; /* center horizontally */
            align-items: center; /* center vertically */
            margin-top: 50px; /* top margin for overall layout */
        }
        .grid-item {
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid black;
            width: 50px;
            height: 50px;
            font-size: 20px;
            font-weight: bold;
        }
        </style>
</head>
<body>
<?php
// Define variables
$letter1 = '1';
$letter2 = '2';
$letter3 = '3';
$letter4 = '4';
$letter5 = '5';
?>

<div class="grid-container">
    <div class="grid-item item1"><?php echo $letter1; ?></div>
    <div class="grid-item item2"><?php echo $letter1; ?></div>
    <div class="grid-item item3"><?php echo $letter2; ?></div>
    <div class="grid-item item4"><?php echo $letter1; ?></div>
    <div class="grid-item item5"><?php echo $letter2; ?></div>
    <div class="grid-item item6"><?php echo $letter3; ?></div>
    <div class="grid-item item1"><?php echo $letter1; ?></div>
    <div class="grid-item item2"><?php echo $letter2; ?></div>
    <div class="grid-item item3"><?php echo $letter3; ?></div>
    <div class="grid-item item1"><?php echo $letter4; ?></div>
    <div class="grid-item item2"><?php echo $letter1; ?></div>
    <div class="grid-item item3"><?php echo $letter2; ?></div>
    <div class="grid-item item4"><?php echo $letter3; ?></div>
    <div class="grid-item item5"><?php echo $letter4; ?></div>
    <div class="grid-item item6"><?php echo $letter5; ?></div>
</div>
</body>
</html>