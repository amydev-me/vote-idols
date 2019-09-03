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
    @include('header')

    @yield('content')
	
    @include('footer')

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
	<script type="text/javascript" src="js/slick-custom.js"></script>

	<script type="text/javascript" src="js/main.js"></script>

</body>
</html>
