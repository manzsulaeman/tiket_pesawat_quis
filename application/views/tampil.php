<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data</title>
</head>
<body>
    <center><h2>Tiket Online Jakarta - Malaysia</h2></center>
    <table style="margin:20px auto;" border="2">
    <tr>
        <th>NO</th>
        <th>Nama</th>
        <th>Kode Pesawat</th>
        <th>Kelas</th>
        <th>Jumlah Tiket</th>
        <th>Harga Tiket</th>
        <th>Total Bayar</th>
        <th>Action</th>
    </tr>
  
    <?php
    $no =1;
foreach($pembelian as $u){
    ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $u->nama ?></td>
        <td><?php echo $u->nama_pesawat ?></td>
        <td><?php echo $u->kelas_layanan ?></td>
        <td><?php echo $u->jumlah_tiket ?></td>
        <td><?php echo "Rp " . number_format($u->harga_tiket, 0, ',', '.'); ?></td>
        <td><?php echo "Rp " . number_format($u->total_bayar, 0, ',', '.'); ?></td>
        <td>
            <?php echo anchor ('tiket_pesawat/simpan/'.$u->no_pembeli,'Simpan'); ?>
            <?php echo anchor ('tiket_pesawat/batal/'.$u->no_pembeli,'Batal'); ?>
            <?php echo anchor ('tiket_pesawat/hapus/'.$u->no_pembeli,'Hapus'); ?>
        </td>
    </tr>
</table>
<br><center> <a href="index">Tambah</a></center></br>
    <?php
}
?>


</body>
</html>