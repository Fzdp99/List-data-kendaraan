<?php
     include '../proses.php';
     $proses = new Proses();
     
     $arrData = array(
          'merek'=>$_POST['mereks'],
          'tipe'=>$_POST['types'],
          'tp'=>$_POST['tps'],
          'harga'=>$_POST['hargas']
     );
     $hasil = $proses->simpan('tb_sepeda',$arrData);

     if($hasil){
          header('Location: ../index.php');
     }
     else{
          echo "Gagal Simpan";
     }
?> 