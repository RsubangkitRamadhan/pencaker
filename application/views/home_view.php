<!-- Small boxes (Stat box) -->
<?php
$a=$this->db->get('data_pencaker')->num_rows();
 ?>
<div class="row">
  <!-- ./col -->
  <div class="col-md-12">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3><?=$a?></h3>

        <p>Data Pencari Kerja</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>

  <!-- ./col -->
</div>
<!-- /.row -->
