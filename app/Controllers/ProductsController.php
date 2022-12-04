<?php 

class ProductsController extends Controller {

  public function index(){
    return $this->view('products');
  }

  public function getDataProducts(){
   $dataProducts = $this->model('DataProducts')->index();
   return $this->view('products', ['data-produk' => $dataProducts]) ;
   
  }

}


?>