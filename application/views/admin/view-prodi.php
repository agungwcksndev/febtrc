 <div class="content-wrapper">
   <section class="content-header">
     <h1>
       Master Progam Studi
       <small>View data</small>
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
           <div class="box-header">
             <h3 class="box-title"><i class="fa fa-tag"></i>&nbsp;&nbsp;Program Studi Fakultas Ekonomi Bisnis Universitas Brawijaya</h3>
             <button type="button" class="btn btn-primary btn-flat" style="float:right;" data-toggle="modal" data-target="#modal-add-prodi"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;Tambah Program Studi</button>
           </div>
           <!-- /.box-header -->
           <div class="box-body">
             <table id="example1" class="table table-bordered table-striped">
               <thead>
               <tr>
                 <th class="text-center">No.</th>
                 <th>Nama Jurusan</th>
                 <th>Nama Program Studi</th>
                 <th class="text-center">Aksi</th>
               </tr>
               </thead>
               <tbody>
                 <?php
                 $no = 1;
                 foreach ($prodis as $prodi): ?>
               <tr>
                 <td class="text-center"><?php echo $no ?></td>
                 <td><?php echo $prodi->nama_jurusan ?></td>
                 <td><?php echo $prodi->nama_prodi ?></td>
                 <td><a class="btn btn-default" onclick="edit_prodi('<?php echo $prodi->id_prodi ?>')"<i class="fa fa-pencil"></i>&nbsp;&nbsp;Edit</a>
                 <a href="<?php echo site_url('admin/prodi/delete_prodi/'.$prodi->id_prodi) ?>"class="btn btn-danger"><i class="fa fa-trash"></i>&nbsp;&nbsp;Delete</a></td>
               </tr>
               <?php $no++ ?>
               <?php endforeach; ?>
               </tbody>
               <tfoot>
               <tr>
                 <th class="text-center">No.</th>
                 <th>Nama Jurusan</th>
                 <th>Nama Program Studi</th>
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


<div class="modal fade" id="modal-add-prodi" role="dialog">
  <div class="modal-dialog">
    <form class="" action="<?php echo site_url('admin/prodi/add_prodi') ?>" method="post">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <button type="button" class="close" data-dismiss="modal" name="button"></button>
          <h4 class="modal-title"></i>Form Tambah Program Studi</h4>
        </div>
        <div class="modal-body">
          <div class="col-md-12">
            <div class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <div class="col-sm-9"></div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="">Pilih Jurusan</label>
                  <div class="col-sm-9">
                    <select name="jurusan" id="jurusan" class="form-control" value="">
                      <option selected disabled>Pilih Jurusan</option>
                      <?php foreach ($jurusans as $jurusan): ?>
                        <option value="<?php echo $jurusan->id_jurusan; ?>"><?php echo $jurusan->nama_jurusan; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="">Nama Program Studi</label>
                  <div class="col-sm-9">
                    <input type="text" name="nama_prodi" id="nama_prodi" class="form-control" value="<?php echo set_value('nama_prodi') ?>" placeholder="Masukan Nama Program Studi..."required>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default" data-dismiss="modal" name="button">Cancel</button>
          <button type="submit" class="btn btn-primary" name="button">Tambah Program Studi</button>
        </div>
      </div>
    </form>
  </div>
</div>

<div class="modal fade" id="modal-update-prodi" role="dialog">
  <div class="modal-dialog">
    <form class="" action="<?php echo site_url('admin/prodi/update_prodi') ?>" method="post">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <button type="button" class="close" data-dismiss="modal" name="button"></button>
          <h4 class="modal-title"></i>Form Update Program Studi</h4>
        </div>
        <div class="modal-body">
          <div class="col-md-12">
            <div class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <div class="col-sm-9"></div>
                </div>
                <input type="hidden" name="id_prodi_up" id="id_prodi_up" class="form-control" value="" placeholder="">
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="">Jurusan</label>
                  <div class="col-sm-9">
                    <input type="hidden" id="id_prodi_up" name="id_prodi_up" value="">
                    <select name="nama_jurusan_up" id="nama_jurusan_up" class="form-control">
                      <option value="" disabled>Pilih Jurusan</option>
                        <?php foreach ($jurusans as $jurusan): ?>
                          <option value="<?php echo $jurusan->id_jurusan ?>"><?php echo $jurusan->nama_jurusan ?></option>
                        <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="">Nama Program Studi</label>
                  <div class="col-sm-9">
                    <input type="text" name="nama_prodi_up" id="nama_prodi_up" class="form-control" value="" placeholder="Masukan Nama Program Studi..."required>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default" data-dismiss="modal" name="button">Cancel</button>
          <button type="submit" class="btn btn-primary" name="button">Update Program Studi</button>
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
</script>
</body>
</html>
