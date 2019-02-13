<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       Master Operator
       <small>Tambah Operator Fakultas Ekonomi dan Bisnis</small>
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
     <form class="form-horizontal" method="post" action="<?php echo site_url('admin/operator/process_add_operator') ?>">
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
                  <label for="nama" class="col-sm-4 control-label">Nama Lengkap<font style="color: red;">*)</font></label>
                  <div class="col-sm-8">
                    <input type="text" name="nama" class="form-control" id="nama" value="<?php echo set_value('nama') ?>" placeholder="Masukan Nama Lengkap">
                  </div>
                </div>
                <div class="form-group">
                  <label for="jenis_kelamin" class="col-sm-4 control-label">Jenis Kelamin<font style="color: red;">*)</font></label>
                  <div class="col-sm-8">
                    <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" value="<?php echo set_value('jenis_kelamin') ?>">
                      <option value=""selected disabled>Pilih Jenis Kelamin</option>
                      <option value="Perempuan">Perempuan</option>
                      <option value="Laki-laki">Laki-laki</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="email" class="col-sm-4 control-label">Email<font style="color: red;">*)</font></label>
                  <div class="col-sm-8">
                    <input type="text" name="email" class="form-control" id="email" value="<?php echo set_value('email') ?>" placeholder="Masukan Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="nomor_hp" class="col-sm-4 control-label">Nomor HP<font style="color: red;">*)</font></label>
                  <div class="col-sm-8">
                    <input type="text" name="nomor_hp" class="form-control" id="nomor_hp" value="<?php echo set_value('nomor_hp') ?>" placeholder="Masukan Nomor HP">
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
                   <div class="form-group">
                     <label for="username" class="col-sm-4 control-label">Username<font style="color: red;">*)</font></label>
                     <div class="col-sm-8">
                       <input type="text" name="username" class="form-control" id="username" value="<?php echo set_value('username') ?>" placeholder="Masukan Username">
                     </div>
                   </div>
                   <div class="form-group">
                     <label for="password" class="col-sm-4 control-label">Password<font style="color: red;">*)</font></label>
                     <div class="col-sm-8">
                       <input type="password" name="password" class="form-control" id="password" placeholder="Masukan Password">
                     </div>
                   </div>
                   <div class="form-group">
                     <label for="passconf" class="col-sm-4 control-label">Konfirmasi Password<font style="color: red;">*)</font></label>
                     <div class="col-sm-8">
                       <input type="password" name="passconf" class="form-control" id="passconf" placeholder="Masukan Ulang Password">
                     </div>
                   </div>
                 </div>
              </div>
                </div>
             </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer btn-toolbar">
            <a href="<?php echo site_url('admin/operator') ?>" class="btn btn-default pull-right">Cancel</a>
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
<!-- OperatorLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>
<!-- OperatorLTE for demo purposes -->
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
        url:"<?php echo site_url();?>/admin/operator/fetch_provinsi",
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
        url:"<?php echo site_url();?>/admin/operator/fetch_kota",
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
