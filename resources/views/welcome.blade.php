<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
        <link rel="icon" type="image/jpg" href="images/logo2.png"/>
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="css/themify-icons.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="css/animate.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="css/hamburgers.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="css/animsition.min.css">
            <link rel="stylesheet" type="text/css" href="css/slick.css">
            <link rel="stylesheet" type="text/css" href="css/util.css">
            <link rel="stylesheet" type="text/css" href="css/main.css">
        <!--===============================================================================================-->
        
        <style type="text/css">
	.event_list_entry {
	   display: inline-block;
	    float: left;
	    position: relative;
	    font-size: 15px;
	    height: 60px;
	}
	.event_list_entry.event_title_img{
		    width: 38%;
		    color: #ffffff;
	}
	.event_list_entry.event_date {
	    width: 10%;
	    text-align: left;
	    color: #ffffff;
	}
	.event_list_date_container {
    	display: inline-block;
	}
	img {
	    max-width: 100%;
	    height: auto;
	    border-width: 0;
	}
	.event_img {
	    width: 70px;
	    height: 60px;
	    margin-right: 20px;
	    position: relative;
	}
	.event_img, .evnt_list_title_loc {
	    display: inline-block;
	    float: left;
	}
	.event_list_title {
	    font-size: 20px;
	    font-weight: 700;
	    padding-top: 2px;
	    color: #ffffff;
	}
	.event_list_location {
	    font-size: 15px;
	    line-height: 18px;
	}
	.single_event_list {
	    display: block;
	    position: relative;
	    border-bottom-width: 1px;
	    border-bottom-style: solid;
	    padding: 25px 0;
	    padding-top: 25px;
	    padding-right: 0px;
	    padding-bottom: 25px;
	    padding-left: 0px;
	}
	.event_venue {
	    letter-spacing: 1px;
	    width: 25%;
	    line-height: 60px;
	    color: #707281;
	}
	.event_list_entry.event_venue i, .event_list_entry.event_time i{
		    margin-right: 7px;
	}
	.event_list_entry.event_time {
	    width: 10%;
	    line-height: 60px;
	     color: #707281;
	}
	.event_list_entry.event_buy {
	    width: 17%;
	    text-align: right;
	    line-height: 60px;
	}
	.event_buy_btn {
	    display: inline-block;
	    font-size: 12px;
	    line-height: 40px;
	    letter-spacing: 1px;
	    text-indent: 1px;
	    font-weight: 400;
	    border-radius: 5px;
	    border: 1px solid;
	    text-transform: uppercase;
	    width: 140px;
	    text-align: center;
	}
	.event_buy_btn lc_js_link{
	color:#ffffff;
	}
	.event_buy_btn.lc_js_link{
		color: #fb3a64 !important;
	}
	.swp_slide_link {
	    font-size: 12px;
	    text-transform: uppercase;
	    font-weight: 700;
	    letter-spacing: 1px;
	}
	.lc_swp_boxed {
	    max-width: 1200px;
	    margin: 0 auto;
	    padding-left: 30px;
	    padding-right: 30px;
	}
	.swp_slide_link {
	    font-size: 12px;
	    text-transform: uppercase;
	    font-weight: 700;
	    letter-spacing: 1px;
	}
	.vibrant_color{
		color: #fb3a64;
	}
	.lc_swp_boxed{
	    padding-left: 30px;
	    padding-right: 30px;
	}
	.text_center {
	    text-align: center;
	}
	@media only screen and (max-width: 991px){
		.event_date,.event_title_img,.event_venue,.event_time,.event_buy{
			text-align: center !important;
		}

		.event_title_img{
			display: none;
		}
	}

</style>
</head>
<body class="animsition">
	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="wrap-menu-header gradient1 trans-0-4">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">
					<!-- Logo -->
					<div class="logo">
						<a href="index.html">
							<img src="images/logo2.png'" alt="IMG-LOGO" data-logofixed="images/logo2.png" style="width: 80px;">
						</a>
					</div>

					<!-- Menu -->
					<div class="wrap_menu p-l-45 p-l-0-xl">
						<nav class="menu">
							<ul class="main_menu">
								<li><a href="test.html">Home</a></li>
								<li><a href="show.html">Live</a></li>
								<li><a href="schedule.html">Schedule</a></li>
								<li><a href="#">About</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</nav>
					</div>

					<!-- Social -->
					<div class="social flex-w flex-l-m p-r-20">
						<a href="#"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-facebook m-l-21" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-twitter m-l-21" aria-hidden="true"></i></a>

					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Slide1 -->
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1 item1-slick1" style="background-image: url(/images/battle.png);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<!-- <h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
							Never Give Up
						</h2> -->
					</div>
				</div>

				<div class="item-slick1 item2-slick1" style="background-image: url(/images/universe.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<!-- <span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
							The winner and ultimate Champion is crowned!
						</span>
						<h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
							Never Give Up
						</h2> -->
					</div>
				</div>

				<div class="item-slick1 item2-slick1" style="background-image: url(/images/mister.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<!-- <span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
							The winner and ultimate Champion is crowned!
						</span>
						<h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
							Never Give Up
						</h2> -->
					</div>
				</div>
			</div>
			<div class="wrap-slick1-dots"></div>
		</div>
	</section>

	<!-- Welcome -->
	<section class="section-welcome bg1-pattern p-t-120 p-b-105">
		<div class="container">
			<div class="row">
				<div class="col-md-12 p-t-45 p-b-30">
					<div class="wrap-text-welcome t-center">
						<h2 class="t-center m-b-35 m-t-5" style="color: #ffffff;">Sometimes, we raise to the occasion</h2>
						<a href="#" class="txt4" style="color: #fb3a64;">
							MORE ABOUT US
							<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section-ourmenu bg2-pattern p-t-115 p-b-120 " >
		<div class="container" >
			<div class="title-section-ourmenu t-center m-b-50">
				<h2 class="t-center" style="color: #ffffff;">Upcoming Shows</h1>
				<div class="m-t-10 m-b-70" style="color: #ffffff;">
					Amazing shows in 2019 all around Myanmar
				</h4>
			</div>
			<div class="single_event_list clearfix">
				<div class="row text-center">
					<div class="col-12 col-lg-1 event_list_entry event_date">
						<div style="font-weight: 700;font-size: 30px;line-height: 38px;">12</div>
	    				<div  style="font-weight: 500;font-size: 14px;text-transform: uppercase;display: block;line-height: 1em;">JUNE</div>
					</div>
					<div class="col-12 col-lg-3 event_list_entry event_title_img clearfix">
						<div  class="event_img">
							<img src="https://seeklogo.com/images/M/masterchef-logo-4D8D9089EB-seeklogo.com.png">
						</div>
	    				<div  class="evnt_list_title">Myanmar Kitchen </div>
	    				<div  class="evnt_list_location"> Yangon, Myanmar</div>
					</div>
					<div class="col-12 col-lg-3 event_list_entry event_venue">
						<i class="fas fa-map-marker-alt" aria-hidden="true"></i>
						Master Chef
					</div>
					<div class="col-12 col-lg-3 event_list_entry event_time">
						<i class="fas fa-map-marker-alt" aria-hidden="true"></i>
					21:00
					</div>
					<div class="col-12 col-lg-2 event_list_entry event_buy">
						<div class="event_buy_btn lc_js_link">
							Vote
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 p-t-45 p-b-10">
					<div class="wrap-text-welcome t-center">
						<a href="show.html" class="txt4" style="color: #fb3a64;font-weight: 800;">
							View All Shows
							<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
						</a>
					</div>
				</div>
			</div>
			<!-- <div class="row swp_slide_link vc_events_more lc_swp_boxed text_center show_arrow">
				<a href="" class="vibrant_color">View All Shows</a>
			</div> -->
		</div>
	</section>

	<!-- Our menu -->
	<section class="section-ourmenu bg2-pattern p-t-50 p-b-120">
		<div class="container">
			<div class="title-section-ourmenu t-center m-b-22">
				<h2 class="t-center" style="color: #ffffff;">RECOMMENDED SHOWS</h1>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-sm-3">
							<!-- Item our menu -->
							<div class="item-ourmenu bo-rad-0 hov-img-zoom pos-relative m-t-30">
								<img src="https://cdn1.edgedatg.com/aws/v2/abc/AmericanIdol/showimages/8c44f53558657e42cfe9165426cc6d60/280x374-Q90_8c44f53558657e42cfe9165426cc6d60.jpg" alt="IMG-MENU">
							</div>
						</div>

						<div class="col-sm-3">
							<!-- Item our menu -->
							<div class="item-ourmenu bo-rad-0 hov-img-zoom pos-relative m-t-30">
								<img src="https://cdn1.edgedatg.com/aws/v2/abc/GHCollectionTheBestofTheNursesBall20142018/showimages/c286a8dafec6bbc9907285ae76333bf3/280x374-Q90_c286a8dafec6bbc9907285ae76333bf3.jpg" alt="IMG-MENU">
							</div>
						</div>

						<div class="col-sm-3">
							<!-- Item our menu -->
							<div class="item-ourmenu bo-rad-0 hov-img-zoom pos-relative m-t-30">
								<img src="https://cdn1.edgedatg.com/aws/v2/abcnews/GoodMorningAmerica/showimages/603c73b29bef18b63d048dc32dccbc32/280x374-Q90_603c73b29bef18b63d048dc32dccbc32.jpg" alt="IMG-MENU">
							</div>
						</div>
						<div class="col-sm-3">
							<!-- Item our menu -->
							<div class="item-ourmenu bo-rad-0 hov-img-zoom pos-relative m-t-30">
								<img src="https://cdn1.edgedatg.com/aws/v2/abc/FreshOffTheBoat/showimages/e22fc615492d177b8a8cd04a42de7964/280x374-Q90_e22fc615492d177b8a8cd04a42de7964.jpg" alt="IMG-MENU">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer -->
	<footer class="bg1">
		<div class="container p-t-40 p-b-70">
			<div class="row">
				<div class="col-sm-12 col-md-12 p-t-50" style="text-align: center;">
					<!-- - -->
					<h6 class="m-b-33" style="color: #ffffff;font-weight: 900px;">
						ampyaephyonaing@gmail.com
					</h4>
					<ul class="m-b-70">
						
						<li class="txt14 m-b-14">
							(+95) 94 301 1736
						</li>
						<li class="txt14 m-b-14">
							<img src="images/logo2.png" style="height: auto;width: 60px;">
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="end-footer bg2">
			<div class="container">
				<div class="p-t-22 p-b-22">
					<div class="txt17 p-r-20 p-t-5 p-b-5 text-center">
						Copyright &copy; 2019 All rights reserved  |  Develop <i class="fa fa-heart"></i> by <a href="https://colorlib.com" target="_blank">Amy</a>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="js/popper.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="js/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js')}}"></script>

	<script type="text/javascript" src="js/main.js"></script>

</body>
</html>
