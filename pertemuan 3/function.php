<?php

function salam($waktu, $nama){
    return "Selamat $waktu $nama!, today is " . date('l d M Y');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan function</title>
</head>
<body>
    <h1>      <?= salam('siang','Daffa'); ?>      </h1>
</body>
</html>