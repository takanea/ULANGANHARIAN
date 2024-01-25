[11.36, 25/1/2024] Rio Rpl: <?php
function programSPP($nama, $kelas, $kategori,$biayaSpp $tunggakan, $tunggakanDenda,$denda,$discount,$total,$status){
    echo "=== Program SPP Sderhana === <br/>";
    echo "Nama Lengkap : $nama <br/>";
    echo "Kelas : $kelas <br/>";
    echo "Kategori : <br/>";

    if($kategori == "Beasiswa" && $tunggakan < 6){
        $tunggakan = 5;
        $selisihTunggakan = $tunggakan - $tunggakanDenda;
        $biayaSpp = $biayaSpp 0.5;
        
        if($tunggakan >= $tunggakanDenda){
            $biayaDenda = $denda * $selisihTunggakan;
            $totalSpp = $biayaSpp * $tunggakan + $biayaDenda;
        }else{
            $biayaDenda = 0;
            $totalSpp = ($biayaSpp * $tunggakan ) - $discount;
                }
    }else{
        $tunggakanDenda = 5;
        $biayaSpp = $biayaSpp;
        $selisihTunggakan = $tunggakan - $tunggakanDenda;
         
        if($tunggakan >= $tunggakanDenda){
            $biayaDenda = $denda * $selisihTunggakan;
        }else{
            $biayaDenda = 0;
            $totalSpp = $biayaSpp * $tunggakan;
        }
        }
}

?>
[15.09, 25/1/2024] Rio Rpl: <?php
   function reservasihotel($nama, $no_telp, $alamat, $tipe, $harga, $waktu, $diskon, $total, $status){
       echo "
       === Program Reservasi Hotel Sederhana === <br/>
       Nama Pemesan : $nama <br/>
       Nomor Whatsapp : $no_telp <br/>
       Alamat : $alamat <br/>
       Tipe Kamar : $tipe <br/>";
   
       if($tipe == "Deluxe"){
           $hargakamar = 200000;
   
           if($waktu > 4){
               $totalharga = $hargakamar * $waktu * 0.5;
               $diskon = "50%";
           }
           else{
               $totalharga = $hargakamar * $waktu;
               $diskon = "0";
           }
       }elseif($tipe == "Superior"){
           $hargakamar = 400000;
   
           if($waktu > 4){
               $totalharga = $hargakamar * $waktu * 0.35;
               $diskon = "35%";
           }
           else{
               $totalharga = $hargakamar * $waktu;
               $diskon = "0";
           }
       }else{
           $hargakamar = 800000;
   
           if($waktu > 4){
               $totalharga = $hargakamar * $waktu * 0.25;
               $diskon = "25%";
           }
           else{
               $totalharga = $hargakamar * $waktu;
               $diskon = "0";
           }
       }
   
       if ($status == "Waiting") {
           $warna_status = "yellow";
       } elseif ($status == "Check In") {
           $warna_status = "green";
       } else {
           $warna_status = "Red"; 
       }
       echo "
       Harga per Malam : Rp ".number_format($hargakamar)." <br/>
       Lama Menginap : $waktu <br/>
       Diskon : Rp $diskon <br/>
       Total Harga : Rp ".number_format($totalharga)." <br/>
       Status : <span style='color: $warna_status;'>$status</span>";
   }
   
       global $totalharga, $diskon, $hargakamar, $harga;
       
       echo reservasihotel("Rio-ganteng", "036352434", "jl. sudiro No.5", "Deluxe", $hargakamar, 5, $diskon, $totalharga, "checkout")
   ?>