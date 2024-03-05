 <!--  panggil file header -->
<?php include "header.php"; ?>


<?php

//uji jika tombol simpan diklik
if(isset($_POST['bsimpan'])){
    $tgl = date('Y-m-d');

// htmlspecialchars agar inputan lebih aman dari injection
    $nama =htmlspecialchars($_POST['nama'], ENT_QUOTES);
    $instansi =htmlspecialchars($_POST['instansi'], ENT_QUOTES);
    $alamat =htmlspecialchars($_POST['alamat'], ENT_QUOTES);
    $kepentingan =htmlspecialchars($_POST['kepentingan'], ENT_QUOTES);
    $tujuan =htmlspecialchars($_POST['tujuan'], ENT_QUOTES);
    $nepo =htmlspecialchars($_POST['nepo'], ENT_QUOTES);
 //persiapan query simpan data

    $simpan = mysqli_query($koneksi, "INSERT INTO tetamu VALUES('', '$tgl', '$nama', '$instansi','$alamat', '$kepentingan', '$tujuan', '$nepo')");
   
   //uji jika simpan data sukses

    if ($simpan) {
       echo "<script>alert('Simpan Data Sukses, Terimakasi...!');
              document.location='?'</script>";
    } else {
        echo "<script>alert('simpan Data GAGAL!!!');
              document.location='?'</script>";
    }
}


?>


     <!-- Head -->
    <div class="head text-center">
        <img src="assets/img/unnamed-removebg-preview.png" width="100">
        <h2 class="text-white">Sistem Informasi Buku Tamu <br>Jasa Jaslit</h2>
    </div>
     <!-- end Head -->

     <!-- Awal row -->
     <div class="row mt-2"> 
        <!-- Col-ig-7 -->
        <div class="col-lg-7 mb-3">
           <div class="card shadow bg-gradient-light">
            <!-- crad-body -->
            <div class="crad-body">
            <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Identitas pengujungan</h1>
                            </div>
                            <form class="user" method="POST" action="">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="nama" placeholder="Nama pengunjung" require>
                                    </div>
                                    <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="instansi" placeholder="Instansi pengunjung" require>
                                    </div>
                                    <form class="user">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="alamat" placeholder="Alamat pengunjung" require>
                                    </div>
                                    <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="kepentingan" placeholder="Kepentingan pengunjung" require>
                                    </div>
                                 <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="tujuan" placeholder="Tujuan pengunjung" require>
                                    </div>
                                    <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="nepo" placeholder="No hp pengunjung" require>
                                    </div>
                                    <button type="submit" name="bsimpan" class="btn btn-primary btn-user btn-block">Simpan Data</button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="#">BSPI Tanaman Sayuran | 2023 - <?=date('Y') ?></a>
                            </div>
                        </div>
            </div>
             <!-- end crad-body -->
           </div> 
        </div>
        <!-- end col-ig-7 -->
 
        <!-- Col-ig-5 -->
        <div class="col-lg-5 mb-3">
              <!-- crad -->
           <div class="card shadow ">
            <!-- crad body -->
            <div class="card-body">
                <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Statistik pengujungan</h1>  
           </div>
           <?php
           //deklarasi tanggal

           //menampilkan tanggal sekarang
           $tgl_sekarang = date('Y-m-d');

           //menampilkan tgl kemarin
           $kemarin = date('Y-m-d', strtotime('-1 day', strtotime(date('Y-m-d'))));

           //mendapatkan 6 hari sebelum tgl sekarang 
           $seminggu = date('Y-m-d h:i:s', strtotime('-1 week +1 day', strtotime($tgl_sekarang)));

           $sekarang = date('Y-m-d h:i:s');

           //persiapan query tampilkan jumlah data pengujung

           $tgl_sekarang = mysqli_fetch_array(mysqli_query(
           $koneksi,  
           "SELECT count(*) FROM tetamu where tanggal like'%$tgl_sekarang%'"
        ));

        $kemarin = mysqli_fetch_array(mysqli_query(
            $koneksi,  
            "SELECT count(*) FROM tetamu where tanggal like'%$kemarin%'"
         ));

         $seminggu = mysqli_fetch_array(mysqli_query(
            $koneksi,  
            "SELECT count(*) FROM tetamu where tanggal BETWEEN '$seminggu' and '$sekarang'"
         ));
 
         $bulan_ini = date ('m');

         $sebulan = mysqli_fetch_array(mysqli_query(
            $koneksi,  
            "SELECT count(*) FROM tetamu where month(tanggal) = '$bulan_ini'"
         ));

         $keseruluhan = mysqli_fetch_array(mysqli_query(
            $koneksi,  
            "SELECT count(*) FROM tetamu "
         ));
 

           ?>
           <table class="table table-bordered">
                  <tr>
                        <td>Hari ini</td>
                         <td>: <?= $tgl_sekarang[0]?></td>
                    </tr>
                    <tr>
                        <td>Kemarin</td>
                         <td>: <?= $kemarin[0]?></td>
                    </tr>
                    <tr>
                        <td>Minggu ini</td>
                         <td>: <?= $seminggu[0]?></td>
                    </tr>
                    <tr>
                        <td>Bulan ini</td>
                         <td>: <?= $sebulan[0]?></td>
                    </tr>
                    <tr>
                        <td>Keseruluhan</td>
                         <td>: <?= $keseruluhan[0]?></td>
                    </tr>
            </table>
            </div>
           <!-- crad body -->
           </div>
               <!-- end crad -->
        </div>
        <!-- end Col-ig-5 -->

     </div>
     <!--  end Awal row -->

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data pengujung hari ini[<?=date('d-m-Y')?>]</h6>
                        </div>
                        <div class="card-body">
                             
                        <a href ="rekapitulasi.php" class = "btn btn-success mb-3"><i class="fa fa-table"></i> Rekapitulasi Pengunjung </a>
                        <a href ="logout.php" class = "btn btn-danger mb-3"><i class="fa fa-sign-out-alt"></i> Logout </a>
                         

                            <div class="table-responsive">

                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
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
                                    <tfoot>
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
                                    </tfoot>
                                    <tbody>
                                    <?php
                                    $tgl = date('Y-m-d');//2023-09-07 
                                    $tampil = mysqli_query($koneksi, "SELECT * FROM tetamu where tanggal like '%$tgl%' order by id desc");
                                    $no = 1;
                                    while($data = mysqli_fetch_array($tampil)) { 
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
                            </div>
                        </div>
                    </div>
            </div>
       </div>

 <!--  panggil file footer -->
<?php include "footer.php"; ?>