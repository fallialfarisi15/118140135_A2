<?php 
    require 'functions.php';
    $nama = $_GET['nama'];
    $mhs = searchNama($nama);
    $jurusan = searchJurusan($nama);
    // $mhs = query("SELECT * FROM mahasiswa WHERE nama = '$nama'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data</title>
    <style>
        table{
            text-align: center;
        }
    </style>
</head>
<body>
    <table border="1px" celpadding="10px" cellspacing="0px">
        <tr>
            <th>NRP</th>
            <th>Nama</th>
            <th>Foto</th>
            <th>Jurusan</th>
        </tr>
        <?php foreach($mhs as $m){ ?>
        <tr>
            <td><?php echo $m['nrp'];?></td>
            <td><?php echo $m['nama'];?></td>
            <td><img src="img/<?php echo $m['foto'];?>"></td>
            <?php $jurusan = searchJurusan($m['id_jur']);?>
            <?php foreach($jurusan as $jur){?>
                <td><?php echo $jur['nama'];?></td>
            <?php }?>
        </tr>
        <?php }?>
    </table>

</body>
</html>