<div class="wrapper">
	<?php $this->load->view('components/navbar') ?>
	
	<div class="content-wrapper" style="margin-left: 0;">
		<div class="container-fluid">
			<div class="row">
				<div class="main-header">
					<div class="card-header">
						<h5><a href="<?= site_url('admin/data_warga') ?>" style="text-decoration: none; color: black;"><span class="ti-close"></span></a> Edit Warga</h5>
					</div>
					<div class="card-block" style="background-color: white;">
						<form action="<?= site_url('admin/updateWarga') ?>" method="post">
							<div id="newWork" class="col-lg-12">
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<label for="" class="form-control-label">NIK</label>
											<input type="text" class="form-control" name="nik" value="<?=$warga['nik']?>" readonly>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label for="" class="form-control-label">Nama</label>
											<input type="text" class="form-control" name="nama" value="<?=$warga['nama']?>" required>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label for="" class="form-control-label">Agama</label>
											<select class="form-control" name="agama" id="agama">
												<option value="0" <?php if($warga['agama']=='Islam') echo 'selected'; ?>>Islam</option>
												<option value="1" <?php if($warga['agama']=='Kristen Protestan') echo 'selected'; ?>>Kristen Protestan</option>
												<option value="2" <?php if($warga['agama']=='Katolik') echo 'selected'; ?>>Katolik</option>
												<option value="3" <?php if($warga['agama']=='Hindu') echo 'selected'; ?>>Hindu</option>
												<option value="4" <?php if($warga['agama']=='Buddha') echo 'selected'; ?>>Buddha</option>
												<option value="5" <?php if($warga['agama']=='Konghucu') echo 'selected'; ?>>Konghucu</option>
											</select>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label for="" class="form-control-label">Jenis Kelamin</label>
											<select class="form-control" name="jekel" id="jekel">
												<option value="l" <?php if($warga['jenis_kelamin']=='l') echo 'selected'; ?>>Laki-laki</option>
												<option value="p" <?php if($warga['jenis_kelamin']=='p') echo 'selected'; ?>>Perempuan</option>
											</select>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label for="" class="form-control-label">Tempat Lahir</label>
											<input class="form-control" type="text" name="tmp-lhr" id="tmp-lhr" value="<?= $warga['tempat_lahir'] ?>" required>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label for="" class="form-control-label">Tanggal Lahir</label>
											<input class="form-control" type="date" name="tgl-lhr" id="tgl-lhr" value="<?= $warga['tanggal_lahir'] ?>" required>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label for="" class="form-control-label">Alamat</label>
											<input class="form-control" type="text" name="alamat" id="alamat" value="<?= $warga['alamat'] ?>" required>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label for="" class="form-control-label">RW</label>
											<input type="number" class="form-control" name="rw" id="rw" value="<?= $warga['rw'] ?>" required>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label for="" class="form-control-label">RT</label>
											<input type="number" class="form-control" name="rt" id="rt" value="<?= $warga['rt'] ?>" required>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label for="" class="form-control-label">Status Bekerja</label>
											<select name="bekerja" id="bekerja" class="form-control">
												<option value="1" <?php if($warga['bekerja']==1) echo 'selected'; ?>>Bekerja</option>
												<option value="0" <?php if($warga['bekerja']==0) echo 'selected'; ?>>Tidak Bekerja</option>
											</select>
										</div>
									</div>
									<!-- <div class="col-lg-6"></div> -->
									<div id="isNotWorking" style="<?php if($warga['bekerja']=='1') echo 'display:none'?>" class="col-lg-6">
										<div class="form-group">
											<label for="" class="form-control-label">Alasan Tidak Bekerja</label>
											<textarea name="alasan_not_working" id="reasonNotWorking" class="form-control" cols="30" rows="5"><?=$warga['alasan']?></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<button id="addWork" type="submit" class="btn btn-primary">Simpan Perubahan</button>
							</div>
						</form>
						<?php if ($this->session->userdata('wargaSaved')) { ?>
							<p class="btn btn-block btn-success waves-effect" style="margin: 10px 15px;">
								<?= $this->session->userdata('wargaSaved'); ?>
							</p>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
