<?php
class Dashboard extends CI_Controller{
  function __construct()
  {
    # code...
    parent:: __construct();
    if ($this->session->userdata('status')!='login') {
      redirect('login');
    }
  }
  public function index(){

    $data['content']='home_view';
    $this->load->view("tamplate",$data);

  }
}
 ?>
