<div class="wrapper">
	<?php $this->load->view('components/navbar') ?>
	<aside class="main-sidebar hidden-print">
		<section class="sidebar" id="sidebar-scroll">
			<ul class="sidebar-menu">
				<li class="treeview">
					<a href="<?= base_url('sekre') ?>" class="waves-effecr waves-dark"><i class="ti-plus txt-warning"></i><span>Input Warga</span></a>
				</li>
				<li class="active treeview">
					<a href="<?= base_url('sekre/data_warga') ?>" class="waves-effecr waves-dark"><i class="ti-server txt-primary"></i><span>Data Warga</span></a>
				</li>
			</ul>
		</section>
	</aside>
	<div class="content-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="main-header">
					<h4><span class="ti-server"></span> Data Warga</h4>
					<div style="float: right;">
						<a href="<?= site_url('admin/print_laporan') ?>" target="_blank">
							<!-- <button class="btn btn-primary" style="margin-right: 20px;">Print</button> -->
						</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div id="filter" class="card card-block" style="margin-bottom: 20px;">
						<h5>Filter</h5>
						<form action="<?=base_url()?>sekre/filter_data" method="post" class="row">
							<div class="col-lg-3">
								<p>RT</p>
								<select name="rt" id="" class="form-control">
									<option value="0">Semua</option>
									<?php for ($i=1; $i <= count($rt); $i++){ ?>
										<option value="<?=$rt[$i-1]?>" <?php if($this->session->userdata('filter')) {if($this->session->userdata('rt') == $rt[$i-1]) echo 'selected';} ?>>RT <?=$rt[$i-1]?></option>
									<?php } ?>
								</select>
							</div>
							<div class="col-lg-3">
								<p>Status Bekerja</p>
								<select name="stat_work" id="" class="form-control">
									<option value="3">Semua</option>
									<option value="1" <?php if($this->session->userdata('filter')) {if($this->session->userdata('stat_work') == 1) echo 'selected';} ?>>Bekerja</option>
									<option value="0" <?php if($this->session->userdata('filter')) {if($this->session->userdata('stat_work') == 0) echo 'selected';} ?>>Tidak Bekerja</option>
								</select>
							</div>
							<div class="col-lg-3">
								<p>Action</p>
								<button type="submit" class="btn btn-primary btn-block">Filter</button>
							</div>
						</form>
					</div>
					<?php if($this->session->userdata('filter')) { ?>
						<form action="<?= base_url() ?>sekre/remove_filter">
							<button class="btn btn-default" style="margin-bottom: 10px;" type="submit">Hapus Filter</button>
						</form>
					<?php } ?>
					<div class="card">
						<table class="table">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>RW</th>
									<th>RT</th>
									<th>Status Bekerja</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; for ($i=0; $i < count($warga); $i++) { ?>
									<tr>
										<td><?=$no++;?></td>
										<td><?=$warga[$i]['nama'];?></td>
										<td><?=$warga[$i]['rw'];?></td>
										<td><?=$warga[$i]['rt'];?></td>
										<td><?php if($warga[$i]['bekerja'] == 1) {echo 'Bekerja';} else {echo 'Tidak Bekerja';} ?></td>
										<td>
											<a href="<?= base_url() ?>sekre/edit_warga/<?=$warga[$i]['nik']?>">
												<button class="btn btn-primary">Ubah</button>	
											</a>
											<button class="btn btn-danger" data-toggle="modal" data-target="#delete" title="Hapus Warga" onclick="deleteWarga(<?=$warga[$i]['nik']?>)">Hapus</button>	
										</td>
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

<div class="modal fade" id="delete" tabindex="1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="hapusWarga">Hapus Warga
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</h5>
			</div>
			<div class="modal-body">
				<p>Anda yakin ingin menghapus warga ?</p>
			</div>
			<form action="<?= site_url('sekre/delete_warga/') ?>" method="post">
				<input type="hidden" name="idWarga" id="idWargaDel">
				<div class="modal-footer">
					<button type="button" class="btn btn-disable" data-dismiss="modal" aria-label="Close">No</button>
					<button type="submit" class="btn btn-success">Yes</button>
				</div>
			</form>
		</div>
	</div>
</div>
