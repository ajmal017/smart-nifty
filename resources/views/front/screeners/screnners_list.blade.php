@extends('front.app')

@section('title', '')

@section('css_part')
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
	<style type="text/css">
		body{ background-color: #f5f5f5; }
        .outerDiv{ padding-top: 10px;border: 1px solid #bbbbbb;background-color: #f9f9f9; }
		.method{ width: auto!important;font-weight: bold;background-color: transparent;border:none;-webkit-appearance: none;-moz-appearance: none;}
  		.filterSegment1{ display: inline-flex;font-style: italic;font-size:16px; }
  		#filterRuleArea{ display: flex;border-left: 2px double #858585;list-style: none;padding-left: 20px;margin-top: 3px;font-size: 1rem;}
  		#filterRuleArea div{ padding-right: 10px !important; }
  		#filterRule2 b{ font-weight: normal; }
  		#filterRule4Div{ color: #FF0000; }
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
	        				<option value="number">Number Value</option>
							<optgroup label="--Stock Attributes--">
								<option value="Open">Open</option>
								<option value="High">High</option>
								<option value="Low">Low</option>
								<option selected="" value="Close">Close</option>
								<option value="Volume">Volume</option>
								<option value="Vwap">VWAP</option>
								<option value="HA-Open">HA-Open (Heikin-Ashi)</option>
								<option value="HA-High">HA-High (Heikin-Ashi)</option>
								<option value="HA-Low">HA-Low (Heikin-Ashi)</option>
								<option value="HA-Close">HA-Close (Heikin-Ashi)</option>
							</optgroup>
							<optgroup label="--Math Functions--">
								<option value="brackets">Bracket(value)</option>
								<option value="min">Min(duration, value)</option>
								<option value="max">Max(duration, value)</option>
								<option value="abs">Abs(value)</option>
								<option value="ceil">Ceil(value)</option>
								<option value="floor">Floor(value)</option>
								<option value="round">Round(value)</option>
								<option value="square">Square(value)</option>
								<option value="square_root">Square root(value)</option>
							</optgroup>
							<optgroup label="--Indicators--">
								<option value="pivot_point">Pivot point</option>
								<option value="pivot_point_r1">Pivot point R1</option>
								<option value="pivot_point_r2">Pivot point R2</option>
								<option value="pivot_point_s1">Pivot point S1</option>
								<option value="pivot_point_s2">Pivot point S2</option>
							</optgroup>
							<optgroup label="--">
								<option value="sma">Sma(Simple)</option>
								<option value="ema">Ema(Exponential)</option>
								<option value="wma">Wma(Weighted)</option>
								<option value="tma">Tma(Triangular)</option>
								<option value="stddva">Std(Standard Deviation)</option>
							</optgroup>
							<optgroup label="--">
								<option value="parabolic_sar">Parabolic Sar</option>
								<option value="upper_bb">Upper Bollinger band</option>
								<option value="lower_bb">Lower Bollinger band</option>
							</optgroup>
							<optgroup label="--">
								<option value="supertrend">SuperTrend</option>
							</optgroup>
							<optgroup label="--">
								<option value="ichimoku_base">Ichimoku Base Line</option>
								<option value="ichimoku_conversion">Ichimoku Conversion Line</option>
								<option value="ichimoku_span_a">Ichimoku Span A</option>
								<option value="ichimoku_span_b">Ichimoku Span B</option>
								<option value="ichimoku_cloud_top">Ichimoku Cloud Top</option>
								<option value="ichimoku_cloud_bottom">Ichimoku Cloud Bottom</option>
							</optgroup>
							<optgroup label="--">
								<option value="rsi">Rsi</option>
								<option value="stochrsi">StochRsi</option>
								<option value="cci">Cci</option>
								<option value="mfi">Mfi</option>
								<option value="obv">OBV(On Balance Volume)</option>
								<option value="williamsr">Williams %R</option>
								<option value="bollinger_%b">Bollinger Bands %B</option>
							</optgroup>
							<optgroup label="--">
								<option value="macd_line">Macd Line</option>
								<option value="macd_signal">Macd Signal</option>
								<option value="macd_histogram">Macd Histogram</option>
							</optgroup>
							<optgroup label="--">
								<option value="adx">ADX</option>
								<option value="adx_di_positive">ADX DI Positive</option>
								<option value="adx_di_negative">ADX DI Negative</option>
							</optgroup>
							<optgroup label="--">
								<option value="true_range">True Range</option>
								<option value="avg_true_range">Avg True Range(ATR)</option>
							</optgroup>
							<optgroup label="--">
								<option value="aroon_up">Aroon Up</option>
								<option value="aroon_down">Aroon Down</option>
								<option value="aroon_osc">Aroon Osc</option>
							</optgroup>
							<optgroup label="--">
								<option value="slow_stochastic_%d">Slow Stochastic %K</option>
								<option value="slow_stochastic_%k">Slow Stochastic %D</option>
								<option value="fast_stochastic_%d">Fast Stochastic %K</option>
								<option value="fast_stochastic_%k">Fast Stochastic %D</option>
								<option value="smi">Smi %K (Stochastic Momentum Index)</option>
								<option value="smi_%d">Smi %D (Stochastic Momentum Index)</option>
							</optgroup>
							<optgroup label="--">
								<option value="wavetrend">WaveTrend</option>
								<option value="wavetrend_trigger">WaveTrend Trigger</option>
								<option value="wavetrend_momentum">WaveTrend Momentum</option>
							</optgroup>
							<optgroup label="--Fundamentals--">
								<option value="face_value">Face Value</option>
								<option value="reserves">Reserves</option>
								<option value="dividend">Dividend</option>
								<option value="book_value">Book Value</option>
								<option value="yearly_pe_ratio">Yearly PE Ratio</option>
								<option value="yearly_pc_ratio">Yearly PC Ratio</option>
								<option value="sales_turnover">Sales Turnover[yearly]</option>
								<option value="net_profit">Net Profit[yearly]</option>
								<option value="var">Net Profit Variance[yr]</option>
								<option value="net_profithy">Net Profit[quarter]</option>
								<option value="net_profitvhy">Net Profit Variance[qr]</option>
								<option value="earning_per_share">Earning Per Share[EPS]</option>
								<option value="p_earning_per_share">Prev Year EPS</option>
								<option value="full_year_cps">Cash Per Share[yr]</option>
								<option value="quarter_cps">Cash Per Share[qr]</option>
								<option value="month_cps">Cash per share[mt]</option>
								<option value="latest_quarter_sales">Net Sales[quarter]</option>
								<option value="pvbv">Price to Book Value</option>
								<option value="Networth">Networth</option>
								<option value="bval">BSE Value in lakhs</option>
								<option value="nval">NSE Value in lakhs</option>
								<option value="market_cap">Market Cap</option>
								<option value="latopm">Operating profit margin[yr]</option>
								<option value="lathyopm">Operating profit margin[qr]</option>
								<option value="latgpm">Gross profit margin</option>
								<option value="gross_block">Gross Block</option>
								<option value="totoloan">Total Loans</option>
								<option value="advance_given_by_bank">Advance Given By Bank</option>
								<option value="net_profit_asset">Net non performing assets</option>
								<option value="trailing_twelve_months_sales">TTM Sales</option>
								<option value="trailing_twelve_month_op">TTM Operating Profit</option>
								<option value="trailing_twelve_months_opm">TTM Operating Profit margin</option>
								<option value="trailing_twelve_month_gp">TTM Gross profit</option>
								<option value="trailing_twelve_month_gpm">TTM Gross profit margin</option>
								<option value="trailing_twelve_months_np">TTM Net profit</option>
								<option value="trailing_twelve_months_npv">TTM Net profit Variance</option>
								<option value="trailing_twelve_month_eps">TTM EPS</option>
								<option value="trailing_twelve_month_pe">TTM PE</option>
								<option value="trailing_twelve_month_cps">TTM CPS</option>
								<option value="latest_ttmdepreciation">TTM Depreciation</option>
							</optgroup>
	        			</select>
	        		</div>


	        		<div id="filterRule4Div">
	        			<span id="filterRule4" style="cursor: pointer;"><b id="filterRuleChild4">Greater than</b></span>
	        			<select id="filterRule4Select" style="display: none;">
	        				<option value="....">Please select a operation</option>
							<option value="remove">Remove operations on right</option>
							<optgroup label="--Arithmetic Operations--">
								<option value="+">+</option>
								<option value="-">-</option>
								<option value="*">*</option>
								<option value="/">/</option>
							</optgroup>
							<optgroup label="--Comparision Operations--">
								<option value="=">Equals</option>
								<option value=">">Greater than</option>
								<option value=">=">Greater than equal to</option>
								<option value="<">Less than</option>
								<option value="<=">Less than equal to</option>
							</optgroup>
							<optgroup label="--Crossover Operations--">
								<option value="crossed_above">Crossed above</option>
								<option value="crossed_below">Crossed below</option>
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