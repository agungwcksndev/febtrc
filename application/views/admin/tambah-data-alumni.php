<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       Master Alumni
       <small>Tambah Data Alumni Fakultas Ekonomi dan Bisnis</small>
     </h1>
     <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-folder-open"></i> Home</a></li>
       <li><a href="#">Tables</a></li>
       <li class="active">Data tables</li>
     </ol>
   </section>

   <!-- Main content -->
   <section class="content">
     <div class="row">
     <div class="col-md-6">
       <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Diri</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="nama" class="col-sm-4 control-label">Nama Lengkap<font style="color: red;">*)</font></label>
                  <div class="col-sm-8">
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan Nama Lengkap">
                  </div>
                </div>
                <div class="form-group">
                  <label for="nim" class="col-sm-4 control-label">NIM</label>
                  <div class="col-sm-8">
                    <input type="text" name="nim" class="form-control" id="nim" placeholder="MasukN NIM">
                  </div>
                </div>
                <div class="form-group">
                  <label for="email" class="col-sm-4 control-label">Email<font style="color: red;">*)</font></label>
                  <div class="col-sm-8">
                    <input type="text" name="email" class="form-control" id="email" placeholder="Masukan Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="jenis_kelamin" class="col-sm-4 control-label">Jenis Kelamin</label>
                  <div class="col-sm-8">
                    <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                      <option value=""selected disabled>Pilih Jenis Kelamin</option>
                      <option value="Perempuan">Perempuan</option>
                      <option value="Laki-laki">Laki-laki</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Golongan Darah</label>
                  <div class="col-sm-8">
                    <select class="form-control" name="golongan_darah" id="golongan_darah">
                      <option value=""selected disabled>Pilih Golongan Darah</option>
                      <option value="O">O</option>
                      <option value="A">A</option>
                      <option value="B">B</option>
                      <option value="AB">AB</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="tempat_lahir" class="col-sm-4 control-label">Tempat Lahir</label>
                  <div class="col-sm-8">
                    <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Masukan Tempat Lahir">
                  </div>
                </div>
                <div class="form-group">
                  <label for="tanggal_lahir" class="col-sm-4 control-label">Tanggal Lahir</label>
                  <div class="col-sm-8">
                    <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" placeholder="Masukan Tanggal Lahir">
                  </div>
                </div>
                <div class="form-group">
                  <label for="kewarganegaraan" class="col-sm-4 control-label">Kewarganegaraan</label>
                  <div class="col-sm-8">
                    <select class="form-control" id="kewarganegaraan" name="kewarganegaraan">
                      <option value="" selected disabled>Pilih Kewarganegaraan</option>
                      <option value="Warga Indonesia">Warga Indonesia</option>
                      <option value="Warga Keturunan">Warga Keturunan</option>
                      <option value="Warga Asing">Warga Asing</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="alamat_asal" class="col-sm-4 control-label">Alamat Asal</label>
                  <div class="col-sm-8">
                    <input type="text" name="alamat_asal" class="form-control" id="alamat_asal" placeholder="Masukan Alamat Asal">
                  </div>
                </div>
                <div class="form-group">
                  <label for="kode_pos_asal" class="col-sm-4 control-label">Kode Pos Asal</label>
                  <div class="col-sm-8">
                    <input type="text" name="kode_pos_asal" class="form-control" id="kode_pos_asal" placeholder="Masukan Kode Pos Alamat Asal">
                  </div>
                </div>
                <div class="form-group">
                  <label for="alamat_sekarang" class="col-sm-4 control-label">Alamat Sekarang</label>
                  <div class="col-sm-8">
                    <input type="text" name="alamat_sekarang" class="form-control" id="alamat_sekarang" placeholder="Masukan Alamat Tinggal Sekarang">
                  </div>
                </div>
                <div class="form-group">
                  <label for="kode_pos_sekarang" class="col-sm-4 control-label">Kode Pos Sekarang</label>
                  <div class="col-sm-8">
                    <input type="text" name="kode_pos_sekarang" class="form-control" id="kode_pos_sekarang" placeholder="Masukan Kode Pos Alamat Tinggal Sekarang">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Negara</label>
                  <div class="col-sm-8">
                    <select name="negara" id="negara" class="form-control">
                      <option value="" selected disabled>Pilih Negara</option>
                      <?php foreach ($negaras as $negara): ?>
                        <option value="<?php echo $negara->id_negara ?>"><?php echo $negara->nama_negara ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="provinsi" class="col-sm-4 control-label">Provinsi</label>
                  <div class="col-sm-8">
                    <select name="provinsi" id="provinsi" class="form-control">
                      <option selected disabled>Pilih Provinsi</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="kota" class="col-sm-4 control-label">Kota</label>
                  <div class="col-sm-8">
                    <select class="form-control" id="kota" name="kota">
                      <option selected disabled>Pilih Kota</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="nomor_telepon" class="col-sm-4 control-label">Nomor Telepon</label>
                  <div class="col-sm-8">
                    <input type="text" name="nomor_telepon" class="form-control" id="nomor_telepon" placeholder="Masukan Nomor Telepon">
                  </div>
                </div>
                <div class="form-group">
                  <label for="nomor_hp" class="col-sm-4 control-label">Nomor HP<font style="color: red;">*)</font></label>
                  <div class="col-sm-8">
                    <input type="text" name="nomor_hp" class="form-control" id="nomor_hp" placeholder="Masukan Nomor HP">
                  </div>
                </div>
                <div class="form-group">
                  <label for="website" class="col-sm-4 control-label">Website</label>
                  <div class="col-sm-8">
                    <input type="text" name="website" class="form-control" id="website" placeholder="Masukan Website">
                  </div>
                </div>
                <div class="form-group">
                  <label for="facebook" class="col-sm-4 control-label">Facebook</label>
                  <div class="col-sm-8">
                    <input type="text" name="facebook" class="form-control" id="facebook" placeholder="Masukan Facebook">
                  </div>
                </div>
                <div class="form-group">
                  <label for="twitter" class="col-sm-4 control-label">Twitter</label>
                  <div class="col-sm-8">
                    <input type="text" name="twitter" class="form-control" id="twitter" placeholder="Masukan Twitter">
                  </div>
                </div>
                <div class="form-group">
                  <label for="instagram" class="col-sm-4 control-label">Instagram</label>
                  <div class="col-sm-8">
                    <input type="text" name="instagram" class="form-control" id="instagram" placeholder="Masukan Instagram">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="col-md-6">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Informasi Akun</h3>
              </div>
                <form class="form-horizontal">
                  <div class="box-body">
                   <div class="form-group">
                     <label for="username" class="col-sm-4 control-label">Username<font style="color: red;">*)</font></label>
                     <div class="col-sm-8">
                       <input type="text" name="username" class="form-control" id="username" placeholder="Masukan Username">
                     </div>
                   </div>
                   <div class="form-group">
                     <label for="password" class="col-sm-4 control-label">Password<font style="color: red;">*)</font></label>
                     <div class="col-sm-8">
                       <input type="text" name="password" class="form-control" id="password" placeholder="Masukan Password">
                     </div>
                   </div>
                   <div class="form-group">
                     <label for="passconf" class="col-sm-4 control-label">Konfirmasi Password<font style="color: red;">*)</font></label>
                     <div class="col-sm-8">
                       <input type="text" name="passconf" class="form-control" id="passconf" placeholder="Masukan Ulang Password">
                     </div>
                   </div>
                 </div>
               </form>
              </div>

               <div class="box box-info">
                 <div class="box-header with-border">
                   <h3 class="box-title">Informasi Lulusan</h3>
                 </div>
                   <form class="form-horizontal">
                     <div class="box-body">
                       <div class="form-group">
                         <label for="jenjang" class="col-sm-4 control-label">Jenjang<font style="color: red;">*)</font></label>
                         <div class="col-sm-8">
                           <select class="form-control" id="jenjang" name="jenjang">
                             <option value="" selected disabled>Pilih Jenjang</option>
                             <option value="D3">D3</option>
                             <option value="S1">S1</option>
                             <option value="S2">S2</option>
                             <option value="S3">S3</option>
                           </select>
                         </div>
                       </div>
                       <div class="form-group">
                         <label for="jurusan" class="col-sm-4 control-label">Jurusan<font style="color: red;">*)</font></label>
                         <div class="col-sm-8">
                           <select name="jurusan" id="jurusan" class="form-control">
                             <option selected disabled>Pilih Jurusan</option>
                             <?php foreach ($list_jurusan as $jurusan): ?>
                               <option value="<?php echo $jurusan->id_jurusan; ?>"><?php echo $jurusan->nama_jurusan; ?></option>
                             <?php endforeach; ?>
                           </select>
                         </div>
                       </div>
                       <div class="form-group">
                         <label for="prodi" class="col-sm-4 control-label">Program Studi<font style="color: red;">*)</font></label>
                         <div class="col-sm-8">
                           <select class="form-control" id="prodi" name="prodi">
                             <option value=""selected disabled>Pilih Program Studi</option>
                           </select>
                         </div>
                       </div>
                       <div class="form-group">
                         <label for="angkatan" class="col-sm-4 control-label">Angkatan<font style="color: red;">*)</font></label>
                         <div class="col-sm-8">
                           <input type="text" name="angkatan" class="form-control" id="angkatan" placeholder="Masukan Angkatan Masuk">
                         </div>
                       </div>
                       <div class="form-group">
                         <label for="tahun_lulus" class="col-sm-4 control-label">Tahun Lulus<font style="color: red;">*)</font></label>
                         <div class="col-sm-8">
                           <input type="text" name="tahun_lulus" class="form-control" id="tahun_lulus" placeholder="Masukan Tahun Lulus">
                         </div>
                       </div>
                       <div class="form-group">
                         <label for="tanggal_yudisium" class="col-sm-4 control-label">Tanggal Yudisium</label>
                         <div class="col-sm-8">
                           <input type="date" name="tanggal_yudisium" class="form-control" id="tanggal_yudisium" placeholder="Masukan Tanggal Yudisium">
                         </div>
                       </div>
                       <div class="form-group">
                         <label for="judul_skripsi" class="col-sm-4 control-label">Judul Skripsi</label>
                         <div class="col-sm-8">
                           <input type="text" name="judul_skripsi" class="form-control" id="judul_skripsi" placeholder="Masukan Judul Skripsi">
                         </div>
                       </div>
                       <div class="form-group">
                         <label for="ipk" class="col-sm-4 control-label">IPK</label>
                         <div class="col-sm-8">
                           <input type="text" name="ipk" class="form-control" id="ipk" placeholder="Masukan IPK">
                         </div>
                       </div>
                      </div>
                    </div>
                  </form>
                </div>
             </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-default pull-right" name="button">Cancel</button>
            <button type="submit" class="btn btn-primary pull-right" name="button">Simpan</button>
          </div>
          <!-- /.box-footer -->
      </section>
   <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->
 <footer class="main-footer">
   <div class="pull-right hidden-xs">
     <b>Version</b> 2.4.0
   </div>
   <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
   reserved.
 </footer>

 <!-- Control Sidebar -->
 <aside class="control-sidebar control-sidebar-dark">
   <!-- Create the tabs -->
   <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
     <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
     <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
   </ul>
   <!-- Tab panes -->
   <div class="tab-content">
     <!-- Home tab content -->
     <div class="tab-pane" id="control-sidebar-home-tab">
       <h3 class="control-sidebar-heading">Recent Activity</h3>
       <ul class="control-sidebar-menu">
         <li>
           <a href="javascript:void(0)">
             <i class="menu-icon fa fa-birthday-cake bg-red"></i>

             <div class="menu-info">
               <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

               <p>Will be 23 on April 24th</p>
             </div>
           </a>
         </li>
         <li>
           <a href="javascript:void(0)">
             <i class="menu-icon fa fa-user bg-yellow"></i>

             <div class="menu-info">
               <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

               <p>New phone +1(800)555-1234</p>
             </div>
           </a>
         </li>
         <li>
           <a href="javascript:void(0)">
             <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

             <div class="menu-info">
               <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

               <p>nora@example.com</p>
             </div>
           </a>
         </li>
         <li>
           <a href="javascript:void(0)">
             <i class="menu-icon fa fa-file-code-o bg-green"></i>

             <div class="menu-info">
               <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

               <p>Execution time 5 seconds</p>
             </div>
           </a>
         </li>
       </ul>
       <!-- /.control-sidebar-menu -->

       <h3 class="control-sidebar-heading">Tasks Progress</h3>
       <ul class="control-sidebar-menu">
         <li>
           <a href="javascript:void(0)">
             <h4 class="control-sidebar-subheading">
               Custom Template Design
               <span class="label label-danger pull-right">70%</span>
             </h4>

             <div class="progress progress-xxs">
               <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
             </div>
           </a>
         </li>
         <li>
           <a href="javascript:void(0)">
             <h4 class="control-sidebar-subheading">
               Update Resume
               <span class="label label-success pull-right">95%</span>
             </h4>

             <div class="progress progress-xxs">
               <div class="progress-bar progress-bar-success" style="width: 95%"></div>
             </div>
           </a>
         </li>
         <li>
           <a href="javascript:void(0)">
             <h4 class="control-sidebar-subheading">
               Laravel Integration
               <span class="label label-warning pull-right">50%</span>
             </h4>

             <div class="progress progress-xxs">
               <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
             </div>
           </a>
         </li>
         <li>
           <a href="javascript:void(0)">
             <h4 class="control-sidebar-subheading">
               Back End Framework
               <span class="label label-primary pull-right">68%</span>
             </h4>

             <div class="progress progress-xxs">
               <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
             </div>
           </a>
         </li>
       </ul>
       <!-- /.control-sidebar-menu -->

     </div>
     <!-- /.tab-pane -->
     <!-- Stats tab content -->
     <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
     <!-- /.tab-pane -->
     <!-- Settings tab content -->
     <div class="tab-pane" id="control-sidebar-settings-tab">
       <form method="post">
         <h3 class="control-sidebar-heading">General Settings</h3>

         <div class="form-group">
           <label class="control-sidebar-subheading">
             Report panel usage
             <input type="checkbox" class="pull-right" checked>
           </label>

           <p>
             Some information about this general settings option
           </p>
         </div>
         <!-- /.form-group -->

         <div class="form-group">
           <label class="control-sidebar-subheading">
             Allow mail redirect
             <input type="checkbox" class="pull-right" checked>
           </label>

           <p>
             Other sets of options are available
           </p>
         </div>
         <!-- /.form-group -->

         <div class="form-group">
           <label class="control-sidebar-subheading">
             Expose author name in posts
             <input type="checkbox" class="pull-right" checked>
           </label>

           <p>
             Allow the user to show his name in blog posts
           </p>
         </div>
         <!-- /.form-group -->

         <h3 class="control-sidebar-heading">Chat Settings</h3>

         <div class="form-group">
           <label class="control-sidebar-subheading">
             Show me as online
             <input type="checkbox" class="pull-right" checked>
           </label>
         </div>
         <!-- /.form-group -->

         <div class="form-group">
           <label class="control-sidebar-subheading">
             Turn off notifications
             <input type="checkbox" class="pull-right">
           </label>
         </div>
         <!-- /.form-group -->

         <div class="form-group">
           <label class="control-sidebar-subheading">
             Delete chat history
             <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
           </label>
         </div>
         <!-- /.form-group -->
       </form>
     </div>
     <!-- /.tab-pane -->
   </div>
 </aside>
 <!-- /.control-sidebar -->
 <!-- Add the sidebar's background. This div must be placed
      immediately after the control sidebar -->
 <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>dist/js/demo.js"></script>
<!-- page script -->
<script>
$(document).ready(function(){
  $('#negara').change(function(){
    var e = document.getElementById("negara");
    var id_negara = e.options[e.selectedIndex].value;
    console.log(id_negara)
    if(id_negara != '')
    {
      $.ajax({
        url:"<?php echo site_url();?>/admin/alumni/fetch_provinsi",
        method: "POST",
        data:{id_negara:id_negara},
        success:function(data)
        {
          $('#provinsi').html(data);
        }
      })
    }
  })
  $('#provinsi').change(function(){
    var e = document.getElementById("provinsi");
    var id_provinsi = e.options[e.selectedIndex].value;
    console.log(id_provinsi)
    if(id_provinsi != '')
    {
      $.ajax({
        url:"<?php echo site_url();?>/admin/alumni/fetch_kota",
        method: "POST",
        data:{id_provinsi:id_provinsi},
        success:function(data)
        {
          $('#kota').html(data);
        }
      })
    }
  })
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
})

</script>
</body>
</html>
