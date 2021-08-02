<div class="wrapper">
	<?php $this->load->view('components/navbar') ?>
	<aside class="main-sidebar hidden-print">
		<section class="sidebar" id="sidebar-scroll">
			<ul class="sidebar-menu">
			<li class="treeview">
					<a href="<?= base_url('admin') ?>" class="waves-effecr waves-dark"><i class="ti-desktop txt-primary"></i><span>Dashboard</span></a>
				</li>
				<li class="active treeview">
					<a href="<?= base_url('admin/berita') ?>" class="waves-effecr waves-dark"><i class="ti-info-alt txt-success"></i><span>Berita</span></a>
				</li>
				<li class="treeview">
					<a href="<?= base_url('admin/laporan') ?>" class="waves-effecr waves-dark"><i class="ti-bar-chart txt-info"></i><span>Laporan</span></a>
				</li>
				<li class="treeview">
					<a href="<?= base_url('admin/input_warga') ?>" class="waves-effecr waves-dark"><i class="ti-plus txt-warning"></i><span>Input Warga</span></a>
				</li>
				<li class="treeview">
					<a href="<?= base_url('admin/data_warga') ?>" class="waves-effecr waves-dark"><i class="ti-server txt-primary"></i><span>Data Warga</span></a>
				</li>
				<li class="treeview">
					<a href="<?= base_url('admin/kelola_admin') ?>" class="waves-effecr waves-dark"><i class="ti-settings txt-success"></i><span>Kelola Admin</span></a>
				</li>
				<li class="treeview">
					<a href="<?= base_url('admin/kelola_sekretaris') ?>" class="waves-effecr waves-dark"><i class="ti-settings txt-warning"></i><span>Kelola Sekertariat</span></a>
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
					<div class="card card-block">
						<img src="<?php if(empty($value['foto'])){echo base_url("assets/foto/no-image.jpg");} else {echo base_url("assets/foto/".$value['foto']);} ?>" alt="No Image" style="max-height: 200px; height: 200px; width: 100%;">
						<div class="body-berita">
							<h5 class="card-title"><?= $value['title'] ?></h5>
							<p class="card-text"><?= $value['deskripsi'] ?></p>
						</div>
						<a href="<?= site_url("admin/beritaDetail/". $value['id']) ?>">
							<button class="btn btn-inverse-primary btn-block">Lihat Detail</button>
						</a>
						<!-- <div class="row">
							<div class="col-lg-6" style="padding-right: 0px;">
								<a href="<?=site_url("admin/edit_berita/".$value['id'])?>">
									<button class="btn btn-block btn-primary">Edit</button>
								</a>
							</div>
							<div class="col-lg-6" style="padding-left: 0px;">
								<input type="hidden" id="idBerita">
								<button class="btn btn-block btn-danger" data-toggle="modal" data-target="#delete" onclick="deleteBerita(<?=$value['id']?>)">Hapus</button>
							</div>
						</div> -->
					</div>
				</div>
<?php } ?>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="delete" tabindex="1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="ubahAdminTitle">Delete Berita
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</h5>
			</div>
			<div class="modal-body">
				<p>Anda yakin ingin menghapus berita ?</p>
			</div>
			<form action="<?= site_url('admin/deleteBerita') ?>" method="post">	
				<input type="hidden" name="idBeritaModal" id="idBeritaModalDel">
				<div class="modal-footer">
					<button type="button" class="btn btn-disable" data-dismiss="modal" aria-label="Close">Tidak</button>
					<button type="submit" class="btn btn-success">Iya</button>
				</div>
			</form>
		</div>
	</div>
</div>
