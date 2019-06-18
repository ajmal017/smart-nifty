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
@endsection

@section('content')
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
</div>
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
			<!--<div class="col-lg-4 col-md-6 single-service">
				<div class="inner">
					<div class="title">
						<div class="icon">
							<i class="fa fa-film"></i>
						</div>
						<h4>Video Making</h4>
					</div>
					<div class="content">
						<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 single-service">
				<div class="inner">
					<div class="title">
						<div class="icon">
							<i class="fa fa-camera"></i>
						</div>
						<h4>Photography</h4>
					</div>
					<div class="content">
						<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 single-service">
				<div class="inner">
					<div class="title">
						<div class="icon">
							<i class="fa fa-music"></i>
						</div>
						<h4>Music Composing</h4>
					</div>
					<div class="content">
						<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 single-service">
				<div class="inner">
					<div class="title">
						<div class="icon">
							<i class="fa fa-bullhorn"></i>
						</div>
						<h4>Product Marketing</h4>
					</div>
					<div class="content">
						<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 single-service">
				<div class="inner">
					<div class="title">
						<div class="icon">
							<i class="fa fa-magic"></i>
						</div>
						<h4>Video Editing</h4>
					</div>
					<div class="content">
						<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 single-service">
				<div class="inner">
					<div class="title">
						<div class="icon">
							<i class="fa fa-bar-chart"></i>
						</div>
						<h4>Presentation</h4>
					</div>
					<div class="content">
						<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames.</p>
					</div>
				</div>
			</div> -->
		</div>
	</div>
</div>
<!-- <div class="portfolio-area sp">
	<div class="container">
		<div class="section-title">
			<h2>Latest Work</h2>
			<p>Malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
		</div>
		<div class="row">
			<div class="single-portfolio col-md-4">
				<div class="inner">
					<div class="portfolio-img">
						<img src="assets/img/portfolio1.jpg" alt="portfolio-image">
						<div class="hover-content">
							<div>
								<a href="#" class="button">View Case Study</a>
							</div>
						</div>
					</div>
					<div class="portfolio-content">
						<a href="#"><h3>The Back Chiropractor</h3></a>
						<span>Ceramics, Design</span>
					</div>
				</div>
			</div>
			<div class="single-portfolio col-md-4">
				<div class="inner">
					<div class="portfolio-img">
						<img src="assets/img/portfolio2.jpg" alt="portfolio-image">
						<div class="hover-content">
							<div>
								<a href="#" class="button">View Case Study</a>
							</div>
						</div>
					</div>
					<div class="portfolio-content">
						<a href="#"><h3>The Back Chiropractor</h3></a>
						<span>Ceramics, Design</span>
					</div>
				</div>
			</div>
			<div class="single-portfolio col-md-4">
				<div class="inner">
					<div class="portfolio-img">
						<img src="assets/img/portfolio3.jpg" alt="portfolio-image">
						<div class="hover-content">
							<div>
								<a href="#" class="button">View Case Study</a>
							</div>
						</div>
					</div>
					<div class="portfolio-content">
						<a href="#"><h3>The Back Chiropractor</h3></a>
						<span>Ceramics, Design</span>
					</div>
				</div>
			</div>
			<div class="single-portfolio col-md-4">
				<div class="inner">
					<div class="portfolio-img">
						<img src="assets/img/portfolio4.jpg" alt="portfolio-image">
						<div class="hover-content">
							<div>
								<a href="#" class="button">View Case Study</a>
							</div>
						</div>
					</div>
					<div class="portfolio-content">
						<a href="#"><h3>The Back Chiropractor</h3></a>
						<span>Ceramics, Design</span>
					</div>
				</div>
			</div>
			<div class="single-portfolio col-md-4">
				<div class="inner">
					<div class="portfolio-img">
						<img src="assets/img/portfolio5.jpg" alt="portfolio-image">
						<div class="hover-content">
							<div>
								<a href="#" class="button">View Case Study</a>
							</div>
						</div>
					</div>
					<div class="portfolio-content">
						<a href="#"><h3>The Back Chiropractor</h3></a>
						<span>Ceramics, Design</span>
					</div>
				</div>
			</div>
			<div class="single-portfolio col-md-4">
				<div class="inner">
					<div class="portfolio-img">
						<img src="assets/img/portfolio6.jpg" alt="portfolio-image">
						<div class="hover-content">
							<div>
								<a href="#" class="button">View Case Study</a>
							</div>
						</div>
					</div>
					<div class="portfolio-content">
						<a href="#"><h3>The Back Chiropractor</h3></a>
						<span>Ceramics, Design</span>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 text-center" data-margin="40px 0 0">
				<a href="#" class="button">More Works</a>
			</div>
		</div>
	</div>
</div>
<div class="testimonial-area sp bg1">
	<div class="container">
		<div class="section-title white">
			<h2>Clients Review</h2>
			<p>Malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
		</div>
		<div class="testimonial-slider">
			<div class="single-slide">
				<div class="inner">
					<p>When I was just starting 6th grade I got my first job. Paperboy! Boy, was I excited. At that time I had spent a lot of time actually playing the video official.</p>
					<div class="client-info">
						<div class="client-img">
							<img src="assets/img/client.jpg" alt="client">
						</div>
						<div class="client-data">
							<h4>Jhon Doe</h4>
							<span>Designer</span>
						</div>
					</div>
				</div>
			</div>
			<div class="single-slide">
				<div class="inner">
					<p>When I was just starting 6th grade I got my first job. Paperboy! Boy, was I excited. At that time I had spent a lot of time actually playing the video official.</p>
					<div class="client-info">
						<div class="client-img">
							<img src="assets/img/client.jpg" alt="client">
						</div>
						<div class="client-data">
							<h4>Jhon Doe</h4>
							<span>Designer</span>
						</div>
					</div>
				</div>
			</div>
			<div class="single-slide">
				<div class="inner">
					<p>When I was just starting 6th grade I got my first job. Paperboy! Boy, was I excited. At that time I had spent a lot of time actually playing the video official.</p>
					<div class="client-info">
						<div class="client-img">
							<img src="assets/img/client.jpg" alt="client">
						</div>
						<div class="client-data">
							<h4>Jhon Doe</h4>
							<span>Designer</span>
						</div>
					</div>
				</div>
			</div>
			<div class="single-slide">
				<div class="inner">
					<p>When I was just starting 6th grade I got my first job. Paperboy! Boy, was I excited. At that time I had spent a lot of time actually playing the video official.</p>
					<div class="client-info">
						<div class="client-img">
							<img src="assets/img/client.jpg" alt="client">
						</div>
						<div class="client-data">
							<h4>Jhon Doe</h4>
							<span>Designer</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="faq-area sp bg2">
	<div class="container">
		<div class="section-title">
			<h2>Frequently Asked Questions</h2>
			<p>Malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="faq">
					<div class="single-item">
						<h4>Low Cost Advertising Available or Not?</h4>
						<div class="content">
							Pellentesque habitant morbi tristique senectus et netus et malesu ada fames and reply to all.
						</div>
					</div>
					<div class="single-item">
						<h4>What Is The Big R For Marketing Your Business?</h4>
						<div class="content">
							Pellentesque habitant morbi tristique senectus et netus et malesu ada fames and reply to all.
						</div>
					</div>
					<div class="single-item">
						<h4>Does Using Banner Stands Increase Trade Show Traffic?</h4>
						<div class="content">
							Pellentesque habitant morbi tristique senectus et netus et malesu ada fames and reply to all.
						</div>
					</div>
					<div class="single-item">
						<h4>How To Write Better Advertising Copy?</h4>
						<div class="content">
							Pellentesque habitant morbi tristique senectus et netus et malesu ada fames and reply to all.
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="faq-img text-center">
					<img src="assets/img/fag-img.png" alt="faq">
				</div>
			</div>
		</div>
	</div>
</div> -->

@endsection



@section('js_script')
	<script type="text/javascript">
		$(document).ready(function(){
			$("#main_slider").owlCarousel({
				autoplay : 800,
				stopOnHover : false
			});
		});
	</script>
@endsection