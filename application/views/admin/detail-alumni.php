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
     <?php echo validation_errors(); ?>
     <form class="form-horizontal" method="post" action="<?php echo site_url('admin/alumni/proses_tambah_alumni') ?>">
     <div class="row">
     <div class="col-md-6">
       <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Identitas Diri</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
                <div class="form-group">
                  <label for="nama" class="col-sm-4 col-form-label text-right">Nama Lengkap</label>
                  <div class="col-sm-8">
                    <p class="control-label-plaintext"><?php echo $data_alumni->nama ?></p>
                  </div>
                </div>
                <div class="form-group">
                  <label for="nim" class="col-sm-4 col-form-label text-right">NIM</label>
                  <div class="col-sm-8">
                    <p class="control-label-plaintext"><?php echo $data_alumni->nim ?></p>
                  </div>
                </div>
                <div class="form-group">
                  <label for="email" class="col-sm-4 col-form-label text-right">Email</label>
                  <div class="col-sm-8">
                    <p class="control-label-plaintext"><?php echo $data_alumni->email ?></p>
                  </div>
                </div>
                <div class="form-group">
                  <label for="jenis_kelamin" class="col-sm-4 col-form-label text-right">Jenis Kelamin</label>
                  <div class="col-sm-8">
                    <p class="control-label-plaintext"><?php echo $data_alumni->jenis_kelamin ?></p>
                  </div>
                </div>
                <div class="form-group">
                  <label for="golongan_darah" class="col-sm-4 col-form-label text-right">Golongan Darah</label>
                  <div class="col-sm-8">
                    <p class="control-label-plaintext"><?php echo $data_alumni->golongan_darah ?></p>
                  </div>
                </div>
                <div class="form-group">
                  <label for="tempat_lahir" class="col-sm-4 col-form-label text-right">Tempat Lahir</label>
                  <div class="col-sm-8">
                    <p class="control-label-plaintext"><?php echo $data_alumni->tempat_lahir ?></p>
                  </div>
                </div>
                <div class="form-group">
                  <label for="tanggal_lahir" class="col-sm-4 col-form-label text-right">Tanggal Lahir</label>
                  <div class="col-sm-8">
                    <p class="control-label-plaintext"><?php echo $data_alumni->tanggal_lahir ?></p>
                  </div>
                </div>
                <div class="form-group">
                  <label for="kewarganegaraan" class="col-sm-4 col-form-label text-right">Kewarganegaraan</label>
                  <div class="col-sm-8">
                    <p class="control-label-plaintext"><?php echo $data_alumni->kewarganegaraan ?></p>
                  </div>
                </div>
                <div class="form-group">
                  <label for="alamat_asal" class="col-sm-4 col-form-label text-right">Alamat Asal</label>
                  <div class="col-sm-8">
                    <p class="control-label-plaintext"><?php echo $data_alumni->alamat_asal ?></p>
                  </div>
                </div>
                <div class="form-group">
                  <label for="kode_pos_asal" class="col-sm-4 col-form-label text-right">Kode Pos Asal</label>
                  <div class="col-sm-8">
                    <p class="control-label-plaintext"><?php echo $data_alumni->kode_pos_asal ?></p>
                  </div>
                </div>
                <div class="form-group">
                  <label for="alamat_sekarang" class="col-sm-4 col-form-label text-right">Alamat Sekarang</label>
                  <div class="col-sm-8">
                    <p class="control-label-plaintext"><?php echo $data_alumni->alamat_sekarang ?></p>
                  </div>
                </div>
                <div class="form-group">
                  <label for="kode_pos_sekarang" class="col-sm-4 col-form-label text-right">Kode Pos Sekarang</label>
                  <div class="col-sm-8">
                    <p class="control-label-plaintext"><?php echo $data_alumni->kode_pos_sekarang ?></p>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 col-form-label text-right">Negara</label>
                  <div class="col-sm-8">
                    <p class="control-label-plaintext"><?php echo $data_alumni->nama_negara ?></p>
                  </div>
                </div>
                <div class="form-group">
                  <label for="provinsi" class="col-sm-4 col-form-label text-right">Provinsi</label>
                  <div class="col-sm-8">
                    <p class="control-label-plaintext"></p>
                  </div>
                </div>
                <div class="form-group">
                  <label for="kota" class="col-sm-4 col-form-label text-right">Kota</label>
                  <div class="col-sm-8">
                    <p class="control-label-plaintext"><?php echo $data_alumni->kota ?></p>
                  </div>
                </div>
                <div class="form-group">
                  <label for="nomor_telepon" class="col-sm-4 col-form-label text-right">Nomor Telepon</label>
                  <div class="col-sm-8">
                    <p class="control-label-plaintext"><?php echo $data_alumni->nomor_telepon ?></p>
                  </div>
                </div>
                <div class="form-group">
                  <label for="nomor_hp" class="col-sm-4 col-form-label text-right">Nomor HP</label>
                  <div class="col-sm-8">
                    <p class="control-label-plaintext"><?php echo $data_alumni->nomor_hp ?></p>
                  </div>
                </div>
                <div class="form-group">
                  <label for="website" class="col-sm-4 col-form-label text-right">Website</label>
                  <div class="col-sm-8">
                    <p class="control-label-plaintext"><?php echo $data_alumni->website ?></p>
                  </div>
                </div>
                <div class="form-group">
                  <label for="facebook" class="col-sm-4 col-form-label text-right">Facebook</label>
                  <div class="col-sm-8">
                    <p class="control-label-plaintext"><?php echo $data_alumni->facebook ?></p>
                  </div>
                </div>
                <div class="form-group">
                  <label for="twitter" class="col-sm-4 col-form-label text-right">Twitter</label>
                  <div class="col-sm-8">
                    <p class="control-label-plaintext"><?php echo $data_alumni->twitter ?></p>
                  </div>
                </div>
                <div class="form-group">
                  <label for="instagram" class="col-sm-4 col-form-label text-right">Instagram</label>
                  <div class="col-sm-8">
                    <p class="control-label-plaintext"><?php echo $data_alumni->instagram ?></p>
                  </div>
                </div>
            </div>
          </div>
        </div>

    <div class="col-md-6">
        <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Informasi Akun</h3>
              </div>
                  <div class="box-body">
                    <div class="box-body box-profile">
                      <img class="profile-user-img img-responsive img-circle" src="" alt="User profile picture">
                      <h3 class="profile-username text-center"></h3>
                      <div class="col-md-12 text-center">
                        <a href="<?php echo site_url('admin/alumni/edit_alumni/'.$data_alumni->username)?>" class="btn bg-navy margin" name="button"><i class="fa fa-pencil"></i>&nbsp;&nbsp;&nbsp;Edit Profil</a>
                        <button type="button" class="btn bg-maroon margin" name="button"><i class="fa fa-image"></i>&nbsp;&nbsp;&nbsp;Ubah Foto</button>
                      </div>
                    </div>
                 </div>
              </div>
               <div class="box box-info">
                 <div class="box-header with-border">
                   <h3 class="box-title">Informasi Lulusan</h3>
                 </div>
                     <div class="box-body">
                       <div class="form-group">
                         <label for="jenjang" class="col-sm-4 col-form-label text-right">Jenjang</label>
                         <div class="col-sm-8">
                           <p class="control-label-plaintext"><?php echo $data_alumni->jenjang ?></p>
                         </div>
                       </div>
                       <div class="form-group">
                         <label for="jurusan" class="col-sm-4 col-form-label text-right">Jurusan</label>
                         <div class="col-sm-8">
                           <p class="control-label-plaintext"><?php echo $data_alumni->nama_jurusan ?></p>
                         </div>
                       </div>
                       <div class="form-group">
                         <label for="prodi" class="col-sm-4 col-form-label text-right">Program Studi</label>
                         <div class="col-sm-8">
                           <p class="control-label-plaintext"><?php echo $data_alumni->nama_prodi ?></p>
                         </div>
                       </div>
                       <div class="form-group">
                         <label for="angkatan" class="col-sm-4 col-form-label text-right">Angkatan</label>
                         <div class="col-sm-8">
                           <p class="control-label-plaintext"><?php echo $data_alumni->angkatan ?></p>
                         </div>
                       </div>
                       <div class="form-group">
                         <label for="tahun_lulus" class="col-sm-4 col-form-label text-right">Tahun Lulus</label>
                         <div class="col-sm-8">
                           <p class="control-label-plaintext"><?php echo $data_alumni->tahun_lulus ?></p>
                         </div>
                       </div>
                       <div class="form-group">
                         <label for="tanggal_yudisium" class="col-sm-4 col-form-label text-right">Tanggal Yudisium</label>
                         <div class="col-sm-8">
                           <p class="control-label-plaintext"><?php echo $data_alumni->tanggal_yudisium ?></p>
                         </div>
                       </div>
                       <div class="form-group">
                         <label for="judul_skripsi" class="col-sm-4 col-form-label text-right">Judul Skripsi</label>
                         <div class="col-sm-8">
                           <p class="control-label-plaintext"><?php echo $data_alumni->judul_skripsi ?></p>
                         </div>
                       </div>
                       <div class="form-group">
                         <label for="ipk" class="col-sm-4 col-form-label text-right">IPK</label>
                         <div class="col-sm-8">
                           <p class="control-label-plaintext"><?php echo $data_alumni->ipk ?></p>
                         </div>
                       </div>
                      </div>
                    </div>
                </div>
             </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer btn-toolbar">
            <a href="<?php echo site_url('admin/alumni') ?>" class="btn btn-default pull-right">Cancel</a>
            <button type="submit"  class="btn btn-primary pull-right" name="submit" value="Simpan">Simpan</button>
          </div>
          <!-- /.box-footer -->
        </form>
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
<script src="<?php echo base_url(); ?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
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

//Date picker
$('#tanggal_yudisium').datepicker({
autoclose: true
})

$('#tanggal_lahir').datepicker({
autoclose: true
})

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
    var max  = new Date().getFullYear();
    var min  = 1961;
    var min2 = 1950;
    select = document.getElementById('tahun_lulus');
    select2 = document.getElementById('angkatan');

    for (var i = min; i<=max; i++){
    var opt = document.createElement('option');
    opt.value = i;
    opt.innerHTML = i;
    select.appendChild(opt);
    }

    for (var i = min2; i<=max; i++){
    var opt = document.createElement('option');
    opt.value = i;
    opt.innerHTML = i;
    select2.appendChild(opt);
    }
  })
})

</script>
</body>
</html>
