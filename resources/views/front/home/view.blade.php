@extends('front.app')

@section('title', '')

@section('css_part')
	<style type="text/css">
		.news_content img{
			display: none;
		}
		.news_content{
			height: 400px !important;
		}
		.main_content{
			height: inherit;
			overflow-y: scroll;
			scrollbar-width: thin;
			scroll-behavior: auto;
		} 
	</style>


	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
@endsection

@section('content')
<div class="main_slider">
	<div><img src="{{asset('assets/img/slide1.jpg')}}"></div>
	<div><img src="{{asset('assets/img/slide2.jpg')}}"></div>
	<div><img src="{{asset('assets/img/slide3.jpg')}}"></div>
	<div><img src="{{asset('assets/img/slide4.jpg')}}"></div>
</div>
<?php
/*
<div class="hero-slider" id="main_slider">
	<div class="single-slide" style="background-image: url('{{ asset('assets/img/slide1.jpg') }}')">
		<div class="inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="slide-content">
							<!-- <h2>We Are Digital Product Design Agency.</h2>
							<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
							<div class="slide-btn">
								<a href="#" class="button">Learn More</a>
								<a href="#" class="button-2">Live Preview</a>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="single-slide" style="background-image: url('{{ asset('assets/img/slide2.jpg') }}')">
		<div class="inner">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="slide-content">
							<!-- <h2>We Are Digital Product Design Agency.</h2>
							<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
							<div class="slide-btn">
								<a href="#" class="button">Learn More</a>
								<a href="#" class="button-2">Live Preview</a>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="single-slide" style="background-image: url('{{ asset('assets/img/slide3.jpg') }}')">
		<div class="inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="slide-content">
							<!-- <h2>We Are Digital Product Design Agency.</h2>
							<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
							<div class="slide-btn">
								<a href="#" class="button">Learn More</a>
								<a href="#" class="button-2">Live Preview</a>
							</div> -->
						</div>
					</div>
					<div class="col-lg-6 text-center">
						<div class="inner embed-responsive embed-responsive-16by9" data-margin="25px 0 0">
							<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/GYtUAYYDPo0?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>*/?>
<div class="brand-area">
	<div class="container">
		<div class="row">
			<center><h2><span style="color: #f00;">{{$news_data->news_content}}</span></h2></center>
			<!-- <div class="col-md-3 col-6 single-brand">
				<div class="inner">
					<a href="#">
						<img src="{{ asset('assets/img/brand1.png') }}" alt="">
					</a>
				</div>
			</div>
			<div class="col-md-3 col-6 single-brand">
				<div class="inner">
					<a href="#">
						<img src="assets/img/brand2.png" alt="">
					</a>
				</div>
			</div>
			<div class="col-md-3 col-6 single-brand">
				<div class="inner">
					<a href="#">
						<img src="assets/img/brand3.png" alt="">
					</a>
				</div>
			</div>
			<div class="col-md-3 col-6 single-brand">
				<div class="inner">
					<a href="#">
						<img src="assets/img/brand4.png" alt="">
					</a>
				</div>
			</div> -->
		</div>
	</div>
</div>

<div class="service-area bg2 sp">
	<div class="container">
		<div class="section-title">
			<h2>Latest News</h2>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6 single-service">
				<div class="inner">
					<div class="title" style="text-align: center;">
						<img src="https://images.news18.com/static_news18/pix/ibnhome/news18/news18-logo-xmln.png" width="30%" height="30%">
					</div>
					<div class="content news_content">
						<div class="main_content">
						<?php
							$html = "";
							$url = "https://www.news18.com/rss/business.xml";
							$xml = simplexml_load_file($url);
							
							for($i = 0; $i < 10; $i++){
								$title = $xml->channel->item[$i]->title;
								$link = $xml->channel->item[$i]->link;
								$description = $xml->channel->item[$i]->description;
								$pubDate = $xml->channel->item[$i]->pubDate;
								
							    $html .= "<a href='$link'><h5>$title</h5></a>";
								$html .= "<br />$description<br />";
								$html .= "<br /><span style='color: #4698ff;'>$pubDate</span><hr />";
							}
							echo $html;
						?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 single-service">
				<div class="inner">
					<div class="title" style="text-align: center;">
						<img src="https://images.news18.com/static_news18/pix/ibnhome/news18/news18-logo-xmln.png" width="30%" height="30%">
					</div>
					<div class="content news_content">
						<div class="main_content">
						<?php
							$html = "";
							$url = "https://gujarati.news18.com/rss/business.xml";
							$xml = simplexml_load_file($url);
							
							for($i = 0; $i < 10; $i++){
								$title = $xml->channel->item[$i]->title;
								$link = $xml->channel->item[$i]->link;
								$description = $xml->channel->item[$i]->description;
								$pubDate = $xml->channel->item[$i]->pubDate;
								
							    $html .= "<a href='$link'><h5>$title</h5></a>";
								$html .= "<br />$description<br />";
								$html .= "<br /><span style='color: #4698ff;'>$pubDate</span><hr />";
							}
							echo $html;
						?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 single-service">
				<div class="inner">
					<div class="title" style="text-align: center;">
						<img src="https://images.news18.com/static_news18/pix/ibnhome/news18/news18-logo-xmln.png" width="30%" height="30%">
					</div>
					<div class="content news_content">
						<div class="main_content">
						<?php
							$html = "";
							$url = "https://hindi.news18.com/rss/khabar/business/business.xml";
							$xml = simplexml_load_file($url);
							
							for($i = 0; $i < 10; $i++){
								$title = $xml->channel->item[$i]->title;
								$link = $xml->channel->item[$i]->link;
								$description = $xml->channel->item[$i]->description;
								$pubDate = $xml->channel->item[$i]->pubDate;
								
							    $html .= "<a href='$link' target='_blank'><h5>$title</h5></a>";
								$html .= "<br />$description<br />";
								$html .= "<br /><span style='color: #4698ff;'>$pubDate</span><hr />";
							}
							echo $html;
						?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection



@section('js_script')
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$(".main_slider").slick({
				accessibility: true,
				autoplay: true,
				autoplaySpeed: 2000,
				arrows: false,
				responsive: true,
				fade: true,
				lazyLoad: 'progressive',
				swipeToSlide: true
			});

		});
	</script>
@endsection