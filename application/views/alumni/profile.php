<div class="container">
	<div class="row">
		<div class="col-xl-8 order-xl-2 col-lg-8 order-lg-2 col-md-12 order-md-1 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Informasi Lulusan</h6>
					<a href="<?php echo site_url('alumni/settings/informasi_lulusan') ?>" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?php echo base_url('resource/icons/') ?>icons.svg#olymp-three-dots-icon"></use></svg></a>
				</div>
				<div class="ui-block-content">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<ul class="widget w-personal-info item-block">
								<li>
									<span class="title">Jenjang:</span>
							<span class="text"><?php echo $user->jenjang; ?></span>
								</li>
								<li>
									<span class="title">Angkatan:</span>
									<span class="text"><?php echo $user->angkatan; ?></span>
								</li>
								<li>
									<span class="title">Judul Skripsi:</span>
									<span class="text">
										<?php
										if ($user->judul_skripsi != null || $user->judul_skripsi != '' ) {
											echo $user->judul_skripsi;
										}else {
											echo "-";
										}
										?>
									</span>
								</li>
								<li>
									<span class="title">Tahun Lulus:</span>
									<span class="text">
										<?php
										if ($user->tahun_lulus != null || $user->tahun_lulus != '' ) {
											echo $user->tahun_lulus;
										}else {
											echo "-";
										}
										?>
									</span>
								</li>
							</ul>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<ul class="widget w-personal-info item-block">
								<li>
									<span class="title">Jurusan:</span>
									<span class="text"><?php echo $user->nama_jurusan ?></span>
								</li>
								<li>
									<span class="title">Progam Studi:</span>
									<span class="text"><?php echo $user->nama_prodi ?></span>
								</li>
								<li>
									<span class="title">Tanggal Yudisium :</span>
									<span class="text">
										<?php
										if ($user->tanggal_yudisium != null || $user->tanggal_yudisium != '' ) {
											echo $user->tanggal_yudisium;
										}else {
											echo "-";
										}
										?>
									</span>
								</li>
								<li>
									<span class="title">IPK:</span>
									<span class="text">
										<?php
										if ($user->ipk != null || $user->ipk != '' ) {
											echo $user->ipk;
										}else {
											echo "-";
										}
										?>
									</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Riwayat Pekerjaan</h6>
					<a href="<?php echo site_url('alumni/settings/riwayat_pekerjaan') ?>" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?php echo base_url('resource/icons/') ?>icons.svg#olymp-three-dots-icon"></use></svg></a>
				</div>
				<div class="ui-block-content">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<ul class="widget w-personal-info item-block">
								<?php foreach ($pekerjaans as $pekerjaan) { ?>
								<li>
									<span class="title"><?php echo $pekerjaan->tempat_kerja ?></span>
									<?php
									$mulai_kerja =  date_create($pekerjaan->mulai_kerja);
									$berhenti_kerja =  date_create($pekerjaan->berhenti_kerja);
									 ?>
									<span class="date"><?php echo date_format($mulai_kerja,"d F Y") ?> - <?php echo date_format($berhenti_kerja,"d F Y") ?> ( <?php echo $pekerjaan->posisi  ?> )</span>
									<span class="text"><?php echo $pekerjaan->alamat_kerja ?></span>
								</li>
							<?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4 order-xl-1 col-lg-4 order-lg-1 col-md-12 order-md-2 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Identitas Diri</h6>
					<a href="<?php echo site_url('alumni/settings/') ?>" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?php echo base_url('resource/icons/') ?>icons.svg#olymp-three-dots-icon"></use></svg></a>
				</div>
				<div class="ui-block-content">
					<ul class="widget w-personal-info">
						<li>
								<div class="author-thumb" style="left:25%;">
									<img class="" src="<?php echo base_url('img/alumni_pic/'.$user->foto) ?>" alt="" style="max-width:150px;height:150px;">
								</div>
						</li>
						<li>
							<span class="title">Nama: </span>
							<span class="text"><?php echo $user->nama; ?></span>
						</li>
						<li>
							<span class="title">Email: </span>
							<span class="text"><?php echo $user->email; ?></span>
						</li>
						<li>
							<span class="title">NIM:</span>
							<span class="text">
							<?php
							if ($user->nim != null || $user->nim != '' ) {
								echo $user->nim;
							}else {
								echo "-";
							}
							?>
							</span>
						</li>
						<li>
							<span class="title">Jenis Kelamin:</span>
							<span class="text"><?php echo $user->jenis_kelamin ?></span>
						</li>
						<li>
							<span class="title">Golongan Darah:</span>
							<span class="text">
								<?php
								if ($user->golongan_darah != null || $user->golongan_darah != '' ) {
									echo $user->golongan_darah;
								}else {
									echo "-";
								}
								?>
							</span>
						</li>
						<li>
							<span class="title">Tempat Lahir:</span>
							<span class="text">
								<?php
								if ($user->tempat_lahir != null || $user->tempat_lahir != '' ) {
									echo $user->tempat_lahir;
								}else {
									echo "-";
								}
								?>
							</span>
						</li>
						<li>
							<span class="title">Tanggal Lahir:</span>
							<span class="text">
								<?php
								if ($user->tanggal_lahir != null || $user->tanggal_lahir != '' ) {
									echo $user->tanggal_lahir;
								}else {
									echo "-";
								}
								?>
							</span>
						</li>
						<li>
							<span class="title">Kewarganegaraan:</span>
							<span class="text">
								<?php
								if ($user->kewarganegaraan != null || $user->kewarganegaraan != '' ) {
									echo $user->kewarganegaraan;
								}else {
									echo "-";
								}
								?>
							</span>
						</li>
						<li>
							<span class="title">Alamat Asal:</span>
							<span class="text">
								<?php
								if ($user->alamat_asal != null || $user->alamat_asal != '' ) {
									echo $user->alamat_asal;
								}else {
									echo "-";
								}
								?>
							</span>
						</li>
						<li>
							<span class="title">Kode POS Asal:</span>
							<a href="#" class="text">
								<?php
								if ($user->kode_pos_asal != null || $user->kode_pos_asal != '' ) {
									echo $user->kode_pos_asal;
								}else {
									echo "-";
								}
								?>
							</a>
						</li>
						<li>
							<span class="title">Alamat Sekarang:</span>
							<span class="text">
								<?php
								if ($user->alamat_sekarang != null || $user->alamat_sekarang != '' ) {
									echo $user->alamat_sekarang;
								}else {
									echo "-";
								}
								?>
							</span>
						</li>
						<li>
							<span class="title">Kode POS Sekarang:</span>
							<span class="text">
								<?php
								if ($user->kode_pos_sekarang != null || $user->kode_pos_sekarang != '' ) {
									echo $user->kode_pos_sekarang;
								}else {
									echo "-";
								}
								?>
							</span>
						</li>
						<li>
							<span class="title">Negara:</span>
							<span class="text">
								<?php
								if ($user->negara != null || $user->negara != '' ) {
									echo $user->negara;
								}else {
									echo "-";
								}
								?>
							</span>
						</li>
						<li>
							<span class="title">Provinsi:</span>
							<span class="text">
								<?php
								if ($user->provinsi != null || $user->provinsi != '' ) {
									echo $user->provinsi;
								}else {
									echo "-";
								}
								?>
							</span>
						</li>
						<li>
							<span class="title">Kota:</span>
							<span class="text">
								<?php
								if ($user->kota != null || $user->kota != '' ) {
									echo $user->kota;
								}else {
									echo "-";
								}
								?>
							</span>
						</li>
						<li>
							<span class="title">Nomor Telepon:</span>
							<span class="text">
								<?php
								if ($user->nomor_telepon != null || $user->nomor_telepon != '' ) {
									echo $user->nomor_telepon;
								}else {
									echo "-";
								}
								?>
							</span>
						</li>
						<li>
							<span class="title">Nomor HP:</span>
							<span class="text">
								<?php
								if ($user->nomor_hp != null || $user->nomor_hp != '' ) {
									echo $user->nomor_hp;
								}else {
									echo "-";
								}
								?>
							</span>
						</li>
					</ul>

					<div class="widget w-socials">
						<h6 class="title">Other Social Networks:</h6>
						<a href="http://
						<?php
						if ($user->website != null || $user->website != '' ) {
							echo $user->website;
						}else {
							echo "#";
						}
						?>
						" class="social-item bg-grey" target="_blank">
							<i class="fa fa-globe" aria-hidden="true"></i>
							Website
						</a>
						<a href="http://
						<?php
						if ($user->facebook != null || $user->facebook != '' ) {
							echo $user->facebook;
						}else {
							echo "#";
						}
						?>
						" class="social-item bg-facebook" target="_blank">
							<i class="fa fa-facebook" aria-hidden="true"></i>
							Facebook
						</a>
						<a href="http://
						<?php
						if ($user->twitter != null || $user->twitter != '' ) {
							echo $user->twitter;
						}else {
							echo "#";
						}
						?>
						" class="social-item bg-twitter" target="_blank">
							<i class="fa fa-twitter" aria-hidden="true"></i>
							Twitter
						</a>
						<a href="http://
						<?php
						if ($user->instagram != null || $user->instagram != '' ) {
							echo $user->instagram;
						}else {
							echo "-";
						}
						?>
						" class="social-item bg-dribbble" target="_blank">
							<i class="fa fa-instagram" aria-hidden="true"></i>
							Instagram
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Window-popup Update Header Photo -->

<div class="modal fade" id="update-header-photo">
	<div class="modal-dialog ui-block window-popup update-header-photo">
		<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
			<svg class="olymp-close-icon"><use xlink:href="<?php echo base_url('resource/icons/') ?>icons.svg#olymp-close-icon"></use></svg>
		</a>

		<div class="ui-block-title">
			<h6 class="title">Update Header Photo</h6>
		</div>

		<a href="#" class="upload-photo-item">
			<svg class="olymp-computer-icon"><use xlink:href="<?php echo base_url('resource/icons/') ?>icons.svg#olymp-computer-icon"></use></svg>

			<h6>Upload Photo</h6>
			<span>Browse your computer.</span>
		</a>

		<a href="#" class="upload-photo-item" data-toggle="modal" data-target="#choose-from-my-photo">

			<svg class="olymp-photos-icon"><use xlink:href="<?php echo base_url('resource/icons/') ?>icons.svg#olymp-photos-icon"></use></svg>

			<h6>Choose from My Photos</h6>
			<span>Choose from your uploaded photos</span>
		</a>
	</div>
</div>


<!-- ... end Window-popup Update Header Photo -->


<!-- Window-popup Choose from my Photo -->
<div class="modal fade" id="choose-from-my-photo">
	<div class="modal-dialog ui-block window-popup choose-from-my-photo">
		<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
			<svg class="olymp-close-icon"><use xlink:href="<?php echo base_url('resource/icons/') ?>icons.svg#olymp-close-icon"></use></svg>
		</a>

		<div class="ui-block-title">
			<h6 class="title">Choose from My Photos</h6>

			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-expanded="true">
						<svg class="olymp-photos-icon"><use xlink:href="<?php echo base_url('resource/icons/') ?>icons.svg#olymp-photos-icon"></use></svg>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-expanded="false">
						<svg class="olymp-albums-icon"><use xlink:href="<?php echo base_url('resource/icons/') ?>icons.svg#olymp-albums-icon"></use></svg>
					</a>
				</li>
			</ul>
		</div>


		<div class="ui-block-content">
			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane active" id="home" role="tabpanel" aria-expanded="true">

					<div class="choose-photo-item" data-mh="choose-item">
						<div class="radio">
							<label class="custom-radio">
								<img src="<?php echo base_url('resource/img/') ?>choose-photo1.jpg" alt="photo">
								<input type="radio" name="optionsRadios">
							</label>
						</div>
					</div>
					<div class="choose-photo-item" data-mh="choose-item">
						<div class="radio">
							<label class="custom-radio">
								<img src="<?php echo base_url('resource/img/') ?>choose-photo2.jpg" alt="photo">
								<input type="radio" name="optionsRadios">
							</label>
						</div>
					</div>
					<div class="choose-photo-item" data-mh="choose-item">
						<div class="radio">
							<label class="custom-radio">
								<img src="<?php echo base_url('resource/img/') ?>choose-photo3.jpg" alt="photo">
								<input type="radio" name="optionsRadios">
							</label>
						</div>
					</div>

					<div class="choose-photo-item" data-mh="choose-item">
						<div class="radio">
							<label class="custom-radio">
								<img src="<?php echo base_url('resource/img/') ?>choose-photo4.jpg" alt="photo">
								<input type="radio" name="optionsRadios">
							</label>
						</div>
					</div>
					<div class="choose-photo-item" data-mh="choose-item">
						<div class="radio">
							<label class="custom-radio">
								<img src="<?php echo base_url('resource/img/') ?>choose-photo5.jpg" alt="photo">
								<input type="radio" name="optionsRadios">
							</label>
						</div>
					</div>
					<div class="choose-photo-item" data-mh="choose-item">
						<div class="radio">
							<label class="custom-radio">
								<img src="<?php echo base_url('resource/img/') ?>choose-photo6.jpg" alt="photo">
								<input type="radio" name="optionsRadios">
							</label>
						</div>
					</div>

					<div class="choose-photo-item" data-mh="choose-item">
						<div class="radio">
							<label class="custom-radio">
								<img src="<?php echo base_url('resource/img/') ?>choose-photo7.jpg" alt="photo">
								<input type="radio" name="optionsRadios">
							</label>
						</div>
					</div>
					<div class="choose-photo-item" data-mh="choose-item">
						<div class="radio">
							<label class="custom-radio">
								<img src="<?php echo base_url('resource/img/') ?>choose-photo8.jpg" alt="photo">
								<input type="radio" name="optionsRadios">
							</label>
						</div>
					</div>
					<div class="choose-photo-item" data-mh="choose-item">
						<div class="radio">
							<label class="custom-radio">
								<img src="<?php echo base_url('resource/img/') ?>choose-photo9.jpg" alt="photo">
								<input type="radio" name="optionsRadios">
							</label>
						</div>
					</div>


					<a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
					<a href="#" class="btn btn-primary btn-lg btn--half-width">Confirm Photo</a>

				</div>
				<div class="tab-pane" id="profile" role="tabpanel" aria-expanded="false">

					<div class="choose-photo-item" data-mh="choose-item">
						<figure>
							<img src="<?php echo base_url('resource/img/') ?>choose-photo10.jpg" alt="photo">
							<figcaption>
								<a href="#">South America Vacations</a>
								<span>Last Added: 2 hours ago</span>
							</figcaption>
						</figure>
					</div>
					<div class="choose-photo-item" data-mh="choose-item">
						<figure>
							<img src="<?php echo base_url('resource/img/') ?>choose-photo11.jpg" alt="photo">
							<figcaption>
								<a href="#">Photoshoot Summer 2016</a>
								<span>Last Added: 5 weeks ago</span>
							</figcaption>
						</figure>
					</div>
					<div class="choose-photo-item" data-mh="choose-item">
						<figure>
							<img src="<?php echo base_url('resource/img/') ?>choose-photo12.jpg" alt="photo">
							<figcaption>
								<a href="#">Amazing Street Food</a>
								<span>Last Added: 6 mins ago</span>
							</figcaption>
						</figure>
					</div>

					<div class="choose-photo-item" data-mh="choose-item">
						<figure>
							<img src="<?php echo base_url('resource/img/') ?>choose-photo13.jpg" alt="photo">
							<figcaption>
								<a href="#">Graffity & Street Art</a>
								<span>Last Added: 16 hours ago</span>
							</figcaption>
						</figure>
					</div>
					<div class="choose-photo-item" data-mh="choose-item">
						<figure>
							<img src="<?php echo base_url('resource/img/') ?>choose-photo14.jpg" alt="photo">
							<figcaption>
								<a href="#">Amazing Landscapes</a>
								<span>Last Added: 13 mins ago</span>
							</figcaption>
						</figure>
					</div>
					<div class="choose-photo-item" data-mh="choose-item">
						<figure>
							<img src="<?php echo base_url('resource/img/') ?>choose-photo15.jpg" alt="photo">
							<figcaption>
								<a href="#">The Majestic Canyon</a>
								<span>Last Added: 57 mins ago</span>
							</figcaption>
						</figure>
					</div>


					<a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
					<a href="#" class="btn btn-primary btn-lg disabled btn--half-width">Confirm Photo</a>
				</div>
			</div>
		</div>

	</div>
</div>

<!-- ... end Window-popup Choose from my Photo -->


<!-- Window-popup-CHAT for responsive min-width: 768px -->

<div class="ui-block popup-chat popup-chat-responsive">
	<div class="ui-block-title">
		<span class="icon-status online"></span>
		<h6 class="title" >Chat</h6>
		<div class="more">
			<svg class="olymp-three-dots-icon"><use xlink:href="<?php echo base_url('resource/icons/') ?>icons.svg#olymp-three-dots-icon"></use></svg>
			<svg class="olymp-little-delete js-chat-open"><use xlink:href="<?php echo base_url('resource/icons/') ?>icons.svg#olymp-little-delete"></use></svg>
		</div>
	</div>
	<div class="mCustomScrollbar">
		<ul class="notification-list chat-message chat-message-field">
			<li>
				<div class="author-thumb">
					<img src="<?php echo base_url('resource/img/') ?>avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
				</div>
				<div class="notification-event">
					<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
					<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
				</div>
			</li>

			<li>
				<div class="author-thumb">
					<img src="<?php echo base_url('resource/img/') ?>author-page.jpg" alt="author" class="mCS_img_loaded">
				</div>
				<div class="notification-event">
					<span class="chat-message-item">Don’t worry Mathilda!</span>
					<span class="chat-message-item">I already bought everything</span>
					<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:29pm</time></span>
				</div>
			</li>

			<li>
				<div class="author-thumb">
					<img src="<?php echo base_url('resource/img/') ?>avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
				</div>
				<div class="notification-event">
					<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
					<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
				</div>
			</li>
		</ul>
	</div>

	<form>

		<div class="form-group label-floating is-empty">
			<label class="control-label">Press enter to post...</label>
			<textarea class="form-control" placeholder=""></textarea>
			<div class="add-options-message">
				<a href="#" class="options-message">
					<svg class="olymp-computer-icon"><use xlink:href="<?php echo base_url('resource/icons/') ?>icons.svg#olymp-computer-icon"></use></svg>
				</a>
				<div class="options-message smile-block">

					<svg class="olymp-happy-sticker-icon"><use xlink:href="<?php echo base_url('resource/icons/') ?>icons.svg#olymp-happy-sticker-icon"></use></svg>

					<ul class="more-dropdown more-with-triangle triangle-bottom-right">
						<li>
							<a href="#">
								<img src="<?php echo base_url('resource/img/') ?>icon-chat1.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('resource/img/') ?>icon-chat2.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('resource/img/') ?>icon-chat3.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('resource/img/') ?>icon-chat4.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('resource/img/') ?>icon-chat5.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('resource/img/') ?>icon-chat6.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('resource/img/') ?>icon-chat7.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('resource/img/') ?>icon-chat8.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('resource/img/') ?>icon-chat9.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('resource/img/') ?>icon-chat10.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('resource/img/') ?>icon-chat11.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('resource/img/') ?>icon-chat12.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('resource/img/') ?>icon-chat13.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('resource/img/') ?>icon-chat14.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('resource/img/') ?>icon-chat15.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('resource/img/') ?>icon-chat16.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('resource/img/') ?>icon-chat17.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('resource/img/') ?>icon-chat18.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('resource/img/') ?>icon-chat19.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('resource/img/') ?>icon-chat20.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('resource/img/') ?>icon-chat21.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('resource/img/') ?>icon-chat22.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('resource/img/') ?>icon-chat23.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('resource/img/') ?>icon-chat24.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('resource/img/') ?>icon-chat25.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('resource/img/') ?>icon-chat26.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('resource/img/') ?>icon-chat27.png" alt="icon">
							</a>
						</li>
					</ul>
				</div>
			</div>
			 </div>

	</form>


</div>

<!-- ... end Window-popup-CHAT for responsive min-width: 768px -->




<!-- jQuery first, then Other JS. -->
<script src="<?php echo base_url('resource/js/') ?>jquery-3.2.0.min.js"></script>
<!-- Js effects for material design. + Tooltips -->
<script src="<?php echo base_url('resource/js/') ?>material.min.js"></script>
<!-- Helper scripts (Tabs, Equal height, Scrollbar, etc) -->
<script src="<?php echo base_url('resource/js/') ?>theme-plugins.js"></script>
<!-- Init functions -->
<script src="<?php echo base_url('resource/js/') ?>main.js"></script>
<!-- Select / Sorting script -->
<script src="<?php echo base_url('resource/js/') ?>selectize.min.js"></script>

<script src="<?php echo base_url('resource/js/') ?>mediaelement-and-player.min.js"></script>
<script src="<?php echo base_url('resource/js/') ?>mediaelement-playlist-plugin.min.js"></script>

</body>
</html>
