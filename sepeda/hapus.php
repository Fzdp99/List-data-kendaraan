<?php
     include('../proses.php');

     $proses = new Proses();

     if(isset($_GET['id'])) {
          $id = $_GET['id'];
          $hasil = $proses->delete('tb_sepeda','id',$id);
          if($hasil){
               header('Location: ../index.php');
          }
          else{
               echo "Gagal Hapus";
          }
     }

?>