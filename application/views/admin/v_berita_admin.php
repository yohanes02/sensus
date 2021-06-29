<div class="wrapper">
	<?php $this->load->view('components/navbar') ?>
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
					<a href="<?= base_url('admin/laporan') ?>" class="waves-effecr waves-dark"><i class="ti-server"></i><span>Laporan</span></a>
				</li>
				<li class="treeview">
					<a href="<?= base_url('admin/kelola_admin') ?>" class="waves-effecr waves-dark"><i class="ti-settings"></i><span>Kelola Admin</span></a>
				</li>
			</ul>
		</section>
	</aside>
	<div class="content-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="main-header">
					<h4><span class="ti-info-alt"></span> BERITA</h4>
					<div style="float: right;">
					<a href="<?= site_url('admin/buat_berita') ?>">
						<button class="btn btn-primary" style="margin-right: 20px;"><i class="ti-plus"></i> Tambah</button>
					</a>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- <div class="col-sm-12">
					<div class="card">
						<div class="item-berita">
							<div class="row">
								<div class="col-lg-2">
									<img src="https://media-exp1.licdn.com/dms/image/C560BAQH9Cnv1weU07g/company-logo_200_200/0/1575479070098?e=2159024400&v=beta&t=QM9VSoWVooxDwCONWh22cw0jBBlBPcBOqAxbZIE18jw" alt="No Imange" class="rounded img-berita">
								</div>
								<div class="col-lg-10">
									<h5>Pelatihan Kerja</h5>
									<span>Description</span>
									<p>Pelatihan - 13 Agustus 2021</p>
								</div>
							</div>
						</div>
						<div class="item-berita">
							<div class="row">
								<div class="col-lg-2">
									<img src="https://media-exp1.licdn.com/dms/image/C560BAQH9Cnv1weU07g/company-logo_200_200/0/1575479070098?e=2159024400&v=beta&t=QM9VSoWVooxDwCONWh22cw0jBBlBPcBOqAxbZIE18jw" alt="No Imange" class="rounded img-berita">
								</div>
								<div class="col-lg-10">
									<h5>Pelatihan Kerja</h5>
									<span>Description</span>
									<p>Pelatihan - 13 Agustus 2021</p>
								</div>
							</div>
						</div>
					</div>
				</div> -->
<?php foreach ($berita as $key => $value) { ?>
				<div class="col-lg-4">
					<div class="card">
						<img src="<?php if(empty($value['foto'])){echo base_url("assets/foto/no-image.jpg");} else {echo base_url("assets/foto/".$value['foto']);} ?>" alt="No Image" style="max-height: 200px; height: 200px; width: 100%;">
						<div class="body-berita">
							<h5 class="card-title"><?= $value['title'] ?></h5>
							<p class="card-text"><?= $value['deskripsi'] ?></p>
						</div>
						<a href="<?= site_url("admin/beritaDetail/". $value['id']) ?>">
							<button class="btn btn-inverse-primary btn-block">Lihat Detail</button>
						</a>
					</div>
				</div>
<?php } ?>
			</div>
		</div>
	</div>
</div>
