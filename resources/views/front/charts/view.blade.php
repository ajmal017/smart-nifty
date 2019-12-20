@extends('front.app')

@section('title', '| Screeners')

@section('css_part')
    <style type="text/css">
        .rectangle {
            border: 1px solid #FF0000;
            position: absolute;
            opacity: 1;
            z-index: 9999;
        }
    
		.card
		{
		    border-color:black;
		}

		.card-header
		{
		    background-color: #e3e0ff;
		}


		.toolbar
		{
		    width: 98%;
		    margin-left:10px!important;
		    background: lightgray;
		    padding: 5px!important;
		    border-radius: 3px;
		}

		.toolbar-inner
		{
		    display: inline-flex;
		}    

		.toolbar-inner img
		{

		    background-color: white;
		    border:1px solid black;
		    border-radius: 2px;
		    padding: 2px;
		    
		    /*padding-right: 5px;
		    padding-left: 5px;*/
		       

		}

		.tool
		{
		    cursor: pointer;
		    width: 45px;
		    padding:3px;
		}

		.btn
		{

		}

		canvas {
		    cursor: crosshair;
		    border: 1px solid #000000;
		}

		.tools
		{
			width: 1050px!important;
			height: 300px!important;
			/*position: absolute;*/
			  top: 0!important;
		    margin-left:18!important;
		}

		#canvas_preview
		{
			display: none!important;
		}

		.canvas-container{
			
		}
	</style>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="assets/css/custom.css">

@endsection

@section('content')

<div class="service-area sp">
    <div class="container">

        <div class="row">    
            <div class="col-lg-12">
                <div class="panel-group">
                    <div class="panel panel-default">
                    <div class="panel-heading p-header">
                        <div class="row">    
                            <div class="col-xs-4">
                                <h3 style="margin: 0px;margin-left: 5px;font-size:20px">Jaihind Projects Limited</h3>
                            </div>

                            <div class="col-xs-4">
                                <p id="iditext" class="text-center">Minimize Indicators</p>
                            </div>

                            <div class="col-xs-4">
                                <div>NSE
                                    <b>»</b><a href="https://chartink.com/stocks/JAIHINDPRO.html">JAIHINDPRO</a> AND
                                    BSE <b>»</b><a href="https://chartink.com/stocks/531339.html">531339</a></div>
                            </div>    
                        </div>
                    </div>


                    <div class="panel-body">
                        
                        <div class="row p-3 panel-row">
                            <div class="col-xs-5 shadow panel-row-1">
                                <div id="exTab2"> 
                                    <ul class="nav nav-tabs">
                                            <li class="active"><a  href="#1" data-toggle="tab">Lower Indicators</a>
                                            </li>
                                            <li><a href="#2" data-toggle="tab">Upper Overlays</a>
                                            </li>
                                            <li><a href="#3" data-toggle="tab">Moving Avgs</a>
                                            </li>
                                    </ul>

                                    <div class="tab-content ">
                                        <div class="tab-pane active tabs" id="1">
                                                <table class="table table-striped table-responsive">
                                                  <tbody>
                                                    <tr>
                                                        <td class="tab1_c1"><input type="checkbox" class="" id="" value="accumulation_distribution" onchange="clickMe(this)"></td>
                                                        <td class="tab1_c2"><span class="span_accumulation_distribution">Accumulation/Distribution</span></td>    
                                                        <td class="tab1_c3">Parameters : <input type="text" class="textbox textbox_accumulation_distribution" id="firtselect" readonly="true" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tab1_c1"><input type="checkbox" class="" id="" value="aroon_oscillator" onchange="clickMe(this)"></td>
                                                        <td class="tab1_c2"><span class="span_aroon_oscillator">Aroon Oscillator</span></td>    
                                                        <td class="tab1_c3">Parameters : <input type="text" class="textbox textbox_aroon_oscillator" id="" readonly="true" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tab1_c1"><input type="checkbox" class="" id="" value="aroon_updown" onchange="clickMe(this)"></td>
                                                        <td class="tab1_c2"><span class="span_aroon_updown">Aroon Up/Down</span></td>    
                                                        <td class="tab1_c3">Parameters : <input type="text" class="textbox textbox_aroon_updown" id="" readonly="true" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tab1_c1"><input type="checkbox" class="" id="" value="relative_strength_ind" onchange="clickMe(this)"></td>
                                                        <td class="tab1_c2"><span class="span_relative_strength_ind">RSI: Relative Strength Ind</span></td>    
                                                        <td class="tab1_c3">Parameters : <input type="text" class="textbox textbox_relative_strength_ind" id="" readonly="true" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tab1_c1"><input type="checkbox" class="" id="" value="avg_directional_index" onchange="clickMe(this)"></td>
                                                        <td class="tab1_c2"><span class="span_avg_directional_index">Avg Directional Index</span></td>    
                                                        <td class="tab1_c3">Parameters : <input type="text" class="textbox textbox_avg_directional_index" id="" readonly="true" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tab1_c1"><input type="checkbox" class="" id="" value="avg_true_range" onchange="clickMe(this)"></td>
                                                        <td class="tab1_c2"><span class="span_avg_true_range">Avg True Range</span></td>    
                                                        <td class="tab1_c3">Parameters : <input type="text" class="textbox textbox_avg_true_range" id="" readonly="true" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tab1_c1"><input type="checkbox" class="" id="" value="bollinger_band_width" onchange="clickMe(this)"></td>
                                                        <td class="tab1_c2"><span class="span_bollinger_band_width">Bollinger Band Width</span></td>    
                                                        <td class="tab1_c3">Parameters : <input type="text" class="textbox textbox_bollinger_band_width" id="" readonly="true" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tab1_c1"><input type="checkbox" class="" id="" value="chaikin_money_flow" onchange="clickMe(this)"></td>
                                                        <td class="tab1_c2"><span class="span_chaikin_money_flow">Chaikin Money Flow</span></td>    
                                                        <td class="tab1_c3">Parameters : <input type="text" class="textbox textbox_chaikin_money_flow" id="" readonly="true" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tab1_c1"><input type="checkbox" class="" id="" value="chaikin_oscillator" onchange="clickMe(this)"></td>
                                                        <td class="tab1_c2"><span class="span_chaikin_oscillator">Chaikin Oscillator</span></td>    
                                                        <td class="tab1_c3">Parameters : <input type="text" class="textbox textbox_chaikin_oscillator" id="" readonly="true" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tab1_c1"><input type="checkbox" class="" id="" value="chaikin_volatility" onchange="clickMe(this)"></td>
                                                        <td class="tab1_c2"><span class="span_chaikin_volatility">Chaikin Volatility</span></td>    
                                                        <td class="tab1_c3">Parameters : <input type="text" class="textbox textbox_chaikin_volatility" id="" readonly="true" /></td>
                                                    </tr>


                                                    <tr>
                                                        <td class="tab1_c1"><input type="checkbox" class="" id="" value="close_location_value" onchange="clickMe(this)"></td>
                                                        <td class="tab1_c2"><span class="span_close_location_value">Close Location Value</span></td>    
                                                        <td class="tab1_c3">Parameters : <input type="text" class="textbox textbox_close_location_value" id="" readonly="true" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tab1_c1"><input type="checkbox" class="" id="" value="commodity_channel_index" onchange="clickMe(this)"></td>
                                                        <td class="tab1_c2"><span class="span_commodity_channel_index">Commodity Channel Index</span></td>    
                                                        <td class="tab1_c3">Parameters : <input type="text" class="textbox textbox_commodity_channel_index" id="" readonly="true" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tab1_c1"><input type="checkbox" class="" id="" value="detrended_price_osc" onchange="clickMe(this)"></td>
                                                        <td class="tab1_c2"><span class="span_detrended_price_osc">Detrended Price Osc</span></td>    
                                                        <td class="tab1_c3">Parameters : <input type="text" class="textbox textbox_detrended_price_osc" id="" readonly="true" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tab1_c1"><input type="checkbox" class="" id="" value="donchian_channel_width" onchange="clickMe(this)"></td>
                                                        <td class="tab1_c2"><span class="span_donchian_channel_width">Donchian Channel Width</span></td>    
                                                        <td class="tab1_c3">Parameters : <input type="text" class="textbox textbox_donchian_channel_width" id="" readonly="true" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tab1_c1"><input type="checkbox" class="" id="" value="ease_of_movement" onchange="clickMe(this)"></td>
                                                        <td class="tab1_c2"><span class="span_ease_of_movement">Ease of Movement</span></td>    
                                                        <td class="tab1_c3">Parameters : <input type="text" class="textbox textbox_ease_of_movement" id="" readonly="true" /></td>
                                                    </tr>

                                                     

                                                    <tr>
                                                        <td class="tab1_c1"><input type="checkbox" class="" id="" value="fast_stochastic" onchange="clickMe(this)"></td>
                                                        <td class="tab1_c2"><span class="span_fast_stochastic">Fast Stochastic</span></td>    
                                                        <td class="tab1_c3">Parameters : <input type="text" class="textbox textbox_fast_stochastic" id="" readonly="true" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tab1_c1"><input type="checkbox" class="" id="" value="macd" onchange="clickMe(this)"></td>
                                                        <td class="tab1_c2"><span class="span_macd">MACD</span></td>    
                                                        <td class="tab1_c3">Parameters : <input type="text" class="textbox textbox_macd" id="" readonly="true" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tab1_c1"><input type="checkbox" class="" id="" value="mass_index" onchange="clickMe(this)"></td>
                                                        <td class="tab1_c2"><span class="span_mass_index">Mass Index</span></td>    
                                                        <td class="tab1_c3">Parameters : <input type="text" class="textbox textbox_mass_index" id="" readonly="true" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tab1_c1"><input type="checkbox" class="" id="" value="momentum" onchange="clickMe(this)"></td>
                                                        <td class="tab1_c2"><span class="span_momentum">Momentum</span></td>    
                                                        <td class="tab1_c3">Parameters : <input type="text" class="textbox textbox_momentum" id="" readonly="true" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tab1_c1"><input type="checkbox" class="" id="" value="money_flow_index" onchange="clickMe(this)"></td>
                                                        <td class="tab1_c2"><span class="span_money_flow_index">Money Flow Index</span></td>    
                                                        <td class="tab1_c3">Parameters : <input type="text" class="textbox textbox_money_flow_index" id="" readonly="true" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tab1_c1"><input type="checkbox" class="" id="" value="neg_volume_index" onchange="clickMe(this)"></td>
                                                        <td class="tab1_c2"><span class="span_neg_volume_index">Neg Volume Index</span></td>    
                                                        <td class="tab1_c3">Parameters : <input type="text" class="textbox textbox_neg_volume_index" id="" readonly="true" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tab1_c1"><input type="checkbox" class="" id="" value="on_balance_volume" onchange="clickMe(this)"></td>
                                                        <td class="tab1_c2"><span class="span_on_balance_volume">On Balance Volume</span></td>    
                                                        <td class="tab1_c3">Parameters : <input type="text" class="textbox textbox_on_balance_volume" id="" readonly="true" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tab1_c1"><input type="checkbox" class="" id="" value="performance" onchange="clickMe(this)"></td>
                                                        <td class="tab1_c2"><span class="span_performance">Performance</span></td>    
                                                        <td class="tab1_c3">Parameters : <input type="text" class="textbox textbox_performance" id="" readonly="true" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tab1_c1"><input type="checkbox" class="" id="" value="price_oscillator" onchange="clickMe(this)"></td>
                                                        <td class="tab1_c2"><span class="span_price_oscillator">% Price Oscillator</span></td>    
                                                        <td class="tab1_c3">Parameters : <input type="text" class="textbox textbox_price_oscillator" id="" readonly="true" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tab1_c1"><input type="checkbox" class="" id="" value="volume_oscillator" onchange="clickMe(this)"></td>
                                                        <td class="tab1_c2"><span class="span_volume_oscillator">% Volume Oscillator</span></td>    
                                                        <td class="tab1_c3">Parameters : <input type="text" class="textbox textbox_volume_oscillator" id="" readonly="true" /></td>
                                                    </tr>     

                                                     

                                                    <tr>
                                                        <td class="tab1_c1"><input type="checkbox" class="" id="" value="pos_volume_index" onchange="clickMe(this)"></td>
                                                        <td class="tab1_c2"><span class="span_pos_volume_index">% Pos Volume Index</span></td>    
                                                        <td class="tab1_c3">Parameters : <input type="text" class="textbox textbox_pos_volume_index" id="" readonly="true" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tab1_c1"><input type="checkbox" class="" id="" value="price_volume_trend" onchange="clickMe(this)"></td>
                                                        <td class="tab1_c2"><span class="span_price_volume_trend">Price Volume Trend</span></td>    
                                                        <td class="tab1_c3">Parameters : <input type="text" class="textbox textbox_price_volume_trend" id="" readonly="true" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tab1_c1"><input type="checkbox" class="" id="" value="rate_of_change" onchange="clickMe(this)"></td>
                                                        <td class="tab1_c2"><span class="span_rate_of_change">Rate of Change</span></td>    
                                                        <td class="tab1_c3">Parameters : <input type="text" class="textbox textbox_rate_of_change" id="" readonly="true" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tab1_c1"><input type="checkbox" class="" id="" value="slow_stochastic" onchange="clickMe(this)"></td>
                                                        <td class="tab1_c2"><span class="span_slow_stochastic">Slow Stochastic</span></td>    
                                                        <td class="tab1_c3">Parameters : <input type="text" class="textbox textbox_slow_stochastic" id="" readonly="true" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tab1_c1"><input type="checkbox" class="" id="" value="stochrsi" onchange="clickMe(this)"></td>
                                                        <td class="tab1_c2"><span class="span_stochrsi">StochRSI</span></td>    
                                                        <td class="tab1_c3">Parameters : <input type="text" class="textbox textbox_stochrsi" id="" readonly="true" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tab1_c1"><input type="checkbox" class="" id="" value="trix" onchange="clickMe(this)"></td>
                                                        <td class="tab1_c2"><span class="span_trix">TRIX</span></td>    
                                                        <td class="tab1_c3">Parameters : <input type="text" class="textbox textbox_trix" id="" readonly="true" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tab1_c1"><input type="checkbox" class="" id="" value="ultimate_oscillator" onchange="clickMe(this)"></td>
                                                        <td class="tab1_c2"><span class="span_ultimate_oscillator">Ultimate Oscillator</span></td>    
                                                        <td class="tab1_c3">Parameters : <input type="text" class="textbox textbox_ultimate_oscillator" id="" readonly="true" /></td>
                                                    </tr>     
                                                     
                                                    <tr>
                                                        <td class="tab1_c1"><input type="checkbox" class="" id="" value="williams_r" onchange="clickMe(this)"></td>
                                                        <td class="tab1_c2"><span class="span_williams_r">Williams %R</span></td>    
                                                        <td class="tab1_c3">Parameters : <input type="text" class="textbox textbox_williams_r" id="" readonly="true" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tab1_c1"><input type="checkbox" class="" id="" value="waveTrend" onchange="clickMe(this)"></td>
                                                        <td class="tab1_c2"><span class="span_waveTrend">WaveTrend</span></td>    
                                                        <td class="tab1_c3">Parameters : <input type="text" class="textbox textbox_waveTrend" id="" readonly="true" /></td>
                                                    </tr> 
                                                  </tbody>
                                                </table>
                                        </div>
                                        <div class="tab-pane tabs" id="2">
                                            <table class="table table-striped table-responsive">
                                                  <tbody>
                                                    <tr>
                                                        <td class="tab2_c1"><input type="checkbox" class="" id="" value="bollinger_band" onchange="clickMe(this)"></td>
                                                        <td class="tab2_c2"><span class="span_bollinger_band">Bollinger Band</span></td>    
                                                        <td class="tab2_c3">Parameters : <input type="text" class="textbox textbox_bollinger_band" id="" readonly="true" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tab2_c1"><input type="checkbox" class="" id="" value="parabolic_sar" onchange="clickMe(this)"></td>
                                                        <td class="tab2_c2"><span class="span_parabolic_sar">Parabolic SAR</span></td>    
                                                        <td class="tab2_c3">Parameters : <input type="text" class="textbox textbox_parabolic_sar" id="" readonly="true" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tab2_c1"><input type="checkbox" class="" id="" value="donchain_channel" onchange="clickMe(this)"></td>
                                                        <td class="tab2_c2">Donchain Channel</td>    
                                                        <td class="tab2_c3">Parameters : <input type="text" class="textbox textbox_donchain_channel" id="" readonly="true" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tab2_c1"><input type="checkbox" class="" id="" value="supertrend" onchange="clickMe(this)"></td>
                                                        <td class="tab2_c2"><span class="span_supertrend">Supertrend</span></td>    
                                                        <td class="tab2_c3">Parameters : <input type="text" class="textbox textbox_supertrend" id="" readonly="true" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tab2_c1"><input type="checkbox" class="" id="" value="ichimoku_clouds" onchange="clickMe(this)"></td>
                                                        <td class="tab2_c2"><span class="span_ichimoku_clouds">Ichimoku clouds</span></td>    
                                                        <td class="tab2_c3">Parameters : <input type="text" class="textbox textbox_ichimoku_clouds" id="" readonly="true" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tab2_c1"><input type="checkbox" class="" id="" value="priceband" onchange="clickMe(this)"></td>
                                                        <td class="tab2_c2"><span class="span_priceband">priceband</span></td>    
                                                        <td class="tab2_c3">Parameters : <input type="text" class="textbox textbox_priceband" id="" readonly="true" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tab2_c1"><input type="checkbox" class="" id="" value="envelop" onchange="clickMe(this)"></td>
                                                        <td class="tab2_c2"><span class="span_envelop">Envelop</span></td>    
                                                        <td class="tab2_c3">Parameters : <input type="text" class="textbox textbox_envelop" id="" readonly="true" /></td>
                                                    </tr>
                                                  </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane tabs" id="3">
                                            <table class="table table-striped table-responsive">
                                                  <tbody>
                                                    <tr>
                                                        <td class="tab3_c1"><input type="checkbox" class="" id=""></td>
                                                        <td class="tab3_c2">Moving avg 1</td>
                                                        <td class="tab3_c3"><select class="selectbox" name="a1t">
                                                            <option value="o">Open</option>
                                                            <option value="h">High</option>
                                                            <option value="l">Low</option>
                                                            <option value="c" selected="selected">Close</option>
                                                        </select></td>

                                                        <td class="tab3_c4">
                                                            <select class="selectbox1" name="a1t">
                                                                <option value="SMA" selected="selected">Simple</option>
                                                                <option value="EMA">Exponential</option>
                                                                <option value="l">Low</option>
                                                                <option value="WMA">Weighted</option>
                                                                <option value="TMA">Triangular</option>
                                                            </select>
                                                        </td>    
                                                        <td class="tab3_c5"><input type="text" class="textbox" id="" readonly="true" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tab3_c1"><input type="checkbox" class="" id=""></td>
                                                        <td class="tab3_c2">Moving avg 2</td>
                                                        <td class="tab3_c3"><select class="selectbox" name="a1t">
                                                            <option value="o">Open</option>
                                                            <option value="h">High</option>
                                                            <option value="l">Low</option>
                                                            <option value="c" selected="selected">Close</option>
                                                        </select></td>
                                                        
                                                        <td class="tab3_c4">
                                                            <select class="selectbox1" name="a1t">
                                                                <option value="SMA" selected="selected">Simple</option>
                                                                <option value="EMA">Exponential</option>
                                                                <option value="l">Low</option>
                                                                <option value="WMA">Weighted</option>
                                                                <option value="TMA">Triangular</option>
                                                            </select>
                                                        </select></td>    
                                                        <td class="tab3_c5"><input type="text" class="textbox" id="" readonly="true" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tab3_c1"><input type="checkbox" class="" id=""></td>
                                                        <td class="tab3_c2">Moving avg 3</td>
                                                        <td class="tab3_c3"><select class="selectbox" name="a1t">
                                                            <option value="o">Open</option>
                                                            <option value="h">High</option>
                                                            <option value="l">Low</option>
                                                            <option value="c" selected="selected">Close</option>
                                                        </select></td>

                                                        <td class="tab3_c4">
                                                            <select class="selectbox1" name="a1t">
                                                                <option value="SMA" selected="selected">Simple</option>
                                                                <option value="EMA">Exponential</option>
                                                                <option value="l">Low</option>
                                                                <option value="WMA">Weighted</option>
                                                                <option value="TMA">Triangular</option>
                                                            </select>
                                                        </select></td>    
                                                        <td class="tab3_c5"><input type="text" class="textbox" id="" readonly="true" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tab3_c1"><input type="checkbox" class="" id=""></td>
                                                        <td class="tab3_c2">Moving avg 4</td>
                                                        <td class="tab3_c3"><select class="selectbox" name="a1t">
                                                            <option value="o">Open</option>
                                                            <option value="h">High</option>
                                                            <option value="l">Low</option>
                                                            <option value="c" selected="selected">Close</option>
                                                        </select></td>

                                                        <td class="tab3_c4">
                                                            <select class="selectbox1" name="a1t">
                                                                <option value="SMA" selected="selected">Simple</option>
                                                                <option value="EMA">Exponential</option>
                                                                <option value="l">Low</option>
                                                                <option value="WMA">Weighted</option>
                                                                <option value="TMA">Triangular</option>
                                                            </select>
                                                        </select></td>    
                                                        <td class="tab3_c5"><input type="text" class="textbox" id="" readonly="true" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tab3_c1"><input type="checkbox" class="" id=""></td>
                                                        <td class="tab3_c2">Moving avg 5</td>
                                                        <td class="tab3_c3"><select class="selectbox" name="a1t">
                                                            <option value="o">Open</option>
                                                            <option value="h">High</option>
                                                            <option value="l">Low</option>
                                                            <option value="c" selected="selected">Close</option>
                                                        </select></td>

                                                        <td class="tab3_c4">
                                                            <select class="selectbox1" name="a1t">
                                                                <option value="SMA" selected="selected">Simple</option>
                                                                <option value="EMA">Exponential</option>
                                                                <option value="l">Low</option>
                                                                <option value="WMA">Weighted</option>
                                                                <option value="TMA">Triangular</option>
                                                            </select>
                                                        </select></td>    
                                                        <td class="tab3_c5"><input type="text" class="textbox" id="" readonly="true" /></td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                            <div class="col-xs-2 shadow panel-row-2">
                                
                                <table class="tables table-responsive">
                                    <tr>
                                        <td>              
                                            <div class="col-xs-4 p-0 pl-3">
                                                <b>Period: </b>
                                            </div>

                                            <div class="col-xs-8">
                                                <select id="ti" name="ti" class="selectbox_center">
                                                    <option value="1">1 days</option>
                                                    <option value="2">2 days</option>
                                                    <option value="3">3 days</option>
                                                    <option value="5">5 days</option>
                                                    <option value="10">10 days</option>
                                                    <option value="22">1 month</option>
                                                    <option value="44">2 months</option>
                                                    <option value="66">3 months</option>
                                                    <option value="91">4 months</option>
                                                    <option value="121" selected="">6 months</option>
                                                    <option value="198">9 months</option>
                                                    <option value="252">1 year</option>
                                                    <option value="504">2 years</option>
                                                    <option value="756">3 years</option>
                                                    <option value="1008">5 years</option>
                                                    <option value="1764">8 years</option>
                                                    <option value="5000">All Data</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                            
                                    <tr>    
                                        <td>
                                            <div class="col-xs-4 p-0 pl-3">
                                                <b>Range: </b>
                                            </div>
                                            <div class="col-xs-8">
                                                <select id="d" name="d" class="selectbox_center">
                                                    <option value="d">Daily</option>
                                                    <option value="w">Weekly</option>
                                                    <option value="m">Monthly</option>
                                                    <optgroup label="Intraday">
                                                        <option value="1_minute">1 Minute</option>
                                                        <option value="2_minute">2 Minute</option>
                                                        <option value="3_minute">3 Minute</option>
                                                        <option value="5_minute">5 Minute</option>
                                                        <option value="10_minute">10 Minute</option>
                                                        <option value="15_minute">15 Minute</option>
                                                        <option value="20_minute">20 Minute</option>
                                                        <option value="30_minute">30 Minute</option>
                                                        <option value="75_minute">75 minute</option>
                                                        <option value="60_minute">1 hour</option>
                                                        <option value="120_minute">2 hour</option>
                                                        <option value="240_minute">4 hour</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                
                                    <tr>
                                        <td>    
                                            <div class="col-xs-4 p-0 pl-3">
                                                <b>Type: </b>
                                            </div>
                                            <div class="col-xs-8">
                                                <select id="c" name="c" class="selectbox_center">
                                                    <option value="None" selected="">CandleStick</option>
                                                    <option value="heikin-ashi">Heikin-Ashi</option>
                                                    <option value="s">Closing Price</option>
                                                    <option value="m">Median Price</option>
                                                    <option value="o">OHLC</option>
                                                    <option value="TP">Typical Price</option>
                                                    <option value="WC">Weighted Close</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="col-xs-12">
                                                <input id="innerb" name="innerb" type="submit" value="UPDATE CHART" style="width: 96%;margin-left: 3px; padding: 5px; font-size: 12px;background-color: #e3e0ff;">
                                            </div>
                                        </td>
                                    </tr>
                            </table>    
                            </div>

                            <div class="col-xs-5 shadow panel-row-3">
                                <div id="exTab2"> 
                                    <ul class="nav nav-tabs">
                                            <li class="active"><a  href="#4" data-toggle="tab">Alerts</a>
                                            </li>
                                            <li><a href="#5" data-toggle="tab">Drawing Tools</a>
                                            </li>
                                            <li><a href="#6" data-toggle="tab">Other Settings</a>
                                            </li>
                                    </ul>

                                    <div class="tab-content ">
                                        <div class="tab-pane active" id="4">
                                            <p> Coming soon..</p>
                                        </div>
                                        <div class="tab-pane" id="5">
                                            <table class="table table-striped table-responsive">
                                                <tbody>
                                                    <p>Check the following box, to enable the drawing tools</p>
                                                    <tr>
                                                        <td class="tab5_c1"><input type="checkbox" class="" id=""></td>
                                                        <td class="tab5_c2">Draw Lines(Enabled)</td>
                                                        <td class="tab5_c3"><input type="text" name="paint" id="paint" class="textbox_tab5" value="SAVE IMG"></td>
                                                    </tr>
                                                </tbody>
                                            </table>    
                                        </div>
                                        <div class="tab-pane" id="6">
                                            <table class="table table-striped table-responsive">
                                                  <tbody>
                                                    <tr>
                                                       <td class="tab6_c6" colspan="
                                                       3"><b> Volume Bars </b></td>
                                                       <td class="tab6_c7"></td>
                                                       <td class="tab6_c8"><b> Theme </b></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tab6_c9" colspan="3">    
                                                            <select class="tab6_selectbox" name="v" id="v">
                                                                <option value="o" selected="selected">OverLap Main</option>
                                                                <option value="b">Below Main</option>
                                                                <option value="n">Disable</option>
                                                            </select>
                                                        </td>
                                                        <td class="tab6_c10"></td>
                                                        <td class="tab6_c11">
                                                            <select class="tab6_selectbox" name="t" id="t">    <option value="c">Pale yellow</option>
                                                                <option value="m">Mint cream</option>
                                                                <option value="b">Light Blue</option>
                                                                <option value="d" selected="selected">Default (classic)</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tab6_c1"><input type="checkbox" class="" id=""></td>
                                                        <td class="tab6_c2">XXXX</td>
                                                        <td class="tab6_c3"></td>    
                                                        <td class="tab6_c4"><input type="checkbox" class="" id=""></td>
                                                        <td class="tab6_c5">Show Splits & Bonus</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tab6_c1"><input type="checkbox" class="" id=""></td>
                                                        <td class="tab6_c2">Horizontal Grid</td>
                                                        <td class="tab6_c3"></td>    
                                                        <td class="tab6_c4"><input type="checkbox" class="" id=""></td>
                                                        <td class="tab6_c5">Log Scale</td>
                                                    </tr>
                                                   <tr>
                                                        <td class="tab6_c1"><input type="checkbox" class="" id=""></td>
                                                        <td class="tab6_c2">Vertical Grid</td>
                                                        <td class="tab6_c3"></td>
                                                        <td class="tab6_c4"><input type="checkbox" class="" id=""></td>
                                                        <td class="tab6_c5">Y-axis Labels</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tab6_c1"><input type="checkbox" class="" id=""></td>
                                                        <td class="tab6_c2">Scrollable Chart</td>
                                                        <td class="tab6_c3"></td>
                                                        <td class="tab6_c4"><input type="checkbox" class="" id=""></td>
                                                        <td class="tab6_c5">Show Price Labels</td>
                                                    </tr>
                                                    
                                                  </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    </div>
                </div>        
             </div>
        </div>    
        





        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><h3>stockName</h3></div>
                    <div class="card-body">
                        	<div class="row toolbar">
	                            <div class="col-lg-8 toolbar-inner">
	                                <!-- <div id="" class="tool" title="Mouse"><img src="{{ asset('assets/img/tool1.png') }}"></div> -->
	                                <div id="line" class="tool" title="Line"><img src="{{ asset('assets/img/tool2.png') }}"></div>
	                                <div id="hline" class="tool" id="tool3" title="Horizontal Line"><img src="{{ asset('assets/img/tool3.png') }}"></div>
	                                <div id="vline" class="tool" title="Vertical Line"><img src="{{ asset('assets/img/tool4.png') }}"></div>
	                                <div id="rect" class="tool"  title="Rectangle"><img src="{{ asset('assets/img/tool5.png') }}"></div>
	                                <div id="marker" class="tool" title="Marker"><img src="{{ asset('assets/img/tool6.png') }}"></div>
	                                <div id="arrow" class="tool" title="Arrow Line"><img src="{{ asset('assets/img/tool7.png') }}"></div>
	                                <div id="addInputField" class="tool" title="TextBox"><img src="{{ asset('assets/img/tool8.png') }}"></div>
	                                <!-- <div class="tool" title="UP Arrow"><img src="{{ asset('assets/img/tool9.png') }}"></div>
	                                <div class="tool" title="DOWN Arrow"><img src="{{ asset('assets/img/tool10.png') }}"></div> -->
	                            </div>
	                            <div class="col-lg-4">
	                                <button type="button" class="btn btn-primary float-right" id="btnDownloadImage" style="cursor: pointer;">Save Image</button>
	                            </div>
							</div>
	                        <div class="row mt-2" style="margin-left: -1px!important;">
	                            <div class="col-lg-12 tools" id="chart">
	                                <div id="chart_div"></div>
	                          		<canvas id='canvas' width=1050 height=300 style="position: absolute !important;top: 1px !important;z-index: 2 !important;"></canvas>
	                        	</div>
	                    	</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div style="display: none!important;" id="canvas_preview"></div>

@endsection



@section('js_script')

    <script src="{{asset('assets/js/html2canvas.min.js')}}"></script>
    <script src="{{asset('assets/js/canvas2image.js')}}"></script>
    
    <script src="https://unpkg.com/lightweight-charts/dist/lightweight-charts.standalone.production.js"></script>

    <script src="{{asset('assets/js/fabric.js')}}"></script>

    <script type="text/javascript">
    

    function clickMe(e){
 


        if($(e).prop('checked')){
            
            $('.span_' + e.value).css({"font-weight":"bold"});
            $('.textbox_' + e.value).attr('readonly',false);
        }
        else{
            $('.span_' + e.value).css("font-weight", "Normal");
            $('.textbox_' + e.value).attr('readonly',true);
        }
         


 
    }

//    accumulation_distribution    

        /*$('input:checkbox').change(function(){




            if($(this).is(":checked")) {
                $("span").css({"font-weight":"bold", "readonly":"false"});
            } else {
                $("span").css("font-weight", "Normal");
            }
        });*/


        /*$(document).ready(function(){
            var result_Data = JSON.parse('<?php //echo $apiData; ?>');
            const chart = LightweightCharts.createChart(document.getElementById('chart_div'), {
                width: 1050,
                height: 300,
                priceScale: {
                    position: 'right',
                    mode: 1,
                    autoScale: true,
                    invertScale: false,
                    alignLabels: true,
                    scaleMargins: {
                        top: 0.30,
                        bottom: 0.25,
                    },
                    borderColor: 'rgba(197, 203, 206, 0.8)',
                },
                watermark: {
                    color: 'rgba(11, 94, 29, 0.4)',
                    visible: true,
                    text: 'Smart Nifty',
                    fontSize: 24,
                    horzAlign: 'left',
                    vertAlign: 'bottom',
                },
                handleScroll: {
                    mouseWheel: true,
                    pressedMouseMove: false,
                },
                handleScale: {
                    axisPressedMouseMove: true,
                    mouseWheel: true,
                    pinch: true,
                },
                layout: {
                    backgroundColor: '#222538',
                    textColor: 'rgba(255, 255, 255, 0.9)',
                },
                grid: {
                    vertLines: {
                        color: 'rgba(197, 203, 206, 0.5)',
                    },
                    horzLines: {
                        color: 'rgba(197, 203, 206, 0.5)',
                    },
                },
                crosshair: {
                    mode: LightweightCharts.CrosshairMode.Normal,
                },
                timeScale: {
                    borderColor: 'rgba(197, 203, 206, 0.8)',
                    timeVisible: true,
                    secondsVisible: true,
                    rightOffset: 0,
                    barSpacing: 40,
                    fixLeftEdge: true,
                    lockVisibleTimeRangeOnResize: true,
                    rightBarStaysOnScroll: false,
                },
            });

            const candleSeries = chart.addCandlestickSeries({
                upColor: 'rgba(255, 144, 0, 1)',
                downColor: '#000',
                borderDownColor: 'rgba(255, 144, 0, 1)',
                borderUpColor: 'rgba(255, 144, 0, 1)',
                wickDownColor: 'rgba(255, 144, 0, 1)',
                wickUpColor: 'rgba(255, 144, 0, 1)',
            });

            candleSeries.setData(result_Data);
        });
        




        $(document).on('click','#btnDownloadImage',function(){
          //  var chartImage = $("#chart_div").get(0);
          	var chartImage = $("#chart").get(0);
          	//console.log(chartImage); 
          	//return false;
            html2canvas(chartImage).then(function(canvas){
                var canvasWidth = canvas.width;
                var canvasHeight = canvas.height;
                Canvas2Image.saveAsImage(canvas,1050,300,'png','Image');
            });
        });


        $(document).on('click','#tool5',function(){
           document.getElementById("tool5").style.cursor="crosshair";
        });*/

        </script>

        <script src="{{asset('assets/js/rectangle.js')}}"></script>

        <!-- <script src="{{asset('assets/js/arrow.js')}}"></script> -->

 
@endsection