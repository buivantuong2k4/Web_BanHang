<?php
require_once("connection.php");

class Model{

    var $mysqli;
    var $table;
    var $contens;
     public function __construct(){
        $conn_model=new connection();
        $this->mysqli=$conn_model->mysqli;
     }

     function lietke()
     {
         $query = "select * from $this->table ORDER BY $this->contens DESC ";
 
         require("result.php");
 
         return $data;
         
     }
     function timkiem($id)
     {
         $query = "select * from $this->table where $this->contens =$id";
         return $this->mysqli->query($query)->fetch_assoc();
     }
     function delete($id){
        $query = "DELETE from $this->table where $this->contens=$id";
        $this->mysqli->query($query);
     }

     function insert($data){
        $khoa='';
        $giatri='';
        foreach ($data as $key => $value) {
        $khoa.=$key.",";
        $giatri.="'".$value."',";
        }
        $khoa=trim($khoa,"',");
        $giatri=trim($giatri,",");
        $query = "INSERT INTO $this->table($khoa) VALUES ($giatri);";
        echo $query;
        $this->mysqli->query($query);
     }

     function update($data){
     $v='';
        foreach ($data as $key => $value) {
           $v.=$key."='".$value."',";
            }
           
            $v=trim($v,",");
          $query = "UPDATE $this->table SET  $v   WHERE $this->contens = " . $data[$this->contens];
      echo $query;
          $this->mysqli->query($query);
     }
     function tt_nguoidung($id){
      $query= "SELECT * FROM nguoidung where id_nguoidung ='$id' limit 1";
     return $this->mysqli->query($query)->fetch_assoc();
  }
   
}