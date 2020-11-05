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
        <a class="nav-link" href="#">กรอกข้อมูล <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('contro/datatrian')?> ">แสดงข้อมูล</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container mt-3 col-6">
<div class="card">
	<!-- Medium input -->
<!-- Default form login -->
<form class="text-center border border-light p-5" action="<?php echo site_url('contro/insert')?>"method="POST" >

    <p class="h1 mb-4">กรอกข้อมูลตารางการเดินรถไฟ</p>
	<hr>
	<h4>ขบวน</h4>

    <!-- Email -->
    <input type="number" id="num_pro" name="num_pro"  class="form-control mb-4" placeholder="ขบวน">

    <!-- Password -->
    <input type="text" id="name_pro" name="name_pro" class="form-control mb-4" placeholder="หมายเหตุ">

	<h4>ต้นทาง</h4>

    <!-- Email -->
    <input type="text" id="station_st" name="station_st" class="form-control mb-4" placeholder="สถานี">

    <!-- Password -->
    <input type="time" id="time_st" name="time_st" class="form-control mb-4" placeholder="เวลาออก">

	<h4>ห้วยราช</h4>

    <!-- Email -->
    <input type="time" id="in_huay" name="in_huay" class="form-control mb-4" placeholder="ถึง">

    <!-- Password -->
    <input type="time" id="out_huay" name="out_huay" class="form-control mb-4" placeholder="ออก">

	<h4>ปลายทาง</h4>

    <!-- Email -->
    <input type="text" id="station_en" name="station_en" class="form-control mb-4" placeholder="สถานี">

    <!-- Password -->
    <input type="time" id="time_en" name="time_en" class="form-control mb-4" placeholder="ถึงเวลา">


    <!-- Sign in button -->
    <button class="btn btn-info btn-block my-4" type="submit">ยืนยัน</button>

  

</form>
<!-- Default form login -->
</div>
</div>

</body>
</html>