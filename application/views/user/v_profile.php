<div class="wrapper">
	<header class="main-header-top hidden-print">
		<a href="" class="logo"><img src="<?=base_url()?>assets/images/logo-jkt.png" alt="" class="ing-fluid able-logo" style="width: 40px;"></a>
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
					<a href="<?= site_url('user') ?>" class="waves-effecr waves-dark"><i class="ti-info-alt txt-primary"></i><span>Berita</span></a>
				</li>
				<li class="active treeview">
					<a href="<?= site_url('user/profile') ?>" class="waves-effecr waves-dark"><i class="ti-user txt-success"></i><span>Profil</span></a>
				</li>
			</ul>
		</section>
	</aside>
	<div class="content-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="main-header">
					<h4><span class="icon-user"> Profil</span></h4>
				</div>
			</div>
			<div class="row">
				<ul class="nav nav-tabs md-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#dataWarga" role="tab"><i class="icofont icofont-home"></i> Data Warga</a>
						<div class="slide"></div>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#riwayatPekerjaan" role="tab"><i class="icofont icofont-ui-user"></i> Riwayat Pekerjaan</a>
						<div class="slide"></div>
					</li>
					<!-- <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#messages7" role="tab"><i class="icofont icofont-ui-message"></i>Messages</a>
            <div class="slide"></div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#settings7" role="tab"><i class="icofont icofont-ui-settings"></i>Settings</a>
            <div class="slide"></div>
        </li> -->
				</ul>
				<div class="tab-content" style="background-color: white; min-height: 100vh">
					<div class="tab-pane active" id="dataWarga" role="tabpanel" style="min-height: 100vh">
					<p>
						<?php

						if (!empty($this->session->userdata('incorrectPass'))) {
							$res = $this->session->userdata('incorrectPass');
							$this->session->unset_userdata("incorrectPass");
							$msg = '<div class="alert alert-danger" role="alert">
												Password yang dimasukkan salah, password tidak berhasil diganti.
											</div>';
							echo $msg;
						}

						?>
					</p>
						<div class="card-header">
							<div class="card-header-text">
								Data Warga
							</div>
						</div>
						<div class="card-block">
							<form action="<?=site_url('user/updateData')?>" method="post">
								<div class="col-lg-6">
									<div class="form-group">
										<label for="" class="form-control-label">NIK</label>
										<input type="text" class="form-control" value="<?= $warga['nik'] ?>" disabled>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="" class="form-control-label">Nama</label>
										<input type="text" class="form-control" value="<?= $warga['nama'] ?>" disabled>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="" class="form-control-label">Agama</label>
										<input type="text" class="form-control" value="<?= $warga['agama'] ?>" disabled>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="" class="form-control-label">Jenis Kelamin</label>
										<input type="text" class="form-control" value="<?= $warga['jenis_kelamin'] ?>" disabled>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="" class="form-control-label">Tempat & Tanggal Lahir</label>
										<input type="text" class="form-control" value="<?php echo $warga['tempat_lahir'] .", ". $warga['tanggal_lahir']?>" disabled>
									</div>
								</div>
								<!-- <div class="col-lg-6">
									<div class="form-group">
										<label for="" class="form-control-label">Status Perkawinan</label>
										<input type="text" class="form-control" value="" disabled>
									</div>
								</div> -->
								<div class="col-lg-12" id="alamatDetail">
									<div class="row">
										<div class="col-lg-6">
											<p style="font-weight: bold; margin-bottom: 20px; margin-top: 20px; text-decoration: underline;">Detail Alamat KTP</p>
											<div class="row">
												<div class="col-lg-12">
													<div class="form-group">
														<label for="" class="form-control-label">Alamat</label>
														<input type="text" class="form-control" value="<?= $warga['alamat'] ?>" disabled>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="form-group">
														<label for="" class="form-control-label">RT</label>
														<input type="text" class="form-control" value="<?= $warga['rt'] ?>" disabled>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="form-group">
														<label for="" class="form-control-label">RW</label>
														<input type="text" class="form-control" value="<?= $warga['rw'] ?>" disabled>
													</div>
												</div>
												<!-- <div class="col-lg-6">
													<div class="form-group">
														<label for="" class="form-control-label">Kelurahan</label>
														<input type="text" class="form-control" value="<?= $warga['nik'] ?>" disabled>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="form-group">
														<label for="" class="form-control-label">Kecamatan</label>
														<input type="text" class="form-control" value="" disabled>
													</div>
												</div> -->
												<div class="col-lg-12">
													<div class="form-check">
														<label id="isAddressSame" for="isAddressSameCb" class="form-check-label">
															<input type="hidden" name="sameAddress" id="sameAddress" value="<?php if($warga['stats_alamat'] != '0') {echo 'not same';} else {echo 'same';}?>">
															<input id="isAddressSameCb" class="form-check-input" type="checkbox" <?php if($warga['stats_alamat'] != '0') {echo 'checked';}?>>
															Alamat sekarang tidak sama dengan alamat KTP ?
														</label>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-6" id="currAddress" style="display: <?php if($warga['stats_alamat'] != '1') {echo 'none';} else {echo 'block';}?>;">
											<p style="font-weight: bold; margin-bottom: 20px; margin-top: 20px; text-decoration: underline;">Detail Alamat KTP Sekarang</p>
											<div class="row">
												<div class="col-lg-12">
													<div class="form-group">
														<label for="" class="form-control-label">Alamat</label>
														<input type="text" class="form-control" name="cur_alamat" value="<?= $warga['cur_alamat'] ?>">
													</div>
												</div>
												<div class="col-lg-6">
													<div class="form-group">
														<label for="" class="form-control-label">RW</label>
														<input type="text" class="form-control" name="cur_rw" value="<?= $warga['cur_rw'] ?>">
													</div>
												</div>
												<div class="col-lg-6">
													<div class="form-group">
														<label for="" class="form-control-label">RT</label>
														<input type="text" class="form-control" name="cur_rt" value="<?= $warga['cur_rt'] ?>">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-12" id="dataTambahan">
									<p style="font-weight: bold; margin-bottom: 20px; margin-top: 20px; text-decoration: underline;">Data Tambahan</p>
									<div class="row">
										<div class="col-lg-6">
											<div class="form-group">
												<label for="" class="form-control-label">Email</label>
												<input type="text" name="email" class="form-control" value="<?= $warga['email'] ?>">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<label for="" class="form-control-label">No. Handphone</label>
												<input type="text" name="handphone" class="form-control" value="<?= $warga['handphone'] ?>">
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-12" id="dataTambahan">
									<p style="font-weight: bold; margin-bottom: 20px; margin-top: 20px; text-decoration: underline;">Status Bekerja</p>
									<div class="row">
										<div class="col-lg-6">
											<div class="form-group row">
												<label for="example-search-input" class="col-lg-4 col-form-label form-control-label">Status Bekerja</label>
												<div class="col-lg-8">
														<select name="statusBekerja" id="statusBekerja" class="form-control">
															<option value="1" <?php if($warga['bekerja']=='1') echo 'selected'; ?>>Bekerja</option>
															<option value="0" <?php if($warga['bekerja']=='0') echo 'selected'; ?>>Tidak Bekerja</option>
														</select>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-12" id="aksi">
									<p style="font-weight: bold; margin-bottom: 20px; margin-top: 20px; text-decoration: underline;">Aksi</p>
									<div class="row">
										<div class="col-lg-3">
											<button class="btn btn-info" type="button" data-toggle="modal" data-target="#gantiPassword" data-backdrop="static" data-keyboard="false">Ubah Password</button>
										</div>
									</div>
								</div>
								<div class="col-lg-12" style="text-align: right;">
									<br>
									<button class="btn btn-danger">Cancel</button>
									<button class="btn btn-success" type="submit">Simpan Perubahan</button>
								</div>
							</form>
						</div>
					</div>
					<div class="tab-pane" id="riwayatPekerjaan" role="tabpanel" style="min-height: 100vh">
						<div class="card-block">
							<form action="<?= site_url('user/insertWork') ?>" method="post">							
								<div id="newWork" class="col-lg-12">
									<div class="row">
										<div class="col-lg-6">
											<div class="form-group">
												<label for="" class="form-control-label">Nama Perusahaan</label>
												<input type="text" class="form-control" name="perusahaan" value="" required>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<label for="" class="form-control-label">Bidang Pekerjaan</label>
												<input type="text" class="form-control" name="bidang" value="" required>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<label for="" class="form-control-label">Mulai Bekerja</label>
												<!-- <input type="text" class="form-control" name="start-working" value=""> -->
												<input class="form-control" type="date" value="" name="start-working" id="start-working" required>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<label for="" class="form-control-label">Selesai Bekerja</label>
												<!-- <input type="text" class="form-control" name="end-working" value=""> -->
												<input class="form-control" type="date" value="" name="end-working" id="end-working" required>
											</div>
											<div class="form-check" id="checkboxBekerja">
													<input id="status-work" type="hidden" name="status-work" value="0">
													<label for="stillWork" class="form-check-label">
													<input id="stillWork" class="form-check-input" type="checkbox">
													Masih Bekerja
												</label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<button id="addWork" type="submit" class="btn btn-primary">Tambah Riwayat Pekerjaan</button>
								</div>
							</form>
						</div>
						<!-- <div class="card-header">
							<div class="card-header-text">
								Riwayat Pekerjaan
							</div>
						</div> -->
						<div class="card-block">
							<!-- <br> -->
							<div class="card-header-text">
								Riwayat Pekerjaan
							</div>
							<div id="listPekerjaan" class="col-lg-12" style="margin-top: 20px;">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>No</th>
											<th>Nama PT</th>
											<th>Bidang</th>
											<th>Mulai Bekerja</th>
											<th>Selesai Bekerja</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
<?php $no = 1; foreach ($works as $key => $value) {?>
										<tr>
											<td><?=$no?></td>
											<td id="perusahaan-<?=$value['id']?>"><?=$value['perusahaan']?></td>
											<td id="bidang-<?=$value['id']?>"><?=$value['bidang']?></td>
											<td id="start-<?=$value['id']?>"><?php echo date('d M Y', strtotime($value['start_work']))?></td>
											<td id="end-<?=$value['id']?>"><?php if(!empty($value['end_work'])) {echo date('d M Y', strtotime($value['end_work']));} else {echo "Masih Bekerja";}?></td>
											<td>
												<button class="btn btn-primary" data-toggle="modal" data-target="#editPekerjaan" onclick="editWork(<?= $value['id'] ?>)">Edit</button>
												<button class="btn btn-danger" data-toggle="modal" data-target="#delete" onclick="deleteWork(<?= $value['id'] ?>)">Hapus</button>
											</td>
										</tr>
<?php $no++;} ?>
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

<div class="modal fade" id="gantiPassword" tabindex="1" role="dialog" aria-labelledby="gantiPasswordModal" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Ubah Password
					<button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeChangeModal">
						<span aria-hidden="true">&times;</span>
					</button>
				</h5>
			</div>
			<form action="<?= site_url('user/changePassword') ?>" method="post" id="formChange">
				<div class="modal-body">
					<input type="hidden" name="nikWarga" id="nikWargaPass">
					<div class="form-group">
						<label for="" class="form-control-label">Password Lama</label>
						<input type="password" class="form-control" name="oldPass" id="lastPassword" required>
					</div>
					<div class="form-group">
						<label for="" class="form-control-label">Password Baru</label>
						<input type="password" class="form-control" name="newPass" id="newPassword" required>
					</div>
					<div class="form-group" id="reNewPassDiv">
						<label for="" class="form-control-label">Password Baru Konfirmasi</label>
						<input type="password" class="form-control" name="confirmPass" id="retypePassword" required>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-disable" data-dismiss="modal" aria-label="Close" id="closeChange">Tutup</button>
					<button type="submit" class="btn btn-success" id="submitChangePass" disabled>Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="modal fade" id="editPekerjaan" tabindex="1" role="dialog" aria-labelledby="editPekerjaanModal" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="editPekerjaanTitle">Edit Pekerjaan
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</h5>
			</div>
			<form action="<?= site_url('user/updateWork') ?>" method="post">
				<div class="modal-body">
					<input type="hidden" name="idPekerjaan" id="idPekerjaan">
					<div class="form-group">
						<label for="" class="form-control-label">Nama Perusahaan</label>
						<input type="text" class="form-control" name="namaPerusahaan" id="namaPerusahaan" required>
					</div>
					<div class="form-group">
						<label for="" class="form-control-label">Bidang Pekerjaan</label>
						<input type="text" class="form-control" name="namaBidang" id="bidang" required>
					</div>
					<div class="form-group">
						<label for="" class="form-control-label">Mulai Bekerja</label>
						<input type="date" class="form-control" name="startWorking" id="startWorking" required>
					</div>
					<div class="form-group">
						<label for="" class="form-control-label">Selesai Bekerja</label>
						<input type="date" class="form-control" name="endWorking" id="endWorking">
					</div>
					<div class="form-check" id="checkboxBekerjaModal">
							<input id="statusWork" type="hidden" name="statusWork" value="0">
							<label for="stillWorkModal" class="form-check-label">
							<input id="stillWorkModal" class="form-check-input" type="checkbox">
							Masih Bekerja
						</label>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-disable" data-dismiss="modal" aria-label="Close">Tutup</button>
					<button type="submit" class="btn btn-success">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="modal fade" id="delete" tabindex="1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="ubahAdminTitle">Delete Riwayat
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</h5>
			</div>
			<div class="modal-body">
				<p>Anda yakin ingin menghapus riwayat pekerjaan ?</p>
			</div>
			<form action="<?= site_url('user/deleteWork') ?>" method="post">	
				<input type="hidden" name="idWork" id="idWorkDel">
				<div class="modal-footer">
					<button type="button" class="btn btn-disable" data-dismiss="modal" aria-label="Close">Tidak</button>
					<button type="submit" class="btn btn-success">Iya</button>
				</div>
			</form>
		</div>
	</div>
</div>
