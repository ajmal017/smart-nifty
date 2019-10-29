<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Ixudra\Curl\Facades\Curl;
use App\front\ArithmeticFilter;
use App\front\NumericFilter;
use App\front\OpenFilter;
use App\front\TimingFilter;
use App\front\screeners_equation;

class topLovedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index($screenerName)
    {
        $finalReturnHTML = ""; //This Variable Return Final HTML Of Equation


        $getData = screeners_equation::select()->where(['screener_name'=>$screenerName])->get();
        $screenerEquation = explode('==',$getData[0]['screener_equation']);
        foreach($screenerEquation as $value){
            $tempEquation = explode(',',$value);
            foreach($tempEquation as $value2){
                $tempEquation2 = explode(':',$value2);
                if($tempEquation2[0] == "a1" || $tempEquation2[0] == "arith"){
                    //This is Arithmetic Filter Condition
                    $finalReturnHTML .= '<select class="">';
                    $finalReturnHTML .= '<option value="....">Please select a operation</option>';
                    $finalReturnHTML .= '<option value="remove">Remove operations on right</option>';
                    $finalReturnHTML .= '<optgroup label="--Arithmetic Operations--">';
                    $finalReturnHTML .= '<option value="+">+</option>';
                    $finalReturnHTML .= '<option value="-">-</option>';
                    $finalReturnHTML .= '<option value="*">*</option>';
                    $finalReturnHTML .= '<option value="/">/</option>';
                    $finalReturnHTML .= '</optgroup>';
                    $finalReturnHTML .= '<optgroup label="--Comparision Operations--">';
                    $finalReturnHTML .= '<option value="=">Equals</option>';
                    $finalReturnHTML .= '<option value=">">Greater than</option>';
                    $finalReturnHTML .= '<option value=">=">Greater than equal to</option>';
                    $finalReturnHTML .= '<option value="<">Less than</option>';
                    $finalReturnHTML .= '<option value="<=">Less than equal to</option>';
                    $finalReturnHTML .= '</optgroup>';
                    $finalReturnHTML .= '<optgroup label="--Crossover Operations--">';
                    $finalReturnHTML .= '<option value="crossed_above">Crossed above</option>';
                    $finalReturnHTML .= '<option value="crossed_below">Crossed below</option>';
                    $finalReturnHTML .= '</optgroup>';
                    $finalReturnHTML .= '</select>';

                }
                else if($tempEquation2[0] == "b1"){
                    //This is Numeric Filter Condition
                    $finalReturnHTML .= "<select class='numericFilter'>";
                    $finalReturnHTML .= "<option>Select Option</option>";

                    $finalReturnHTML .= ($tempEquation2[1] == "0") ? "<option value='0' selected='selected'>0(Latest Candle)</option>" : "<option value='0'>0(Latest Candle)</option>";

                    $finalReturnHTML .= ($tempEquation2[1] == "-1") ? "<option value='-1' selected='selected'>-1(Previous Candle)</option>" : "<option value='-1'>-1(Previous Candle)</option>";

                    $finalReturnHTML .= ($tempEquation2[1] == "-2") ? "<option value='-2' selected='selected'>-2</option>" : "<option value='-2'>-2</option>";

                    $finalReturnHTML .= ($tempEquation2[1] == "-3") ? "<option value='-3' selected='selected'>-3</option>" : "<option value='-3''>-3</option>";

                    $finalReturnHTML .= ($tempEquation2[1] == "-4") ? "<option value='-4' selected='selected'>-4</option>" : "<option value='-4'>-4</option>";

                    $finalReturnHTML .= ($tempEquation2[1] == "-5") ? "<option value='-5' selected='selected'>-5</option>" : "<option value='-5'>-5</option>";

                    $finalReturnHTML .= ($tempEquation2[1] == "-6") ? "<option value='-6' selected='selected'>-6</option>" : "<option value='-6'>-6</option>";

                    $finalReturnHTML .= ($tempEquation2[1] == "-7") ? "<option value='-7' selected='selected'>-7</option>" : "<option value='-7'>-7</option>";

                    $finalReturnHTML .= ($tempEquation2[1] == "-8") ? "<option value='-8' selected='selected'>-8</option>" : "<option value='-8'>-8</option>";

                    $finalReturnHTML .= "<option value='-n'>n candles ago</option>";
                    $finalReturnHTML .= "<optgroup label='--Day Candle--'>";

                    $finalReturnHTML .= ($tempEquation2[1] == "=1") ? "<option value='=1' selected='selected'>=1(first candle)</option>" : "<option value='=1'>=1</option>";

                    $finalReturnHTML .= ($tempEquation2[1] == "=2") ? "<option value='=2' selected='selected'>=2(second candle)</option>" : "<option value='=2'>=2</option>";

                    $finalReturnHTML .= ($tempEquation2[1] == "=3") ? "<option value='=3' selected='selected'>=3</option>" : "<option value='=3'>=3</option>";

                    $finalReturnHTML .= ($tempEquation2[1] == "=4") ? "<option value='=4' selected='selected'>=4</option>" : "<option value='=4'>=4</option>";

                    $finalReturnHTML .= ($tempEquation2[1] == "=5") ? "<option value='=5' selected='selected'>=5</option>" : "<option value='=5'>=5</option>";

                    $finalReturnHTML .= "<option value='=n'>nth candle of day</option>";
                    $finalReturnHTML .= "</optgroup>";
                    $finalReturnHTML .= "<optgroup label='--Prior day candles--'>";

                    $finalReturnHTML .= ($tempEquation2[1] == "=-1") ? "<option value='=-1' selected='selected'>=-1(previous days last candle)</option>" : "<option value='=-1'>=-1(previous days last candle)</option>";

                    $finalReturnHTML .= ($tempEquation2[1] == "=-2") ? "<option value='=-2' selected='selected'>=-2(previous days second last candle)</option>" : "<option value='=-2'>=-2(previous days second last candle)</option>";

                    $finalReturnHTML .= ($tempEquation2[1] == "=-3") ? "<option value='=-3' selected='selected'>=-3</option>" : "<option value='=-3'>=-3</option>";

                    $finalReturnHTML .= ($tempEquation2[1] == "=-4") ? "<option value='=-4' selected='selected'>=-4</option>" : "<option value='=-4'>=-4</option>";

                    $finalReturnHTML .= ($tempEquation2[1] == "=-5") ? "<option value='=-5' selected='selected'>=-5</option>" : "<option value='=-5'>=-5</option>";

                    $finalReturnHTML .= "<option value='=-n'>-nth last candle of previous day</option>";
                    $finalReturnHTML .= "</optgroup>";
                    $finalReturnHTML .= "</select>";
                }
                else if($tempEquation2[0] == "c1"){
                    //This is Open Filter Condition
                    $finalReturnHTML .= "<select class='OpenFilter'>";
                    $finalReturnHTML .= "<optgroup label='--Stock Attributes--'>";
                    $finalReturnHTML .= ($tempEquation2[1] == "Open") ? '<option value="Open" selected="selected">Open</option>' :'<option value="Open">Open</option>';

                    $finalReturnHTML .= ($tempEquation2[1] == "High") ? '<option value="High" selected="selected">High</option>' :'<option value="High">High</option>';

                    $finalReturnHTML .= ($tempEquation2[1] == "Low") ? '<option value="Low" selected="selected">Low</option>' :'<option value="Low">Low</option>';

                    $finalReturnHTML .= ($tempEquation2[1] == "Close") ? '<option value="Close" selected="selected">Close</option>' :'<option value="Close">Close</option>';

                    $finalReturnHTML .= ($tempEquation2[1] == "Volume") ? '<option value="Volume" selected="selected">Volume</option>' :'<option value="Volume">Volume</option>';

                    $finalReturnHTML .= ($tempEquation2[1] == "Vwap") ? '<option value="Vwap" selected="selected">Vwap</option>' :'<option value="Vwap">Vwap</option>';

                    $finalReturnHTML .= ($tempEquation2[1] == "HA-Open") ? '<option value="HA-Open" selected="selected">HA-Open</option>' :'<option value="HA-Open">HA-Open</option>';

                    $finalReturnHTML .= ($tempEquation2[1] == "HA-High") ? '<option value="HA-High" selected="selected">HA-High</option>' :'<option value="HA-High">HA-High</option>';

                    $finalReturnHTML .= ($tempEquation2[1] == "HA-Low") ? '<option value="HA-Low" selected="selected">HA-Low</option>' :'<option value="HA-Low">HA-Low</option>';

                    $finalReturnHTML .= ($tempEquation2[1] == "HA-Close") ? '<option value="HA-Close" selected="selected">HA-Close</option>' :'<option value="HA-Close">HA-Close</option>';

                    $finalReturnHTML .= "</optgroup>";
                    $finalReturnHTML .= "<optgroup label='--Math Functions--'>";

                    $finalReturnHTML .= '<option value="brackets">Bracket(value)</option>';
                    $finalReturnHTML .= '<option value="min">Min(duration, value)</option>';
                    $finalReturnHTML .= '<option value="max">Max(duration, value)</option>';
                    $finalReturnHTML .= '<option value="abs">Abs(value)</option>';
                    $finalReturnHTML .= '<option value="ceil">Ceil(value)</option>';
                    $finalReturnHTML .= '<option value="floor">Floor(value)</option>';
                    $finalReturnHTML .= '<option value="round">Round(value)</option>';
                    $finalReturnHTML .= '<option value="square">Square(value)</option>';
                    $finalReturnHTML .= '<option value="square_root">Square root(value)</option>';

                    $finalReturnHTML .= '</optgroup>';
                    $finalReturnHTML .= '<optgroup label="--Indicators--">';

                    $finalReturnHTML .= '<option value="pivot_point">Pivot point</option>';
                    $finalReturnHTML .= '<option value="pivot_point_r1">Pivot point R1</option>';
                    $finalReturnHTML .= '<option value="pivot_point_r2">Pivot point R2</option>';
                    $finalReturnHTML .= '<option value="pivot_point_s1">Pivot point S1</option>';
                    $finalReturnHTML .= '<option value="pivot_point_s2">Pivot point S2</option>';

                    $finalReturnHTML .= '</optgroup>';
                    $finalReturnHTML .= '<optgroup label="--">';

                    $finalReturnHTML .= '<option value="sma">Sma(Simple)</option>';
                    $finalReturnHTML .= '<option value="ema">Ema(Exponential)</option>';
                    $finalReturnHTML .= '<option value="wma">Wma(Weighted)</option>';
                    $finalReturnHTML .= '<option value="tma">Tma(Triangular)</option>';
                    $finalReturnHTML .= '<option value="stddva">Std(Standard Deviation)</option>';

                    $finalReturnHTML .= '</optgroup>';
                    $finalReturnHTML .= '<optgroup label="--">';

                    $finalReturnHTML .= '<option value="parabolic_sar">Parabolic Sar</option>';
                    $finalReturnHTML .= '<option value="upper_bb">Upper Bollinger band</option>';
                    $finalReturnHTML .= '<option value="lower_bb">Lower Bollinger band</option>';

                    $finalReturnHTML .= '</optgroup>';
                    $finalReturnHTML .= '<optgroup label="--">';

                    $finalReturnHTML .= '<option value="supertrend">SuperTrend</option>';
                    $finalReturnHTML .= '</optgroup>';
                    $finalReturnHTML .= '<optgroup label="--">';
                    $finalReturnHTML .= '<option value="ichimoku_base">Ichimoku Base Line</option>';
                    $finalReturnHTML .= '<option value="ichimoku_conversion">Ichimoku Conversion Line</option>';
                    $finalReturnHTML .= '<option value="ichimoku_span_a">Ichimoku Span A</option>';
                    $finalReturnHTML .= '<option value="ichimoku_span_b">Ichimoku Span B</option>';
                    $finalReturnHTML .= '<option value="ichimoku_cloud_top">Ichimoku Cloud Top</option>';
                    $finalReturnHTML .= '<option value="ichimoku_cloud_bottom">Ichimoku Cloud Bottom</option>';
                    $finalReturnHTML .= '</optgroup>';
                    $finalReturnHTML .= '<optgroup label="--">';
                    $finalReturnHTML .= '<option value="rsi">Rsi</option>';
                    $finalReturnHTML .= '<option value="stochrsi">StochRsi</option>';
                    $finalReturnHTML .= '<option value="cci">Cci</option>';
                    $finalReturnHTML .= '<option value="mfi">Mfi</option>';
                    $finalReturnHTML .= '<option value="obv">OBV(On Balance Volume)</option>';
                    $finalReturnHTML .= '<option value="williamsr">Williams %R</option>';
                    $finalReturnHTML .= '</optgroup>';
                    $finalReturnHTML .= '<optgroup label="--">';
                    $finalReturnHTML .= '<option value="macd_line">Macd Line</option>';
                    $finalReturnHTML .= '<option value="macd_signal">Macd Signal</option>';
                    $finalReturnHTML .= '<option value="macd_histogram">Macd Histogram</option>';
                    $finalReturnHTML .= '</optgroup>';
                    $finalReturnHTML .= '<optgroup label="--">';
                    $finalReturnHTML .= '<option value="adx">ADX</option>';
                    $finalReturnHTML .= '<option value="adx_di_positive">ADX DI Positive</option>';
                    $finalReturnHTML .= '<option value="adx_di_negative">ADX DI Negative</option>';
                    $finalReturnHTML .= '</optgroup>';
                    $finalReturnHTML .= '<optgroup label="--">';
                    $finalReturnHTML .= '<option value="true_range">True Range</option>';
                    $finalReturnHTML .= '<option value="avg_true_range">Avg True Range(ATR)</option>';
                    $finalReturnHTML .= '</optgroup>';
                    $finalReturnHTML .= '<optgroup label="--">';
                    $finalReturnHTML .= '<option value="aroon_up">Aroon Up</option>';
                    $finalReturnHTML .= '<option value="aroon_down">Aroon Down</option>';
                    $finalReturnHTML .= '<option value="aroon_osc">Aroon Osc</option>';
                    $finalReturnHTML .= '</optgroup>';
                    $finalReturnHTML .= '<optgroup label="--">';
                    $finalReturnHTML .= '<option value="slow_stochastic_%d">Slow Stochastic %K</option>';
                    $finalReturnHTML .= '<option value="slow_stochastic_%k">Slow Stochastic %D</option>';
                    $finalReturnHTML .= '<option value="fast_stochastic_%d">Fast Stochastic %K</option>';
                    $finalReturnHTML .= '<option value="fast_stochastic_%k">Fast Stochastic %D</option>';
                    $finalReturnHTML .= '<option value="smi">Smi %K (Stochastic Momentum Index)</option>';
                    $finalReturnHTML .= '<option value="smi_%d">Smi %D (Stochastic Momentum Index)</option>';
                    $finalReturnHTML .= '</optgroup>';
                    $finalReturnHTML .= '<optgroup label="--">';
                    $finalReturnHTML .= '<option value="wavetrend">WaveTrend</option>';
                    $finalReturnHTML .= '<option value="wavetrend_trigger">WaveTrend Trigger</option>';
                    $finalReturnHTML .= '<option value="wavetrend_momentum">WaveTrend Momentum</option>';
                    $finalReturnHTML .= '</optgroup>';
                    $finalReturnHTML .= '<optgroup label="--Fundamentals--">';
                    $finalReturnHTML .= '<option value="face_value">Face Value</option>';
                    $finalReturnHTML .= '<option value="reserves">Reserves</option>';
                    $finalReturnHTML .= '<option value="dividend">Dividend</option>';
                    $finalReturnHTML .= '<option value="book_value">Book Value</option>';
                    $finalReturnHTML .= '<option value="yearly_pe_ratio">Yearly PE Ratio</option>';
                    $finalReturnHTML .= '<option value="yearly_pc_ratio">Yearly PC Ratio</option>';
                    $finalReturnHTML .= '<option value="sales_turnover">Sales Turnover[yearly]</option>';
                    $finalReturnHTML .= '<option value="net_profit">Net Profit[yearly]</option>';
                    $finalReturnHTML .= '<option value="var">Net Profit Variance[yr]</option>';
                    $finalReturnHTML .= '<option value="net_profithy">Net Profit[quarter]</option>';
                    $finalReturnHTML .= '<option value="net_profitvhy">Net Profit Variance[qr]</option>';
                    $finalReturnHTML .= '<option value="earning_per_share">Earning Per Share[EPS]</option>';
                    $finalReturnHTML .= '<option value="p_earning_per_share">Prev Year EPS</option>';
                    $finalReturnHTML .= '<option value="full_year_cps">Cash Per Share[yr]</option>';
                    $finalReturnHTML .= '<option value="quarter_cps">Cash Per Share[qr]</option>';
                    $finalReturnHTML .= '<option value="month_cps">Cash per share[mt]</option>';
                    $finalReturnHTML .= '<option value="latest_quarter_sales">Net Sales[quarter]</option>';
                    $finalReturnHTML .= '<option value="pvbv">Price to Book Value</option>';
                    $finalReturnHTML .= '<option value="Networth">Networth</option>';
                    $finalReturnHTML .= '<option value="bval">BSE Value in lakhs</option>';
                    $finalReturnHTML .= '<option value="nval">NSE Value in lakhs</option>';
                    $finalReturnHTML .= '<option value="market_cap">Market Cap</option>';
                    $finalReturnHTML .= '<option value="latopm">Operating profit margin[yr]</option>';
                    $finalReturnHTML .= '<option value="lathyopm">Operating profit margin[qr]</option>';
                    $finalReturnHTML .= '<option value="latgpm">Gross profit margin</option>';
                    $finalReturnHTML .= '<option value="gross_block">Gross Block</option>';
                    $finalReturnHTML .= '<option value="totoloan">Total Loans</option>';
                    $finalReturnHTML .= '<option value="advance_given_by_bank">Advance Given By Bank</option>';
                    $finalReturnHTML .= '<option value="net_profit_asset">Net non performing assets</option>';
                    $finalReturnHTML .= '<option value="trailing_twelve_months_sales">TTM Sales</option>';
                    $finalReturnHTML .= '<option value="trailing_twelve_month_op">TTM Operating Profit</option>';
                    $finalReturnHTML .= '<option value="trailing_twelve_months_opm">TTM Operating Profit margin</option>';
                    $finalReturnHTML .= '<option value="trailing_twelve_month_gp">TTM Gross profit</option>';
                    $finalReturnHTML .= '<option value="trailing_twelve_month_gpm">TTM Gross profit margin</option>';
                    $finalReturnHTML .= '<option value="trailing_twelve_months_np">TTM Net profit</option>';
                    $finalReturnHTML .= '<option value="trailing_twelve_months_npv">TTM Net profit Variance</option>';
                    $finalReturnHTML .= '<option value="trailing_twelve_month_eps">TTM EPS</option>';
                    $finalReturnHTML .= '<option value="trailing_twelve_month_pe">TTM PE</option>';
                    $finalReturnHTML .= '<option value="trailing_twelve_month_cps">TTM CPS</option>';
                    $finalReturnHTML .= '<option value="latest_ttmdepreciation">TTM Depreciation</option>';
                    $finalReturnHTML .= '</optgroup>';
                    $finalReturnHTML .= '</select>';
                }
                else if($tempEquation2[0] == "d1"){
                    //This is Timing Filter Condition
                    $finalReturnHTML .= "<select class='TimingFilter'>";
                    $finalReturnHTML .= "<optgroup label='--Minute--'>";

                    $finalReturnHTML .= ($tempEquation2[1] == "1_minute") ? "<option value='1_minute' selected='selected'>1 Minute</option>" : "<option value='1_minute'>1 Minute</option>";

                    $finalReturnHTML .= ($tempEquation2[1] == "2_minute") ? "<option value='2_minute' selected='selected'>2 Minute</option>" : "<option value='2_minute'>2 Minute</option>";

                    $finalReturnHTML .= ($tempEquation2[1] == "3_minute") ? "<option value='3_minute' selected='selected'>3 Minute</option>" : "<option value='3_minute'>3 Minute</option>";

                    $finalReturnHTML .= ($tempEquation2[1] == "5_minute") ? "<option value='5_minute' selected='selected'>5 Minute</option>" : "<option value='5_minute'>5 Minute</option>";

                    $finalReturnHTML .= ($tempEquation2[1] == "10_minute") ? "<option value='10_minute' selected='selected'>10 Minute</option>" : "<option value='10_minute'>10 Minute</option>";

                    $finalReturnHTML .= ($tempEquation2[1] == "15_minute") ? "<option value='15_minute' selected='selected'>15 Minute</option>" : "<option value='15_minute'>15 Minute</option>";

                    $finalReturnHTML .= ($tempEquation2[1] == "20_minute") ? "<option value='20_minute' selected='selected'>20 Minute</option>" : "<option value='20_minute'>20 Minute</option>";

					$finalReturnHTML .= ($tempEquation2[1] == "30_minute") ? "<option value='30_minute' selected='selected'>30 Minute</option>" : "<option value='30_minute'>30 Minute</option>";

					$finalReturnHTML .= ($tempEquation2[1] == "75_minute") ? "<option value='75_minute' selected='selected'>75 Minute</option>" : "<option value='75_minute'>75 Minute</option>";

					$finalReturnHTML .= ($tempEquation2[1] == "60_minute") ? "<option value='60_minute' selected='selected'>60 Minute</option>" : "<option value='60_minute'>60 Minute</option>";

					$finalReturnHTML .= ($tempEquation2[1] == "120_minute") ? "<option value='120_minute' selected='selected'>120 Minute</option>" : "<option value='120_minute'>120 Minute</option>";

					$finalReturnHTML .= ($tempEquation2[1] == "240_minute") ? "<option value='240_minute' selected='selected'>240 Minute</option>" : "<option value='240_minute'>240 Minute</option>";

					$finalReturnHTML .= "</optgroup>";
					$finalReturnHTML .= "<optgroup label='--Days--'>";

					$finalReturnHTML .= ($tempEquation2[1] == "Latest") ? "<option value='Latest' selected='selected'>1 Minute</option>" : "<option value='Latest'>Latest(daily)</option>";

					$finalReturnHTML .= ($tempEquation2[1] == "1_dayago") ? "<option value='1_dayago' selected='selected'>1 day ago</option>" : "<option value='1_dayago'>1 day ago</option>";

					$finalReturnHTML .= ($tempEquation2[1] == "2_dayago") ? "<option value='2_dayago' selected='selected'>2 days ago</option>" : "<option value='2_dayago'>2 days ago</option>";

					$finalReturnHTML .= ($tempEquation2[1] == "3_dayago") ? "<option value='3_dayago' selected='selected'>3 days ago</option>" : "<option value='3_dayago'>3 days ago</option>";

					$finalReturnHTML .= ($tempEquation2[1] == "n_dayago") ? "<option value='n_dayago' selected='selected'>n days ago</option>" : "<option value='n_dayago'>n days ago</option>";


					$finalReturnHTML .= "</optgroup>";
					$finalReturnHTML .= "<optgroup label='--Weeks--'>";


					$finalReturnHTML .= ($tempEquation2[1] == "Weekly") ? "<option value='Weekly' selected='selected'>1 Minute</option>" : "<option value='Weekly'>Weekly</option>";

					$finalReturnHTML .= ($tempEquation2[1] == "1_weekago") ? "<option value='1_weekago' selected='selected'>1 week ago</option>" : "<option value='1_weekago'>1 week ago</option>";

					$finalReturnHTML .= ($tempEquation2[1] == "2_weekago") ? "<option value='2_weekago' selected='selected'>2 weeks ago</option>" : "<option value='2_weekago'>2 weeks ago</option>";

					$finalReturnHTML .= ($tempEquation2[1] == "3_weekago") ? "<option value='3_weekago' selected='selected'>3 weeks ago</option>" : "<option value='3_weekago'>3 weeks ago</option>";

					$finalReturnHTML .= ($tempEquation2[1] == "n_weekago") ? "<option value='n_weekago' selected='selected'>n weeks ago</option>" : "<option value='n_weekago'>n weeks ago</option>";

					$finalReturnHTML .= "</optgroup>";
					$finalReturnHTML .= "<optgroup label='--Months--'>";

					$finalReturnHTML .= ($tempEquation2[1] == "Monthly") ? "<option value='Monthly' selected='selected'>1 Minute</option>" : "<option value='Monthly'>Monthly</option>";

					$finalReturnHTML .= ($tempEquation2[1] == "1_monthago") ? "<option value='1_monthago' selected='selected'>1 week ago</option>" : "<option value='1_monthago'>1 month ago</option>";

					$finalReturnHTML .= ($tempEquation2[1] == "2_monthago") ? "<option value='2_monthago' selected='selected'>2 weeks ago</option>" : "<option value='2_monthago'>2 months ago</option>";

					$finalReturnHTML .= ($tempEquation2[1] == "3_monthago") ? "<option value='3_monthago' selected='selected'>3 weeks ago</option>" : "<option value='3_monthago'>3 months ago</option>";

					$finalReturnHTML .= ($tempEquation2[1] == "n_monthago") ? "<option value='n_monthago' selected='selected'>n weeks ago</option>" : "<option value='n_monthago'>n months ago</option>";

					$finalReturnHTML .= "</select>";
                }
                else if($tempEquation2[0] == "other"){
                	if($tempEquation2[1] == "("){
                		$finalReturnHTML .= "(";
                	}
                	else if(strstr($tempEquation2[1], 'customtxt')){
                		$custom_txt_values = explode('_',$tempEquation2[1]);
                		$txt_box_values = array();
                		foreach($custom_txt_values as $value4){
                			if($value4 == "customtxt"){ 
                				continue; 
                			}else{
                				array_push($txt_box_values,$value4);
                			}
                		}
                		$finalReturnHTML .= "<input type='text' name='custom_txt' value=".implode(',',$txt_box_values).">";
                	}
                	else if($tempEquation2[1] == ")"){
                		$finalReturnHTML .= ")";
                	}
                }
            }
        }
        return $finalReturnHTML;
        $screenerName = $screenerName;
        $stockName = 'Wipro';
        return view('front/screeners/screnners',compact('screenerName','stockName'));
        /*$api_data = Curl::to('http://www.smartnifty.com/convertcsv.json')->asJson()->get();
        return $api_data;
        return view('front/screeners/screnners_list',compact('screenerName'));*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
