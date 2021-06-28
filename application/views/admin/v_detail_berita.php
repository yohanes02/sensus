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
							<span><?= $this->session->userdata['nama'] ?></span>
							<!-- <span><?= $user['username'] ?></b> <i class=" icofont icofont-simple-down"></i></span> -->
						</a>
						<a href="<?= site_url('user/logout') ?>" role="button">
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
				<li class="treeview">
					<a href="<?= base_url('admin') ?>" class="waves-effecr waves-dark"><i class="ti-desktop"></i><span>Dashboard</span></a>
				</li>
				<li class="treeview">
					<a href="<?= base_url('admin/berita') ?>" class="waves-effecr waves-dark"><i class="ti-info-alt"></i><span>Berita</span></a>
				</li>
				<li class="treeview">
					<a href=""<?= base_url('admin/laporan') ?>"" class="waves-effecr waves-dark"><i class="ti-server"></i><span>Laporan</span></a>
				</li>
				<li class="treeview">
					<a href="<?= base_url('admin/kelola_admin') ?>" class="waves-effecr waves-dark"><i class="ti-settings"></i><span>Kelola Admin</span></a>
				</li>
			</ul>
		</section>
	</aside>
	<div class="content-wrapper">
		<div class="container-fluid" style="background: white;">
			<div class="row">
				<div class="col-lg-12" style="margin: 20px 0px;">
					<a href="<?= site_url('admin/berita') ?>" style="cursor: pointer;"><label for="" style="cursor: pointer;"><i class="ti-arrow-left"></i> Kembali</label></a>
					<div class="dataBerita" style="margin-top: 10px;">
						<h4><?= $detail['title'] ?></h4>
						<img src="<?php if(empty($detail['foto'])){echo base_url("assets/foto/no-image.jpg");}else{echo base_url("assets/foto/".$detail['foto']);} ?>" class="img-fluid" alt="IMAGE" style="height: 300px; width: 100%;">
						<span>Uploaded: 29 Februari 2021</span>
						<div id="isi" style="margin-top: 20px;">
							<?= $detail['isi'] ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
