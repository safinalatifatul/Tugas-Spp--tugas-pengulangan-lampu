<?php
function PengulanganLampu($noLampu, $kondisiTerminasi, $kt1, $kt2, $kt3, $kt4, $kt5, $kt6, $kt7, $kt8,$kt9, $kt10){
    for($noLampu; $noLampu <= $kondisiTerminasi; $noLampu++ ){
    if ($noLampu == $kt1 || $noLampu == $kt2 || $noLampu == $kt3 || $noLampu == $kt4 || $noLampu == $kt5){
        echo"Lampu lalu lintas no - $noLampu Tidak lancar<br />";   
    }else if($noLampu == $kt6 || $noLampu == $kt7  || $noLampu == $kt8 || $noLampu == $kt9){
        echo"Lampu lalu lintas no - $noLampu Tidak berfungsi<br />";
    }else if ($noLampu == $kt10){
        echo"Lampu lalu lintas no - $noLampu Sedang di  perbaiki <br />";
    }else {
        echo"Lampu lalu lintas no - $noLampu Lancar<br />";
    }
  }
}   

Echo PengulanganLampu (1, 20, 2, 4, 10, 12, 18, 5, 11, 13, 14, 16,)

?>