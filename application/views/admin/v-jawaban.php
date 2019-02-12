<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       Master Kuisioner
       <small>View Daftar Pilihan Jawaban Soal Kuesioner Alumni Fakultas Ekonomi Bisnis Universitas Brawijaya</small>
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
       <div class="col-xs-12">
         <div class="box box-info">
           <div class="box-header">
             <h3 class="box-title"><?php echo $detail_soal->soal ?></h3>
                <button type="button" class="btn btn-primary btn-flat" style="float:right;" data-toggle="modal" data-target="#modal-add-jawaban"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;Tambah Pilihan Jawaban</button>
           </div>
           <!-- /.box-header -->
           <div class="box-body">
             <table id="example1" class="table table-bordered table-striped">
               <thead>
               <tr>
                 <th class="text-center">No.</th>
                 <th>Soal</th>
                 <th>Pilihan Jawaban</th>
                 <th class="text-center">Aksi</th>
               </tr>
               </thead>
               <tbody>
                 <?php
                 $no = 1;
                 foreach ($daftar_jawaban as $daftar_jawaban): ?>
               <tr>
                 <td class="text-center"><?php echo $no ?></td>
                 <td><?php echo $daftar_jawaban->soal ?></td>
                 <td><?php echo $daftar_jawaban->jawaban ?></td>
                 <input type="hidden" id="id_soal" name="id_soal" value="<?php echo $daftar_jawaban->id_soal ?>" >
                 <td class="text-center">
                   <a class="btn btn-default" onclick="edit_jawaban('<?php echo $daftar_jawaban->id_jawaban ?>')"<i class="fa fa-pencil"></i>&nbsp;&nbsp;Edit</a>
                   <button onclick="del('<?php echo $daftar_jawaban->id_jawaban ?>')"class="btn btn-danger"><i class="fa fa-trash"></i>&nbsp;&nbsp;Delete</a>
                 </td>
               </tr>
               <?php $no++ ?>
               <?php endforeach; ?>
               </tbody>
               <tfoot>
               <tr>
                 <th class="text-center">No.</th>
                 <th>Soal</th>
                 <th>Pilihan Jawaban</th>
                 <th class="text-center">Aksi</th>
               </tr>
               </tfoot>
             </table>
           </div>
           <!-- /.box-body -->
         </div>
         <!-- /.box -->
       </div>
       <!-- /.col -->
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


<div class="modal fade" id="modal-add-jawaban" role="dialog">
  <div class="modal-dialog">
    <form class="" action="<?php echo site_url('admin/daftar_jawaban/add_jawaban') ?>" method="post">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <button type="button" class="close" data-dismiss="modal" name="button"></button>
          <h4 class="modal-title"></i>Form Tambah Jawaban Soal Kuesioner</h4>
        </div>
        <div class="modal-body">
          <div class="col-md-12">
            <div class="form-horizontal">
              <div class="box-body">
                <input type="hidden" name="id_soal" id="id_soal" class="form-control" value="<?php echo $detail_soal->id_soal ?>">
                <div class="form-group">
                  <div class="col-sm-9"></div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="">Soal Kuesioner</label>
                  <div class="col-sm-9">
                    <select name="soal_up" id="soal_up" class="form-control">
                          <option selected disabled><?php echo $detail_soal->soal; ?></option>
                    </select>
                    <!-- <textarea name="soal" id="soal" class="form-control" disabled></textarea> -->
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="">Pilihan Jawaban</label>
                  <div class="col-sm-9">
                    <input type="text" name="jawaban" id="jawaban" class="form-control" value="" placeholder="Masukan Pilihan Jawaban ..."required>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default" data-dismiss="modal" name="button">Cancel</button>
          <button type="submit" class="btn btn-primary" name="button">Tambah Soal Kuisioner</button>
        </div>
      </div>
    </form>
  </div>
</div>

<div class="modal fade" id="modal-update-soal" role="dialog">
  <div class="modal-dialog">
    <form class="" action="<?php echo site_url('admin/daftar_jawaban/update_jawaban') ?>" method="post">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <button type="button" class="close" data-dismiss="modal" name="button"></button>
          <h4 class="modal-title"></i>Form Update Jawaban Soal Kuisioner</h4>
        </div>
        <div class="modal-body">
          <div class="col-md-12">
            <div class="form-horizontal">
              <div class="box-body">
                <input type="hidden" name="id_soal_up" id="id_soal_up" class="form-control" value="">
                <div class="form-group">
                  <div class="col-sm-9"></div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="">Pilihan Jawaban</label>
                  <div class="col-sm-9">
                    <input type="text" name="jawaban_up" id="jawaban_up" class="form-control" value="" placeholder="Masukan Pilihan Jawaban ..."required>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default" data-dismiss="modal" name="button">Cancel</button>
          <button type="submit" class="btn btn-primary" name="button">Update Jawaban</button>
        </div>
      </div>
    </form>
  </div>
</div>

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
  { "width": "10%", "targets": 1 },
  { "width": "30%", "targets": 2 },
  { "width": "10%", "targets": 3 },
  { "width": "17%", "targets": 4 }
]
   })
 })

 function edit_jawaban(id_jawaban)
 {
     //Ajax Load data from ajax
     $.ajax({
         url : "<?php echo site_url('admin/daftar_jawaban/getDetailJawaban')?>/" + id_jawaban,
         type: "GET",
         dataType: "JSON",
         success: function(data)
         {
             $('[name="id_soal_up"]').val(data.id_soal);
             $('[name="id_jawaban_up"]').val(data.id_jawaban);
             $('[name="jawaban_up"]').val(data.jawaban);
             $('#modal-update-soal').modal('show'); // show bootstrap modal when complete loaded
         },
         error: function (jqXHR, textStatus, errorThrown)
         {
             alert('Error get data from ajax');
         }
     });
 }

 function del(id) {
      var url="<?php echo site_url();?>";
      var r = confirm("Apakah anda yakin menghapus data ini?");
      var id_soal=document.getElementById('id_soal').value;
      if (r == true) {
          window.location = url+"/admin/daftar_jawaban/delete_jawaban/"+id+"/"+id_soal;
      } else {
          return false;
      }
  }

</script>
</body>
</html>
