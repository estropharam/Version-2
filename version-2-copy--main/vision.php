<!DOCTYPE html>
<html>

<head>
	<title>VISION</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- ------------bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<!--------favicon -->
	<link rel="icon" type="image/png" sizes="16x16" href="./img/ICON/favicon-32x32.png">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style>
		.image-container {
			width: 100%;
			max-width: 100%;
			height: 400px;
			overflow: hidden;
			position: relative;
			padding: 0;
		}

		.image-container img {
			width: 100%;
			height: 100%;
			object-fit: cover;
		}

		.mis-open {
			background-color: rgba(255, 255, 255, 0.30);
			left: 2%;
			border-radius: 10px;
			text-align: left;
			height: 4em;
			width: auto;
			padding: auto;
		}
	</style>

</head>

<body>
	<div class="spinner-wrapper">
		<div class="spinner">
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
		</div>
	</div>
	<!-- header start -->
	<header class="header">
		<div class="container">
			<div class="row v-center">
				<div class="header-item item-left">
					<div class="logo">
						<a href="./index.php"><img id="logo1" src="./img/ESTRO.png" height="40px"></a>
					</div>
				</div>
				<!-- menu start here -->
				<div class="header-item item-center">
					<div class="menu-overlay">
					</div>
					<nav class="menu">
						<div class="mobile-menu-head">
							<div class="go-back"><i class="fa fa-angle-left"></i></div>
							<div class="current-menu-title"></div>
							<div class="mobile-menu-close">&times;</div>
						</div>
						<ul class="menu-main">
							<a class="hers" " href=" ./index.php">Home</a>
							</li>

							<li class="menu-item-has-children">
								<a href="#">Company <i class="fa fa-angle-down"></i></a>
								<div class="sub-menu mega-menu mega-menu-column-4">
									<div class="list-item">
										<h4 class="title">About</h4>
										<ul>
											<li><a href="./mission.php">Misson</a></li>
											<li><a href="./vision.php">Vision</a></li>
											<li><a href="./corporate.php">Corporate</a></li>
										</ul>
										<h4 class="title">Careers</h4>
										<ul>
											<li><a href="./subpage/careers-sales.php">Sales & Services</a></li>
										</ul>
									</div>
									<div class="list-item">
										<h4 class="title">Awards</h4>
										<ul>
											<li><a href="./subpage/award.php">Ceremony </a></li>
										</ul>
										<h4 class="title">Collabs</h4>
										<ul>
											<li><a href="#">Product List</a></li>
											<li><a href="#">Product List</a></li>
										</ul>

										<h4 class="title">Medicine</h4>
										<ul>
											<li><a href="./subpage/product.php">CNS</a></li>
											<li><a href="./subpage/product.php">DIV</a></li>

										</ul>
									</div>
									<div class="list-item">
										<h4 class="title">Heritage</h4>
										<ul>
											<li><a href="./subpage/csr.php">Company</a></li>
											<li><a href="./subpage/covid.php">CSR</a></li>
										</ul>
									</div>

									<div class="list-item">
										<img src="./img/top-view-hands-with-paper-cut-family.jpg">
									</div>
								</div>
							</li>
							<li class="menu-item-has-children">
								<a href="#">Blog <i clas s="fas fa-angle-down"></i></a>
								<div class="sub-menu single-column-menu">
									<ul>
										<li><a href="#">Standard Layout</a></li>
										<li><a href="#">Grid Layout</a></li>
										<li><a href="#">single Post Layout</a></li>
									</ul>
								</div>
							</li>

							<li>
								<a href="#">Contact</a>
							</li>
							<li class="menu-item-has-children">
								<a href="#">Pages <i class="fas fa-angle-down"></i></a>
								<div class="sub-menu single-column-menu">
									<ul>
										<li><a href="#">Login</a></li>
										<li><a href="#">Register</a></li>
										<li><a href="#">Faq</a></li>
										<li><a href="#"></a></li>
									</ul>
								</div>
							</li>
							<li class="menu-item-has-children">
								<!-- ----------------------------	---------MENU -->
								<a href="#">Featured <i class="fa fa-angle-down"></i></a>
								<div class="sub-menu mega-menu mega-menu-column-4">
									<div class="list-item text-center">
										<a href="#">
											<img src="img/medicine/NERVISTRONG-FORTE.JPG" alt="new Product">
											<h5 style="font-size:3vh" class="title">Nervistrong Forte</h5>
										</a>
									</div>
									<div class="list-item text-center">
										<a href="#">
											<img src="img/medicine/Estropam-Plus.JPG" alt="new Product">
											<h5 style="font-size:3vh" class="title">Estropam Plus</h5>
										</a>
									</div>
									<div class="list-item text-center">
										<a href="#">
											<img src="img/medicine/Espanto-DSR.JPG" alt="new Product">
											<h5 style="font-size:3vh" class="title">Espanto-DSR</h5>
										</a>
									</div>
									<div class="list-item text-center">
										<a href="#">
											<img src="img/medicine/Xontibac-C.JPG" alt="new Product">
											<h5 style="font-size:3vh" class="title">Xontibac-C</h5>
										</a>
									</div>
								</div>
							</li>
						</ul>
					</nav>
				</div>
				<!-- menu end here -->
				<div class="header-item item-right">
					<a href="#"><i class="fas fa-search"></i></a>
					<a href="#"><i class="far fa-heart"></i></a>
					<a href="#"><i class="fas fa-shopping-cart"></i></a>
					<!-- mobile menu trigger -->
					<div class="mobile-menu-trigger">
						<span></span>
					</div>
				</div>
			</div>
		</div>
	</header>

	<body>
		<div style="position: relative;" class="container-fluid">
			<div class="row">
				<div class="image-container">
					<img src="./img/vision.jpg" alt="Descriptive text">
				</div>
			</div>
			<div style="position:absolute;top:70%;right:2%;" class="container-fluid">
				<div class="row ">
					<!-- <div class="col-sm-2">.</div> -->
					<div class="mis-open col-4">
						<h2 style="margin-left:2%;padding: 16px;text-decoration: underline;">Vision</h2>
					</div>
				</div>
			</div>
		</div>

		<div class="container-fluid">
			<div class="row">
				<div class="col-12  mt-3">
					<h1 class="hide">Vision and Values:</h1>
					<h3>Pioneering Excellence in Global Healthcare</h3>
					<p>Our company is committed to advancing global health and well-being by delivering innovative, high-quality, and affordable medications. We strive to set new standards in the pharmaceutical industry by combining cutting-edge research with a relentless focus on quality and patient care. Our mission is to not only provide effective healthcare solutions but also to foster a healthier world through continuous improvement and a steadfast dedication to our core values of integrity, excellence, and customer satisfaction. As we look to the future, we remain driven by the belief that everyone deserves access to the best possible healthcare.</p>
					<p>Our unwavering dedication to enhancing the quality of life for patients worldwide is at the heart of everything we do. We believe that true innovation lies in our ability to consistently develop medications that are both effective and accessible. By harnessing the power of advanced scientific research and fostering a collaborative environment, we aim to create solutions that address the most pressing health challenges of our time. Our commitment extends beyond the laboratory, as we engage with communities and stakeholders to ensure our contributions make a real and lasting impact on global health. Through our efforts, we aspire to build a healthier, more equitable world for future generations.</p>
				</div>
			</div>
		</div>


		<div class="container-fluid">
			<div class="row">
				<div class="col-12 mb-2">

					<div class="mt-4 mb-4 row featurette">
						<div class="col-md-7">
							<h1 style="font-size: 2em;" class="hide featurette-heading fw-normal lh-1">
								Championing Excellence in Global Health and Pharmaceutical Innovation
								<span class="text-body-secondary">:Advancing Global Health with Innovative Pharmaceutical Solutions</span>
							</h1>
							<p style="padding-top: 2em;" class="lead">
								Innovative pharmaceutical solutions are transforming healthcare by addressing complex global health issues. From enhancing access to essential medicines to pioneering new therapies, these advancements are reshaping treatment paradigms and improving quality of life. By fostering collaboration between industry, healthcare providers, and policymakers, we can ensure that these innovations reach those who need them most, making meaningful progress towards a healthier future for all.
							</p>
						</div>
						<div class="col-md-5">
							<img style="border-radius: 7px;" src="./img/vision-2.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" alt="Compliance" height="400">
						</div>
					</div>
					<h3 style="font-size: 3em;">Transforming Healthcare with Innovative Pharmaceutical Solutions for a Healthier Future</h3>
					<p>Our vision is to lead the transformation of global healthcare through groundbreaking pharmaceutical innovations. We aim to bridge gaps in access to vital medicines and develop advanced therapies that revolutionize patient care. By partnering with industry experts, healthcare professionals, and policymakers, we strive to deliver our cutting-edge solutions to communities worldwide. Our relentless pursuit of excellence and commitment to health equity drives us to create a future where high-quality healthcare is accessible to all.</p>
				</div>
			</div>
		</div>

	</body>
	<?php include './footer.php'; ?>
	<script src="js/script.js"></script>
	<!-- -----------bootstrap -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>