<section class="login p-fixed d-flex text-center bg-primary common-img-bg">
	<!-- Container-fluid starts -->
	<div class="container-fluid">
		<div class="row">

			<div class="col-sm-12">
				<div class="login-card card-block">
					<form class="md-float-material" action="<?= site_url('authAdmin/login') ?>" method="post">
						<div class="text-center">
							<img src="assets/images/logo-jkt.png" alt="logo" style="width: 50px;">
						</div>
						<h3 class="text-center txt-primary">
							Masuk Admin atau Sekretaris
						</h3>
						<div class="row">
							<!-- <form action="" method="post"> -->
								<div class="col-md-12">
									<div class="md-input-wrapper">
										<input type="text" name="username" class="md-form-control" required="required" />
										<label>Username</label>
									</div>
								</div>
								<div class="col-md-12">
									<div class="md-input-wrapper">
										<input type="password" name="password" class="md-form-control" required="required" />
										<label>Password</label>
									</div>
								</div>
							<!-- </form> -->
							<!-- <div class="col-sm-6 col-xs-12">
								<div class="rkmd-checkbox checkbox-rotate checkbox-ripple m-b-25">
									<label class="input-checkbox checkbox-primary">
										<input type="checkbox" id="checkbox">
										<span class="checkbox"></span>
									</label>
									<div class="captions">Remember Me</div>

								</div>
							</div>
							<div class="col-sm-6 col-xs-12 forgot-phone text-right">
								<a href="forgot-password.html" class="text-right f-w-600"> Forget Password?</a>
							</div> -->
						</div>
						<div class="row">
							<div class="col-xs-10 offset-xs-1">
								<button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">LOGIN</button>
							</div>
						</div>
						<div class="col-sm-12 col-xs-12 text-center">
							<span class="text-muted">Login sebagai warga?</span>
							<a href="<?php echo base_url() ?>" class="f-w-600 p-l-5">Login Warga</a>
						</div>
						<!-- <div class="card-footer"> -->
						<!-- <div class="col-sm-12 col-xs-12 text-center">
							<span class="text-muted">Login sebagai admin?</span>
							<a href="register2.html" class="f-w-600 p-l-5">Login Admin</a>
						</div> -->

						<!-- </div> -->
					</form>
					<!-- end of form -->
				</div>
				<!-- end of login-card -->
			</div>
			<!-- end of col-sm-12 -->
		</div>
		<!-- end of row -->
	</div>
	<!-- end of container-fluid -->
</section>
