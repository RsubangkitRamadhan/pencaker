<style media="screen">
  td{
    text-align: center;
  }
</style>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3>DATA MASTER PENCAKER</h3>
  </div>
  <div class="panel-body">
    <?php if ($this->session->userdata('level')=='user') {
      $a='disabled';
    }else{
      $a=null;
    } ?>
    <a href="<?=base_url('pencaker/tambah')?>" class="btn btn-info" <?=$a?>><i class="fa fa-plus"></i>  Tambahkan</a>

    <br><br>
    <div class="table-responsive">
      <table class="table table-striped table-bordered">
        <thead>
          <th>NO NIK</th>
          <th>Nama Lengkap</th>
          <th>Jenis Kelamin</th>
          <th>Tinggi Badan</th>
          <th>Berat Badan</th>
          <th>No HP</th>
          <th>Tingkat Pendidikan</th>
          <th>jenis Jurusan</th>
          <th>Tahun Lulus</th>
            <th>aksi</th>
        </thead>
        <tbody>
          <?php $query=$this->db->get('data_pencaker');
          if ($query->num_rows()>0) {
            foreach ($query->result() as $ip) {
              ?>
              <tr>
                <td><?=$ip->no_ktp?></td>
                <td><?=$ip->nama?></td>
                <td><?=$ip->jk?></td>
                <td><?=$ip->tinggi_badan?></td>
                <td><?=$ip->berat_badan?></td>
                <td><?=$ip->no_hp?></td>
                <td><?=$ip->tingkat_pend?></td>
                <td><?=$ip->jenis_jurusan?></td>
                <td><?=$ip->tahun_lulus?></td>


              <?php if ($this->session->userdata('level')=='admin') {
                ?>
                <td><a data-toggle="tooltip" data-placement="top" title="Edit" href="<?=base_url('Pencaker/edit/'.$ip->no_ktp)?>" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> </a>
                <a data-toggle="tooltip" data-placement="top" title="Hapus" href="<?=base_url('Pencaker/hapus/'.$ip->no_ktp)?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a></td>
                <?php
              }else{ ?>
                <td><span class="label label-warning">hanya admin</span></td>
              <?php } ?>
              </tr>
              <?php
            }

          }else{

           ?>
<td colspan="11" class="text-center">Data Masih Kosong</td>
         <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
