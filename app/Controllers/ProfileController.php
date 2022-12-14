<?php 

class ProfileController extends Controller {

  public function index(){
    session_start();
    
    if($_SESSION['login'] == 'sukses') {
      return $this->view('profile');
    } else {
      header('location:http://localhost/Travelonia/public/login') ;
    }
  }

}

?>