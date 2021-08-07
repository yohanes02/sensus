<div class="wrapper">
	<?php $this->load->view('components/navbar') ?>
	<aside class="main-sidebar hidden-print">
		<section class="sidebar" id="sidebar-scroll">
			<ul class="sidebar-menu">
				<li class="treeview">
					<a href="<?= base_url('admin') ?>" class="waves-effecr waves-dark"><i class="ti-desktop txt-primary"></i><span>Dashboard</span></a>
				</li>
				<li class="treeview">
					<a href="<?= base_url('admin/berita') ?>" class="waves-effecr waves-dark"><i class="ti-info-alt txt-success"></i><span>Berita</span></a>
				</li>
				<li class="active treeview">
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
					<h4><span class="ti-server"></span> Laporan</h4>
					<div style="float: right; display: none;">
						<a href="<?= site_url('admin/print_laporan') ?>" target="_blank">
							<button class="btn btn-primary" style="margin-right: 20px;">Print</button>
						</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<h5>Perbandingan pengangguran tiap RW tiap tahun</h5>
					<div class="card" style="padding: 10px;">
						<div id="chartLurah"></div>
					</div>
					<div class="row">
						<h5 class="col-md-12">Perbandingan Pekerja dan Penggangguran per RW</h5>
						<div class="col-md-4">
							<div id="chart1" class="card" style="padding: 10px;"></div>
						</div>
						<div class="col-md-4">
							<div id="chart2" class="card" style="padding: 10px;"></div>
						</div>
						<div class="col-md-4">
							<div id="chart3" class="card" style="padding: 10px;"></div>
						</div>
						<div class="col-md-4">
							<div id="chart4" class="card" style="padding: 10px;"></div>
						</div>
						<div class="col-md-4">
							<div id="chart5" class="card" style="padding: 10px;"></div>
						</div>
						<div class="col-md-4">
							<div id="chart6" class="card" style="padding: 10px;"></div>
						</div>
						<div class="col-md-4">
							<div id="chart7" class="card" style="padding: 10px;"></div>
						</div>
						<div class="col-md-4">
							<div id="chart8" class="card" style="padding: 10px;"></div>
						</div>
						<div class="col-md-4">
							<div id="chart9" class="card" style="padding: 10px;"></div>
						</div>
						<div class="col-md-4">
							<div id="chart10" class=card4 style="padding: 10px;""></div>
						</div>
					</div>
					<table id=" datatable" style="display: none;">
								<thead>
									<tr>
										<th></th>
										<th>Jane</th>
										<th>John</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th>Apples</th>
										<td>3</td>
										<td>4</td>
									</tr>
									<tr>
										<th>Pears</th>
										<td>2</td>
										<td>0</td>
									</tr>
									<tr>
										<th>Plums</th>
										<td>5</td>
										<td>11</td>
									</tr>
									<tr>
										<th>Bananas</th>
										<td>1</td>
										<td>1</td>
									</tr>
									<tr>
										<th>Oranges</th>
										<td>2</td>
										<td>4</td>
									</tr>
								</tbody>
								</table>
								<table class="table" style="display: none;">
									<thead>
										<tr>
											<th colspan="<?php echo count($history[0]['data']) + 1; ?>" style="font-size: large;">Perbandingan Penganguran Tiap RW</th>
										</tr>
										<tr>
											<th>RW</th>
											<?php for ($i = 0; $i < count($history[0]['data']); $i++) { ?>
												<th style="text-align: center;"><?= $history[0]['data'][$i]['tahun'] ?></th>
											<?php } ?>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($history as $key => $value) { ?>
											<tr>
												<td><?= $value['name'] ?></td>
												<?php foreach ($value['data'] as $key2 => $value2) { ?>
													<td style="width: 15%; text-align: center;">
														<?= round(($value2['data']['pengangguran'] / ($value2['data']['pengangguran'] + $value2['data']['pekerja'])) * 100, 2) . '%' ?>
													</td>
												<?php } ?>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
						<div class="col-lg-12"></div>
					</div>
				</div>
			</div>
		</div>
