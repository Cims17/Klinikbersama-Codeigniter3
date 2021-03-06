<!DOCTYPE html>
<html lang="en">

<head>
	<!-- ========== Meta Tags ========== -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Healdi - Medical & Health Template">

	<!-- ========== Page Title ========== -->
	<title>Klinik Praktik Bersama - KAB.Ponorogo</title>

	<!-- ========== Favicon Icon ========== -->
	<link rel="shortcut icon" href="<?= base_url() ?>assets/user/img/favicon.png" type="image/x-icon">

	<!-- ========== Start Stylesheet ========== -->
	<link href="<?= base_url() ?>assets/user/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?= base_url() ?>assets/user/css/font-awesome.min.css" rel="stylesheet" />
	<link href="<?= base_url() ?>assets/user/css/themify-icons.css" rel="stylesheet" />
	<link href="<?= base_url() ?>assets/user/css/flaticon-set.css" rel="stylesheet" />
	<link href="<?= base_url() ?>assets/user/css/magnific-popup.css" rel="stylesheet" />
	<link href="<?= base_url() ?>assets/user/css/owl.carousel.min.css" rel="stylesheet" />
	<link href="<?= base_url() ?>assets/user/css/owl.theme.default.min.css" rel="stylesheet" />
	<link href="<?= base_url() ?>assets/user/css/animate.css" rel="stylesheet" />
	<link href="<?= base_url() ?>assets/user/css/bootsnav.css" rel="stylesheet" />
	<link href="<?= base_url() ?>assets/user/css/style.css" rel="stylesheet" />
	<link href="<?= base_url() ?>assets/user/css/responsive.css" rel="stylesheet" />
	<!-- ========== End Stylesheet ========== -->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

	<!-- ========== Google Fonts ========== -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;600;700;800&display=swap" rel="stylesheet">

</head>

<body>

	<!-- Start Consultation 
    ============================================= -->
	<?= $this->session->flashdata('berhasil_daftar') ?>
	<div class="consultation-area" style="padding-top: 150px;">
		<div class="container pt-4">
			<div class="row align-item justify-content-center">
				<div class="col-lg-5 form">
					<div class="appoinment-box text-center wow fadeInRight">
					<a href="<?= base_url() ?>"><img src="<?= base_url() ?>assets/user/img/logo-light.png" class=" logo mb-3" alt="Logo"></a>
						<div class="heading">
							<h4>Aktivasi Akun Calon Pasien</h4>
						</div>

							<div class="row">
								<div class="col-md-12">
									<div class="form-group mb-2">
										<?php echo $this->session->flashdata('pesan') ?>
									</div>
								</div>
								<!--end form-group-->
								<div class="col-md-12">
									<div class="form-group">
										<h5 class=" text-white">NIK	: <?= $pasien['no_identitas'] ?></h5>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group text-white">
										<h5 class=" text-white">Nama	: <?= $pasien['nama_pasien'] ?></h5>
									</div>
								</div>
							</div>
						<div class="col-md-12 mt-3">
							<?= anchor('Auth/Aktivasi/Aktif/'.$pasien['kode_aktivasi'] , '<button class="btn-register" > 
								Aktivasi Akun
							</button>') ?>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Consultation -->

	<!-- jQuery Frameworks
    ============================================= -->
	<script src="<?= base_url() ?>assets/user/js/jquery-1.12.4.min.js"></script>
	<script src="<?= base_url() ?>assets/user/js/popper.min.js"></script>
	<script src="<?= base_url() ?>assets/user/js/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>assets/user/js/jquery.appear.js"></script>
	<script src="<?= base_url() ?>assets/user/js/jquery.easing.min.js"></script>
	<script src="<?= base_url() ?>assets/user/js/jquery.magnific-popup.min.js"></script>
	<script src="<?= base_url() ?>assets/user/js/modernizr.custom.13711.js"></script>
	<script src="<?= base_url() ?>assets/user/js/owl.carousel.min.js"></script>
	<script src="<?= base_url() ?>assets/user/js/wow.min.js"></script>
	<script src="<?= base_url() ?>assets/user/js/isotope.pkgd.min.js"></script>
	<script src="<?= base_url() ?>assets/user/js/imagesloaded.pkgd.min.js"></script>
	<script src="<?= base_url() ?>assets/user/js/count-to.js"></script>
	<script src="<?= base_url() ?>assets/user/js/jquery.nice-select.min.js"></script>
	<script src="<?= base_url() ?>assets/user/js/bootsnav.js"></script>
	<script src="<?= base_url() ?>assets/user/js/main.js"></script>

	<script type="text/javascript">
		let passwordInput = document.getElementById('password'),
			icon = document.getElementById('eyeIcon');

		function togglePassword() {
			if (passwordInput.type === 'password') {
				passwordInput.type = 'text';
				icon.classList.add("fa-eye-slash");
				//toggle.innerHTML = 'hide';
			} else {
				passwordInput.type = 'password';
				icon.classList.remove("fa-eye-slash");
				//toggle.innerHTML = 'show';
			}
		}

		function checkInput() {}

		icon.addEventListener('click', togglePassword, false);
		passwordInput.addEventListener('keyup', checkInput, false);
	</script>

</body>

</html>
