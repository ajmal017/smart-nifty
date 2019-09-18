@extends('front.app')

@section('title', '')

@section('css_part')
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
	<style type="text/css">
		body{
            background-color: #f5f5f5;
        }
        .outerDiv{
        	padding-top: 10px;
        	border: 1px solid #bbbbbb;
        	background-color: #f9f9f9;
        }


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
        </div>

        <div> Stock passes all of the below filters in cashsegment :

        </div>

        <!-- 	<label id="search">passes</label>
			<div id="searchContent" style="display:none;"><select><option>passes</option><option>fails</option></select></div>	 -->




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
					        	<tr>
					        		<td>1</td>
					        		<td><a href="/chart/{{$screenerName}}/{{$stockName}}">{{$stockName}}</a></td>
					        		<td><a href="/chart/{{$screenerName}}/{{$stockName}}">WIP</a></td>
					        		<td><a href="/chart/{{$screenerName}}/{{$stockName}}">P&F | F.A</a></td>
					        		<td>13.47%</td>
					        		<td>263.65</td>
					        		<td>221415</td>
					        	</tr>
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

	<!-- --->

	<script type="text/javascript">
		$(document).ready(function(){
			$("#example").DataTable({
				dom: 'Bfrtip',
		        /*buttons: [
		            'copy', 'csv', 'excel', 'pdf', 'print'
		        ]*/
		        buttons: [
		            'excel'
		        ]
			});
		});
	</script>

	<!-- <script type="text/javascript">
		

		$(function () {
    $("#search").click(function () {
        var text = $(this).text();
        if (text === "Advanced Search") {
           // $(this).text("Basic Search");
            $("#searchContent").show();
        } else {
           // $(this).text("Advanced Search");
            $("#searchContent").hide();
        }
    });
	});


	</script>
 -->
	
@endsection