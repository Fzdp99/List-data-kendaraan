<?php
     include '../proses.php';
     $proses = new Proses();
     
     $arrData = array(
          'merek'=>$_POST['merekm'],
          'tipe'=>$_POST['typem'],
          'tp'=>$_POST['tpm'],
          'harga'=>$_POST['hargam']
     );
     $hasil = $proses->simpan('tb_motor',$arrData);

     if($hasil){
          header('Location: ../index.php');
     }
     else{
          echo "Gagal Simpan";
     }
?> 