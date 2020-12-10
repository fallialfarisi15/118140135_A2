<?php 
    function bet($nama, $warna){
        if($warna == ""){
            $warna = 'red';
        }
        $pnama = 0;
        $splitNama = str_split($nama);
        
        foreach($splitNama as $nm){
            if($nm != " "){
                $pnama++;
            }
        }
        if($pnama >= 1 && $pnama <= 10){
            $harga = 300 * $pnama;
            echo '<p style="color:'.$warna.'">'.$nama.'<br>Rp '.$harga.'</p>';
            // echo '<font color="' . $warna . '">Nama  = ' . $nama . '<br/>Harga = RP. ' . $harga . '</font><br/><br/>';
        }
        else if($pnama <= 20){
            $harga = 500 * $pnama;
            echo '<p style="color:'.$warna.'">'.$nama.'<br>Rp '.$harga.'</p>';
            // echo '<font color="' . $warna . '">Nama  = ' . $nama . '<br/>Harga = RP. ' . $harga . '</font><br/><br/>';
        }
        else if($pnama > 20){
            $harga = 700 * $pnama;
            echo '<p style="color:'.$warna.'">'.$nama.'<br>Rp '.$harga.'</p>';
            // echo '<font color="' . $warna . '">Nama  = ' . $nama . '<br/>Harga = RP. ' . $harga . '</font><br/><br/>';
        }
        
        // echo "Nama: " . $nama . "<br>";
        // echo "Warna font bet: " . $warna . "<br>";
        // echo "Harga bet: " . $harga;
    }
?>

<form action="" method="POST">
    <label for="n">Nama:</label>
    <input type="text" name="nama" id="n" required>
    <br>
    <label for="w">Warna:</label>
    <input type="text" name="warna" id="w">
    <br>
    <button type="submit" name="subBut">Hitung!</button>
</form>

<?php 
    if(isset($_POST['subBut'])){
        $nama = $_POST['nama'];
        $warna = $_POST['warna'];
        bet($nama, $warna);
    }
?>