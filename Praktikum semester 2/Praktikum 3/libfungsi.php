<?php
 function persentase( $_uts, $_uas, $_tugas){
      return $result =  (30 * $_uts / 100) + (35 * $_uas / 100) + (35 * $_tugas / 100); 
      return $result;
}
//method kelulusan function kelulusan
function kelulusan($_nilai){
    if($_nilai > 55) { 
        return 'LULUS'; 
    } 
    else { 
        return 'TIDAK LULUS';
    }
}
//method grade nilai
function grade_nilai($_nilai){ 
    if($_nilai > 85){
         return "A"; 
        } else if ($_nilai > 70){ 
            return "B"; 
        } else if ($_nilai > 56){
            return "C"; 
        }else if ($_nilai > 36){ 
            return "D"; 
        } else if($_nilai > 0){
             return "E"; 
        }else { 
            return "I"; 
        }
}