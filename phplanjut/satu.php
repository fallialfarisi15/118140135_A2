<?php 
    function faktorial($bil){
        $fak = 1;
        for($i = $bil ; $i > 0 ; $i--){
            $fak = $fak * $i;
        }
        return $fak;
    }
?>
<form action="" method="POST">
    <label for="bil">Bilangan:</label>
    <input type="number" name="bil" id="bil">
    <button type="submit" name="subBut">Hitung!</button>
</form>
<?php 
    if(isset($_POST['subBut'])){
        echo faktorial($_POST['bil']);
    }
?>