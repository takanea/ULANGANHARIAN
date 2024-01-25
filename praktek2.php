<?php
function absenSiswa($noAbsen , $kt , $kt2, $kt3, $kt10, $kt6 , $kt8, $kt9 , $kt13){

    
    for($noAbsen;  $noAbsen <= $kt; $noAbsen++){
        if($noAbsen == $kt2 || $noAbsen == $kt3 ||  $noAbsen == $kt10){
            echo "Peserta didik no absen $noAbsen tidak hadir <br/>";
        }
    else if ($noAbsen ==  $kt6 || $noAbsen == $kt8 ){
        echo "Peserta didik no absen $noAbsen terlambat <br/>";
    }else if($noAbsen == $kt9 || $noAbsen == $kt13 ){
        echo "Peserta didik no absen $noAbsen Sakit<br/>";

    
   

}
else{
    echo "Peserta didik no absen $noAbsen hadir <br/>";
}
    }
}


echo absenSiswa(1, 15,  2,3, 10 ,6,8,9,13);
?>