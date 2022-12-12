<?php 

class TransactionsController extends Controller {

  public function index(){
    $dataTransactions = $this->model('DataTransactions')->getAllData();
    return $this->view('transactions', ['datas-transaction' => $dataTransactions]) ;
  }

  public function statusSukses($id){
   $sql = $this->model('DataTransactions')->changeSukses($id);
   header('location:http://localhost/Travelonia/public/transactions') ;
  }

  public function statusGagal($id){
    $this->model('DataTransactions')->changeGagal($id);
    header('location:http://localhost/Travelonia/public/transactions') ;
  }

  public function deleteTransaction($id){

    $dataTransactions = $this->model('DataTransactions')->getAllData();

    foreach ($dataTransactions as $transactions){ 

        if( $transactions['id_transaksi'] == $id){


         $buktiTf = $transactions['bukti_transfer'] ;
          unlink('../public/assets/transaction/'.$buktiTf);

          $this->model('DataTransactions')->deleteTransaction($id);
          header('location:http://localhost/Travelonia/public/transactions') ;
          
        }
    }

 
  }

}


?>