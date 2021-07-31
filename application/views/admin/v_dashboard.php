<div class="wrapper">
	<?php $this->load->view('components/navbar') ?>
	<aside class="main-sidebar hidden-print">
		<section class="sidebar" id="sidebar-scroll">
			<ul class="sidebar-menu">
				<li class="active treeview">
					<a href="<?= base_url('admin') ?>" class="waves-effecr waves-dark"><i class="ti-desktop txt-primary"></i><span>Dashboard</span></a>
				</li>
				<li class="treeview">
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
					<a href="<?= base_url('admin/kelola_sekretaris') ?>" class="waves-effecr waves-dark"><i class="ti-settings txt-warning"></i><span>Kelola Sekretaris</span></a>
				</li>
			</ul>
		</section>
	</aside>
	<div class="content-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="main-header">
					<h4><span class="ti-dashboard"></span> Dashboard</h4>
				</div>
			</div>
			<div class="row dashboard-header">
				<div class="col-lg-4 col-md-6">
					<div class="card dashboard-product">
						<h5 class="txt-disable">Warga >= 17 Tahun</h5 class="txt-disable">
						<h2 class="dashboard-total-products text-dark" id="total-data"></h2>
						<span class="text-dark">Data yang sudah diinput masuk</span>
						<div class="side-box btn btn-primary">
							<i class="ti-user txt-white"></i>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="card dashboard-product">
						<h5 class="txt-disable">Pekerja</h5 class="txt-disable">
						<h2 class="dashboard-total-products text-dark" id="total-pekerja"></h2>
						<span class="text-dark">_</span>
						<div class="side-box btn btn-success">
							<i class="ti-user txt-white"></i>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="card dashboard-product">
						<h5 class="txt-disable">Pengganguran</h5 class="txt-disable">
						<h2 class="dashboard-total-products text-dark" id="total-pengangguran"></h2>
						<span class="text-dark">_</span>
						<div class="side-box btn btn-danger">
							<i class="ti-user txt-white"></i>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-xs-12">
					<div class="card">
						<div class="card-header">
							<h5 style=" text-align: center">Persentase Pekerja & Pengganguran</h5>
						</div>
						<div class="card-block">
							<div id="pieSummary" style="min-width: 250px; height: 460px; margin: 0 auto;"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-xs-12">
				<div class="card">
						<div class="card-header">
							<h5 style=" text-align: center">Persentase Detail Pengganguran</h5>
						</div>
						<div class="card-block">
							<div id="pieDetail" style="min-width: 250px; height: 460px; margin: 0 auto;"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="row" style="display: none;">
				<div class="col-lg-6 col-md-12">
					<div class="card">
						<div class="card-header">
							<h5 style=" text-align: center">Wilayah yang perlu di prioritaskan berdasarkan K-Mean</h5>
						</div>
						<div class="card-block">
							<div class="table-responsive">
								<table class="table table-hover" id="kmeans-table">
								<!-- <thead>
									<tr>
											<th>#</th>
											<th>Wilayah</th>
											<th>Jarak Terpendek</th>
									</tr>
								</thead>
								<tbody>
									<tr>
											<td>1</td>
											<td>RW 01</td>
											<td>Ducky</td>
									</tr>
									<tr>
											<td>2</td>
											<td>RW 02</td>
											<td>Ducky</td>
									</tr>
									<tr>
											<td>3</td>
											<td>RW 03</td>
											<td>Ducky</td>
									</tr>
									<tr>
											<td>4</td>
											<td>RW 04</td>
											<td>Ducky</td>
									</tr>
									<tr>
											<td>5</td>
											<td>RW 05</td>
											<td>Ducky</td>
									</tr>
								</tbody> -->
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12" style="display: none;">
					<div class="card">
						<div class="card-header">
							<h5 style=" text-align: center">Wilayah yang perlu di prioritaskan berdasarkan K-Mean</h5>
						</div>
						<div class="card-block">
							<div class="table-responsive">
								<table class="table table-hover">
								<thead>
									<tr>
											<th>#</th>
											<th>Wilayah</th>
											<th>Jarak Terpendek</th>
									</tr>
								</thead>
								<tbody>
									<tr>
											<td>1</td>
											<td>RW 01</td>
											<td>Ducky</td>
									</tr>
									<tr>
											<td>2</td>
											<td>RW 02</td>
											<td>Ducky</td>
									</tr>
									<tr>
											<td>3</td>
											<td>RW 03</td>
											<td>Ducky</td>
									</tr>
									<tr>
											<td>4</td>
											<td>RW 04</td>
											<td>Ducky</td>
									</tr>
									<tr>
											<td>5</td>
											<td>RW 05</td>
											<td>Ducky</td>
									</tr>
									<tr>
											<td>5</td>
											<td>RW 05</td>
											<td>Ducky</td>
									</tr>
									<tr>
											<td>5</td>
											<td>RW 05</td>
											<td>Ducky</td>
									</tr>
								</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
