<?php echo form_open("Pencaker/pencaker_proses"); ?>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Tambah Data Pencaker</h3>
    </div>
    <div class="panel-body">
      <div class="form-group">
        <label for="" style="color:red">I. Data Pencari Kerja</label>
      </div>
      <div class="form-group">
        <label for="">NO KTP/NIK :</label>
        <input type="text" class="form-control" id="" placeholder="" name="nik">
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label for="">NAMA LENGKAP :</label>
        <input type="text" class="form-control" id="" placeholder="" name="nama">
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label for="">TEMPAT LAHIR :</label>
        <input type="text" class="form-control" id="" placeholder="" name="tmp_lahir">
        <p class="help-block"></p>
      </div>
        <div class="form-group">
          <label for="">TANGGAL LAHIR :</label>
          <input type="date" class="form-control" id="" placeholder="" name="tgl_lahir">
          <p class="help-block"></p>
        </div>
      <div class="form-group">
        <label for="">JENIS KELAMIN :</label><br>
        <input type="radio" id="" placeholder="" name="jenis_kelamin" value="L"> Laki-laki <br>
        <input type="radio" id="" placeholder="" name="jenis_kelamin" value="P"> Perempuan
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label for="">AGAMA :</label><br>
        <select class="form-control" name="agama">
          <option value=""></option>
          <option value="">Islam</option>
          <option value="">Kristen</option>
          <option value="">Khatolik</option>
          <option value="">Hindu</option>
          <option value="">Budha</option>
        </select>
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label for="">STATUS PERKAWINAN :</label><br>
        <select class="form form-control" name="status">
            <option value=""></option>
            <option value="nikah">Nikah</option>
            <option value="belum nikah">Belum Nikah</option>
            <option value="janda">Janda</option>
            <option value="duda">Duda</option>
        </select>
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label for="">KEWARGANEGARAAN :</label><br>
        <input type="radio" name="kewarganegaraan" value="wni"> WNI <br>
        <input type="radio" name="kewarganegaraan" value="wna"> WNA
        <p class="help-block"></p>
      </div>
      <div class="form-group">
      <label for="">TINGGI BADAN (cm) :</label>
      <input type="number" class="form-control" id="" placeholder="" name="tb">
      <p class="help-block"></p>
    </div>
    <div class="form-group">
      <label for="">BERAT BADAN (kg) :</label>
      <input type="number" class="form-control" id="" placeholder="" name="bb">
      <p class="help-block"></p>
    </div>
    <div class="form-group">
      <label for="">NO HP/Telp :</label>
      <input type="number" class="form-control" id="" placeholder="" name="no_hp">
      <p class="help-block"></p>
    </div>
      <div class="form-group">
        <label for="">ALAMAT LENGKAP :</label>
        <textarea class="form-control" id="" placeholder="" name="alamat" rows="8" cols="80"></textarea>
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label for="" style="color:red">II. Data Pendidikan Terakhir</label>
      </div>
      <div class="form-group">
        <label for="">TINGKAT PENDIDIKAN :</label><br>
        <select class="form form-control" name="tp">
            <option value=""></option>
            <option value="sd">SD/MI/sederajat</option>
            <option value="smp">SMP/MTS/sederajat</option>
            <option value="sma">SMA/MA/sederajat</option>
            <option value="d1">D1</option>
            <option value="d2">D2</option>
            <option value="d3">D3</option>
            <option value="s1">S1</option>
            <option value="s2">S2</option>
        </select>
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label for="">JENIS JURUSAN</label>
        <input type="text" class="form-control" id="" placeholder="" name="jenis_jurusan">
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label for="">NAMA INSTITUSI PENDIDIKAN</label>
        <input type="text" class="form-control" id="" placeholder="" name="nama_ins_pend">
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label for="">TAHUN LULUS</label>
        <select class="form-control" name="tahun_lulus">
          <?php for ($i=1978; $i <2020 ; $i++) {
            ?>
<option value="<?=$i?>"><?=$i?></option>
            <?php
          } ?>
        </select>
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label for="">Nilai Ijasah / IPK</label>
        <input type="text" class="form-control" id="" placeholder="" name="ipk">
        <p class="help-block"></p>
      </div>


      </div>
    </div>
    <div class="panel-footer">
      <a href="<?=base_url('pencaker')?>" type="button" name="buttonback" value="button" class="btn btn-warning">
      kembali
      </a>
      <button type="submit" name="button" value="button" class="btn btn-primary">
        Tambahkan
      </button>
    </div>
  </div>

<?php echo form_close(); ?>
