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
     <?php if (!empty(validation_errors())): ?>
          <div class="alert alert-danger">
              <a class="close" data-dismiss="alert" title="close">x</a>
              <ul><?php echo (validation_errors('<li>', '</li>')); ?></ul>
          </div>
      <?php endif; ?>
     <form class="form-horizontal" method="post" action="">
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
                    <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $data_alumni->nama ?>" placeholder="Masukan Nama Lengkap">
                  </div>
                </div>
                <div class="form-group">
                  <label for="nim" class="col-sm-4 control-label">NIM</label>
                  <div class="col-sm-8">
                    <input type="text" name="nim" class="form-control" id="nim" value="<?php echo $data_alumni->nim ?>" placeholder="Masukan NIM">
                  </div>
                </div>
                <div class="form-group">
                  <label for="Email" class="col-sm-4 control-label">Email<font style="color: red;">*)</font></label>
                  <div class="col-sm-8">
                    <input type="email" name="email" class="form-control" id="email" value="<?php echo $data_alumni->email ?>" placeholder="Masukan Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="jenis_kelamin" class="col-sm-4 control-label">Jenis Kelamin<font style="color: red;">*)</font></label>
                  <div class="col-sm-8">
                    <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                      <option value=""selected disabled>Pilih Jenis Kelamin</option>
                      <option value="Perempuan" <?php echo ($data_alumni->jenis_kelamin == 'Perempuan') ? 'selected="selected"' : '' ?>>Perempuan</option>
                      <option value="Laki-laki" <?php echo ($data_alumni->jenis_kelamin == 'Laki-laki') ? 'selected="selected"' : '' ?>>Laki-laki</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="golongan_darah" class="col-sm-4 control-label">Golongan Darah</label>
                  <div class="col-sm-8">
                    <select class="form-control" name="golongan_darah" id="golongan_darah" value="<?php echo $data_alumni->golongan_darah ?>">
                      <option value=""selected disabled>Pilih Golongan Darah</option>
                      <option value="O" <?php echo ($data_alumni->golongan_darah == 'O') ? 'selected="selected"' : '' ?>>O</option>
                      <option value="A" <?php echo ($data_alumni->golongan_darah == 'A') ? 'selected="selected"' : '' ?>>A</option>
                      <option value="B" <?php echo ($data_alumni->golongan_darah == 'B') ? 'selected="selected"' : '' ?>>B</option>
                      <option value="AB" <?php echo ($data_alumni->golongan_darah == 'AB') ? 'selected="selected"' : '' ?>>AB</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="tempat_lahir" class="col-sm-4 control-label">Tempat Lahir</label>
                  <div class="col-sm-8">
                    <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" value="<?php echo $data_alumni->tempat_lahir ?>" placeholder="Masukan Tempat Lahir">
                  </div>
                </div>
                <div class="form-group">
                  <label for="tanggal_lahir" class="col-sm-4 control-label">Tanggal Lahir</label>
                  <div class="col-sm-8">
                    <input type="text" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="<?php echo $data_alumni->tanggal_lahir ?>" placeholder="Masukan Tanggal Lahir">
                  </div>
                </div>
                <div class="form-group">
                  <label for="kewarganegaraan" class="col-sm-4 control-label">Kewarganegaraan</label>
                  <div class="col-sm-8">
                    <select class="form-control" id="kewarganegaraan" name="kewarganegaraan" value="<?php echo $data_alumni->kewarganegaraan ?>">
                      <option value="" selected disabled>Pilih Kewarganegaraan</option>
                      <option value="Warga Indonesia" <?php echo ($data_alumni->kewarganegaraan == 'Warga Indonesia') ? 'selected="selected"' : '' ?>>Warga Indonesia</option>
                      <option value="Warga Keturunan" <?php echo ($data_alumni->kewarganegaraan == 'Warga Keturunan') ? 'selected="selected"' : '' ?>>Warga Keturunan</option>
                      <option value="Warga Asing" <?php echo ($data_alumni->kewarganegaraan == 'Warga Asing"') ? 'selected="selected"' : '' ?>>Warga Asing</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="alamat_asal" class="col-sm-4 control-label">Alamat Asal</label>
                  <div class="col-sm-8">
                    <input type="text" name="alamat_asal" class="form-control" id="alamat_asal" value="<?php echo $data_alumni->alamat_asal ?>" placeholder="Masukan Alamat Asal">
                  </div>
                </div>
                <div class="form-group">
                  <label for="kode_pos_asal" class="col-sm-4 control-label">Kode Pos Asal</label>
                  <div class="col-sm-8">
                    <input type="text" name="kode_pos_asal" class="form-control" id="kode_pos_asal" value="<?php echo $data_alumni->kode_pos_asal ?>" placeholder="Masukan Kode Pos Alamat Asal">
                  </div>
                </div>
                <div class="form-group">
                  <label for="alamat_sekarang" class="col-sm-4 control-label">Alamat Sekarang</label>
                  <div class="col-sm-8">
                    <input type="text" name="alamat_sekarang" class="form-control" id="alamat_sekarang" value="<?php echo $data_alumni->alamat_sekarang ?>" placeholder="Masukan Alamat Tinggal Sekarang">
                  </div>
                </div>
                <div class="form-group">
                  <label for="kode_pos_sekarang" class="col-sm-4 control-label">Kode Pos Sekarang</label>
                  <div class="col-sm-8">
                    <input type="text" name="kode_pos_sekarang" class="form-control" id="kode_pos_sekarang" value="<?php echo $data_alumni->kode_pos_sekarang ?>" placeholder="Masukan Kode Pos Alamat Tinggal Sekarang">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Negara</label>
                  <div class="col-sm-8">
                    <select name="negara" id="negara" class="form-control" value="<?php echo $data_alumni->negara ?>">
                      <option value="" selected disabled>Pilih Negara</option>
                      <?php foreach ($negaras as $negara): ?>
                        <option value="<?php echo $negara->id_negara ?>"<?php echo ($data_alumni->negara == $negara->id_negara) ? 'selected="selected"' : '' ?>><?php echo $negara->nama_negara ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="provinsi" class="col-sm-4 control-label">Provinsi</label>
                  <div class="col-sm-8">
                    <select name="provinsi" id="provinsi" class="form-control" value="<?php echo $data_alumni->provinsi ?>">
                      <option disabled>Pilih Provinsi</option>
                      <?php foreach ($provinsis as $provinsi): ?>
                        <option value="<?php echo $provinsi->id_provinsi ?>"<?php echo ($data_alumni->provinsi == $provinsi->id_provinsi) ? 'selected="selected"' : '' ?>><?php echo $provinsi->nama_provinsi ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="kota" class="col-sm-4 control-label">Kota</label>
                  <div class="col-sm-8">
                    <select class="form-control" id="kota" name="kota" value="<?php echo $data_alumni->kota ?>">
                      <option disabled>Pilih Kota</option>
                      <?php foreach ($kotas as $kota): ?>
                        <option value="<?php echo $kota->id_kota ?>"<?php echo ($data_alumni->kota == $kota->id_kota) ? 'selected="selected"' : '' ?>><?php echo $kota->nama_kota ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="nomor_telepon" class="col-sm-4 control-label">Nomor Telepon</label>
                  <div class="col-sm-8">
                    <input type="text" name="nomor_telepon" class="form-control" id="nomor_telepon" value="<?php echo $data_alumni->nomor_telepon ?>" placeholder="Masukan Nomor Telepon">
                  </div>
                </div>
                <div class="form-group">
                  <label for="nomor_hp" class="col-sm-4 control-label">Nomor HP<font style="color: red;">*)</font></label>
                  <div class="col-sm-8">
                    <input type="text" name="nomor_hp" class="form-control" id="nomor_hp" value="<?php echo $data_alumni->nomor_hp ?>" placeholder="Masukan Nomor HP">
                  </div>
                </div>
                <div class="form-group">
                  <label for="website" class="col-sm-4 control-label">Website</label>
                  <div class="col-sm-8">
                    <input type="text" name="website" class="form-control" id="website" value="<?php echo $data_alumni->website ?>" placeholder="Masukan Website">
                  </div>
                </div>
                <div class="form-group">
                  <label for="facebook" class="col-sm-4 control-label">Facebook</label>
                  <div class="col-sm-8">
                    <input type="text" name="facebook" class="form-control" id="facebook" value="<?php echo $data_alumni->facebook ?>" placeholder="Masukan Facebook">
                  </div>
                </div>
                <div class="form-group">
                  <label for="twitter" class="col-sm-4 control-label">Twitter</label>
                  <div class="col-sm-8">
                    <input type="text" name="twitter" class="form-control" id="twitter" value="<?php echo $data_alumni->twitter ?>" placeholder="Masukan Twitter">
                  </div>
                </div>
                <div class="form-group">
                  <label for="instagram" class="col-sm-4 control-label">Instagram</label>
                  <div class="col-sm-8">
                    <input type="text" name="instagram" class="form-control" id="instagram" value="<?php echo $data_alumni->instagram ?>" placeholder="Masukan Instagram">
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
                       <input type="text" name="username" class="form-control" id="username" value="<?php echo $data_alumni->username ?>" placeholder="Masukan Username" disabled>
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
                         <label for="jenjang" class="col-sm-4 control-label">Jenjang<font style="color: red;">*)</font></label>
                         <div class="col-sm-8">
                           <select class="form-control" id="jenjang" name="jenjang" value="<?php echo $data_alumni->jenjang ?>">
                             <option value=""  disabled>Pilih Jenjang</option>
                             <option value="D3" <?php echo ($data_alumni->jenjang == 'D3') ? 'selected="selected"' : '' ?>>D3</option>
                             <option value="S1" <?php echo ($data_alumni->jenjang == 'S1') ? 'selected="selected"' : '' ?>>S1</option>
                             <option value="S2" <?php echo ($data_alumni->jenjang == 'S2') ? 'selected="selected"' : '' ?>>S2</option>
                             <option value="S3" <?php echo ($data_alumni->jenjang == 'S3') ? 'selected="selected"' : '' ?>>S3</option>
                           </select>
                         </div>
                       </div>
                       <div class="form-group">
                         <label for="jurusan" class="col-sm-4 control-label">Jurusan<font style="color: red;">*)</font></label>
                         <div class="col-sm-8">
                           <select name="jurusan" id="jurusan" class="form-control" value="<?php echo $data_alumni->nama_jurusan ?>">
                             <option disabled>Pilih Jurusan</option>
                             <?php foreach ($jurusans as $jurusan): ?>
                               <option value="<?php echo $jurusan->id_jurusan ?>"<?php echo ($data_alumni->id_jurusan == $jurusan->id_jurusan) ? 'selected="selected"' : '' ?>><?php echo $jurusan->nama_jurusan ?></option>
                             <?php endforeach; ?>
                           </select>
                         </div>
                       </div>
                       <div class="form-group">
                         <label for="prodi" class="col-sm-4 control-label">Program Studi<font style="color: red;">*)</font></label>
                         <div class="col-sm-8">
                           <select class="form-control" id="prodi" name="prodi" value="<?php echo $data_alumni->nama_prodi ?>">
                             <option value=""selected disabled>Pilih Program Studi</option>
                             <?php foreach ($prodis as $prodi): ?>
                               <option value="<?php echo $prodi->id_prodi ?>"<?php echo ($data_alumni->id_prodi == $prodi->id_prodi) ? 'selected="selected"' : '' ?>><?php echo $prodi->nama_prodi ?></option>
                             <?php endforeach; ?>
                           </select>
                         </div>
                       </div>
                       <div class="form-group">
                         <label for="angkatan" class="col-sm-4 control-label">Angkatan<font style="color: red;">*)</font></label>
                         <div class="col-sm-8">
                           <select class="form-control" id="angkatan" name="angkatan" value="<?php echo $data_alumni->angkatan ?>">
                             <option value=""  disabled>Pilih Tahun Angkatan</option>
                             <?php for ($i=1950; $i <= date('Y') ; $i++) { ?>
                               <option value="<?php echo $i ?>"<?php echo ($data_alumni->angkatan == $i) ? 'selected="selected"' : '' ?>><?php echo $i ?></option>
                             <?php } ?>
                           </select>
                         </div>
                       </div>
                       <div class="form-group">
                         <label for="tahun_lulus" class="col-sm-4 control-label">Tahun Lulus</label>
                         <div class="col-sm-8">
                           <select class="form-control" id="tahun_lulus" name="tahun_lulus" value="<?php echo $data_alumni->tahun_lulus ?>">
                             <option value="" disabled>Pilih Tahun Lulus</option>
                             <?php for ($i=1950; $i <= date('Y') ; $i++) { ?>
                               <option value="<?php echo $i ?>"<?php echo ($data_alumni->tahun_lulus == $i) ? 'selected="selected"' : '' ?>><?php echo $i ?></option>
                             <?php } ?>
                           </select>
                         </div>
                       </div>
                       <div class="form-group">
                         <label for="tanggal_yudisium" class="col-sm-4 control-label">Tanggal Yudisium</label>
                         <div class="col-sm-8">
                           <input type="text" name="tanggal_yudisium" class="form-control" id="tanggal_yudisium" value="<?php echo $data_alumni->tanggal_yudisium ?>" placeholder="Masukan Tanggal Yudisium">
                         </div>
                       </div>
                       <div class="form-group">
                         <label for="judul_skripsi" class="col-sm-4 control-label">Judul Skripsi</label>
                         <div class="col-sm-8">
                           <input type="text" name="judul_skripsi" class="form-control" id="judul_skripsi" value="<?php echo $data_alumni->judul_skripsi ?>" placeholder="Masukan Judul Skripsi">
                         </div>
                       </div>
                       <div class="form-group">
                         <label for="ipk" class="col-sm-4 control-label">IPK</label>
                         <div class="col-sm-8">
                           <input type="text" name="ipk" class="form-control" id="ipk" value="<?php echo $data_alumni->ipk ?>" placeholder="Masukan IPK">
                         </div>
                       </div>
                      </div>
                    </div>
                </div>
             </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer btn-toolbar">
            <a href="<?php echo site_url('admin/alumni/detail_alumni/'.$data_alumni->username) ?>" class="btn btn-default pull-right">Cancel</a>
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
        url:"<?php echo site_url();?>/provinsi/get_provinsi_by_negara_js",
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
        url:"<?php echo site_url();?>/kota/get_kota_by_provinsi_js",
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
  })
})

</script>
</body>
</html>
