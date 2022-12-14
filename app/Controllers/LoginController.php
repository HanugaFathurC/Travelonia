<?php 

class LoginController extends Controller {

  public function index(){
    return $this->view('login');
  }

  public function validation(){

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $admin = $this->model('DataLogin')->getAdmin($username, $password) ;

    if($admin){
      session_start();
      $_SESSION['username'] = $username;
      $_SESSION['ava'] = $admin['avatar'] ;
      $_SESSION['login'] = 'sukses' ;
      header('location:http://localhost/Travelonia/public/admin') ;
    } else {
      header('location:http://localhost/Travelonia/public/login') ;
    } 
  }

  public function logout(){
    session_start();
    session_destroy();
    header('location:http://localhost/Travelonia/public/login') ;
  }

}

?>