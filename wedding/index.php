<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_pernikahan";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id_undangan, nama_pria, nama_perempuan, logo, kepada_yth,
akad_nikah, syukuran, tanggal, waktu, foto_background, nama_ayah_pria,
nama_ibu_pria, nama_ayah_perempuan, nama_ibu_perempuan, 
mengundang1, mengundang2, mengundang3, mengundang4,
mengundang5, mengundang6, mengundang7, mengundang8, gambar1, gambar2, gambar3, photo_pria, photo_perempuan, galery1, galery2, galery3, galery4, galery5, galery6, foto_wishes1, foto_wishes2, foto_wishes3 FROM tbl_form WHERE id_undangan ='1'";

// Step 3: Execute the query
$result = $conn->query($sql);

// Step 4: Fetch and echo the data
$pria = "Default Name";
$perempuan = "Default Name"; // Nilai default jika data tidak ditemukan

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $pria = $row["nama_pria"];
	$perempuan = $row["nama_perempuan"];
	$tanggal = $row["tanggal"];
	$waktu = $row["waktu"];
	
	$photo_pria = $row["photo_pria"];
	$photo_perempuan = $row["photo_perempuan"];
	$background = $row["foto_background"];
	$logo = $row["logo"];
	$gambar1 = $row["gambar1"];
	$gambar2 = $row["gambar2"];
	$gambar3 = $row["gambar3"];
	$galery1 = $row["galery1"];
	$galery2 = $row["galery2"];
	$galery3 = $row["galery3"];
	$galery4 = $row["galery4"];
	$galery5 = $row["galery5"];
	$galery6 = $row["galery6"];
	$wishes1 = $row["foto_wishes1"];
	$wishes2 = $row["foto_wishes2"];
	$wishes3 = $row["foto_wishes3"];
}
$dir = '../uploads/';
// Step 5: Close the database connection
$conn->close();

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Wedding &mdash; Undangan Pernikahan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-xs-2">
				<a href="#" class="navbar-brand navbar-link"><img src="images/<?php echo $logo; ?>" width="150px"
            height="25px"></a>
				</div>
				<div class="col-xs-10 text-right menu-1">
				<li class="active"><a href="../Admin/index.php">Forms</a></li>
					<ul>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>

	<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/<?php echo $background; ?>);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
						    <h2>Tanggal : <?php echo $tanggal; ?></h2>
							<h1><?php echo $pria; ?> &amp; <?php echo $perempuan ?></h1>
							<h2>We Are Getting Married!</h2>
							<h1 id="counter" class="text-center mt-5 m-auto p-3 text-white"></h1>
							<!--<div class="simply-countdown simply-countdown-one"></div>-->
							<div class="simply-countdown simply-countdown-one">
								<div class="simply-section simply-days-section">
									<div><span class="simply-amount" id="hari">0</span><span class="simply-word">days</span></div>
								</div>
								<div class="simply-section simply-hours-section">
									<div><span class="simply-amount" id="jam">0</span><span class="simply-word">hours</span></div>
								</div>
								<div class="simply-section simply-minutes-section">
									<div><span class="simply-amount" id="menit">0</span><span class="simply-word">minutes</span></div>
								</div>
								<div class="simply-section simply-seconds-section">
									<div><span class="simply-amount" id="detik">0</span><span class="simply-word">seconds</span></div>
								</div>
							</div>
							<p><a href="#" class="btn btn-default btn-sm">Save the date</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-couple">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Hello!</h2>
					<h3>January 20th, 2024 Tokyo, Japan</h3>
					<p>We invited you to celebrate our wedding</p>
				</div>
			</div>
			<div class="couple-wrap animate-box">
				<div class="couple-half">
					<div class="groom">
						<img src="<?php echo $dir.$photo_pria; ?>" alt="groom" class="img-responsive">
					</div>
					<div class="desc-groom">
						<h3>Kira Yamato</h3>
						<p>a gloomy and withdrawn person; especially after the first Bloody Valentine war broke out and a group of ZAFT troops attacked Heliopolis.</p>
					</div>
				</div>
				<p class="heart text-center"><i class="icon-heart2"></i></p>
				<div class="couple-half">
					<div class="bride">
						<img src="<?php echo $dir.$photo_perempuan; ?>" alt="groom" class="img-responsive">
					</div>
					<div class="desc-bride">
						<h3>Lacus Clyne</h3>
						<p>is the daughter of the Leader of the PLANT Supremacy Council, Siegel Clyne. He is a Coordinator who has a career as a very popular singer at PLANT.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-event" class="fh5co-bg" style="background-image:url(images/img_bg_3.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<span>Our Special Events</span>
					<h2>Wedding Events</h2>
				</div>
			</div>
			<div class="row">
				<div class="display-t">
					<div class="display-tc">
						<div class="col-md-10 col-md-offset-1">
							<div class="col-md-6 col-sm-6 text-center">
								<div class="event-wrap animate-box">
									<h3>Main Ceremony</h3>
									<div class="event-col">
										<i class="icon-clock"></i>
										<span>4:00 PM</span>
										<span>6:00 PM</span>
									</div>
									<div class="event-col">
										<i class="icon-calendar"></i>
										<span>Monday 20</span>
										<span>January, 2024</span>
									</div>
									<p>Welcoming the first day as well as opening the introduction of the bride & groom.</p>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 text-center">
								<div class="event-wrap animate-box">
									<h3>Wedding Party</h3>
									<div class="event-col">
										<i class="icon-clock"></i>
										<span>7:00 PM</span>
										<span>12:00 AM</span>
									</div>
									<div class="event-col">
										<i class="icon-calendar"></i>
										<span>Saturday 18</span>
										<span>January, 2024</span>
									</div>
									<p>The culmination of the awaited event and at the same time the release of the bride to the groom.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-couple-story">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<span>We Love Each Other</span>
					<h2>Our Story</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-md-offset-0">
					<ul class="timeline animate-box">
						<li class="animate-box">
							<div class="timeline-badge" style="background-image:url(images/<?php echo $gambar1; ?>"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">First We Meet</h3>
									<span class="date">December 25, 2015</span>
								</div>
								<div class="timeline-body">
								</div>
							</div>
						</li>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge" style="background-image:url(images/<?php echo $gambar2; ?>);"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">First Date</h3>
									<span class="date">December 28, 2015</span>
								</div>
								<div class="timeline-body">
								</div>
							</div>
						</li>
						<li class="animate-box">
							<div class="timeline-badge" style="background-image:url(images/<?php echo $gambar3; ?>);"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">In A Relationship</h3>
									<span class="date">January 1, 2016</span>
								</div>
								<div class="timeline-body">
								</div>
							</div>
						</li>
			    	</ul>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-gallery" class="fh5co-section-gray">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<span>Our Memories</span>
					<h2>Wedding Gallery</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
				</div>
			</div>
			<div class="row row-bottom-padded-md">
				<div class="col-md-12">
					<ul id="fh5co-gallery-list">

					<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/<?php echo $galery1; ?>); ">
						<a href="#" class="color-3">
							<div class="case-studies-summary">
								<span>90 Photos</span>
								<h2>Beautiful sunset</h2>
							</div>
						</a>
					</li>
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/<?php echo $galery2; ?>); "> 
							<a href="images/gallery-8.jpg" class="color-5">
								<div class="case-studies-summary">
									<span>90 Photos</span>
									<h2>Timer starts now!</h2>
								</div>
							</a>
						</li>
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/<?php echo $galery3; ?>); "> 
							<a href="images/gallery-8.jpg" class="color-5">
								<div class="case-studies-summary">
									<span>90 Photos</span>
									<h2>Timer starts now!</h2>
								</div>
							</a>
						</li>
               			</div>
					</ul>		
				</div>
			<div class="row row-bottom-padded-md">
				<div class="col-md-12">
					<ul id="fh5co-gallery-list">

					<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/<?php echo $galery4; ?>); ">
						<a href="#" class="color-3">
							<div class="case-studies-summary">
								<span>90 Photos</span>
								<h2>Beautiful sunset</h2>
							</div>
						</a>
					</li>
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/<?php echo $galery5; ?>); "> 
							<a href="#" class="color-5">
								<div class="case-studies-summary">
									<span>90 Photos</span>
									<h2>Timer starts now!</h2>
								</div>
							</a>
						</li>
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/<?php echo $galery6; ?>); "> 
							<a href="#" class="color-5">
								<div class="case-studies-summary">
									<span>90 Photos</span>
									<h2>Timer starts now!</h2>
								</div>
							</a>
						</li>
               			</div>
					</ul>		
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-testimonial">
		<div class="container">
			<div class="row">
				<div class="row animate-box">
				</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-testimonial">
		<div class="container">
			<div class="row">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<span>Best Wishes</span>
						<h2>Friends Wishes</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 animate-box">
						<div class="wrap-testimony">
							<div class="owl-carousel-fullwidth">
								<div class="item">
									<div class="testimony-slide active text-center">
										<figure>
											<img src="images/<?php echo $wishes1; ?>" alt="user">
										</figure>
										<span>Kyle, via <a href="#" class="twitter">Twitter</a></span>
										<blockquote>
											<p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics"</p>
										</blockquote>
									</div>
								</div>
								<div class="item">
									<div class="testimony-slide active text-center">
										<figure>
											<img src="images/<?php echo $wishes2; ?>" alt="user">
										</figure>
										<span>Kyle, via <a href="#" class="twitter">Twitter</a></span>
										<blockquote>
											<p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, at the coast of the Semantics, a large language ocean."</p>
										</blockquote>
									</div>
								</div>
								<div class="item">
									<div class="testimony-slide active text-center">
										<figure>
											<img src="images/<?php echo $wishes3; ?>" alt="user">
										</figure>
										<span>Kyle, via <a href="#" class="twitter">Twitter</a></span>
										<blockquote>
											<p>"Far far away, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."</p>
										</blockquote>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-services" class="fh5co-section-gray">
		<div class="container">
			
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>We Offer Services</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-calendar"></i>
						</span>
						<div class="feature-copy">
							<h3>We Organized Events</h3>
							<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
						</div>
					</div>

					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-image"></i>
						</span>
						<div class="feature-copy">
							<h3>Photoshoot</h3>
							<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
						</div>
					</div>

					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-video"></i>
						</span>
						<div class="feature-copy">
							<h3>Video Editing</h3>
							<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
						</div>
					</div>

				</div>

				<div class="col-md-6 animate-box">
					<div class="fh5co-video fh5co-bg" style="background-image: url(images/img_bg_3.jpg); ">
						<a href="https://vimeo.com/channels/staffpicks/93951774" class="popup-vimeo"><i class="icon-video2"></i></a>
						<div class="overlay"></div>
					</div>
				</div>
			</div>

			
		</div>
	</div>


    <h2>Google Maps Example</h2> 
    <div id="map"></div>
    
	<link rel="stylesheet" href="leaflet/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <script src="leaflet/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>



	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; Kyle Zafebent Remara.</small> 
						<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>

	<!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->
	<script src="js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	<!--
	<script>
    var d = new Date(new Date().getTime() + 200 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
</script>
-->
<script>

	var map = L.map('map').setView([-6.909936032174063, 107.64961262177412], 17);

	var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(map);

	var marker = L.marker([-6.909936032174063, 107.64961262177412]).addTo(map)
		.bindPopup('<b>Lokasi!</b><br />Tempat Acara di Selenggarakan.').openPopup();


	var popup = L.popup()
		.setLatLng([-6.909936032174063, 107.64961262177412])
		.setContent('Lokasi Wedding.')
		.openOn(map);

	function onMapClick(e) {
		popup
			.setLatLng(e.latlng)
			.setContent('You clicked the map at ' + e.latlng.toString())
			.openOn(map);
	}

	map.on('click', onMapClick);

</script>

<script>
	<?php 
		$data = strtotime($tanggal);
		$getDate = date("F d, Y", $data); 
	?>
	var countDownDate = new Date("<?php echo "$getDate $waktu"; ?>").getTime();
	// Update the count down every 1 second
	var x = setInterval(function() {
		var now = new Date().getTime();
		// Find the distance between now an the count down date
		var distance = countDownDate - now;
		// Time calculations for days, hours, minutes and seconds
		var days = Math.floor(distance / (1000 * 60 * 60 * 24));
		var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		var seconds = Math.floor((distance % (1000 * 60)) / 1000);
		// Output the result in an element with id="counter"11
		//document.getElementById("counter").innerHTML = days + "Day : " + hours + "h " +
		//minutes + "m " + seconds + "s ";
		// If the count down is over, write some text 

		document.getElementById("hari").innerHTML = days;
		document.getElementById("jam").innerHTML = hours;
		document.getElementById("menit").innerHTML = minutes;
		document.getElementById("detik").innerHTML = seconds;

		if (distance < 0) {
			clearInterval(x);
			document.getElementById("counter").innerHTML = "EXPIRED";
		}
	}, 1000);
</script>

	</body>
</html>

