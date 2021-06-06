<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Amel's Detail Profile</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<style type="text/css">

	body {
		margin-top:20px;
		color: #1a202c;
		text-align: left;
		background-color: #e2e8ff;    
	}

	.profile-sm {
		margin-right: -8px;
		margin-left: -8px;
	}

	.profile-sm>.col, .profile-sm>[class*=col-] {
		padding-right: 8px;
		padding-left: 8px;
	}

	.card {
		position: relative;
		display: flex;
		flex-direction: column;
		min-width: 0;
		background-color: #fff;
		background-clip: border-box;
		border: 0 solid rgba(0,0,0,.125);
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
	}

	.card-body {
		flex: 1 1 auto;
		min-height: 1px;
		padding: 1rem;
	}
  
	</style>
</head>
<body>

<div class="container">
    <div class="main-body">
          <nav aria-label="codeigniter" class="main-codeigniter"><button class="btn btn-primary" style="margin:10px 0px;"><a href="index" style="color:white;">Back to Home</a></button></nav>
          <div class="row profile-sm">
            <div class="col-md-4">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="/FotoProfil.jpg" alt="Amelia" class="rounded-circle" width="212" height="192">
                    <div class="mt-3">
                      <h4>Hi, Amel Here!</h4>
                      <p class="text-secondary mb-1">Student at Informatics ITS</p>
                      <p class="text-muted font-size-sm">Surabaya, Indonesia</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-9"><h4 class="mb-0">Tugas PBKK C</h6></div>
                  </div>
                  <hr>
                  <div class="row"><div class="col-sm-3"><h6 class="mb-0">Nama Lengkap:</h6></div><div class="col-sm-9 text-secondary">Amelia Puji Maitri Liang</div></div><hr>
                  <div class="row"><div class="col-sm-3"><h6 class="mb-0">Tanggal Lahir:</h6></div><div class="col-sm-9 text-secondary">19 Juli 2000</div></div><hr>
                  <div class="row"><div class="col-sm-3"><h6 class="mb-0">Email:</h6></div><div class="col-sm-9 text-secondary">ameliapuji2000@gmail.com</div></div><hr>
                  <div class="row"><div class="col-sm-3"><h6 class="mb-0">Nomor Telepon:</h6></div><div class="col-sm-9 text-secondary">08120192837</div></div><hr>
                  <div class="row"><div class="col-sm-3"><h6 class="mb-0">Alamat:</h6></div><div class="col-sm-9 text-secondary">Komplek Perumahan Bumi Marina Emas Selatan Blok E1-1B</div></div>
                </div>
              </div>

              <div class="row profile-sm">
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Experience</i></h6>
                      <div><medium>Staff UKM Music</medium><br><small>2018-2019</small></div><hr>
                      <div><medium>Staff PSDM TPKB ITS</medium><br><small>2019-2020</small></div><hr>
                      <div><medium>Staff SosMas HMTC ITS</medium><br><small>2020-2021</small></div><hr>
                      <div><medium>Kepala Departemen HubLu TPKB ITS</medium><br><small>2020-2021</small></div><hr>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">6th Semester Courses</i></h6>
                      <div><medium>Wawasan dan Aplikasi Teknologi - WasTek</medium><br><small>Dosen: Ir. Eko Nurmianto M.Eng.Sc.</small></div><hr>
                      <div><medium>Rekayasa Kebutuhan - RK</medium><br><small>Dosen: Nurul Fajrin Ariyani, S.Kom., M.Sc.</small></div><hr>
                      <div><medium>Pemrograman Berbasis Kerangka Kerja - PBKK</medium><br><small>Dosen: Fajar Baskoro, S.Kom., M.T.</small></div><hr>
                      <div><medium>Tata kelola Teknologi Informasi - TKTI</medium><br><small>Dosen: Adhatus Solichah Ahmadiyah, S.Kom, M.Sc.</small></div><hr>
                      <div><medium>Pemrograman Jaringan</medium><br><small>Dosen: Royyana Muslim Ijtihadie, S.Kom.,M.Kom., Ph.D.</small></div><hr>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</body>
</html>