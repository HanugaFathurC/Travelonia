<?php 

class AdminController extends Controller {

  public function index(){
    return $this->view('dashboard');
  }

}


?>