<?php
  class Pencaker extends CI_Controller{
    function __construct()
    {
      # code...
      parent:: __construct();
      if ($this->session->userdata('status')!='login') {
        redirect('login');
      }
    }
    public function index(){
      $data['content']='pencaker_views';
      $this->load->view("tamplate",$data);

    }
    public function tambah(){
      $data['content']='tambah_pencaker';
      $this->load->view("tamplate",$data);

    }
    function pencaker_proses(){
      $nik = $this->input->post("nik");
      $nama = $this->input->post("nama");
      $tmp_lahir= $this->input->post("tmp_lahir");
      $tgl_lahir = $this->input->post("tgl_lahir");
      $jk = $this->input->post("jenis_kelamin");
      $agama = $this->input->post("agama");
      $status = $this->input->post("status");
      $kewarganegaraan = $this->input->post("kewarganegaraan");
      $tb = $this->input->post("tb");
      $bb = $this->input->post("bb");
      $no_hp = $this->input->post("no_hp");
      $alamat = $this->input->post("alamat");
      $tp = $this->input->post("tp");
      $jenis_jurusan = $this->input->post("jenis_jurusan");
      $nama_ins_pend = $this->input->post("nama_ins_pend");
      $tahun_lulus = $this->input->post("tahun_lulus");
      $lama_pend = $this->input->post("lama_pend");
      $ipk = $this->input->post("ipk");

      $data = array(
        "no_ktp" => $nik,
        "nama" => $nama,
        "tmp_lahir" => $tmp_lahir,
        "tgl_lahir" => $tgl_lahir,
        "jk" => $jk,
        "agama" => $agama,
        "stts_perkawinan" => $status,
        "kewarganegaraan" => $kewarganegaraan,
        "tinggi_badan" => $tb,
        "berat_badan" => $bb,
        "no_hp" => $no_hp,
        "alamat_lengkap" => $alamat,
        "tingkat_pend" => $tp,
        "jenis_jurusan" => $jenis_jurusan,
        "nama_ins_pend" => $nama_ins_pend,
        "tahun_lulus" => $tahun_lulus,
        "nilai_ijazah" => $ipk
      );

      $insert = $this->db->insert("data_pencaker",$data);
      if ($insert){
        echo "
            <script>
              alert('data berhasil disimpan');
            </script>
          ";
          redirect('Pencaker');
      }else{
        echo "
            <script>
              alert('Data gagal disimpan!');
            </script>
          ";
          redirect('Pencaker/tambah');
        }

    }
    public function hapus($no){
      $this->db->delete('data_pencaker',['no_ktp'=>$no]);
      redirect('pencaker');
    }
    public function edit($no){
      $data['pencaker']=$this->db->get_where('data_pencaker',['no_ktp'=>$no])->row();
      $data['content']='edit_pencaker';
      $this->load->view("tamplate",$data);
    }
    public function update(){
      $nik = $this->input->post("nik");
      $nama = $this->input->post("nama");
      $tmp_lahir= $this->input->post("tmp_lahir");
      $tgl_lahir = $this->input->post("tgl_lahir");
      $jk = $this->input->post("jenis_kelamin");
      $agama = $this->input->post("agama");
      $status = $this->input->post("status");
      $kewarganegaraan = $this->input->post("kewarganegaraan");
      $tb = $this->input->post("tb");
      $bb = $this->input->post("bb");
      $no_hp = $this->input->post("no_hp");
      $alamat = $this->input->post("alamat");
      $tp = $this->input->post("tp");
      $jenis_jurusan = $this->input->post("jenis_jurusan");
      $nama_ins_pend = $this->input->post("nama_ins_pend");
      $tahun_lulus = $this->input->post("tahun_lulus");
      $lama_pend = $this->input->post("lama_pend");
      $ipk = $this->input->post("ipk");

      $data = array(
        "no_ktp" => $nik,
        "nama" => $nama,
        "tmp_lahir" => $tmp_lahir,
        "tgl_lahir" => $tgl_lahir,
        "jk" => $jk,
        "agama" => $agama,
        "stts_perkawinan" => $status,
        "kewarganegaraan" => $kewarganegaraan,
        "tinggi_badan" => $tb,
        "berat_badan" => $bb,
        "no_hp" => $no_hp,
        "alamat_lengkap" => $alamat,
        "tingkat_pend" => $tp,
        "jenis_jurusan" => $jenis_jurusan,
        "nama_ins_pend" => $nama_ins_pend,
        "tahun_lulus" => $tahun_lulus,
        "nilai_ijazah" => $ipk
      );
      $this->db->where('no_ktp',$nik);
      $insert = $this->db->update("data_pencaker",$data);
      if ($insert){
        echo "
            <script>
              alert('data berhasil diubah');
            </script>
          ";
          redirect('Pencaker');
      }else{
        echo "
            <script>
              alert('Data gagal disimpan!');
            </script>
          ";
          redirect('Pencaker/tambah');
        }

    }
  }


  ?>
