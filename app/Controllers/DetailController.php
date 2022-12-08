<?php 

class DetailController extends Controller {
  
  public function index(){

    $provinsi = ucwords($_POST['provinsi']);
    $tanggal = $_POST['tanggal'];

    $changeFormatTanggal = date("Y-m-d", strtotime($tanggal));

    $dataFiltered = $this->model('DataDetail')->getAllFilteredData($provinsi, $changeFormatTanggal);

     return $this->view('detail-produk', ['data-produk' => $dataFiltered]);
  }

}


?>