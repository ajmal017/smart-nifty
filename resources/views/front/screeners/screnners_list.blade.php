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

       
		.method
		{	
			width: auto!important;
			font-weight: bold;
			background-color: transparent;
  			border:none;
  			-webkit-appearance: none;
			-moz-appearance: none;
  		}

  		.filterSegment1
  		{
  			display: inline-flex;
  			  font-style: italic;
  			  font-size:16px;
  		}

  		#filterRuleArea{
  			display: flex;
  			border-left: 2px double #858585;
  			list-style: none;
  			padding-left: 20px;
  			margin-top: 3px;
  			font-size: 1rem;
  		}


  		#filterRuleArea div{
  			padding-right: 10px !important;
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

        <div class="filterSegment1"> 
        	Stock <select id="method" class="method" name="method" required>
      					<option name="method"  value="Passes" selected="true">Passes</option>
      					<option name="method" value="Fails">Fails</option>
    			</select>
    			<select id="method" class="method" name="method" required>
      					<option name="method"  value="All" selected="true">All</option>
      					<option name="method" value="Any">Any</option>
    			</select> 
    		 of the below filters in
    		 	<select id="method" class="method" name="method" required>
      					<option name="method"  value="Cash" selected="true">Cash</option>
      					<option name="method" value="Futures">Futures</option>
 						<option name="method" value="Indices">Indices</option>
 						<option name="method" value="Nifty100">Nifty 100</option>
 						<option name="method" value="Nifty200">Nifty 200</option>
 						<option name="method" value="Nifty50">Nifty 50</option>
 						<option name="method" value="Nifty500">Nifty 500</option>
 						<option name="method" value="Watchlist">Watchlist</option>
    			</select> 
    		  segment :
        </div>

        <div class="row mb-3">
        	<div class="col-md-6">
        		<div id="filterRuleArea">
        			<div id="filterRule1Div">
	        			<span id="filterRule1" style="cursor: pointer;">[<b id="filterRuleChild1">0</b>]</span>
	        			<select id="filterRule1Select" style="display: none;">
	        				<option value="0">0(Latest Candle)</option>
	        				<option value="-1">-1(Previous Candle)</option>
	        				<option value="-2">-2</option>
	        				<option value="-3">-3</option>
	        				<option value="-4">-4</option>
	        				<option value="-5">-5</option>
	        				<option value="-6">-6</option>
	        				<option value="-7">-7</option>
	        				<option value="-8">-8</option>
	        				<option value="-n">n candles ago</option>
	        				<optgroup label="--Day Candle--">
	        					<option value="=1">=1(first candle)</option>
		        				<option value="=2">=2(second candle)</option>
		        				<option value="=3">=3</option>
		        				<option value="=4">=4</option>
		        				<option value="=5">=5</option>
		        				<option value="=n">nth candle of day</option>	
	        				</optgroup>
	        				<optgroup label="--Prior day candles--">
	        					<option value="=-1">=-1(previous days last candle)</option>
		        				<option value="=-2">=-2(previous days second last candle)</option>
		        				<option value="=-3">=-3</option>
		        				<option value="=-4">=-4</option>
		        				<option value="=-5">=-5</option>
		        				<option value="=-n">-nth last candle of previous day</option>	
	        				</optgroup>
	        			</select>
	        		</div>



	        		<div id="filterRule2Div">
	        			<span id="filterRule2" style="cursor: pointer;"><b id="filterRuleChild2">15 Minute</b></span>
	        			<select id="filterRule2Select" style="display: none;">
	        				<optgroup label="--Minute--">
	        					<option value="1_minute">1 Minute</option>
	        					<option value="2_minute">2 Minute</option>
	        					<option value="3_minute">3 Minute</option>
	        					<option value="5_minute">5 Minute</option>
	        					<option value="10_minute">10 Minute</option>
	        					<option value="15_minute" selected="">15 Minute</option>
	        					<option value="20_minute">20 Minute</option>
	        					<option value="30_minute">30 Minute</option>
	        					<option value="75_minute">75 Minute</option>
	        					<option value="60_minute">1 Hour</option>
	        					<option value="120_minute">2 Hour</option>
	        					<option value="240_minute">4 Hour</option>
	        				</optgroup>
	        				<optgroup label="--Days--">
	        					<option value="Latest">Latest(daily)</option>
	        					<option value="1_dayago">1 day ago</option>
	        					<option value="2_dayago">2 days ago</option>
	        					<option value="3_dayago">3 days ago</option>
	        					<option value="n_dayago">n days ago</option>
	        				</optgroup>
	        				<optgroup label="--Weeks--">
	        					<option value="Weekly">Weekly</option>
	        					<option value="1_weekago">1 week ago</option>
	        					<option value="2_weekago">2 weeks ago</option>
	        					<option value="3_weekago">3 weeks ago</option>
	        					<option value="n_weekago">n weeks ago</option>
	        				</optgroup>
	        				<optgroup label="--Months--">
	        					<option value="Monthly">Monthly</option>
	        					<option value="1_monthago">1 month ago</option>
	        					<option value="2_monthago">2 months ago</option>
	        					<option value="3_monthago">3 months ago</option>
	        					<option value="n_monthago">n moths ago</option>
	        				</optgroup>
	        			</select>
	        		</div>


	        		<div id="filterRule3Div">
	        			<span id="filterRule3" style="cursor: pointer;"><b id="filterRuleChild3">Close</b></span>
	        			<select id="filterRule3Select" style="display: none;">
	        				<option value="number_value">Number Value</option>
	        				<optgroup label="--Stock Attributes--">
	        					<option value="Open">Open</option>
	        					<option value="High">High</option>
	        					<option value="Low">Low</option>
	        					<option value="Close">Close</option>
	        					<option value="Volume">Volume</option>
	        					<option value="HA-Open">HA-Open(Heikin-Ashi)</option>
	        					<option value="HA-High">HA-High(Heikin-Ashi)</option>
	        					<option value="HA-Low">HA-Low(Heikin-Ashi)</option>
	        					<option value="HA-Close">HA-Close(Heikin-Ashi)</option>
	        				</optgroup>
	        				<optgroup label="--Math Functions--">
	        					<option value="Bracket">Bracket(value)</option>
	        					<option value="Min">Min(duration,value)</option>
	        					<option value="Max">Max(duration,value)</option>
	        					<option value="Abs">Abs(value)</option>
	        					<option value="Ceil">Ceil(value)</option>
	        					<option value="Floor">Floor(value)</option>
	        					<option value="Round">Round(value)</option>
	        					<option value="Square">Square(value)</option>
	        					<option value="Square_root">Square root(value)</option>
	        				</optgroup>
	        				<optgroup label="--Indicators--">
	        					<option value="Pivot_point">Pivot point</option>
	        					<option value="Pivot_point_R1">Pivot point R1</option>
	        					<option value="Pivot_point_R2">Pivot point R2</option>
	        					<option value="Pivot_point_S1">Pivot point S1</option>
	        					<option value="Pivot_point_S2">Pivot point S2</option>
	        				</optgroup>
	        				<optgroup label="--">
	        					<option value="Sma">Sma(Simple)</option>
	        					<option value="Ema">Ema(Exponential)</option>
	        					<option value="Wma">Wma(Weighted)</option>
	        					<option value="Tma">Tma(Triangular)</option>
	        					<option value="Std">Std(Standard Deviation)</option>
	        				</optgroup>
	        				<optgroup label="--">
	        					<option value="Parabolic_Sar">Parabolic Sar</option>
	        					<option value="Upper_Bollinger_band">Upper Bollinger band</option>
	        					<option value="Lower_Bollinger_band">Lower Bollinger band</option>
	        				</optgroup>
	        				<optgroup label="--">
	        					<option value="SuperTrend">SuperTrend</option>
	        				</optgroup>
	        				<optgroup label="--">
	        					<option value="Ichimoku_Base_Line">Ichimoku Base Line</option>
	        					<option value="Ichimoku_Conversion_Line">Ichimoku Conversion Line</option>
	        					<option value="Ichimoku_Span_A">Ichimoku Span A</option>
	        					<option value="Ichimoku_Span_B">Ichimoku Span B</option>
	        					<option value="Ichimoku_Cloud_Top">Ichimoku Cloud Top</option>
	        					<option value="Ichimoku_Cloud_Bottom">Ichimoku Cloud Bottom</option>
	        				</optgroup>
	        				<optgroup label="--">
	        					<option value="Rsi">Rsi</option>
	        					<option value="StochRsi">StochRsi</option>
	        					<option value="Cci">Cci</option>
	        					<option value="Mfi">Mfi</option>
	        					<option value="OBV">OBV(On Blance Volume)</option>
	        					<option value="Williams_%R">Williams %R</option>
	        					<option value="Bollinger_Bands_%B">Bollinger Bands %B</option>
	        				</optgroup>
	        				<optgroup label="--">
	        					<option value="Macd_Line">Macd Line</option>
	        					<option value="Macd_Signal">Macd Signal</option>
	        					<option value="Macd_Histogram">Macd Histogram</option>
	        				</optgroup>
	        				<optgroup label="--">
	        					<option value="ADX">ADX</option>
	        					<option value="ADX_DI_Positive">ADX DI Positive</option>
	        					<option value="ADX_DI_Negative">ADX DI Negative</option>
	        				</optgroup>
	        				<optgroup label="--">
	        					<option value="True_Range">True Range</option>
	        					<option value="Avg_True_Range">Avg True Range(ATR)</option>
	        				</optgroup>
	        				<optgroup label="--">
	        					<option value="Aroon_Up">Aroon Up</option>
	        					<option value="Aroon_Down">Aroon Down</option>
	        					<option value="Aroon_Osc">Aroon Osc</option>
	        				</optgroup>
	        				<optgroup label="--">
	        					<option value="Slow_Stochastic_%K">Slow Stochastic %K</option>
	        					<option value="Slow_Stochastic_%D">Slow Stochastic %D</option>
	        					<option value="Fast_Stochastic_%K">Fast Stochastic %K</option>
	        					<option value="Fast_Stochastic_%D">Fast Stochastic %D</option>
	        					<option value="Smi_%K">Smi %K(Stochastic Momentum Index)</option>
	        					<option value="Smi_%D">Smi %D(Stochastic Momentum Index)</option>
	        				</optgroup>
	        				<optgroup label="--">
	        					<option value="WaveTrend">WaveTrend</option>
	        					<option value="WaveTrend_Trigger">WaveTrend Trigger</option>
	        					<option value="WaveTrend_Momentum">WaveTrend Momentum</option>
	        				</optgroup>
	        				<optgroup label="--Fundamentals--">
	        					<option value="Face_Value">Face Value</option>
	        					<option value="Reserves">Reserves</option>
	        					<option value="Dividend">Dividend</option>
	        					<option value="Book_Value">Book Value</option>
	        					<option value="Yearly_PE_Ratio">Yearly PE Ratio</option>
	        					<option value="Yearly_PC_Ratio">Yearly PC Ratio</option>
	        					<option value="Sales_Turnover">Sales Turnover[yearly]</option>
	        					<option value="Net_Profit">Net Profit[yearly]</option>
	        					<option value="Net_Profit_Variance">Net Profit Variance[yr]</option>
	        					<option value="Net_Profit">Net Profit[quarter]</option>
	        					<option value="Net_Profit_Variance">Net Profit Variance[qr]</option>
	        					<option value="Earning_Per_Share">Earning Per Share[EPS]</option>
	        					<option value="Prev_Year_EPS">Prev Year EPS</option>
	        					<option value="Cash_Per_Share[yr]">Cash Per Share[yr]</option>
	        					<option value="Cash_Per_Share[qr]">Cash Per Share[qr]</option>
	        					<option value="Cash_Per_Share[mt]">Cash Per Share[mt]</option>
	        					<option value="Net_Sales">Net Sales[quarter]</option>
	        					<option value="Price_to_Book_Value">Price to Book Value</option>
	        					<option value="Networth">Networth</option>
	        					

	        				</optgroup>
	        			</select>
	        		</div>


        		</div>
        	</div>
        </div>

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


	<script src="{{ asset('assets/js/filters/filter.js')}}"></script>

	
	

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