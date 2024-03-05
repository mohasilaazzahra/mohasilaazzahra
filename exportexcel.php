<?php
include "koneksi.php";

//persiapan untuk excel
header("Content-fype: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Export Excel Data Pengunjung.xls");
header("pragma: no-cache");
header("Expires:0");
?>

<table border="1">
    <thead>
        <tr>
            <th colspan="6">Rekapitulasi Data Pengunjung</th>
        </tr>
        <tr>
                                            <th>No.</th>
                                            <th>Tanggal</th>
                                            <th>Nama pengujung</th>
                                            <th>Instansi</th>
                                            <th>Alamat</th>
                                            <th>Kepentingan</th>
                                            <th>Tujuan</th>
                                            <th>NO.Hp</th>
            </tr>
    </thead>
    <tbody>
    <?php
                                    
                                    $tgl1 = $_POST['tanggala'];
                                    $tgl2 = $_POST['tanggalb'];

                                    $tgl = date('Y-m-d');//2023-09-07
                                    $tampil = mysqli_query($koneksi, "SELECT * FROM tetamu where 
                                    tanggal like '%$tgl%' order by id desc");
                                    $no = 1;
                                    while ($data = mysqli_fetch_array($tampil)) { 
                                    ?>
                                    <tr>
                                            <td><?= $no++?></td>
                                            <td><?= $data['tanggal']?></td>
                                            <td><?= $data['nama']?></td>
                                            <td><?= $data['instansi']?></td>
                                            <td><?= $data['alamat']?></td>
                                            <td><?= $data['kepentingan']?></td>
                                            <td><?= $data['tujuan']?></td>
                                            <td><?= $data['nepo']?></td>
                                    </tr>
                                    <?php } ?>    
    </tbody>
</table>