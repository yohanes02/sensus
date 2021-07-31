<div class="wrapper">
	<?php $this->load->view('components/navbar') ?>
	
	<div class="content-wrapper" style="margin-left: 0;">
		<div class="container-fluid">
			<!-- <div class="row">
				<div class="main-header">
					<h4><span class="ti-close"></span> Buat Berita</h4>
				</div>
			</div> -->
			<div class="row"  style="margin: 0px 10px; padding-top: 30px">
				<div class="card">
					<div class="card-header">
						<h5><a href="<?= site_url('admin/berita') ?>" style="text-decoration: none; color: black;"><span class="ti-close"></span></a> Edit Berita</h5>
					</div>
					<div class="card-block">
						<form action="<?= site_url('admin/submit_buat_berita') ?>" method="post" enctype="multipart/form-data">
							<div class="form-group row">
								<label class="col-sm-2 col-form-label form-control-label" for="">Judul</label>
								<div class="col-sm-10">
									<input class="form-control" type="text" name="title" id="title" value="<?=$berita['title']?>" required>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label form-control-label" for="">Tipe</label>
								<div class="col-sm-10">
									<select name="tipe" id="tipe" class="form-control" value="<?=$berita['tipe']?>">
										<option value="0">Balai Latihan Kerja</option>
										<option value="1">Seminar</option>
									</select>
									<!-- <input class="form-control" type="text" name="tipe" id="tipe" required> -->
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label form-control-label" for="">Deskripsi Singkat</label>
								<div class="col-sm-10">
									<input class="form-control" type="text" name="deskripsi" id="deskripsi" value="<?=$berita['deskripsi']?>" required>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label form-control-label" for="">Isi Berita</label>
								<div class="col-sm-10">
									<textarea id="isi" class="form-control" type="text" rows="4" name="isi" id="isi"></textarea>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label form-control-label" for="">Foto (Optional)</label>
								<div class="col-sm-10">
									<label for="file" class="custom-file">
										<input id="photo" name="photo" type="file" class="custom-file-input">
										<span class="custom-file-control" id="span-file"></span>
									</label>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-2"></div>
								<div class="col-lg-1">
									<button class="btn btn-primary btn-block" type="submit">Simpan</button>
								</div>
								<div class="col-lg-1"><a href="<?= site_url('admin/berita') ?>"><button class="btn btn-danger btn-block" type="button">Cancel</button></a></div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
