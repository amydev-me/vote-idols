@extends('master')
@section('title','Vote your idols')
@section('content')
<!-- Header -->
<header>

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

	<!-- Our Show -->
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
@endsection