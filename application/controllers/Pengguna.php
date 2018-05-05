<?php
class Pengguna extends CI_Controller{
  function __construct()
  {
    # code...
    parent:: __construct();
    if ($this->session->userdata('status')!='login') {
      redirect('login');
    }
  }
  public function index(){
    $data['content']='pengguna';
    $this->load->view("tamplate",$data);

  }
  public function tambah(){
    $data['content']='tambah_pengguna';
    $this->load->view("tamplate",$data);

  }
  function simpan(){
    $kode = $this->input->post("kode");
    $user = $this->input->post("user");
    $pass= $this->input->post("pass");
    $level= $this->input->post("lvl");

    $config=array(
      'upload_path'=>'./assets/dist/img/user',
      'allowed_types'=> 'jpg|gif|png|jpeg'
    );
    $this->load->library('upload',$config);
    if ($this->upload->do_upload('foto')) {
      $data = array(
      'user_kode'=>$kode,
      'user_user'=>$user,
      'user_pass'=>$pass,
      'user_level'=>$level,
      'user_foto'=>$this->upload->data('file_name')
      );

      $this->db->insert("user",$data);
      redirect('pengguna');
    }else{
      echo "gagal";
    }


  }
  public function hapus($no){
    $this->db->delete('user',['user_id'=>$no]);
    redirect('pengguna');
  }
  public function edit($no){
    $data['p']=$this->db->get_where('user',['user_id'=>$no])->row();
    $data['content']='editPengguna';
    $this->load->view("tamplate",$data);
  }
  function update(){
    $id = $this->input->post("id");
    $kode = $this->input->post("kode");
    $user = $this->input->post("user");
    $pass= $this->input->post("pass");
    $level= $this->input->post("lvl");

    $config=array(
      'upload_path'=>'./assets/dist/img/user',
      'allowed_types'=> 'jpg|gif|png|jpeg'
    );
    $this->load->library('upload',$config);
    if ($this->upload->do_upload('foto')) {
      $data = array(
      'user_kode'=>$kode,
      'user_user'=>$user,
      'user_pass'=>$pass,
      'user_level'=>$level,
      'user_foto'=>$this->upload->data('file_name')
      );
      $this->db->where('user_id',$id);
      $this->db->update("user",$data);
      redirect('pengguna');
    }else{
      echo "gagal";
    }


  }
}
 ?>
