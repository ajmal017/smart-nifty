@extends('front.app')

@section('title', '')

@section('css_part')
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
	<style type="text/css">
		body{ background-color: #f5f5f5; }
        .outerDiv{ padding-top: 10px;border: 1px solid #bbbbbb;background-color: #f9f9f9; }
		.method{ width: auto!important;font-weight: bold;background-color: transparent;border:none;-webkit-appearance: none;-moz-appearance: none;}

		.equvation{ border-left: 1px solid gray; }
		label{ color: #000;padding-right: 5px;padding-left: 5px; }

		.heading_equation_div label{ color: #f00;display: flex; }
		.heading_equation_div label span{ padding-right: 5px;padding-left: 5px; }

		.main_equation_div{ color: #000; }
		.main_equation_div button{ padding: 0;margin-left: 5px;margin-right: 5px;font-size: 0.9rem;cursor: pointer; }

		.arith_label{ color: #8b0000;font-weight: bold; }
		.numeric_filter_label{ color: #000;font-weight: bold; }
		.open_filter_label{ color: #000;font-weight: bold; }

	</style>
@endsection

@section('content')


<div class="service-area sp" style="padding-top: 50px;">
    <div class="container outerDiv">
        <div class="section-title" data-margin="0 0 40px">
        	@php
        		$screenerName = str_replace('-',' ',$screenerName)
        	@endphp
            <h4 class="text-left">{{$screenerName}} Screener</h4>

            <div class="header">
            	<div class="equvation">
            		@foreach($finalHeadingData as $value)
	            		<div class="col-md-12 mt-1 heading_equation_div">
	            			<p class="text-left">{!! $value !!}</p>
	            		</div>

	            		<div class="col-md-12 mb-2 text-left main_equation_div" style="padding-left: 25px;">
	            			<p>{!! $finalScreenersData[$value] !!}</p>
	            		</div>
	            	@endforeach

            		<div class="col-md-12 mb-2 text-left">
        				<button class="btn btn-default filter"><i class="fa fa-filter" aria-hidden="true"></i></button>
        			</div>

	            </div>
			</div> 	

        </div>

        <div class="row">
        	<div class="col-md-3">
        		<button class="btn btn-success">Run Scan</button>
        		<button class="btn btn-success"><i class="fa fa-copy"></i>&nbsp;Copy Scan</button>
        	</div>
        </div>

        <br/>
        <div class="row mb-3">
            <div class="col-lg-12 col-md-12">
            	<div class="card">
            		<div class="card-body">
		            	<table id="example" class="table table-striped table-bordered" style="width:100%">
					        <thead>
					            <tr>
					                <th>Srno.</th>
					                <th>Stock Name</th>
					                <th>Symbol</th>
					                <th>Links</th>
					                <th>% Chg</th>
					                <th>Price</th>
					                <th>Volume</th>
					            </tr>
					        </thead>
					        <tbody>
					        	
					        </tbody>
					    </table>
					</div>
				</div>
            </div>
        </div>
        
    </div>
</div>

@endsection


@section('js_script')
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>


	<!-- File Export JS -->

	<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>


	<script src="{{ asset('assets/js/screeners_js/headingEquation.js') }}"></script>
	<script src="{{ asset('assets/js/screeners_js/mainEquation.js') }}"></script>
	<!-- <script src="{{ asset('assets/js/filters/filter.js')}}"></script> -->

	
	

	<script type="text/javascript">
		$(document).ready(function(){
			$("#example").DataTable({
				dom: 'Bfrtip',
		        buttons: [
		            'excel'
		        ]
			});
		});


	

	</script>
@endsection