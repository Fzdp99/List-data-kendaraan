<?php
     include '../proses.php';
     $proses = new Proses();
     
     $arrData = array(
          'merek'=>$_POST['merekc'],
          'tipe'=>$_POST['typec'],
          'tp'=>$_POST['tpc'],
          'harga'=>$_POST['hargac']
     );
     $hasil = $proses->simpan('tb_mc',$arrData);

     if($hasil){
          header('Location: ../index.php');
     }
     else{
          echo "Gagal Simpan";
     }
?> 