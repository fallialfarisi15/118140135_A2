<?php 
    for($i = 1 ; $i <= 50 ; $i++){
        $prima = 0;
        for($j = 1 ; $j <= $i ; $j++){
            if($i%$j==0){
                $prima = $prima+1;
            }
        }
        if($prima == 2){
            echo $i . "<br>";
        }
    }
?>