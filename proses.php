<?php
     include "koneksi.php";

     class Proses extends Koneksi{

          // overide
          function __construct(){
		     parent:: __construct();
	     }

          public function bacadata($table){
               $query = "SELECT * FROM $table";

               $hasil = $this->conn->query($query);

               if(!$hasil){
                    return "Terjadi Kesalahan dalam Query";
               }

               $rows = array();
               while($row = $hasil->fetch_assoc()) {
                    $rows[] = $row;
               }
               return $rows;
          }

          public function simpan($table,$data){
               //menggabungkan data jadi 1 string
               $columns = implode(", ",array_keys($data));
               
               $escaped_values = array_map(array($this->conn, 'real_escape_string'), array_values($data));
               foreach ($escaped_values as $idx=>$data) $escaped_values[$idx] = "'".$data."'";
               
               // menggabungkan data escape 
               $values  = implode(", ", $escaped_values);
               $query = "INSERT INTO $table ($columns) VALUES ($values)";

               $hasil = $this->conn->query($query);
               if($hasil){
                    return true;
               }
               else{
                    return false;
               }
          }

          public function delete($table,$id,$id_value){
               $query = "DELETE FROM $table WHERE $id='".$id_value."'";
               $hasil = $this->conn->query($query);
               if($hasil){
                    return true;
               }
               else{
                    return false;
               }
	     }

     }
     
?>