
<!DOCTYPE html>
<html>
<head>
    <title> Dashboard - Login CodeIgniter & Bootstrap</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">KOMPENSASI</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <div class="navbar-form navbar-right">
                <a href="<?php echo base_url() ?>index.php/user/dashboard/logout" type="submit" class="btn btn-success"><i class="fa fa-sign-out"></i> Logout</a>
            </div>
      </div>
    </nav>
<div class="container" style="margin-top: 80px">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
              <a href="#" class="list-group-item active" style="text-align: center;background-color: black;border-color: black">
                PRODI
              </a>
              <a href="" class="list-group-item"><i class="fa fa-home"></i> Home</a>
              <a href="" class="list-group-item"><i class="fa fa-user"></i> Profil</a>
              <a href="" class="list-group-item"><i class="fa fa-sign-out"></i> Logout</a>
              <!-- <a href="#" class="list-group-item"><i class="fa fa-book"></i> Blog</a>
              <a href="#" class="list-group-item"><i class="fa fa-folder"></i> Kategori</a>
              <a href="#" class="list-group-item"><i class="fa fa-comments-o"></i> Komentar</a>
              <a href="logout.php" class="list-group-item"><i class="fa fa-sign-out"></i> Logout</a> -->
            </div>
        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-heading">
                Selamat Datang <b><?php echo $this->session->userdata("user_nama") ?></b>
              </div>
              <div class="panel-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nim</th>
                      <th scope="col">Nama</th>
                      <th scope="col">KodeMk</th>
                      <th scope="col">Kelas</th>
                      <th scope="col">Dosen</th>
                      <th scope="col">Pertemuan</th>
                      <th scope="col">Tahun Akademik</th>
                      <th scope="col">Semester</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <th>165410029</th>
                      <td>Naruto</td>
                      <td>FDE556</td>
                      <td>TI-1</td>
                      <td>Bambang Pdp</td>
                      <td>Pertama</td>
                      <td>2019-12-11</td>
                      <td>Ganjil</td>
                      <td><span class="label label-success">Accept</span></td>
                    </tr>
                    <tr>
                      <th scope="row">1</th>
                      <th>165410029</th>
                      <td>Naruto</td>
                      <td>FDE556</td>
                      <td>TI-1</td>
                      <td>Bambang Pdp</td>
                      <td>Pertama</td>
                      <td>2019-12-11</td>
                      <td>Ganjil</td>
                      <td><span class="label label-danger">Reject</span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

