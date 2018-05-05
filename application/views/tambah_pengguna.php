
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Tambah Data Pengguna</h3>
    </div>

<?php
$data=$this->db->get('user')->num_rows();
$hasil='us000'.($data+1);
 ?>
 <form class="" action="<?=base_url('pengguna/simpan')?>" method="post" enctype="multipart/form-data">
    <div class="panel-body">
      <div class="form-group">
        <label for="">Kode :</label>
        <input type="text" class="form-control" id="" value="<?=$hasil?>" name="kode" readonly>
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label for="">Username</label>
        <input type="text" class="form-control" id="" placeholder="" name="user">
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label for="">Password :</label>
        <input type="text" class="form-control" id="" placeholder="" name="pass">
        <p class="help-block"></p>
      </div>
        <div class="form-group">
          <label for="">Foto:</label>
          <input type="file" class="form-control" id="" placeholder="" name="foto">
          <p class="help-block"></p>
        </div>
        <div class="form-group">
          <input type="radio" name="lvl" value="admin"> Admin
          <input type="radio" name="lvl" value="user"> User
        </div>

    <div class="panel-footer">
      <a href="<?=base_url('pengguna')?>" type="button" name="buttonback" value="button" class="btn btn-warning">
    kembali
  </a>
      <button type="submit" name="button" value="button" class="btn btn-primary">
        Tambahkan
      </button>
    </div>
  </div>
</form>
