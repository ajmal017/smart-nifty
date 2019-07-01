@extends('front.app')

@section('title', '')

@section('css_part')
@endsection




@section('content')

	<div class="row pt-5 pb-5" style="width: 100%;">
		<div class="col-md-4"></div>
		<div class="col-md-4" style="text-align: center;color: #5c5c5c;font-family: Lucida Fax;">
			<h1>Thank You</h1>
			<p style="font-size: 1.4rem;">Your Submission is received and we will contact you soon.</p>
			<button class="btn btn-success" style="cursor: pointer;" id="redirect_page">Back To Contact Page</button>
		</div>
		<div class="col-md-4"></div>
	</div>

@endsection

@section('js_script')
	<script type="text/javascript">
		$(document).on("click","#redirect_page",function(){
			window.location.href = '/contact_us';
		});
	</script>
@endsection