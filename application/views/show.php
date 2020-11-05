<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark primary-color">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('contro/index')?>">กรอกข้อมูล <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('contro/datatrian')?> ">แสดงข้อมูล</a>
      </li>
    </ul>
  </div>
</nav>
<form action="'contro/insert'" method="post">
<table class="table text-center">
  <thead class="black white-text">
    <tr>
      <th scope="row" rowspan="2" class="align-middle">ขบวน</th>
      <th scope="col" colspan="2" >ต้นทาง</th>
      <th scope="col" colspan="2">ห้วยราช</th>
      <th scope="col" colspan="2">ปลายทาง</th>
    <th scope="row" rowspan="2" class="align-middle">หมายเหตุ</th>
    </tr>
    <tr>
      <th scope="col">สถานี</th>
      <th scope="col">ห้วยราช</th>
      <th scope="col">ปลายทาง</th>
       <th scope="col">สถานี</th>
      <th scope="col">ห้วยราช</th>
      <th scope="col">ปลายทาง</th>
    </tr>
  </thead>
  <tbody>
  <?php

		foreach ($proession->result_array()  as $id) {
		?>
    <tr>
      <th ><?php echo $id['num_pro'] ?></th>
      <td><?php echo $id['station_st'] ?></td>
      <td><?php echo $id['time_st'] ?></td>
      <td><?php echo $id['in_huay'] ?></td>
      <td><?php echo $id['out_huay'] ?></td>
      <td><?php echo $id['station_en'] ?></td>
      <td><?php echo $id['time_en'] ?></td>
      <td><?php echo $id['name_pro'] ?></td>
    </tr>
    
    <?php } ?>


        
  </tbody>
</table>
</form>
</body>
</html>