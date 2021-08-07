<div class="wrapper">
	<header class="main-header-top hidden-print">
		<a href="" class="logo"><img src="assets/images/logo-jkt.png" alt="" class="ing-fluid able-logo" style="width: 40px;"></a>
		<nav class="navbar navbar-static-top">
			<a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>
			<div class="navbar-custom-menu f-right">
				<ul class="top-nav">
					<li class="dropdown">
						<a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
							<!-- <span><img class="img-circle " src="assets/images/avatar-1.png" style="width:40px;" alt="User Image"></span> -->
							<span><b><?= $this->session->userdata['nama_user'] ?></b></span>
							<!-- <span><?= $user['username'] ?></b> <i class=" icofont icofont-simple-down"></i></span> -->
						</a>
						<a href="<?= site_url('admin/logout') ?>" role="button">
							<span><i class="icon-logout"></i> Logout</span>
						</a>
						<ul class="dropdown-menu settings-menu">
							<!-- <li><a href="#!"><i class="icon-settings"></i> Settings</a></li> -->
							<li><a href="<?= site_url('user/profile') ?>"><i class="icon-user"></i> Profile</a></li>
							<!-- <li><a href="#"><i class="icon-envelope-open"></i> My Messages</a></li> -->
							<li class="p-0">
								<div class="dropdown-divider m-0"></div>
							</li>
							<!-- <li><a href="#"><i class="icon-lock"></i> Lock Screen</a></li> -->
							<li><a href="<?= base_url('user/logout') ?>"><i class="icon-logout"></i> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<aside class="main-sidebar hidden-print">
		<section class="sidebar" id="sidebar-scroll">
			<ul class="sidebar-menu">
				<li class="active treeview">
					<a href="<?= base_url('sekre/input_warga') ?>" class="waves-effecr waves-dark"><i class="ti-plus txt-warning"></i><span>Input Warga</span></a>
				</li>
				<li class="treeview">
					<a href="<?= base_url('sekre/data_warga') ?>" class="waves-effecr waves-dark"><i class="ti-server txt-primary"></i><span>Data Warga</span></a>
				</li>
			</ul>
		</section>
	</aside>
	<div class="content-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="main-header">
					<h4><span class="icon-user"> Input Warga</span></h4>
				</div>
				<div class="col-lg-12">
					<div class="card card-block" style="background-color: white;">
						<form action="<?= site_url('sekre/insertWarga') ?>" method="post">
							<div id="newWork" class="col-lg-12">
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<label for="" class="form-control-label">NIK</label>
											<input type="text" class="form-control" name="nik" id="nik" value="" required>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label for="" class="form-control-label">Nama</label>
											<input type="text" class="form-control" name="nama" value="" required>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label for="" class="form-control-label">Agama</label>
											<select class="form-control" name="agama" id="agama">
												<option value="0">Islam</option>
												<option value="1">Kristen Protestan</option>
												<option value="2">Katolik</option>
												<option value="3">Hindu</option>
												<option value="4">Buddha</option>
												<option value="5">Konghucu</option>
											</select>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label for="" class="form-control-label">Jenis Kelamin</label>
											<select class="form-control" name="jekel" id="jekel">
												<option value="l">Laki-laki</option>
												<option value="p">Perempuan</option>
											</select>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label for="" class="form-control-label">Tempat Lahir</label>
											<input class="form-control" type="text" name="tmp-lhr" id="tmp-lhr" required>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label for="" class="form-control-label">Tanggal Lahir</label>
											<input class="form-control" type="date" name="tgl-lhr" id="tgl-lhr" required>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label for="" class="form-control-label">Alamat</label>
											<input class="form-control" type="text" name="alamat" id="alamat" required>
										</div>
									</div>
									<!-- <div class="col-lg-6">
										<div class="form-group">
											<label for="" class="form-control-label">RW</label>
											<input type="number" class="form-control" name="rw" id="rw" required>
										</div>
									</div> -->
									<div class="col-lg-6">
										<div class="form-group">
											<label for="" class="form-control-label">RT</label>
											<input type="number" class="form-control" name="rt" id="rt" required>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label for="" class="form-control-label">Status Bekerja</label>
											<select name="bekerja" id="bekerja" class="form-control">
												<option value="1">Bekerja</option>
												<option value="0">Tidak Bekerja</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<button id="addWork" type="submit" class="btn btn-primary">Tambah Warga</button>
							</div>
						</form>
						<?php if ($this->session->userdata('wargaSaved')) { ?>
							<p class="btn btn-block btn-success waves-effect" style="margin: 10px 15px;">
								<?= $this->session->userdata('wargaSaved'); ?>
							</p>
						<?php } ?>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
