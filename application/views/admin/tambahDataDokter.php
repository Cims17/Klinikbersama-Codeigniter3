<div class="page-content">
	<div class="container-fluid">
		<!-- Page-Title -->
		<div class="row">
			<div class="col-sm-12">
				<div class="page-title-box">
					<div class="row">
						<div class="col">
							<h4 class="page-title">Tambah Data Dokter <?php echo $this->session->userdata('username') ?></h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a>Data Dokter</a></li>
								<li class="breadcrumb-item active">Tambah Data Dokter</li>
							</ol>
						</div>
						<!--end col-->
					</div>
					<!--end row-->
				</div>
				<!--end page-title-box-->
			</div>
			<!--end col-->
		</div>
		<!--end row-->

		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Form Tambah Data Dokter <?php echo $this->session->userdata('username') ?></h4>
					</div>
					<!--end card-header-->
					<form action="<?php echo base_url() ?>Admin/Data_dokter/Simpan_dokter" method="post" enctype="multipart/form-data">
						<div class="card-body">
							<div class="row">
								<div class="col-lg-6">
									<div class="mb-3">
										<label class="form-label" style="color: black;">Nama Dokter</label>
										<input type="text" class="form-control" id="namaDokter" name="nama_dokter" placeholder="Masukkan Nama Dokter" >
									</div>
									<div class="mb-3">
										<label class="form-label" style="color: black;">Tempat Tanggal Lahir</label>
										<div class="row">
											<div class="col-lg-6">
												<input type="text" class="form-control" name="tempat_lahir" placeholder="Masukkan Tempat Lahir" >
											</div>
											<div class="col-lg-6">
												<div class="input-group">
													<input type="text" class="form-control" id="mdate" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" >
													<span class="input-group-text"><i class="ti ti-calendar font-16"></i></span>
												</div>
											</div>
										</div>
									</div>
									<div class="mb-3">
										<label class="form-label" style="color: black;">Jenis Kelamin</label>
										<select class="form-control select2 custom-select" name="jenis_kelamin" >
											<option value="" selected disabled>Pilih Jenis Kelamin</option>
											<option value="Pria">Pria</option>
											<option value="Wanita">Wanita</option>
										</select>
									</div>
									<div class="mb-3">
										<label class="form-label" style="color: black;">Alamat</label>
										<textarea type="text" class="form-control" id="alamatDokter" name="alamat_dokter" ></textarea>
									</div>
									<div class="mb-3">
										<label class="form-label" style="color: black;">Nomor Telepon</label>
										<input type="text" class="form-control" id="notlpDokter" name="notlp_dokter" placeholder="Masukkan Nomor Telepon Dokter" >
									</div>
								</div>

								<div class="col-lg-6">
									<div class="mb-3">
										<label class="form-label" style="color: black;">Spesialis/Dokter Gigi/Dokter Umum</label>
										<input type="text" class="form-control" id="spesialis" name="spesialis" placeholder="Masukkan Spesialis" >
									</div>
									<div class="mb-3">
										<label class="form-label" style="color: black;">Nomor Surat Izin Praktik</label>
										<input type="text" class="form-control" id="no_SIP" name="no_SIP" placeholder="Masukkan Nomor SIP" >
									</div>
									<div class="mb-3">
										<label class="form-label" for="foto_dokter" style="color: black;">Foto Dokter</label>
										<div class="col-lg-9 col-xl-8">
											<input type="file" name="foto_dokter" id="input-file-now-custom-1" class="dropify" />
										</div>
									</div>
								</div>
							</div>
							<hr />
							<button type="submit" name="submit" class="btn btn-primary">Submit</button>
							<button type="cancel" name="cancel" class="btn btn-danger">Cancel</button>
						</div>
						<!--end card-body-->
					</form>
				</div>
				<!--end card-->
			</div>
			<!--end col-->
		</div>
		<!--end row-->


	</div><!-- container -->
