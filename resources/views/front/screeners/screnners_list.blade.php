@extends('front.app')

@section('title', '| Screeners List')

@section('css_part')
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
	<style type="text/css">
		body{
            background-color: #f5f5f5;
        }
        .outerDiv{
        	padding-top: 10px;
        	border: 1px solid #bbbbbb;
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
        <div class="row">
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
					        		<td><a href="/chart/{{$stockName}}">{{$stockName}}</a></td>
					        		<td><a href="/chart/{{$stockName}}">WIP</a></td>
					        		<td><a href="/chart/{{$stockName}}">P&F | F.A</a></td>
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

	<script type="text/javascript">
		$(document).ready(function(){
			$("#example").DataTable();
		});
	</script>
@endsection