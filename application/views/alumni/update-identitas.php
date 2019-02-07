<!-- Your Account Personal Information -->
<div class="container">
	<div class="row">
		<div class="col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Identitas Diri</h6>
				</div>
				<div class="ui-block-content">
		     <form class="form-horizontal" method="post" action="">
						<div class="row">

							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form-group label-floating">
									<label class="control-label">Nama Lengkap</label>
									<input class="form-control" name="nama" placeholder="" type="text" value="<?php echo $user->nama ?>">
								</div>

								<div class="form-group label-floating">
									<label class="control-label">Email</label>
									<input class="form-control" name="email" placeholder="" type="email" value="<?php echo $user->email ?>">
								</div>
                <div class="form-group label-floating is-select">
                  <label class="control-label">Golongan Darah</label>
                  <select class="selectpicker form-control" name="golongan_darah" size="auto">
                    <option value=""selected disabled>Pilih Golongan Darah</option>
                    <option value="O" <?php echo ($user->golongan_darah == 'O') ? 'selected="selected"' : '' ?>>O</option>
                    <option value="A" <?php echo ($user->golongan_darah == 'A') ? 'selected="selected"' : '' ?>>A</option>
                    <option value="B" <?php echo ($user->golongan_darah == 'B') ? 'selected="selected"' : '' ?>>B</option>
                    <option value="AB" <?php echo ($user->golongan_darah == 'AB') ? 'selected="selected"' : '' ?>>AB</option>
                  </select>
                </div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form-group label-floating">
									<label class="control-label">NIM</label>
									<input class="form-control" name="nim" placeholder="" type="text" value="<?php echo $user->nim ?>">
								</div>

                <div class="form-group label-floating is-select">
                  <label class="control-label">Jenis Kelamin</label>
                  <select class="selectpicker form-control" name="jenis_kelamin" size="auto">
                    <option value=""selected disabled>Pilih Jenis Kelamin</option>
                    <option value="Perempuan" <?php echo ($user->jenis_kelamin == 'Perempuan') ? 'selected="selected"' : '' ?>>Perempuan</option>
                    <option value="Laki-laki" <?php echo ($user->jenis_kelamin == 'Laki-laki') ? 'selected="selected"' : '' ?>>Laki-laki</option>
                  </select>
                </div>
                <div class="form-group label-floating is-select">
                  <label class="control-label">Kewarganegaraan</label>
                  <select class="selectpicker form-control" name="kewarganegaraan" size="auto">
                    <option value="" selected disabled>Pilih Kewarganegaraan</option>
                    <option value="Warga Indonesia" <?php echo ($user->kewarganegaraan == 'Warga Indonesia') ? 'selected="selected"' : '' ?>>Warga Indonesia</option>
                    <option value="Warga Keturunan" <?php echo ($user->kewarganegaraan == 'Warga Keturunan') ? 'selected="selected"' : '' ?>>Warga Keturunan</option>
                    <option value="Warga Asing" <?php echo ($user->kewarganegaraan == 'Warga Asing"') ? 'selected="selected"' : '' ?>>Warga Asing</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group label-floating">
									<label class="control-label">Tempat Lahir</label>
									<input class="form-control" placeholder="" name="tempat_lahir" type="text" value="<?php echo $user->tempat_lahir ?>">
								</div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group date-time-picker label-floating">
                  <label class="control-label">Tanggal Lahir</label>
                  <input name="datetimepicker" value="<?php echo $user->tanggal_lahir ?>" />
                  <span class="input-group-addon">
                    <svg class="olymp-month-calendar-icon icon"><use xlink:href="<?php echo base_url('icons')?>/icons.svg#olymp-month-calendar-icon"></use></svg>
                  </span>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group label-floating">
                  <label class="control-label">Alamat Asal</label>
                  <input class="form-control" placeholder="" name="alamat_asal" type="text" value="<?php echo $user->alamat_asal ?>">
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group label-floating">
                  <label class="control-label">Kode POS Asal</label>
                  <input class="form-control" placeholder="" name="kode_pos_asal" type="text" value="<?php echo $user->kode_pos_asal ?>">
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group label-floating">
                  <label class="control-label">Alamat Sekarang</label>
                  <input class="form-control" placeholder="" name="alamat_sekarang" type="text" value="<?php echo $user->alamat_sekarang ?>">
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group label-floating">
                  <label class="control-label">Kode POS Sekarang</label>
                  <input class="form-control" placeholder="" name="kode_pos_sekarang" type="text" value="<?php echo $user->kode_pos_sekarang ?>">
                </div>
              </div>
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="form-group label-floating is-select">
									<label class="control-label">Negara</label>
									<select class="selectpicker form-control" name="negara" id="negara" size="auto">
                    <option value="" selected disabled>Pilih Negara</option>
                    <?php foreach ($negaras as $negara): ?>
                      <option value="<?php echo $negara->id_negara ?>"<?php echo ($user->negara == $negara->id_negara) ? 'selected="selected"' : '' ?>><?php echo $negara->nama_negara ?></option>
                    <?php endforeach; ?>
									</select>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="form-group label-floating is-select">
									<label class="control-label">Provinsi</label>
									<select class="selectpicker form-control" name="provinsi" id="provinsi" size="auto">
                    <option selected disabled>Pilih Provinsi</option>
                    <?php foreach ($provinsis as $provinsi): ?>
                      <option value="<?php echo $provinsi->id_provinsi ?>"<?php echo ($user->provinsi == $provinsi->id_provinsi) ? 'selected="selected"' : '' ?>><?php echo $provinsi->nama_provinsi ?></option>
                    <?php endforeach; ?>
									</select>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="form-group label-floating is-select">
									<label class="control-label">Kota</label>
									<select class="selectpicker form-control" name="kota" id="kota" size="auto">
                    <option selected disabled>Pilih Kota</option>
                    <?php foreach ($kotas as $kota): ?>
                      <option value="<?php echo $kota->id_kota ?>"<?php echo ($user->kota == $kota->id_kota) ? 'selected="selected"' : '' ?>><?php echo $kota->nama_kota ?></option>
                    <?php endforeach; ?>
									</select>
								</div>
							</div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group label-floating">
                  <label class="control-label">Nomor Telepon</label>
                  <input class="form-control" placeholder="" name="nomor_telepon" type="text" value="<?php echo $user->nomor_telepon ?>">
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group label-floating">
                  <label class="control-label">Nomor HP</label>
                  <input class="form-control" placeholder="" name="nomor_hp" type="text" value="<?php echo $user->nomor_hp ?>">
                </div>
              </div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group with-icon label-floating">
                  <label class="control-label">Website</label>
                  <input class="form-control" name="website" type="text" value="<?php echo $user->website; ?>">
                  <i class="fa fa-globe c-globe" aria-hidden="true"></i>
                </div>
								<div class="form-group with-icon label-floating">
									<label class="control-label">Facebook</label>
									<input class="form-control" name="facebook" type="text" value="<?php echo $user->facebook; ?>">
									<i class="fa fa-facebook c-facebook" aria-hidden="true"></i>
								</div>
								<div class="form-group with-icon label-floating">
									<label class="control-label">Twitter</label>
									<input class="form-control" name="twitter" type="text" value="<?php echo $user->twitter; ?>">
									<i class="fa fa-twitter c-twitter" aria-hidden="true"></i>
								</div>
								<div class="form-group with-icon label-floating">
									<label class="control-label">Instagram</label>
									<input class="form-control" name="instagram" type="text" value="<?php echo $user->instagram; ?>">
									<i class="fa fa-instagram c-instagram" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<button type="submit" name="submit" value="simpan" class="btn btn-primary btn-lg full-width">Update Identitas Diri</button>
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
          $('#provinsi').html(data).selectpicker('refresh');
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
          $('#kota').html(data).selectpicker('refresh');
        }
      })
    }
  })
})
</script>

</body>
</html>
