<?php
$nama = "Safina Latifatul";
$kelas = "X RPL 1";
$kategori = "Beasiswa";
$status = "Belum lunas";
$tunggakan = 5;
$batas = 6;
$biaya = 700000;
$denda = 100000;

function pembayaranSpp(){
    global $nama, $kelas, $kategori, $status,  $tunggakan, $batas, $biaya, $denda;

    if($tunggakan >= $batas){
        $bayarSpp = $biaya * $tunggakan + $denda; 
    }else{
        $bayarSpp = $biaya * $tunggakan;
    }
   
    if($kategori == "Beasiswa"){
       $totalbayar = $bayarSpp * 50/100;
    }else{
        $totalbayar = $bayarSpp;
    }

    echo "<h1>===== Program SPP Sederhana===== </h1><br />";
    echo"Nama Lengkap : $nama <br />";
    echo"Kelas : $kelas <br />";
    echo"Kategori : $kategori <br />";
    echo"Biaya Spp : Rp. $biaya <br />";
    echo"Tunggakan Spp : $tunggakan bulan <br />";
    echo"Tunggakan Yang Harus di bayar :Rp. $totalbayar<br />";   
      
    if($status == "Sudah Lunas"){
        echo"Status : <span style = 'color : green'>$status</span>";
    }else if($status == "Belum lunas"){
        echo"Status : <span style = 'color : yellow'>$status</span>";
    }else if ($status == "Menunggak Terlalu Lama"){
        echo"Status : <span style = 'color : red'>$status</span>";
    }
}
echo pembayaranSpp();
?>