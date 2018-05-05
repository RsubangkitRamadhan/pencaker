
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Edit Data Pengguna</h3>
    </div>

 <form class="" action="<?=base_url('pengguna/update')?>" method="post" enctype="multipart/form-data">
   <input type="hidden" name="id" value="<?=$p->user_id?>">
    <div class="panel-body">
      <div class="form-group">
        <label for="">Kode :</label>
        <input type="text" class="form-control" id="" name="kode" readonly value="<?=$p->user_kode?>">
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label for="">Username</label>
        <input type="text" class="form-control" id="" placeholder="" name="user" value="<?=$p->user_user?>">
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label for="">Password :</label>
        <input type="text" class="form-control" id="" placeholder="" name="pass" value="<?=$p->user_pass?>">
        <p class="help-block"></p>
      </div>
        <div class="form-group">
          <label for="">Foto:</label>
          <input type="file" class="form-control" id="" placeholder="" name="foto" value="<?=$p->user_foto?>">
          <p class="help-block"></p>
        </div>
        <?php if ($p->user_level=='admin') {
          $a='checked';
          $b=null;
        }else{
          $a=null;
          $b='checked';
        } ?>
        <div class="form-group">
          <input type="radio" name="lvl" value="admin" <?=$a?>> Admin
          <input type="radio" name="lvl" value="user" <?=$b?>> User
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
