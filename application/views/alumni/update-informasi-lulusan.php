<!-- Your Account Personal Information -->
<div class="container">
	<div class="row">
		<div class="col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Informasi Lulusan</h6>
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
								<div class="form-group label-floating is-select">
									<label class="control-label">Jenjang</label>
									<select class="selectpicker form-control" name="jenjang" size="auto">
										<option value=""  disabled>Pilih Jenjang</option>
										<option value="D3" <?php echo ($user->jenjang == 'D3') ? 'selected="selected"' : '' ?>>D3</option>
										<option value="S1" <?php echo ($user->jenjang == 'S1') ? 'selected="selected"' : '' ?>>S1</option>
										<option value="S2" <?php echo ($user->jenjang == 'S2') ? 'selected="selected"' : '' ?>>S2</option>
										<option value="S3" <?php echo ($user->jenjang == 'S3') ? 'selected="selected"' : '' ?>>S3</option>
									</select>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form-group label-floating is-select">
									<label class="control-label">Angkatan</label>
									<select class="selectpicker form-control" name="angkatan" size="auto">
										<option value="" disabled>Pilih Tahun Angkatan</option>
										<?php for ($i=1950; $i <= date('Y') ; $i++) { ?>
											<option value="<?php echo $i ?>"<?php echo ($user->angkatan == $i) ? 'selected="selected"' : '' ?>><?php echo $i ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form-group label-floating is-select">
									<label class="control-label">Jurusan</label>
									<select class="selectpicker form-control" id="jurusan" name="jurusan" size="auto">
										<option disabled>Pilih Jurusan</option>
										<?php foreach ($jurusans as $jurusan): ?>
											<option value="<?php echo $jurusan->id_jurusan ?>"<?php echo ($user->id_jurusan == $jurusan->id_jurusan) ? 'selected="selected"' : '' ?>><?php echo $jurusan->nama_jurusan ?></option>
										<?php endforeach; ?>
									</select>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form-group label-floating is-select">
                  <label class="control-label">Progam Studi</label>
                  <select class="selectpicker form-control" name="prodi" id="prodi" size="auto">
										<option value=""selected disabled>Pilih Program Studi</option>
										<?php foreach ($prodis as $prodi): ?>
											<option value="<?php echo $prodi->id_prodi ?>"<?php echo ($user->id_prodi == $prodi->id_prodi) ? 'selected="selected"' : '' ?>><?php echo $prodi->nama_prodi ?></option>
										<?php endforeach; ?>
									</select>
                </div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form-group label-floating">
									<label class="control-label">Judul Skripsi</label>
									<input class="form-control" placeholder="" name="judul_skripsi" type="text" value="<?php echo $user->judul_skripsi ?>">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form-group date-time-picker label-floating">
									<label class="control-label">Tanggal Yudisium</label>
									<input name="datetimepicker" value="<?php echo $user->tanggal_yudisium ?>" />
									<span class="input-group-addon">
										<svg class="olymp-month-calendar-icon icon"><use xlink:href="<?php echo base_url('icons')?>/icons.svg#olymp-month-calendar-icon"></use></svg>
									</span>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form-group label-floating">
									<label class="control-label">IPK</label>
									<input class="form-control" placeholder="" name="ipk" type="text" value="<?php echo $user->ipk ?>">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form-group label-floating is-select">
									<label class="control-label">Tahun Lulus</label>
									<select class="selectpicker form-control" name="tahun_lulus" size="auto">
										<option value="" disabled>Pilih Tahun Lulus</option>
										<?php for ($i=1950; $i <= date('Y') ; $i++) { ?>
											<option value="<?php echo $i ?>"<?php echo ($user->tahun_lulus == $i) ? 'selected="selected"' : '' ?>><?php echo $i ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<button type="submit" name="submit" value="simpan" class="btn btn-primary btn-lg full-width">Update Informasi Lulusan</button>
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
