<!-- Your Account Personal Information -->

<div class="container">
	<div class="row">
		<div class="col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-xs-12">
			<form class="" action="<?php echo site_url('alumni/settings/add_riwayat_pekerjaan') ?>">
				<a href="<?php echo site_url('alumni/settings/add_riwayat_pekerjaan') ?>" class="btn btn-primary btn-lg full-width">Tambah Riwayat Pekerjaan</a>
			</form>
			<?php foreach ($pekerjaans as $pekerjaan): ?>
			<div class="ui-block">
				<article class="hentry post has-post-thumbnail">

					<div class="post__author author vcard inline-items" style="margin-bottom:10px;">
						<div class="author-date">
							<a class="h6 post__author-name fn" href="#"><?php echo $pekerjaan->tempat_kerja ?></a>
							<div class="post__date" style="">
								<time class="published" datetime="2004-07-24T18:18">
									<?php
									$mulai_kerja =  date_create($pekerjaan->mulai_kerja);
									$berhenti_kerja =  date_create($pekerjaan->berhenti_kerja);
									?>
									<?php echo date_format($mulai_kerja,"d F Y") ?> - <?php echo date_format($berhenti_kerja,"d F Y") ?> <strong>(<?php echo $pekerjaan->posisi ?>)</strong>
								</time>
							</div>
						</div>
					</div>

					<p style="margin:0px 0px 0px;"><?php echo $pekerjaan->alamat_kerja ?></p>
					<p style="margin:0px 0px 0px;">Pendapatan Per Bulan: Rp. <?php echo number_format($pekerjaan->pendapatan_per_bulan,0,",","."); ?> / Bulan</p>

					<div class="control-block-button post-control-button">

						<a href="#" class="btn btn-control">
							<svg class="olymp-comments-post-icon"><use xlink:href="<?php echo base_url('icons/') ?>icons.svg#olymp-three-dots-icon"></use></svg>
						</a>

						<a href="#" class="btn btn-control">
							<svg class="olymp-like-post-icon"><use xlink:href="<?php echo base_url('icons/') ?>icons.svg#olymp-little-delete"></use></svg>
						</a>

					</div>

				</article>
			</div>
			<?php endforeach; ?>
		</div>
