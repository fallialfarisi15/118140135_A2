<?php 
    $bil1 = 20;
    $bil2 = 5;
    $opr = ['+', '-', '*', '/', '%'];
    echo 'bilangan 1 = ' . $bil1 . '<br>';
    echo 'bilangan 2 = ' . $bil2 . '<br><br>';
    echo 'Berikut merupakan hasil dari setiap operasi' . '<br><br>';

    for($i = 0 ; $i < count($opr) ; $i++){
        if($opr[$i] == '+'){
            echo 'PENJUMLAHAN' . '<br>';
            echo 'Operator : ' . $opr[$i] . '<br>';
            echo 'Hasil : ' . ($bil1 + $bil2) . '<br><br>';
        }
        else if($opr[$i] == '-'){
            echo 'PENGURANGAN' . '<br>';
            echo 'Operator : ' . $opr[$i] . '<br>';
            echo 'Hasil :  ' . ($bil1 - $bil2) . '<br><br>';
        }
        else if($opr[$i] == '*'){
            echo 'PERKALIAN' . '<br>';
            echo 'Operator : ' . $opr[$i] . '<br>';
            echo 'Hasil :  ' . ($bil1 * $bil2) . '<br><br>';
        }
        else if($opr[$i] == '/'){
            echo 'PEMBAGIAN' . '<br>';
            echo 'Operator : ' . $opr[$i] . '<br>';
            echo 'Hasil :  ' . ($bil1 / $bil2) . '<br><br>';
        }
        else if($opr[$i] == '%'){
            echo 'MODULUS' . '<br>';
            echo 'Operator : ' . $opr[$i] . '<br>';
            echo 'Hasil :  ' . ($bil1 % $bil2) . '<br><br>';
        }

    }
    

?>