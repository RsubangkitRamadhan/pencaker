<style media="screen">
  td{
    text-align: center;
  }
</style>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3>DATA MASTER PENGGUNA</h3>
  </div>
  <div class="panel-body">
    <a href="<?=base_url('pengguna/tambah')?>" class="btn btn-info"><i class="fa fa-plus"></i>  Tambahkan</a><br><br>
    <div class="table-responsive">
      <table class="table table-striped table-bordered">
        <thead>
          <th>No</th>
          <th>Kode User</th>
          <th>Username</th>
          <th>Level</th>
          <th>Foto</th>
          <th>aksi</th>
        </thead>
        <tbody>
          <?php $query=$this->db->get('user');
          if ($query->num_rows()>0) {$no=0;
            foreach ($query->result() as $ip) {$no++;
              if ($ip->user_level=='admin') {
                $a='class="label label-info"';
              }
              else{
                $a='class="label label-warning"';
              }
              ?>
              <tr>
                <td><?=$no?></td>
                <td><?=$ip->user_kode?></td>
                <td><?=$ip->user_user?></td>
                <td><span <?=$a?>><?=$ip->user_level?></span></td>
                <td>  <img src="<?=base_url('assets/dist/img/user/'.$ip->user_foto)?>" width="50px" height="50px" style="border-radius:50%;"></td>
                <td><a data-toggle="tooltip" data-placement="top" title="Edit" href="<?=base_url('pengguna/edit/'.$ip->user_id)?>" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> </a>
                <a data-toggle="tooltip" data-placement="top" title="Hapus" href="<?=base_url('pengguna/hapus/'.$ip->user_id)?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a></td>
              </tr>
              <?php

            }

          }else{

           ?>
<td colspan="6" class="text-center">Data Masih Kosong</td>
         <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
