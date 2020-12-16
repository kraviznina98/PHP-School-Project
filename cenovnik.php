<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Krojač Po Vašoj Meri </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
   </head>

   <body class="body-bg">
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
       <div class="header-area header-sticky">
            <div class="header-wrapper d-flex flex-wrap align-items-center justify-content-between">
                <!-- Logo -->
                <div class="logo">
                    <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                </div>
                <!-- Main-menu -->
                <div class="main-menu d-none d-lg-block">
                    <nav>
                        <ul id="navigation">                                                                                                                               
                            <li><a href="index.html">Početna</a></li>
                            <li><a href="prodavnica.html">Prodavnica</a></li>
                            <li><a href="usluge.html">Usluge</a></li>
                            <li><a href="about.html">Istorija</a></li>
                            <li><a href="galerija.html">Galerija</a></li>
                            <li><a href="blog.html">Blog</a>
                                <ul class="submenu">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="single-blog.html">Najnoviji Blog</a></li>
                                    <li><a href="single-blog2.html">Najstariji Blog</a></li>
                                </ul>
                            </li>
							<li><a href="kontakt.html">Kontakt</a></li>
							<li><a href="administracija.html">Administracija</a></li>
                        </ul>
                    </nav>
                </div>          
                <!-- Header-btn -->
                <div class="d-none d-xl-block">
                    <a href="#" class="btn btn2">Posetite Nas!</a>
                </div>
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
       </div>
        <!-- Header End -->
    </header>
	<div class="container">
		<h1 class="text-center">Prodavnica</h1>
		<div id="kategorije" class="text-center">

		</div>
		<h3>Sortiranje</h3>
		<div class="row">
			<div class="col-md-6">
				<select class="form-control" id="kolona" onchange="popuniProizvode(sessionStorage.getItem('broj'))">
					<option value="naziv" >Naziv</option>
					<option value="cena" >Cena</option>
				</select>
			</div>
			<div class="col-md-6">
				<select class="form-control" id="order" onchange="popuniProizvode(sessionStorage.getItem('broj'))">
					<option value="asc">Rastuce</option>
					<option value="desc">Opadajuce</option>
				</select>
			</div>
		</div>

		<div id="prodavnica">

		</div>


	</div>

	
	<script>
	function popuniKategorije(){
		$.ajax({
			url: "vratiKategorije.php",
			success: function(html){
				$("#kategorije").html(html);
			}
		})
	}

	</script>
	<script>
	function popuniProizvode(id){
		var kolona = $("#kolona").val();
		var order = $("#order").val();
		$.ajax({
			url: "vratiProizvode.php",
			data: "id="+id+"&kolona="+kolona+"&order="+order,
			success: function(html){
				$("#prodavnica").html(html);
			}
		})
	}

	</script>
	<script>
	popuniKategorije();
	popuniProizvode(0);
	sessionStorage.setItem("broj", "0");
	</script>
	

</body>

</html>
