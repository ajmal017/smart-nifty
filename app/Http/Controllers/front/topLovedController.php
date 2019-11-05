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
          $equation_counter = 0;

          $getData = screeners_equation::select()->where(['screener_name'=>$screenerName])->get();

          $finalHeadingData = array();
          $finalScreenersData = array();

          $headingEquationCounter = 0;
          $headingEquationClassCounter = 1;

          $mainHeadingEquation = explode('==',$getData[0]['heading_equation']);


          $mainScreenerEquation = explode('/',$getData[0]['screener_equation']);
          foreach($mainScreenerEquation as $masterValue){
               $headingEquation = "";
               $headingEquationParts = explode(',',$mainHeadingEquation[$headingEquationCounter]);

               
               $tempCount = 1;

               foreach($headingEquationParts as $value6){
                    $tmpHeadingEquation = explode(':',$value6);
                    if($tempCount == 1){
                         $headingEquation .= "<label>Stock <span class='m1_span_".$headingEquationClassCounter."' onclick=span_click('m1','span',".$headingEquationClassCounter.")>".$tmpHeadingEquation[1]." </span>";
                         $headingEquation .= "<select id='m1_select_".$headingEquationClassCounter."' style='display: none;' onchange=select_click('m1','select',".$headingEquationClassCounter.")>";
                         $headingEquation .= "<option value='passes'>passes</option>";
                         $headingEquation .= "<option value='fails'>fails</option>";
                         $headingEquation .= "</select>";
                         $tempCount++;
                    }else if($tempCount == 2){
                         $headingEquation .= " <span class='m2_span_".$headingEquationClassCounter."' onclick=span_click('m2','span',".$headingEquationClassCounter.")>".$tmpHeadingEquation[1]."</span>";
                         $headingEquation .= "<select id='m2_select_".$headingEquationClassCounter."' style='display: none;' onchange=select_click('m2','select',".$headingEquationClassCounter.")>";
                         $headingEquation .= "<option value='all'>all</option>";
                         $headingEquation .= "<option value='any'>any</option>";
                         $headingEquation .= "</select>";
                         $headingEquation .= " of the below filters in ";
                         $tempCount++;
                    }else if($tempCount == 3){
                         $headingEquation .= "<span class='m3_span_".$headingEquationClassCounter."' onclick=span_click('m3','span',".$headingEquationClassCounter.")>".$tmpHeadingEquation[1]."</span>";
                         $headingEquation .= "<select id='m3_select_".$headingEquationClassCounter."' style='display: none;' onchange=select_click('m3','select',".$headingEquationClassCounter.")>";
                         $headingEquation .= "<option value='cash'>cash</option>";
                         $headingEquation .= "<option value='futures'>futures</option>";
                         $headingEquation .= "<option value='indices'>indices</option>";
                         $headingEquation .= "<option value='nifty 100'>nifty 100</option>";
                         $headingEquation .= "<option value='nifty 200'>nifty 200</option>";
                         $headingEquation .= "<option value='nifty 50'>nifty 50</option>";
                         $headingEquation .= "<option value='watchlist'>watchlist</option>";
                         $headingEquation .= "</select>";
                         $headingEquation .= " segment</label>";
                         $tempCount++;
                    }
               }



               $headingEquationClassCounter++;





               $finalReturnHTML = "";
               $screenerEquation = explode('==',$masterValue);
               foreach($screenerEquation as $value){
                    $equation_counter++;
                    $class_counter = 0;

                    $tempEquation = explode(',',$value);
                    foreach($tempEquation as $value2){
                         $class_counter++;

                         $tempEquation2 = explode(':',$value2);


                         if($tempEquation2[0] == "a1" || $tempEquation2[0] == "arith"){
                         //This is Arithmetic Filter Condition
                              if($tempEquation2[0] == "a1"){
                                   $finalReturnHTML .= '<label class="arith_label_'.$equation_counter.'_'.$class_counter.'" onclick="arith_label_click('.$equation_counter.','.$class_counter.')">'.ucfirst(str_replace('_',' ',$tempEquation2[1])).'</label>';
                              }
                              else{
                                   $finalReturnHTML .= '<button type="button" class="btn btn-info btn-sm arith_label_'.$equation_counter.'_'.$class_counter.'" onclick="arith_label_click('.$equation_counter.','.$class_counter.')"><i class="fa fa-calculator" aria-hidden="true"></i></button>';
                              }

                              $finalReturnHTML .= '<select class="arith_dropdown_'.$equation_counter.'_'.$class_counter.'" style="display:none;">';
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
                              $finalReturnHTML .= '<label class="numeric_filter_label_'.$equation_counter.'_'.$class_counter.'">['.ucfirst(str_replace('_',' ',$tempEquation2[1])).']</label>';

                              $finalReturnHTML .= "<select class='numeric_filter_dropdown_".$equation_counter."_".$class_counter."' style='display:none;'>";
                              $finalReturnHTML .= "<option>Select Option</option>";
                              $finalReturnHTML .= "<option value='0'>0(Latest Candle)</option>";
                              $finalReturnHTML .= "<option value='-1'>-1(Previous Candle)</option>";
                              $finalReturnHTML .= "<option value='-2'>-2</option>";
                              $finalReturnHTML .= "<option value='-3''>-3</option>";
                              $finalReturnHTML .= "<option value='-4'>-4</option>";
                              $finalReturnHTML .= "<option value='-5'>-5</option>";
                              $finalReturnHTML .= "<option value='-6'>-6</option>";
                              $finalReturnHTML .= "<option value='-7'>-7</option>";
                              $finalReturnHTML .= "<option value='-8'>-8</option>";
                              $finalReturnHTML .= "<option value='-n'>n candles ago</option>";
                              $finalReturnHTML .= "<optgroup label='--Day Candle--'>";
                              $finalReturnHTML .= "<option value='=1'>=1</option>";
                              $finalReturnHTML .= "<option value='=2'>=2</option>";
                              $finalReturnHTML .= "<option value='=3'>=3</option>";
                              $finalReturnHTML .= "<option value='=4'>=4</option>";
                              $finalReturnHTML .= "<option value='=5'>=5</option>";
                              $finalReturnHTML .= "<option value='=n'>nth candle of day</option>";
                              $finalReturnHTML .= "</optgroup>";
                              $finalReturnHTML .= "<optgroup label='--Prior day candles--'>";
                              $finalReturnHTML .= "<option value='=-1'>=-1(previous days last candle)</option>";
                              $finalReturnHTML .= "<option value='=-2'>=-2(previous days second last candle)</option>";
                              $finalReturnHTML .= "<option value='=-3'>=-3</option>";
                              $finalReturnHTML .= "<option value='=-4'>=-4</option>";
                              $finalReturnHTML .= "<option value='=-5'>=-5</option>";
                              $finalReturnHTML .= "<option value='=-n'>-nth last candle of previous day</option>";
                              $finalReturnHTML .= "</optgroup>";
                              $finalReturnHTML .= "</select>";
                         }
                         else if($tempEquation2[0] == "c1"){
                         //This is Open Filter Condition
                              $finalReturnHTML .= "<label class='open_filter_label_".$equation_counter."_".$class_counter."'>".ucfirst(str_replace('_',' ',$tempEquation2[1]))."</label>";


                              $finalReturnHTML .= "<select class='open_filter_dropdown_".$equation_counter."_".$class_counter."' style='display:none;'>";
                              $finalReturnHTML .= "<optgroup label='--Stock Attributes--'>";
                              $finalReturnHTML .= '<option value="Open">Open</option>';

                              $finalReturnHTML .= '<option value="High">High</option>';

                              $finalReturnHTML .= '<option value="Low">Low</option>';

                              $finalReturnHTML .= '<option value="Close">Close</option>';

                              $finalReturnHTML .= '<option value="Volume">Volume</option>';

                              $finalReturnHTML .= '<option value="Vwap">Vwap</option>';

                              $finalReturnHTML .= '<option value="HA-Open">HA-Open</option>';

                              $finalReturnHTML .= '<option value="HA-High">HA-High</option>';

                              $finalReturnHTML .= '<option value="HA-Low">HA-Low</option>';

                              $finalReturnHTML .= '<option value="HA-Close">HA-Close</option>';

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
                              $finalReturnHTML .= "<label class='timing_filter_label_".$equation_counter."_".$class_counter."'>".ucfirst(str_replace('_',' ',$tempEquation2[1]))."</label>";


                              $finalReturnHTML .= "<select class='timing_filter_dropdown_".$equation_counter."_".$class_counter."' style='display:none;'>";
                              $finalReturnHTML .= "<optgroup label='--Minute--'>";

                              $finalReturnHTML .= "<option value='1_minute'>1 Minute</option>";

                              $finalReturnHTML .= "<option value='2_minute'>2 Minute</option>";

                              $finalReturnHTML .= "<option value='3_minute'>3 Minute</option>";

                              $finalReturnHTML .= "<option value='5_minute'>5 Minute</option>";

                              $finalReturnHTML .= "<option value='10_minute'>10 Minute</option>";

                              $finalReturnHTML .= "<option value='15_minute'>15 Minute</option>";

                              $finalReturnHTML .= "<option value='20_minute'>20 Minute</option>";

                              $finalReturnHTML .= "<option value='30_minute'>30 Minute</option>";

                              $finalReturnHTML .= "<option value='75_minute'>75 Minute</option>";

                              $finalReturnHTML .= "<option value='60_minute'>60 Minute</option>";

                              $finalReturnHTML .= "<option value='120_minute'>120 Minute</option>";

                              $finalReturnHTML .= "<option value='240_minute'>240 Minute</option>";

                              $finalReturnHTML .= "</optgroup>";
                              $finalReturnHTML .= "<optgroup label='--Days--'>";

                              $finalReturnHTML .= "<option value='Latest'>Latest(daily)</option>";

                              $finalReturnHTML .= "<option value='1_dayago'>1 day ago</option>";

                              $finalReturnHTML .= "<option value='2_dayago'>2 days ago</option>";

                              $finalReturnHTML .= "<option value='3_dayago'>3 days ago</option>";

                              $finalReturnHTML .= "<option value='n_dayago'>n days ago</option>";


                              $finalReturnHTML .= "</optgroup>";
                              $finalReturnHTML .= "<optgroup label='--Weeks--'>";


                              $finalReturnHTML .= "<option value='Weekly'>Weekly</option>";

                              $finalReturnHTML .= "<option value='1_weekago'>1 week ago</option>";

                              $finalReturnHTML .= "<option value='2_weekago'>2 weeks ago</option>";

                              $finalReturnHTML .= "<option value='3_weekago'>3 weeks ago</option>";

                              $finalReturnHTML .= "<option value='n_weekago'>n weeks ago</option>";

                              $finalReturnHTML .= "</optgroup>";
                              $finalReturnHTML .= "<optgroup label='--Months--'>";

                              $finalReturnHTML .= "<option value='Monthly'>Monthly</option>";

                              $finalReturnHTML .= "<option value='1_monthago'>1 month ago</option>";

                              $finalReturnHTML .= "<option value='2_monthago'>2 months ago</option>";

                              $finalReturnHTML .= "<option value='3_monthago'>3 months ago</option>";

                              $finalReturnHTML .= "<option value='n_monthago'>n months ago</option>";

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
                                   $finalReturnHTML .= "<label>".implode(',',$txt_box_values)."</label>";
                                   $finalReturnHTML .= "<input type='text' name='custom_txt' style='display:none;' value=".implode(',',$txt_box_values).">";
                              }
                              else if($tempEquation2[1] == ")"){
                                   $finalReturnHTML .= ")";
                              }
                         }
                    }

                    $finalReturnHTML .= "<br />";
               }

               $headingEquationCounter++;

               $finalEquation = $finalReturnHTML;

               array_push($finalHeadingData,$headingEquation);
               $finalScreenersData[$headingEquation] = $finalReturnHTML;
          }

          
          //return $finalReturnHTML;
          $screenerName = $screenerName;
          $stockName = 'Wipro';
          return view('front/screeners/screnners',compact('screenerName','stockName','finalHeadingData','finalScreenersData'));
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
