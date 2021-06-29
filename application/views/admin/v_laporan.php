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
					<h4><span class="ti-server"></span> Laporan</h4>
					<div style="float: right;">
						<a href="<?= site_url('admin/print_laporan') ?>" target="_blank">
							<button class="btn btn-primary" style="margin-right: 20px;">Print</button>
						</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<table class="table">
							<thead>
								<tr>
									<th colspan="<?php echo count($history[0]['data'])+1;?>" style="font-size: large;">Perbandingan Penganguran Tiap RW</th>
								</tr>
								<tr>
									<th>RW</th>
<?php for ($i=0; $i < count($history[0]['data']); $i++) { ?>
									<th style="text-align: center;"><?=$history[0]['data'][$i]['tahun']?></th>
<?php } ?>
								</tr>
							</thead>
							<tbody>
<?php foreach ($history as $key => $value) { ?>
								<tr>
									<td><?=$value['name']?></td>
<?php foreach ($value['data'] as $key2 => $value2) { ?>
									<td style="width: 15%; text-align: center;">
										<?=round(($value2['data']['pengangguran']/($value2['data']['pengangguran']+$value2['data']['pekerja'])) * 100, 2) . '%'?>
									</td>
<?php } ?>
								</tr>
<?php } ?>

								<!-- <tr>
									<td>RW 01</td>
									<td>10%</td>
									<td>10%</td>
									<td>5%</td>
								</tr>
								<tr>
									<td>RW 02</td>
									<td>10%</td>
									<td>10%</td>
									<td>5%</td>
								</tr>
								<tr>
									<td>RW 03</td>
									<td>10%</td>
									<td>10%</td>
									<td>5%</td>
								</tr>
								<tr>
									<td>RW 04</td>
									<td>10%</td>
									<td>10%</td>
									<td>5%</td>
								</tr>
								<tr>
									<td>RW 05</td>
									<td>10%</td>
									<td>10%</td>
									<td>5%</td>
								</tr>
								<tr>
									<td>RW 06</td>
									<td>10%</td>
									<td>10%</td>
									<td>5%</td>
								</tr>
								<tr>
									<td>RW 07</td>
									<td>10%</td>
									<td>10%</td>
									<td>5%</td>
								</tr>
								<tr>
									<td>RW 08</td>
									<td>10%</td>
									<td>10%</td>
									<td>5%</td>
								</tr>
								<tr>
									<td>RW 09</td>
									<td>10%</td>
									<td>10%</td>
									<td>5%</td>
								</tr>
								<tr>
									<td>RW 10</td>
									<td>10%</td>
									<td>10%</td>
									<td>5%</td>
								</tr> -->
							</tbody>
						</table>
					</div>
				</div>
				<div class="col-lg-12"></div>
			</div>
		</div>
	</div>
</div>
