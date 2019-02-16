<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<?php if ($this->uri->segment(1) == 'gioi-thieu' && $this->uri->segment(2) != '' && $this->uri->segment(2) != 'danh-sach'): ?>
		<meta name="keywords" content="<?php echo $detail['about_metakeywords'] ?>">
		<meta name="description" content="<?php echo $detail['about_metadescription'] ?>">
	<?php endif ?>

	<?php if ($this->uri->segment(1) == 'bai-viet' && $this->uri->segment(2) == 'chi-tiet'): ?>
		<meta name="keywords" content="<?php echo $detail['post_metakeywords'] ?>">
		<meta name="description" content="<?php echo $detail['post_metadescription'] ?>">
	<?php endif ?>
	
	<!-- TITLE -->
	<title>Vyan Beauty Clinic & Spa</title>

	<!-- Bootstrap 4 -->
	<link rel="stylesheet" href="<?php echo site_url('node_modules/') ?>bootstrap/dist/css/bootstrap.min.css">

	<!-- FontAwesome 5 -->
	<link rel="stylesheet" href="<?php echo site_url('node_modules/') ?>@fortawesome/fontawesome-free/css/all.min.css">

	<!-- Style -->
	<link rel="stylesheet" href="<?php echo site_url('assets/scss/') ?>style.css">

	<!--favicon -->
	<link rel="shortcut icon" href="<?php echo site_url('assets/img/') ?>favicon.png" />

	<!-- jQuery -->
	<script src="<?php echo site_url('node_modules/') ?>jquery/dist/jquery.min.js"></script>

	<!-- Popper js -->
	<script src="<?php echo site_url('node_modules/') ?>popper.js/dist/umd/popper.min.js"></script>

	<!-- Bootstrap 4 js -->
	<script src="<?php echo site_url('node_modules/') ?>bootstrap/dist/js/bootstrap.min.js"></script>
	
</head>

<body>

<header>
	<div class="container">
		<div class="nav-brand">
			<a href="<?php echo base_url('') ?>" title="Homepage">
				<!--<img src="<?php echo site_url('assets/img/') ?>logo-w.svg" alt="Logo Vyan">-->

				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
					 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 viewBox="0 0 200 200" style="enable-background:new 0 0 200 200;" xml:space="preserve">
					 <g>
						<path class="text" d="M159.9,151.1c-2.1,0-4.2,0-6.6,0c2.2-6.5,2.1-13.2,1.9-19.9c-0.2-6.6,1.1-13.2-1.3-19.9c2.2,0,4.4-0.2,6.6,0.1
		c0.9,0.1,1.8,1.2,2.4,2.1c6.3,9.1,12.6,18.3,18.9,27.5c0.4,0.6,0.9,1.1,1.4,1.8c1.1-2.5,0.6-26.6-0.6-31.4c1.9,0,3.8,0,5.8,0
		c-2.5,6-1.6,12.4-1.7,18.6c-0.1,6.8,0.1,13.5,0.1,20.3c0,0.3-0.1,0.5-0.1,0.8c-3.6,0.8-4,0.7-6-2.2c-6.8-9.7-13.6-19.3-20.4-29
		c-0.4-0.6-0.9-1.2-1.4-1.9C157.7,120.7,158.4,143.6,159.9,151.1z"/>
						<path class="text" d="M136.7,151.1c-0.2,0.1-0.2,0.1-0.3,0.1c-5.8,0.4-5.8,0.4-7.9-5c-1.4-3.7-2.9-7.3-4.3-11c-0.4-1.2-1-1.7-2.4-1.7
		c-3.7,0.1-7.3,0-11,0.1c-0.7,0-1.7,0.5-2,1c-1.7,3.9-3.3,7.9-4.7,11.9c-0.5,1.4-0.4,3-0.5,4.6c-2.2,0-4.5,0-6.8,0
		c7.3-12.5,13.8-25.4,18-39.8c1.7,0,3.8-0.1,5.9,0.1c0.5,0,1.1,1,1.3,1.7c2.9,8.3,5.7,16.7,8.7,25
		C132.4,142.5,134.6,146.7,136.7,151.1z M122.5,131.1c-1.7-5.1-3.4-10.1-5-15c-0.3,0-0.7,0-1,0c-2,4.9-4,9.8-6.1,15
		C114.5,131.1,118.3,131.1,122.5,131.1z"/>
						<path class="text" d="M40.3,111.4c2.2,0,4.4,0,6.7,0c-0.1,0.3-0.1,0.7-0.2,0.9c-6.6,11.8-11.3,24.4-16,37c-0.7,1.9-3.5,3.1-5.2,2.1
		c-0.5-0.3-0.7-1.1-0.9-1.7c-3.5-10.6-6.9-21.2-10.4-31.8c-0.7-2.1-1.8-4.2-2.7-6.5c1.8,0,3.4-0.2,4.9,0.1c0.8,0.2,1.8,1.1,2.1,1.9
		c3.2,9.5,6.3,19.1,9.4,28.7c0.3,1,0.7,2,1.5,3C33.4,133.8,39.1,123.5,40.3,111.4z"/>
						<path class="text" d="M59.3,111.4c7.6-0.4,7.8-0.3,10.8,6.3c1.6,3.6,2.9,7.4,4.3,11.2c0.3,0.7,0.6,1.5,1.3,2.3c2.9-6.5,8.9-11.6,8.5-19.7
		c1.9,0,4.2,0,6.7,0c-0.4,0.7-0.8,1.4-1.1,2c-2.8,4.4-5.6,8.8-8.5,13.2c-2.8,4.2-4.3,8.8-4,13.9c0.1,3.6,0.3,7.1,0.5,10.8
		c-2.1,0-4.5,0-7.1,0C74.4,135.8,68.7,123.2,59.3,111.4z"/>
						<g>
							<path class="shape" d="M69.5,37.3l-1.4-0.7l-0.3,1.6c-0.1,0.3-1.5,7.1,1.6,11.1c1.3,1.7,3.1,2.6,5.4,2.8l0.7,0.1l0.4-0.6
			c0.1-0.1,2-3,1-6.6C76,42,73.6,39.4,69.5,37.3z M74.1,49.5c-1.2-0.2-2.1-0.8-2.8-1.7c-1.6-2.1-1.5-5.4-1.3-7.4
			c2.5,1.5,4,3.3,4.5,5.2C74.8,47.3,74.4,48.7,74.1,49.5z"/>
							<path class="shape" d="M134.1,36.6l-1.4,0.7c-4.1,2.1-6.5,4.7-7.3,7.7c-0.9,3.6,0.9,6.4,1,6.6l0.4,0.6l0.7-0.1
			c2.3-0.2,4.1-1.1,5.4-2.8c3-4,1.6-10.9,1.6-11.1L134.1,36.6z M130.9,47.9c-0.7,0.9-1.6,1.5-2.8,1.7c-0.3-0.8-0.8-2.2-0.3-3.9
			c0.5-1.9,2-3.7,4.5-5.2C132.4,42.4,132.4,45.8,130.9,47.9z"/>
							<path class="shape" d="M143.3,31.3l0.4-1.7l-1.8,0.2c-0.1,0-6.3,0.8-13.6,2.5c-4.2,1-7.8,2-11,3.2c-3.7-7.2-9-14.2-15.5-20.5
			l-0.9-0.8l-0.9,0.8c-6.5,6.3-11.8,13.3-15.5,20.5c-10.7-4-23.8-5.6-24.5-5.7l-1.8-0.2l0.4,1.7c0.2,1,0.1,6.6,0,10.4
			c0,1.8-0.1,3.5-0.1,4.7c0,8.2,1.9,13.3,8.8,23.6l0,0c5,7,12.4,11.5,21.4,13.2c5.9,1.1,10.7,0.7,11.9,0.5l0.1,0l0.1,0
			c0.6,0.1,2.1,0.2,4.2,0.2c6.9,0,20.3-1.8,29.2-14l0,0c6.9-10.3,8.8-15.3,8.8-23.6c0-1.1,0-2.9-0.1-4.7
			C143.2,37.9,143.1,32.3,143.3,31.3z M115.1,36.4c-3.3,1.4-5.9,2.9-7.8,4.5c-2.3,2-3.9,3.9-5,5.7V18.9
			C107.6,24.3,112,30.3,115.1,36.4z M101.1,81.1C98.2,79.9,81,72.7,81,58.6c0-6.4,1.7-13.2,4.9-20c2.8,1.2,5.4,2.6,7.3,4.1
			c4.9,4.2,6,7.6,6.5,11.2c-4,0.7-7,4.1-7,8.2c0,4.6,3.8,8.3,8.4,8.3v-2.5c-3.3,0-5.9-2.6-5.9-5.8c0-3.2,2.6-5.8,5.9-5.8h0
			c3.3,0,5.9,2.6,5.9,5.8c0,3.2-2.7,5.8-5.9,5.8v2.5c4.6,0,8.4-3.7,8.4-8.3c0-4.1-3-7.5-7-8.2c0.5-3.6,1.6-7,6.4-11.2
			c1.9-1.6,4.5-3,7.3-4.1c3.2,6.8,4.9,13.6,4.9,20C121.2,72.6,104,79.9,101.1,81.1z M99.8,18.9v27.7c-1.1-1.8-2.7-3.7-5-5.7
			c-2.1-1.7-4.8-3.2-7.8-4.5C90.2,30.3,94.5,24.3,99.8,18.9z M69.6,68.5c-6.6-9.9-8.3-14.4-8.3-22.2c0-1.1,0-2.8,0.1-4.6
			c0.1-4,0.1-7.3,0.1-9.3c3.8,0.5,13.8,2.2,22.2,5.2c-3.3,7.1-5.1,14.2-5.1,20.9c0,7.1,3.9,13.7,11.2,19.1c2.1,1.6,4.3,2.8,6.1,3.7
			C89.1,81.2,77.3,79.1,69.6,68.5z M132.5,68.5c-7.7,10.6-19.4,12.7-26.1,12.9c1.8-0.9,3.9-2.2,6.1-3.7c7.3-5.4,11.2-12,11.2-19.1
			c0-6.7-1.8-13.8-5.1-20.9c8.4-3.1,18.4-4.7,22.2-5.2c-0.1,2,0,5.2,0.1,9.3c0,1.8,0.1,3.5,0.1,4.6
			C140.9,54.1,139.2,58.6,132.5,68.5z"/>
						</g>
					</g>
				</svg>
			</a>
		</div>

		<div class="nav-main">
			<ul>
				<li>
					<a href="<?php echo base_url('') ?>">
						<img src="<?php echo site_url('assets/img/') ?>icon/ico-doctor-01.svg" alt="Image About Us">
						About Us
					</a>
				</li>

				<li>
					<a href="<?php echo base_url('') ?>">
						<img src="<?php echo site_url('assets/img/') ?>icon/ico-surgeon-01.svg" alt="Image Beauty Surgeon">
						Beauty Surgeon
					</a>

					<span>
						<i class="fas fa-caret-right"></i>
					</span>

					<ul>
						<li>
							<a href="#" class="back">
								<i class="fas fa-caret-left"></i> Back
							</a>
						</li>

                        <?php for ($i = 0; $i < 4; $i++) { ?>
							<li>
								<a href="<?php echo base_url('') ?>">
									Heading <?php echo $i+1 ?>
								</a>

								<span>
									<i class="fas fa-caret-right"></i>
								</span>

								<ul>
									<li>
										<a href="#" class="back">
											<i class="fas fa-caret-left"></i> Back
										</a>
									</li>
									<!-- Testing Column Height -->
                                    <?php if ($i%2==0) { ?>
                                        <?php for ($j = 0; $j < 6; $j++) { ?>
											<li>
												<a href="<?php echo base_url('postdetail') ?>">
													Content Nav Category <?php echo $i+1 .'.'.$j+1 ?>
												</a>
											</li>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <?php for ($j = 0; $j < 10; $j++) { ?>
											<li>
												<a href="<?php echo base_url('postdetail') ?>">
													Content Nav Category <?php echo $i+1 .'.'.$j+1  ?>
												</a>
											</li>
                                        <?php } ?>
                                    <?php } ?>
								</ul>
							</li>
                        <?php } ?>
					</ul>
				</li>

				<li>
					<a href="<?php echo base_url('') ?>">
						<img src="<?php echo site_url('assets/img/') ?>icon/ico-skincare-01.svg" alt="Image Skincare & Spa">
						Skincare & Spa
					</a>

					<span>
						<i class="fas fa-caret-right"></i>
					</span>

					<ul>
						<li>
							<a href="#" class="back">
								<i class="fas fa-caret-left"></i> Back
							</a>
						</li>

                        <?php for ($i = 0; $i < 4; $i++) { ?>
							<li>
								<a href="<?php echo base_url('') ?>">
									Heading <?php echo $i+1 ?>
								</a>

								<span>
									<i class="fas fa-caret-right"></i>
								</span>

								<ul>
									<li>
										<a href="#" class="back">
											<i class="fas fa-caret-left"></i> Back
										</a>
									</li>
									<!-- Testing Column Height -->
                                    <?php if ($i%2==0) { ?>
                                        <?php for ($j = 0; $j < 6; $j++) { ?>
											<li>
												<a href="<?php echo base_url('postdetail') ?>">
													Content Nav Category <?php echo $i+1 .'.'.$j+1 ?>
												</a>
											</li>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <?php for ($j = 0; $j < 10; $j++) { ?>
											<li>
												<a href="<?php echo base_url('postdetail') ?>">
													Content Nav Category <?php echo $i+1 .'.'.$j+1  ?>
												</a>
											</li>
                                        <?php } ?>
                                    <?php } ?>
								</ul>
							</li>
                        <?php } ?>
					</ul>
				</li>

				<li>
					<a href="<?php echo base_url('') ?>">
						<img src="<?php echo site_url('assets/img/') ?>icon/ico-others-01.svg" alt="Image Others Care">
						Others Care
					</a>
				</li>

				<li>
					<a href="<?php echo base_url('') ?>">
						<img src="<?php echo site_url('assets/img/') ?>icon/ico-academy-01.svg" alt="Image Academy">
						Vyan Academy
					</a>
				</li>

				<li>
					<a href="<?php echo base_url('') ?>">
						<img src="<?php echo site_url('assets/img/') ?>icon/ico-news-01.svg" alt="Image News">
						News
					</a>
				</li>

				<!--
				<li>
					<a href="<?php echo base_url('') ?>">
						<img src="<?php echo site_url('assets/img/') ?>icon/ico-story-01.svg" alt="Image Customers Story">
						Customers Story
					</a>
				</li>
				-->

				<li>
					<a href="<?php echo base_url('') ?>">
						<img src="<?php echo site_url('assets/img/') ?>icon/ico-image-01.svg" alt="Image About Us">
						Images & Videos
					</a>
				</li>
			</ul>
		</div>

		<div class="nav-call">
			<a href="tel:84 1234 5678" class="btn btn-sm btn-light" role="button">
				Call Now!
			</a>
		</div>

		<div class="nav-control" id="navControl">
			<span class="line"></span>
		</div>
	</div>
</header>
