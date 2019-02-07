<!-- Your Account Personal Information -->

<div class="container">
	<div class="row">
		<div class="col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Ganti Password</h6>
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
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="form-group label-floating">
									<label class="control-label">Password Saat ini</label>
									<input class="form-control" placeholder="" name="password_old" type="password" value="">
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form-group label-floating">
									<label class="control-label">Password Baru</label>
									<input class="form-control" name="password_new" placeholder="" type="password">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form-group label-floating">
									<label class="control-label">Konfirmasi Password Baru</label>
									<input class="form-control" name="passconf" placeholder="" type="password">
								</div>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<button type="submit" name="submit" value="simpan" class="btn btn-primary btn-lg full-width">Ganti Password</button>
							</div>

						</div>
					</form>
				</div>
			</div>
		</div>
