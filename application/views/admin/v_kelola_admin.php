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
				<li class="treeview">
					<a href="<?= base_url('admin/laporan') ?>" class="waves-effecr waves-dark"><i class="ti-bar-chart txt-info"></i><span>Laporan</span></a>
				</li>
				<li class="treeview">
					<a href="<?= base_url('admin/input_warga') ?>" class="waves-effecr waves-dark"><i class="ti-plus txt-warning"></i><span>Input Warga</span></a>
				</li>
				<li class="treeview">
					<a href="<?= base_url('admin/data_warga') ?>" class="waves-effecr waves-dark"><i class="ti-server txt-primary"></i><span>Data Warga</span></a>
				</li>
				<li class="active treeview">
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
					<h4><span class="ti-settings"></span> Kelola Admin</h4>
					<div style="float: right;">
						<button class="btn btn-primary" data-toggle="modal" data-target="#create" data-backdrop="static" data-keyboard="false" style="margin-right: 20px;"><i class="ti-plus"></i> Tambah</button>
					</div>
				</div>
			</div>
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
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>No</th>
									<th>Name</th>
									<th>Username</th>
									<th>Password</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1;
								for ($i = 0; $i < count($admin_data); $i++) { ?>
									<tr>
										<td><?= $no ?></td>
										<td id="name-<?= $admin_data[$i]['id'] ?>"><?= $admin_data[$i]['name'] ?></td>
										<td id="uname-<?= $admin_data[$i]['id'] ?>"><?= $admin_data[$i]['username'] ?></td>
										<td><?= $admin_data[$i]['password'] ?></td>
										<td>
											<!-- <button id="btnUbahData" type="button" data-toggle="modal" data-target="#ubahAdmin" class="btn-primary" onclick="getNum(<?= $admin_data[$i]['id'] ?>)">Ubah</button>
										<button id="btnGantiPass" type="button" data-toggle="modal" data-target="#gantiPassword" class="btn-success" onclick="getNum(<?= $admin_data[$i]['id'] ?>)">Ganti Password</button>
										<button id="btnDelete" type="button" data-toggle="modal" data-target="#delete" class="btn-danger" onclick="getNum(<?= $admin_data[$i]['id'] ?>)">Delete</button> -->
											<button id="btnUbahData" type="button" data-toggle="modal" data-target="#ubahAdmin" class="btn btn-primary" onclick="ubahData(<?= $admin_data[$i]['id'] ?>)">Ubah</button>
											<button id="btnGantiPass" type="button" data-toggle="modal" data-target="#gantiPassword" data-backdrop="static" data-keyboard="false" class="btn btn-success" onclick="gantiPassword(<?= $admin_data[$i]['id'] ?>)">Ganti Password</button>
											<button id="btnDelete" type="button" data-toggle="modal" data-target="#delete" class="btn btn-danger" onclick="deleteAdmin(<?= $admin_data[$i]['id'] ?>)">Delete</button>
										</td>
									</tr>
								<?php $no++;
								} ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="ubahAdmin" tabindex="1" role="dialog" aria-labelledby="ubahAdminModal" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="ubahAdminTitle">Ubah Admin
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</h5>
			</div>
			<form action="<?= site_url('admin/updateProfil') ?>" method="post">
				<div class="modal-body">
					<input type="hidden" name="idAdmin" id="idAdmin">
					<div class="form-group">
						<label for="" class="form-control-label">Nama</label>
						<input type="text" class="form-control" name="namaAdmin" id="namaAdmin" required>
					</div>
					<div class="form-group">
						<label for="" class="form-control-label">Username</label>
						<input type="text" class="form-control" name="usernameAdmin" id="usernameAdmin" required>
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


<div class="modal fade" id="gantiPassword" tabindex="1" role="dialog" aria-labelledby="gantiPasswordModal" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="ubahAdminTitle">Ganti Password
					<button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeChangePassModal">
						<span aria-hidden="true">&times;</span>
					</button>
				</h5>
			</div>
			<form action="<?= site_url('admin/changePassword') ?>" method="post" id="formChangePass">
				<div class="modal-body">
					<input type="hidden" name="idAdmin" id="idAdminPass">
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
					<button type="button" class="btn btn-disable" data-dismiss="modal" aria-label="Close" id="closeChangePass">Tutup</button>
					<button type="submit" class="btn btn-success" id="submitChangePass" disabled>Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>


<div class="modal fade" id="delete" tabindex="1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="ubahAdminTitle">Delete Admin
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</h5>
			</div>
			<div class="modal-body">
				<p>Anda yakin ingin menghapus <b id="nameDelete">.</b> ?</p>
			</div>
			<form action="<?= site_url('admin/deleteAdmin') ?>" method="post">
				<input type="hidden" name="idAdmin" id="idAdminDel">
				<div class="modal-footer">
					<button type="button" class="btn btn-disable" data-dismiss="modal" aria-label="Close">Tidak</button>
					<button type="submit" class="btn btn-success">Iya</button>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="modal fade" id="create" tabindex="1" role="dialog" aria-labelledby="createModal" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Buat Admin
					<button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeCreateModal">
						<span aria-hidden="true">&times;</span>
					</button>
				</h5>
			</div>
			<form action="<?= site_url('admin/createAdmin') ?>" method="post" id="formCreate">
				<div class="modal-body">
					<div class="form-group">
						<label for="" class="form-control-label">Nama</label>
						<input type="text" class="form-control" name="namaBaru" id="namaBaru" required>
					</div>
					<div class="form-group">
						<label for="" class="form-control-label">Username</label>
						<input type="text" class="form-control" name="unameBaru" id="usernameBaru" required>
					</div>
					<div class="form-group">
						<label for="" class="form-control-label">Password</label>
						<input type="password" class="form-control" name="passBaru" id="passwordBaru" required>
					</div>
					<div class="form-group" id="reNewPassAddDiv">
						<label for="" class="form-control-label">Password Konfirmasi</label>
						<input type="password" class="form-control" name="confirmPassBaru" id="retypePasswordBaru" required>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-disable" data-dismiss="modal" aria-label="Close" id="closeCreate">Tutup</button>
					<button type="submit" class="btn btn-success" id="submitCreate" disabled>Buat Admin</button>
				</div>
			</form>
		</div>
	</div>
</div>
