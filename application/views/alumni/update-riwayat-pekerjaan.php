<!-- Your Account Personal Information -->
<div class="container">
	<div class="row">
		<div class="col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Tambah Riwayat Pekerjaan</h6>
				</div>
				<div class="ui-block-content">
		     <form class="form-horizontal" method="post" action="">
						<div class="row">
							<?php if ($this->session->flashdata('error')) {
									echo "<br>";
									echo "<div class='col-lg-12 col-md-12'>";
									echo "<div class='alert alert-danger alert-dismissible'>";
									echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
									echo "<h4><i class='icon fa fa-check'></i>Success!</h4>";
									echo $this->session->flashdata('error');
									echo "</div>";
									echo "</div>";
							};
							?>
							<?php if ($this->session->flashdata('success')) {
									echo "<br>";
									echo "<div class='col-lg-12 col-md-12'>";
									echo "<div class='alert alert-success alert-dismissible'>";
									echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
									echo "<h4><i class='icon fa fa-check'></i>Success!</h4>";
									echo $this->session->flashdata('success');
									echo "</div>";
									echo "</div>";
							};
							?>
							<?php if (!empty(validation_errors())): ?>
								<div class="col-lg-12 col-md-12">
									<div class="alert alert-danger">
											<a class="close" data-dismiss="alert" title="close">x</a>
											<ul><?php echo (validation_errors('<li>', '</li>')); ?></ul>
									</div>
								</div>
							 <?php endif; ?>
							 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								 <div class="form-group label-floating">
									 <label class="control-label">Tempat Kerja</label>
									 <input class="form-control" placeholder="" name="tempat_kerja" type="text" value="<?php echo $data_riwayat->tempat_kerja ?>">
								 </div>
							 </div>
							 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								 <div class="form-group label-floating">
									 <label class="control-label">Posisi</label>
									 <input class="form-control" placeholder="" name="posisi" type="text" value="<?php echo $data_riwayat->posisi ?>">
								 </div>
							 </div>
							 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								 <div class="form-group date-time-picker label-floating">
									 <label class="control-label">Mulai Kerja</label>
									 <?php
									 $tgl_mulai = date_create($data_riwayat->mulai_kerja) ;
									 ?>
									 <input name="datetimepicker" value="<?php echo date_format($tgl_mulai, 'd/m/Y'); ?>" />
									 <span class="input-group-addon">
										 <svg class="olymp-month-calendar-icon icon"><use xlink:href="<?php echo base_url('icons')?>/icons.svg#olymp-month-calendar-icon"></use></svg>
									 </span>
								 </div>
							 </div>
							 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								 <div class="form-group date-time-picker label-floating">
									 <label class="control-label">Berhenti Kerja</label>
									 <?php
									 $tgl_berhenti = date_create($data_riwayat->berhenti_kerja) ;
									 ?>
									 <input id="datetimepicker2" name="datetimepicker2" value="<?php echo date_format($tgl_berhenti, 'd/m/Y') ?>" />
									 <span class="input-group-addon">
										 <svg class="olymp-month-calendar-icon icon"><use xlink:href="<?php echo base_url('icons')?>/icons.svg#olymp-month-calendar-icon"></use></svg>
									 </span>
								 </div>
							 </div>
							 <div class="col-lg-12 col-sm-12 col-sm-12 col-xs-12">
 								<div class="remember" style="float:right;">
 									<div class="checkbox">
 										<label>
											<?php if($data_riwayat->sekarang != '1'){
												echo "<input name='sekarang' type='checkbox' value='sekarang'>";
											}else{
												echo "<input name='sekarang' type='checkbox' value='sekarang' checked>";
											}
											?>

 											Sekarang
 										</label>
 									</div>
 								</div>
							</div>
							 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								 <div class="form-group label-floating">
									 <label class="control-label">Alamat</label>
									 <input class="form-control" placeholder="" name="alamat" type="text" value="<?php echo $data_riwayat->alamat_kerja ?>">
								 </div>
							 </div>
							 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								 <div class="form-group label-floating">
									 <label class="control-label">Pendapatan Per Bulan</label>
									 <input class="form-control" placeholder="" name="pendapatan_per_bulan" type="text" value="<?php echo $data_riwayat->pendapatan_per_bulan ?>">
								 </div>
							 </div>
							 <input type="hidden" name="id_riwayat_pekerjaan" value="<?php echo $data_riwayat->id_riwayat_pekerjaan ?>">
 						 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							 <div class="form-group label-floating is-select">
								 <label class="control-label">Golongan PNS ( Khusus PNS )</label>
								 <select class="selectpicker form-control" name="golongan_pns" size="auto" value="<?php echo $data_riwayat->golongan_pns ?>">
									 <option value=""selected disabled>Pilih Golongan</option>
									 <option value="Golongan I A">Golongan I A</option>
									 <option value="Golongan I B">Golongan I B</option>
									 <option value="Golongan I C">Golongan I C</option>
									 <option value="Golongan I D">Golongan I D</option>
									 <option value="Golongan II A">Golongan II A</option>
									 <option value="Golongan II B">Golongan II B</option>
									 <option value="Golongan II C">Golongan II C</option>
									 <option value="Golongan II D">Golongan II D</option>
									 <option value="Golongan III A">Golongan III A</option>
									 <option value="Golongan III B">Golongan III B</option>
									 <option value="Golongan III C">Golongan III C</option>
									 <option value="Golongan III D">Golongan III D</option>
									 <option value="Golongan IV A">Golongan IV A</option>
									 <option value="Golongan IV B">Golongan IV B</option>
									 <option value="Golongan IV C">Golongan IV C</option>
									 <option value="Golongan IV D">Golongan IV D</option>
								 </select>
							 </div>
						 </div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<button type="submit" name="submit" value="simpan" class="btn btn-primary btn-lg full-width">Tambah Riwayat Pekerjaan</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

<!-- ... end Your Account Personal Information -->

<!-- jQuery first, then Other JS. -->
<script src="<?php echo base_url('resource')?>/js/jquery-3.2.0.min.js"></script>
<!-- Js effects for material design. + Tooltips -->
<script src="<?php echo base_url('resource')?>/js/material.min.js"></script>
<!-- Helper scripts (Tabs, Equal height, Scrollbar, etc) -->
<script src="<?php echo base_url('resource')?>/js/theme-plugins.js"></script>
<!-- Init functions -->
<script src="<?php echo base_url('resource')?>/js/main.js"></script>

<!-- Select / Sorting script -->
<script src="<?php echo base_url('resource')?>/js/selectize.min.js"></script>

<!-- Datepicker input field script-->
<script src="<?php echo base_url('resource')?>/js/moment.min.js"></script>
<script src="<?php echo base_url('resource')?>/js/daterangepicker.min.js"></script>

<script src="<?php echo base_url('resource')?>/js/mediaelement-and-player.min.js"></script>
<script src="<?php echo base_url('resource')?>/js/mediaelement-playlist-plugin.min.js"></script>
<script type="text/javascript">

$(function() {
  $('input[name="datetimepicker2"]').daterangepicker({
		singleDatePicker: true,
    showDropdowns: true,
    minYear: 1901,
    maxYear: parseInt(moment().format('YYYY'),10)
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
				url:"<?php echo site_url();?>/admin/prodi/get_prodi_by_jurusan_js",
				method: "POST",
				data:{id_jurusan:id_jurusan},
				success:function(data)
				{
					$('#prodi').html(data).selectpicker('refresh');
				}
			})
		}
	})
})
</script>

</body>
</html>
