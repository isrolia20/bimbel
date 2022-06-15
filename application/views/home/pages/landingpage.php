<?php $this->load->view('home/layouts/head-landingpage'); ?>
<div class="loader-bg">
	<div class="loader-p">
		Permata Smart
	</div>
</div>
<main id="main" class="">
	<section id="hero">
		<div class="container pt-3">
			<div class="row align-items-center text-center">
				<div class="col-lg-12 pt-5" data-aos="zoom-in" data-aos-delay="100">
					<h1 class="display-6 fw-bold"> </h1>
					<p class="lead">Solusi Menjadi Siswa Berprestasi Bersama Kami</p>
					<?php
					if ($this->session->userdata('name') == null) {
					?>
						<div class="d-md-flex justify-content-center mb-4 mb-lg-5">
							<a href="<?= base_url('register/siswa'); ?>" type="button" class="btn btn-primary px-5 rounded-pill me-md-2 fw-bold">Daftar Siswa</a>
							<a href="<?= base_url('register/tutor'); ?>" type="button" class="btn btn-primary px-5 rounded-pill me-md-2 fw-bold">Daftar Tutor</a>
							<!-- <a href="<?= base_url('register/tutor'); ?>" type="button" style="outline: 3px solid #f8f9fa;" class="btn btn-outline-light fw-bold px-5 rounded-pill">Daftar Tutor</a> -->
						</div>
					<?php } ?>
				</div>
				<!-- <div class="cola-lg-12 d-flex justify-content-center">
            <img class="rounded-lg-3 img-hero" src="charisse-kenion-ts-E3IVKv8o-unsplash.jpg" alt="">
          </div>                    -->
			</div>
		</div>
	</section>
	<section id="section-2">
		<div class="container p-5  text-white" data-aos="fade-up">
			<div class="row justify-content-between align-items-center">
				<div class="col-lg-6">
				<p class="fs-6 fw-bold text-primary">Kenapa Harus Memilih Permata Smart?</p>


					<p class="ms-2 mb-0">>> Tutor setara S1 dan memiliki pengalaman mengajar</p>
					<p class="ms-2 mb-0"">>> Jadwal les fleksibel (bisa memilih & disesuaikan)</p>
					<p class="ms-2 mb-0"">>> Materi sesuai kebutuhan siswa </p>
					<p class="ms-2 mb-0"">>> Free konsultasi diluar jam bimbel</p>
					<p class="ms-2 mb-0"">>> Menggunakan kurikulum nasional</p>
				</div>
				</p>
				</div>
			</div>
		</div>
	</section>
	<section id="section-3">
		<div class="container p-5" data-aos="fade-up">
			<div class="row justify-content-center align-items center">
				<h1 class="section-title-1">Paket Belajar</h1>
				<div class="col-md-12 d-flex justify-content-center">
				</div>
				<div class="col-lg-4 d-flex justify-content-center my-3   ">
					<div class="card shadow text-center shadow-md rounded rounded-3" style="width:18rem;">
						<img src="<?= base_url('assets/landingpage/img/illustration1.svg'); ?>" class="card-img-top p-3" alt="...">
						<div class="card-body">
							<h6 class="card-subtitle mb-2 fw-bold text-primary">Tingkat SD</h6>
							<h5 class="card-title fs-3 fw-bold">Mulai 149K<span class="fw-light fs-6">/Bulan</span></h5>
							<p class="card-text">
							<ul class="price-feature mt-4 p-0">
								<li class="list-feature"><i class="fa fa-check-circle" aria-hidden="true"></i>
									<p class="ms-2 mb-0">Materi belajar lengkap</p>
								</li>
								<li class="list-feature"><i class="fa fa-check-circle" aria-hidden="true"></i>
									<p class="ms-2 mb-0">Tutor ahli dibidangnya</p>
								</li>
								<li class="list-feature"><i class="fa fa-check-circle" aria-hidden="true"></i>
									<p class="ms-2 mb-0">Tutor datang kerumah</p>
								</li>
								<li class="list-feature"><i class="fa fa-check-circle" aria-hidden="true"></i>
									<p class="ms-2 mb-0">4x pertemuan sebulan</p>
									</lnavbari>
								<li class="list-feature"><i class="fa fa-check-circle" aria-hidden="true"></i>
									<p class="ms-2 mb-0">Durasi belajar 60 menit</p>
								</li>
							</ul>
							</p>
							<a href="<?= base_url('/lesson'); ?>" type="button" class="btn btn-primary w-100 px-4 rounded-pill">Beli Paket</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 d-flex justify-content-center my-3   ">
					<div class="card shadow text-center shadow-md rounded rounded-3" style="width:18rem;">
						<img src="<?= base_url('assets/landingpage/img/illustration3.svg'); ?>" class="card-img-top p-3" alt="...">
						<div class="card-body">
							<h6 class="card-subtitle mb-2 fw-bold text-primary">Tingkat SMP</h6>
							<h5 class="card-title fs-3 fw-bold">Mulai 215K<span class="fw-light fs-6">/Bulan</span></h5>
							<p class="card-text">
							<ul class="price-feature mt-4 p-0">
								<li class="list-feature"><i class="fa fa-check-circle" aria-hidden="true"></i>
									<p class="ms-2 mb-0">Latihan soal lengkap</p>
								</li>
								<li class="list-feature"><i class="fa fa-check-circle" aria-hidden="true"></i>
									<p class="ms-2 mb-0">Materi belajar lengkap</p>
								</li>
								<li class="list-feature"><i class="fa fa-check-circle" aria-hidden="true"></i>
									<p class="ms-2 mb-0">Tutor datang kerumah</p>
								</li>
								<li class="list-feature"><i class="fa fa-check-circle" aria-hidden="true"></i>
									<p class="ms-2 mb-0">4x pertemuan sebulan</p>
								</li>
								<li class="list-feature"><i class="fa fa-check-circle" aria-hidden="true"></i>
									<p class="ms-2 mb-0">Durasi belajar 90 menit</p>
								</li>
							</ul>
							</p>
							<a href="<?= base_url('/lesson'); ?>" type="button" class="btn btn-primary w-100 px-4 rounded-pill">Beli Paket</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 d-flex justify-content-center my-3   ">
					<div class="card shadow text-center shadow-md rounded rounded-3" style="width:18rem;">
						<img src="<?= base_url('assets/landingpage/img/illustration2.svg'); ?>" class="card-img-top p-3" alt="...">
						<div class="card-body">
							<h6 class="card-subtitle mb-2 fw-bold text-primary">Tingkat SMA</h6>
							<h5 class="card-title fs-3 fw-bold">Mulai 239K<span class="fw-light fs-6">/Bulan</span></h5>
							<p class="card-text">
							<ul class="price-feature mt-4 p-0">
								<li class="list-feature"><i class="fa fa-check-circle" aria-hidden="true"></i>
									<p class="ms-2 mb-0">Materi belajar lengkap</p>
								</li>
								<li class="list-feature"><i class="fa fa-check-circle" aria-hidden="true"></i>
									<p class="ms-2 mb-0">Tutor ahli dibidangnya</p>
								</li>
								<li class="list-feature"><i class="fa fa-check-circle" aria-hidden="true"></i>
									<p class="ms-2 mb-0">Tutor datang kerumah</p>
								</li>
								<li class="list-feature"><i class="fa fa-check-circle" aria-hidden="true"></i>
									<p class="ms-2 mb-0">4x pertemuan sebulan</p>
								</li>
								<li class="list-feature"><i class="fa fa-check-circle" aria-hidden="true"></i>
									<p class="ms-2 mb-0">Durasi belajar 90 menit</p>
								</li>
							</ul>
							</p>
							<a href="<?= base_url('/lesson'); ?>" type="button" class="btn btn-primary w-100 px-4 rounded-pill">Beli Paket</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="section-4">
		<div class="container" data-aos="fade-up">
			<div class="row">
				<h1 class="section-title-1 py-5">Frequently Answered Question</h1>
				<div class="col-lg-12">
					<div class="accordion accordion-flush" id="accordionFlushExample">
						<?php foreach ($faqs as $i => $row) { ?>
							<div class="accordion-item">
								<h2 class="accordion-header" id="flush-heading<?= $i; ?>">
									<button class="accordion-button collapsed shadow-sm" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?= $i; ?>" aria-expanded="false" aria-controls="flush-collapseOne">
										<?= $row->question ?>
									</button>
								</h2>
								<div id="flush-collapse<?= $i; ?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
									<div class="accordion-body"><?= $row->answer; ?></div>
								</div>
							</div>
						<?php }; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	
						</div>

					</div>
					<!-- If we need pagination -->
					<div class="swiper-pagination swiper-pagination-white"></div>

				</div>
			</div>
		</div>
	</div>
<?php $this->load->view('home/layouts/footer-landingpage'); ?>