 <div class="content-wrapper">
   <section class="content-header">
     <h1>
       Master Kuesioner
       <small>Preview Kuesioner</small>
     </h1>
     <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-folder-open"></i> Home</a></li>
       <li><a href="#">Tables</a></li>
       <li class="active">Data tables</li>
     </ol>
   </section>
   <section class="content">
       <?php if ($this->session->flashdata('sukses')) {
           echo "<div class='alert alert-success alert-dismissible'>";
           echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
           echo "<h4><i class='icon fa fa-check'></i>Success!</h4>";
           echo $this->session->flashdata('sukses');
           echo "</div>";
       };
       ?>
       <?php if (!empty(validation_errors())): ?>
            <div class="alert alert-danger">
                <a class="close" data-dismiss="alert" title="close">x</a>
                <ul><?php echo (validation_errors('<li>', '</li>')); ?></ul>
            </div>
        <?php endif; ?>
     <div class="row">
       <div class="col-xs-12">
         <div class="box box-info">
           <div class="box-header with-border">
             <h3 class="box-title"><i class="fa fa-tag"></i>&nbsp;&nbsp;Preview Kuesioner</h3>
           </div>
           <!-- /.box-header -->
           <div class="box-body">
             <form class="form-horizontal" action="<?php site_url('admin/kuesioner/preview') ?>" method="post">
             <div class="col-md-6">
               <div class="form-group">
                 <label for="jurusan" class="col-sm-4 control-label">Jurusan<font style="color: red;">*)</font></label>
                 <div class="col-sm-8">
                   <select class="form-control" name="jurusan" id="jurusan" value="<?php echo set_value('jurusan') ?>">
                     <option value=""selected disabled>Pilih Jurusan</option>
                     <?php foreach ($jurusans as $jurusan): ?>
                       <option value="<?php echo $jurusan->id_jurusan ?>"><?php echo $jurusan->nama_jurusan ?></option>
                     <?php endforeach; ?>
                   </select>
                 </div>
               </div>
               <div class="form-group">
                 <label for="prodi" class="col-sm-4 control-label">Program Studi<font style="color: red;">*)</font></label>
                 <div class="col-sm-8">
                   <select class="form-control" name="prodi" id="prodi" value="<?php echo set_value('prodi') ?>">
                     <option value=""selected disabled>Pilih Program Studi</option>
                     <?php foreach ($prodis as $prodi): ?>
                       <option value="<?php echo $prodi->id_prodi ?>"><?php echo $prodi->nama_prodi ?></option>
                     <?php endforeach; ?>
                   </select>
                 </div>
               </div>
             </div>
             <div class="col-md-6">
               <div class="form-group">
                 <label for="tahun_lulus" class="col-sm-4 control-label">Tahun Lulus<font style="color: red;">*)</font></label>
                 <div class="col-sm-8">
                   <select class="form-control" name="tahun_lulus" id="tahun_lulus" value="<?php echo set_value('tahun_lulus') ?>">
                     <option value=""selected disabled>Pilih Tahun Lulus</option>
                   </select>
                 </div>
               </div>
               <button type="button" class="btn btn-info" style="float:right;"><i class="fa fa-eye"></i>&nbsp;&nbsp;&nbsp;Preview Questioner</button>
             </div>
             </form>
           </div>
           <!-- /.box-body -->
         </div>
         <!-- /.box -->
       </div>
       <!-- /.col -->
       <!-- <div class="col-md-4"> -->
          <!-- Horizontal Form -->
          <!-- general form elements disabled -->
          <!-- <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Prodi</h3>
            </div>

            <div class="box-body">
              <form role="form">

                <div class="form-group">
                  <label>Nama Program Studi</label>
                  <input type="text" class="form-control" placeholder="Masukan nama prodi...">
                </div>
                <div class="box-footer">
                  <button type="submit" class="btn btn-info pull-right">Tambah</button>
                </div>
              </form>
            </div>

          </div> -->
          <!-- /.box -->
     <!-- </div> -->
     <!-- /.row -->
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

 $(function () {
   $('#example1').DataTable({
     "columnDefs": [
  { "width": "5%", "targets": 0 },
  { "width": "30%", "targets": 1 },
  { "width": "17%", "targets": 3 }
]
   })
 })

 function edit_prodi(id_prodi)
 {
     //Ajax Load data from ajax
     $.ajax({
         url : "<?php echo site_url('admin/prodi/get_detail_prodi')?>/" + id_prodi,
         type: "GET",
         dataType: "JSON",
         success: function(data)
         {
             $('[name="id_prodi_up"]').val(data.id_prodi);
             $('[name="nama_jurusan_up"]').val(data.id_jurusan);
             $('[name="nama_prodi_up"]').val(data.nama_prodi);
             $('#modal-update-prodi').modal('show'); // show bootstrap modal when complete loaded

         },
         error: function (jqXHR, textStatus, errorThrown)
         {
             alert('Error get data from ajax');
         }
     });
 }

 $('#jurusan').change(function(){
   var e = document.getElementById ("jurusan");
   var id_jurusan = e.options [e.selectedIndex] .value;
   console.log(id_jurusan)
   if(id_jurusan != '')
   {
     $.ajax({
       url:"<?php echo site_url();?>/admin/prodi/get_prodi_by_jurusan_js",
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

 for (var i = min; i<=max; i++){
 var opt = document.createElement('option');
 opt.value = i;
 opt.innerHTML = i;
 select.appendChild(opt);
 }

</script>
</body>
</html>
