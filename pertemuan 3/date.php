<?php

// date()
// parameter
// l = view hari
// d = view tanngal
// M = view bulan
// m = view bulan dalam bentuk angka
// Y = view tahun

// echo date('l d M Y');


// $hari_ini = date("l d M Y");
// $abad = date("l d M Y", time()+60*60*24*100);

// echo 'hari ini adalah ' . $hari_ini . ' 100 hari lagi adalah '. $abad;

// =====================================================================

// mktime = untuk membuat waktu sendiri
// parameter nya ada 6
// mktime(jam,menit,detik,bulan,hari,tahun)

// hari ulang tahun daffa
// echo date('l d M Y' ,mktime(0,0,0,5,26,2002)); 

// =====================================================================
// strtotime = untuk mengubah dari tanngal menjadi detik
// echo strtotime('25 june 2021');
// echo date('l', strtotime('26 may 2002'));
// echo date('l', time()+1624572000);


?>