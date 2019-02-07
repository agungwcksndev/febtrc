
		<div class="col-xl-3 order-xl-1 col-lg-3 order-lg-1 col-md-12 order-md-2 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="your-profile">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">PROFIL SAYA</h6>
					</div>

					<div id="accordion" role="tablist" aria-multiselectable="true">
						<div class="card">
							<div class="card-header" role="tab" id="headingOne">
								<h6 class="mb-0">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										Pengaturan Profil
										<svg class="olymp-dropdown-arrow-icon"><use xlink:href="<?php echo base_url('icons')?>/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
									</a>
								</h6>
							</div>

							<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
								<ul class="your-profile-menu">
									<li>
										<a href="<?php echo site_url('alumni/settings/change_photo') ?>">Foto Profil</a>
									</li>
									<li>
										<a href="<?php echo site_url('alumni/settings') ?>">Identitas Diri</a>
									</li>
									<li>
										<a href="<?php echo site_url('alumni/settings/informasi_lulusan') ?>">Informasi Lulusan</a>
									</li>
									<li>
										<a href="<?php echo site_url('alumni/settings/change_password') ?>">Ganti Password</a>
									</li>
									<li>
										<a href="<?php echo site_url('alumni/riwayat_pekerjaans') ?>">Riwayat Pekerjaan</a>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="ui-block-title">
						<a href="33-YourAccount-Notifications.html" class="h6 title">Notifications</a>
						<a href="#" class="items-round-little bg-primary">8</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
