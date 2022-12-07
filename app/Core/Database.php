<?php 

class Database {

  private static $_instance = null;
  private $mysqli;

  public function __construct(){
    $this->mysqli = new mysqli('localhost', 'root', '', 'db_travelonia') or die('Error Connection');
  }

  public static function getInstance(){
    if(!isset(self::$_instance)){
      self::$_instance = new Database();
    }

    return self::$_instance;
    
  }

  public function showData($table){

    $reply = [];
    $query = "SELECT * FROM $table" ;
    $result = $this->mysqli->query($query);

    while($row = $result->fetch_assoc()) 
      $reply[] = $row;
    return $reply ;
    
  }



  public function getDataProduct($id){

    $query = "SELECT * FROM produk WHERE id_produk = '$id'" ;
    $result = $this->mysqli->query($query);

    $result->fetch_assoc() ;

    return $result ;

  }

  public function addProduct($nama_produk, $tanggal, $harga, $img_produk, $provinsi, $detail_lokasi, $img_provinsi){

    $sql = "INSERT INTO produk( nama_produk , tanggal, harga, img_produk, provinsi , detail_lokasi, img_provinsi ) VALUES (  '$nama_produk', '$tanggal', '$harga', '$img_produk', '$provinsi' , '$detail_lokasi', '$img_provinsi' )" ; 
    $this->mysqli->query($sql);

  }

  // public function showDataID($id, $id_name, $table){

  //   $query = "SELECT * FROM $table WHERE $id_name = $id" ;
  //   $result = $this->mysqli->query($query);

  //   return $result->fetch_assoc();
    
  // }

  public function updateDataImageProduk($id_produk, $nama_coloumn, $img ){

    $sql = "UPDATE PRODUK SET  $nama_coloumn = '$img' WHERE id_produk = '$id_produk'";
    $this->mysqli->query($sql);

  }

  public function updateDataProduk($id_produk, $nama_produk, $tanggal, $harga, $provinsi, $detail_lokasi){

    $sql = "UPDATE PRODUK SET  nama_produk='$nama_produk' , tanggal='$tanggal', harga='$harga', provinsi='$provinsi' , detail_lokasi='$detail_lokasi' WHERE id_produk = '$id_produk'";
    $this->mysqli->query($sql);

  }


  public function deleteData($id, $column, $table_name){
    
    $sql = "DELETE FROM $table_name WHERE $column = '$id' " ;
    $this->mysqli->query($sql);

  }


  

  

}