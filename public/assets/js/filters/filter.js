function Closehtml()
{
	var htmldata='<select id="closeDropdown" style="display: none;"><option value="number">Number Value</option><optgroup label="--Stock Attributes--"><option value="Open">Open</option><option value="High">High</option><option value="Low">Low</option><option selected="" value="Close">Close</option><option value="Volume">Volume</option><option value="Vwap">VWAP</option><option value="HA-Open">HA-Open (Heikin-Ashi)</option><option value="HA-High">HA-High (Heikin-Ashi)</option><option value="HA-Low">HA-Low (Heikin-Ashi)</option><option value="HA-Close">HA-Close (Heikin-Ashi)</option></optgroup><optgroup label="--Math Functions--"><option value="brackets" id="brackets">Bracket(value)</option><option value="min">Min(duration, value)</option><option value="max">Max(duration, value)</option><option value="abs">Abs(value)</option><option value="ceil">Ceil(value)</option><option value="floor">Floor(value)</option><option value="round">Round(value)</option><option value="square">Square(value)</option><option value="square_root">Square root(value)</option></optgroup><optgroup label="--Indicators--"><option value="pivot_point">Pivot point</option><option value="pivot_point_r1">Pivot point R1</option><option value="pivot_point_r2">Pivot point R2</option><option value="pivot_point_s1">Pivot point S1</option><option value="pivot_point_s2">Pivot point S2</option></optgroup><optgroup label="--"><option value="sma">Sma(Simple)</option><option value="ema">Ema(Exponential)</option><option value="wma">Wma(Weighted)</option><option value="tma">Tma(Triangular)</option><option value="stddva">Std(Standard Deviation)</option></optgroup><optgroup label="--"><option value="parabolic_sar">Parabolic Sar</option><option value="upper_bb">Upper Bollinger band</option><option value="lower_bb">Lower Bollinger band</option></optgroup><optgroup label="--"><option value="supertrend">SuperTrend</option></optgroup><optgroup label="--"><option value="ichimoku_base">Ichimoku Base Line</option><option value="ichimoku_conversion">Ichimoku Conversion Line</option><option value="ichimoku_span_a">Ichimoku Span A</option><option value="ichimoku_span_b">Ichimoku Span B</option><option value="ichimoku_cloud_top">Ichimoku Cloud Top</option><option value="ichimoku_cloud_bottom">Ichimoku Cloud Bottom</option></optgroup><optgroup label="--"><option value="rsi">Rsi</option><option value="stochrsi">StochRsi</option><option value="cci">Cci</option><option value="mfi">Mfi</option><option value="obv">OBV(On Balance Volume)</option><option value="williamsr">Williams %R</option><option value="bollinger_%b">Bollinger Bands %B</option></optgroup><optgroup label="--"><option value="macd_line">Macd Line</option><option value="macd_signal">Macd Signal</option><option value="macd_histogram">Macd Histogram</option></optgroup><optgroup label="--"><option value="adx">ADX</option><option value="adx_di_positive">ADX DI Positive</option><option value="adx_di_negative">ADX DI Negative</option></optgroup><optgroup label="--"><option value="true_range">True Range</option><option value="avg_true_range">Avg True Range(ATR)</option></optgroup><optgroup label="--"><option value="aroon_up">Aroon Up</option><option value="aroon_down">Aroon Down</option><option value="aroon_osc">Aroon Osc</option></optgroup><optgroup label="--"><option value="slow_stochastic_%d">Slow Stochastic %K</option><option value="slow_stochastic_%k">Slow Stochastic %D</option><option value="fast_stochastic_%d">Fast Stochastic %K</option><option value="fast_stochastic_%k">Fast Stochastic %D</option><option value="smi">Smi %K (Stochastic Momentum Index)</option><option value="smi_%d">Smi %D (Stochastic Momentum Index)</option></optgroup><optgroup label="--"><option value="wavetrend">WaveTrend</option><option value="wavetrend_trigger">WaveTrend Trigger</option><option value="wavetrend_momentum">WaveTrend Momentum</option></optgroup><optgroup label="--Fundamentals--"><option value="face_value">Face Value</option><option value="reserves">Reserves</option><option value="dividend">Dividend</option><option value="book_value">Book Value</option><option value="yearly_pe_ratio">Yearly PE Ratio</option><option value="yearly_pc_ratio">Yearly PC Ratio</option><option value="sales_turnover">Sales Turnover[yearly]</option><option value="net_profit">Net Profit[yearly]</option><option value="var">Net Profit Variance[yr]</option><option value="net_profithy">Net Profit[quarter]</option><option value="net_profitvhy">Net Profit Variance[qr]</option><option value="earning_per_share">Earning Per Share[EPS]</option><option value="p_earning_per_share">Prev Year EPS</option><option value="full_year_cps">Cash Per Share[yr]</option><option value="quarter_cps">Cash Per Share[qr]</option><option value="month_cps">Cash per share[mt]</option><option value="latest_quarter_sales">Net Sales[quarter]</option><option value="pvbv">Price to Book Value</option><option value="Networth">Networth</option><option value="bval">BSE Value in lakhs</option><option value="nval">NSE Value in lakhs</option><option value="market_cap">Market Cap</option><option value="latopm">Operating profit margin[yr]</option><option value="lathyopm">Operating profit margin[qr]</option><option value="latgpm">Gross profit margin</option><option value="gross_block">Gross Block</option><option value="totoloan">Total Loans</option><option value="advance_given_by_bank">Advance Given By Bank</option><option value="net_profit_asset">Net non performing assets</option><option value="trailing_twelve_months_sales">TTM Sales</option><option value="trailing_twelve_month_op">TTM Operating Profit</option><option value="trailing_twelve_months_opm">TTM Operating Profit margin</option><option value="trailing_twelve_month_gp">TTM Gross profit</option><option value="trailing_twelve_month_gpm">TTM Gross profit margin</option><option value="trailing_twelve_months_np">TTM Net profit</option><option value="trailing_twelve_months_npv">TTM Net profit Variance</option><option value="trailing_twelve_month_eps">TTM EPS</option><option value="trailing_twelve_month_pe">TTM PE</option><option value="trailing_twelve_month_cps">TTM CPS</option><option value="latest_ttmdepreciation">TTM Depreciation</option></optgroup></select>';

	return htmldata;
}


function CloseDropdown(element_id,span_id)
{

	var appenddata = Closehtml();
	$("#"+element_id+" #closeDropdown").remove();
	$("#"+element_id).append(appenddata);
}


function closeDropDownChange(element_id,span_id)
{
	var selectedValue = $("#"+element_id+" #closeDropdown").val();

	if(selectedValue == "brackets"){
		$("#filterRule1Div").css('display','none');
		$("#filterRule2Div").css('display','none');
		$("#filterRule3sub1Div").css('display','');
	}

	$("#"+element_id+" #"+span_id).text(selectedValue);
	$("#"+element_id+" #"+span_id).css('display','');
	$("#"+element_id+" #closeDropdown").css('display','none');
}

function closeDropDownBlur(element_id,span_id)
{

	$("#"+element_id+" #"+span_id).css('display','');
	$("#"+element_id+" #closeDropdown").css('display','none');
} 


/**
===========================================================================================================
							This is Rule1 Script
===========================================================================================================
**/


$(document).on('click','#filterRule1',function(){
	$("#filterRule1").css('display','none');
	$("#filterRule1Select").css('display','');
	$("#filterRule1Select").focus();
});


$(document).on('change','#filterRule1Select',function(){
	var selectedValue = $(this).val();
	if(selectedValue == "-n"){
		selectedValue = "-";
		selectedValue += prompt("Enter Required offset, 1 offset equals 1 candle");
	}
	else if(selectedValue == "=n"){
		selectedValue = "=";
		selectedValue += prompt("Enter candle of a day, starting with 1");
	}
	else if(selectedValue == "=-n"){
		selectedValue = "=-";
		selectedValue += prompt("Enter candle of previous day, the last candle referred as -1");
	}
	$("#filterRuleChild1").text(selectedValue);
	$("#filterRule1").css('display','');
	$("#filterRule1Select").css('display','none');
});

$(document).on('blur','#filterRule1Select',function(){
	$("#filterRule1").css('display','');
	$("#filterRule1Select").css('display','none');
})


/**
===========================================================================================================
===========================================================================================================
**/







/**
===========================================================================================================
										This is Rule 2 Script
===========================================================================================================
**/

$(document).on('click','#filterRule2',function(){
	$("#filterRule2").css('display','none');
	$("#filterRule2Select").css('display','');
	$("#filterRule2Select").focus();
});


$(document).on('change','#filterRule2Select',function(){
	var selectedValue = $("#filterRule2Select option:selected").html();

	if(selectedValue == "Latest(daily)" || selectedValue == "1 day ago" || selectedValue == "2 days ago" || selectedValue == "3 days ago" || selectedValue == "n days ago" || selectedValue == "Weekly" || selectedValue == "1 week ago" || selectedValue == "2 weeks ago" || selectedValue == "3 weeks ago" || selectedValue == "n weeks ago" || selectedValue == "Monthly" || selectedValue == "1 month ago" || selectedValue == "2 months ago" || selectedValue == "3 months ago" || selectedValue == "n moths ago")
	{
		if(selectedValue == "n days ago"){
			selectedValue = prompt("Enter Required offset, 1 offset equals 1 candle");
			selectedValue += " days ago";
			$("#filterRule1").css('display','none');
		}
		else if(selectedValue == "n weeks ago"){
			selectedValue = prompt("Enter Required offset, 1 offset equals 1 candle");
			selectedValue += " weeks ago";
		}
		else if(selectedValue == "n moths ago"){
			selectedValue = prompt("Enter Required offset, 1 offset equals 1 candle");
			selectedValue += " moths ago";
		}
		else{
			$("#filterRule1").css('display','none');
		}
	}
	
	else
	{
		$("#filterRule1").css('display','');	
	}

	$("#filterRuleChild2").text(selectedValue);
	$("#filterRule2").css('display','');
	$("#filterRule2Select").css('display','none');
});


$(document).on('blur','#filterRule2Select',function(){
	$("#filterRule2").css('display','');
	$("#filterRule2Select").css('display','none');
})



/**
===========================================================================================================
===========================================================================================================
**/


/**
===========================================================================================================
										This is Rule 3 Script
===========================================================================================================
**/

$(document).on('click','#filterRule3',function(){
	$("#filterRule3").css('display','none');
	CloseDropdown('filterRule3Div');
	$("#filterRule3Div #closeDropdown").css('display','');
	$("#filterRule3Div #closeDropdown").focus();
});

$(document).on('change','#filterRule3Div #closeDropdown',function(){
	closeDropDownChange('filterRule3Div','filterRule3');
});

$(document).on('blur','#filterRule3Div #closeDropdown',function(){
	closeDropDownBlur('filterRule3Div','filterRule3');
});

/**
===========================================================================================================
===========================================================================================================



/**
===========================================================================================================
										This is Rule 11 Script
===========================================================================================================
**/

$(document).on('click','#filterRule11',function(){
	$("#filterRule11").css('display','none');
	CloseDropdown('filterRule11Div');
	$("#filterRule11Div #closeDropdown").css('display','');
	$("#filterRule11Div #closeDropdown").focus();
});

$(document).on('change','#filterRule11Div #closeDropdown',function(){
	closeDropDownChange('filterRule11Div','filterRule11');
});

$(document).on('blur','#filterRule11Div #closeDropdown',function(){
	closeDropDownBlur('filterRule11Div','filterRule11');
});

/**
===========================================================================================================
===========================================================================================================
**/