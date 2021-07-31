<div class="wrapper">
	<header class="main-header-top hidden-print">
		<a href="" class="logo"><img src="assets/images/logo-jkt.png" alt="" class="ing-fluid able-logo"  style="width: 40px;"></a>
		<nav class="navbar navbar-static-top">
			<a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>
			<div class="navbar-custom-menu f-right">
				<ul class="top-nav">
					<li class="dropdown">
						<a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
							<!-- <span><img class="img-circle " src="assets/images/avatar-1.png" style="width:40px;" alt="User Image"></span> -->
							<span><b><?= $this->session->userdata['nama'] ?></b></span>
							<!-- <span><?= $user['username'] ?></b> <i class=" icofont icofont-simple-down"></i></span> -->
						</a>
						<a href="<?= site_url('user/logout') ?>" role="button">
							<span><i class="icon-logout"></i> Logout</span>
						</a>
						<ul class="dropdown-menu settings-menu">
							<!-- <li><a href="#!"><i class="icon-settings"></i> Settings</a></li> -->
							<li><a href="#"><i class="icon-user"></i> Profile</a></li>
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
					<a href="<?= site_url('user') ?>" class="waves-effecr waves-dark"><i class="ti-info-alt txt-primary"></i><span>Berita</span></a>
				</li>
				<li class="treeview">
					<a href="<?= site_url('user/profile') ?>" class="waves-effecr waves-dark"><i class="ti-user txt-success"></i><span>Profil</span></a>
				</li>
			</ul>
		</section>
	</aside>
	<div class="content-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="main-header">
					<h4><span class="ti-info-alt"></span> Berita</h4>
				</div>
			</div>
			<div class="row">
<?php foreach ($berita as $key => $value) { ?>
			<div class="col-lg-4">
				<div class="card card-block">
					<img src="<?php if(empty($value['foto'])) {echo base_url("assets/foto/no-image.jpg");}else {echo base_url("assets/foto/".$value['foto']);} ?>" alt="No Image" style="max-height: 200px; height: 200px; width: 100%;">
					<div class="body-berita">
						<h5 class="card-title"><?= $value['title'] ?></h5>
						<p class="card-text"><?= $value['deskripsi'] ?></p>
					</div>
					<a href="<?= site_url("user/beritaDetail/". $value['id']) ?>">
						<button class="btn btn-inverse-primary btn-block">Lihat Detail</button>
					</a>
				</div>
			</div>
<?php } ?>
			</div>
		</div>
	</div>
</div>

<script>
	var body = document.querySelector('body');
	body.classList.add('fixed');
	body.classList.add('sidebar-mini');
	console.log(body);
</script>
