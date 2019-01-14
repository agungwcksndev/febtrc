<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tracert Alumni - Fakultas Ekonomi Bisnis Universitas Brawijaya</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->

  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <p href="<?php echo base_url(); ?>index2.html"><b>Tracert Alumni</b></p>
    <p>Fakultas Ekonomi Bisnis</p>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <?php
      echo validation_errors('<div class="alert alert-danger">', '</div>');
      if ($this->session->flashdata('notifikasi')) {
          echo "<br>";
          echo "<div class='alert alert-info'><center>";
          echo $this->session->flashdata('notifikasi');
          echo "</center></div>";
      }
   ?>
    <form action="<?php echo base_url(); ?>index2.html" method="post">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat"><i class="fa fa-unlock"></i>&nbsp;&nbsp;Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- Atau -</p>
      <button type="button" class="btn btn-block btn-success btn-flat" data-toggle="modal" data-target="#modal-registrasi"><i class="fa fa-edit"></i>&nbsp;&nbsp;Registrasi Alumni</button>
    </div>
    <!-- /.social-auth-links -->

    <a href="#">Reset Password</a><br>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!--Modal-->
<div class="modal fade" id="modal-registrasi" role="dialog">
  <div class="modal-dialog">
    <form class="" action="<?php echo site_url('Register/regist') ?>" method="post">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <button type="button" class="close" data-dismiss="modal" name="button"></button>
          <h4 class="modal-title"></i>Registrasi Alumni</h4>
        </div>
        <div class="modal-body">
          <div class="col-md-12">
            <div class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="">Nama Lengkap</label>
                  <div class="col-sm-9">
                    <input type="text" name="nama" class="form-control" value="" placeholder="Masukan Nama Lengkap..."required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="">NIM</label>
                  <div class="col-sm-9">
                    <input type="text" name="nim" class="form-control" value="" placeholder="Masukan NIM..."required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="">Jenis Kelamin</label>
                  <div class="col-sm-9">
                    <label class="radio"><input type="radio" value="Perempuan" name="jenis_kelamin">&nbsp;Perempuan</label>
                    <label class="radio"><input type="radio" value="Laki-laki" name="jenis_kelamin">&nbsp;Laki-laki</label>
                    <!-- <input type="text" name="jenis_kelamin" class="form-control" value="" placeholder="Masukan Jenis Kelamin..."required> -->
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="">Jenjang</label>
                  <div class="col-sm-9">
                    <select name="jenjang" class="form-control">
                      <option selected disabled>Pilih jenjang...</option>
                      <option value="D3">D3</option>
                      <option value="S1">S1</option>
                      <option value="S2">S2</option>
                      <option value="S3">S3</option>
                    </select>
                    <!-- <input type="text" name="jenjang" class="form-control" value="" placeholder="Masukan Jenjang..."required> -->
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Jurusan</label>
                  <div class="col-sm-9">
                    <select name="jurusan" id="jurusan" class="form-control">
                      <option selected disabled>Pilih Jurusan</option>
                      <?php foreach ($list_jurusan as $jurusan): ?>
                        <option value="<?php echo $jurusan->id_jurusan; ?>"><?php echo $jurusan->nama_jurusan; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="">Prodi</label>
                  <div class="col-sm-9">
                    <select name="prodi" id="prodi" class="form-control">
                      <option selected disabled>Pilih Program Studi</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="">Angkatan</label>
                  <div class="col-sm-9">
                    <input type="text" name="angkatan" class="form-control" value="" placeholder="Masukan Angkatan..."required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="">Email</label>
                  <div class="col-sm-9">
                    <input type="text" name="email" class="form-control" value="" placeholder="Masukan Email..."required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="">No. HP</label>
                  <div class="col-sm-9">
                    <input type="text" name="no_hp" class="form-control" value="" placeholder="Masukan Nomor HP..."required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="">Username</label>
                  <div class="col-sm-9">
                    <input type="text" name="username" class="form-control" value="" placeholder="Masukan Username..."required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="">Password</label>
                  <div class="col-sm-9">
                    <input type="password" name="password" class="form-control" value="" placeholder="Masukan Password..."required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="">Konfirmasi Password</label>
                  <div class="col-sm-9">
                    <input type="password" name="passconf" class="form-control" value="" placeholder="Masukan Konfirmasi Password..."required>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" name="button">Daftar</button>
        </div>
      </div>
    </form>
  </div>
</div>

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url(); ?>plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });

  $(document).ready(function(){

    $('#jurusan').change(function(){
      var e = document.getElementById ("jurusan");
      var id_jurusan = e.options [e.selectedIndex] .value;
      console.log(id_jurusan)
      if(id_jurusan != '')
      {
        $.ajax({
          url:"<?php echo site_url();?>/Login/fetch_prodi",
          method: "POST",
          data:{id_jurusan:id_jurusan},
          success:function(data)
          {
            $('#prodi').html(data);
          }
        })
      }
    })

  })
</script>
</body>
</html>
