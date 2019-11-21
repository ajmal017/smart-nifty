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
                         $headingEquation .= "<label>Stock <span class='m1_bold m1_span_".$headingEquationClassCounter."' onclick=span_click('m1','span',".$headingEquationClassCounter.")>".$tmpHeadingEquation[1]." </span>";

                         $headingEquation .= "<select class='get_equation_data' id='m1_select_".$headingEquationClassCounter."' style='display: none;' onchange=select_click('m1','select',".$headingEquationClassCounter.")>";
                         $headingEquation .= "<option value='passes'>passes</option>";
                         $headingEquation .= "<option value='fails'>fails</option>";
                         $headingEquation .= "</select>";
                         $tempCount++;
                    }else if($tempCount == 2){
                         $headingEquation .= " <span class='m2_bold m2_span_".$headingEquationClassCounter."' onclick=span_click('m2','span',".$headingEquationClassCounter.")>".$tmpHeadingEquation[1]."</span>";
                         $headingEquation .= "<select id='m2_select_".$headingEquationClassCounter."' style='display: none;' onchange=select_click('m2','select',".$headingEquationClassCounter.")>";
                         $headingEquation .= "<option value='all'>all</option>";
                         $headingEquation .= "<option value='any'>any</option>";
                         $headingEquation .= "</select>";
                         $headingEquation .= " of the below filters in ";
                         $tempCount++;
                    }else if($tempCount == 3){
                         $headingEquation .= "<span class='m3_bold m3_span_".$headingEquationClassCounter."' onclick=span_click('m3','span',".$headingEquationClassCounter.")>".$tmpHeadingEquation[1]."</span>";
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
                                   $finalReturnHTML .= '<label class="arith_label arith_label_'.$equation_counter.'_'.$class_counter.'" onclick="arith_label_click('.$equation_counter.','.$class_counter.')">'.ucfirst(str_replace('_',' ',$tempEquation2[1])).'</label>';
                              }
                              else{
                                   $finalReturnHTML .= '<button type="button" class="btn btn-info btn-sm arith_label_'.$equation_counter.'_'.$class_counter.'" onclick="arith_label_click('.$equation_counter.','.$class_counter.')"><i class="fa fa-calculator" aria-hidden="true"></i></button>';
                              }

                              $finalReturnHTML .= '<select class="arith_dropdown arith_dropdown_'.$equation_counter.'_'.$class_counter.'" style="display:none;" onchange="arith_dropdown_click('.$equation_counter.','.$class_counter.')" onblur="arith_dropdown_blur('.$equation_counter.','.$class_counter.')">';
                              $finalReturnHTML .= '<option value="....">Please select a operation</option>';
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
                              $finalReturnHTML .= '<label class="numeric_filter_label numeric_filter_label_'.$equation_counter.'_'.$class_counter.'" onclick="numeric_filter_label_click('.$equation_counter.','.$class_counter.')">['.ucfirst(str_replace('_',' ',$tempEquation2[1])).']</label>';

                              $finalReturnHTML .= "<select class='numeric_filter_dropdown numeric_filter_dropdown_".$equation_counter."_".$class_counter."' style='display:none;' onchange=numeric_filter_dropdown_click(".$equation_counter.",".$class_counter.") onblur='numeric_filter_dropdown_blur(".$equation_counter.",".$class_counter.")'>";
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
                              //This is Bracket() Code
                              $finalReturnHTML .= '';


                              //This is Open Filter Condition

                              $finalReturnHTML .= "<label class='open_filter_label open_filter_label_".$equation_counter."_".$class_counter."' onclick='open_filter_label_click(".$equation_counter.",".$class_counter.")'>".ucfirst(str_replace('_',' ',$tempEquation2[1]))."</label>";


                              $finalReturnHTML .= "<select class='open_filter_dropdown open_filter_dropdown_".$equation_counter."_".$class_counter."' style='display:none;' onchange=open_filter_dropdown_click(".$equation_counter.",".$class_counter.")>";
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

                              $finalReturnHTML .= "<option value='brackets' data-first_element='<div class=bracket_equation_div><label class=bracket_first_element_".$equation_counter."_".$class_counter.">Bracket</label>' data-second_element='<label class=bracket_second_element_".$equation_counter."_".$class_counter.">(</label>' data-third_element='<label class=bracket_third_element_".$equation_counter."_".$class_counter.">Latest</label>' data-fourth_element='<label class=bracket_fourth_element_".$equation_counter."_".$class_counter.">Open</label>' data-fifth_element='<button type=button class=bracket_fifth_element_".$equation_counter."_".$class_counter."><i class=fa></i></button>' data-sixth_element='<label class=bracket_sixth_element_".$equation_counter."_".$class_counter.">)</label></div>'>Bracket(value)</option>";

                              $finalReturnHTML .= "<option value='min' data-first_element='<div class=min_equation_div><label class=min_first_element_".$equation_counter."_".$class_counter.">Min</label>' data-second_element='<label class=min_second_element_".$equation_counter."_".$class_counter.">(</label>'
                                   data-third_element='<label class=min_third_element_".$equation_counter."_".$class_counter.">20,</label>'
                                   data-fourth_element='<label class=min_fourth_element_".$equation_counter."_".$class_counter.">[0]</label>'
                                   data-fifth_element='<label class=min_fifth_element_".$equation_counter."_".$class_counter.">15 minute</label>'
                                   data-six_element='<label class=min_six_element_".$equation_counter."_".$class_counter.">Open</label>'
                                   data-seven_element='<button type=button class=min_seven_element_".$equation_counter."_".$class_counter."><i class=fa></i></button>'
                                   data-eight_element='<label class=min_eight_element_".$equation_counter."_".$class_counter.">)</label></div>'>Min(duration, value)</option>";
                              $finalReturnHTML .= "<option value='max' data-first_element='<div class=max_equation_div><label class=max_first_element_".$equation_counter."_".$class_counter.">Max</label>' data-second_element='<label class=max_second_element_".$equation_counter."_".$class_counter.">(</label>'
                                   data-third_element='<label class=max_third_element_".$equation_counter."_".$class_counter.">20,</label>'
                                   data-fourth_element='<label class=max_fourth_element_".$equation_counter."_".$class_counter.">[0]</label>'
                                   data-fifth_element='<label class=max_fifth_element_".$equation_counter."_".$class_counter.">15 minute</label>'
                                   data-six_element='<label class=max_six_element_".$equation_counter."_".$class_counter.">Open</label>'
                                   data-seven_element='<button type=button class=max_seven_element_".$equation_counter."_".$class_counter."><i class=fa></i></button>'
                                   data-eight_element='<label class=max_eight_element_".$equation_counter."_".$class_counter.">)</label></div>'>Max(duration, value)</option>";
                              $finalReturnHTML .= "<option value='abs' data-first_element='<div class=abs_equation_div><label class=abs_first_element_".$equation_counter."_".$class_counter.">Abs</label>' data-second_element='<label class=abs_second_element_".$equation_counter."_".$class_counter.">(</label>' data-third_element='<label class=abs_third_element_".$equation_counter."_".$class_counter.">Latest</label>' data-fourth_element='<label class=abs_fourth_element_".$equation_counter."_".$class_counter.">Open</label>' data-fifth_element='<button type=button class=abs_fifth_element_".$equation_counter."_".$class_counter."><i class=fa></i></button>' data-six_element='<label class=abs_six_element_".$equation_counter."_".$class_counter.">)</label></div>'>Abs(value)</option>";
                              $finalReturnHTML .= "<option value='ceil' data-first_element='<div class=ceil_equation_div><label class=ceil_first_element_".$equation_counter."_".$class_counter.">Ceil</label>' data-second_element='<label class=ceil_second_element_".$equation_counter."_".$class_counter.">(</label>' data-third_element='<label class=ceil_third_element_".$equation_counter."_".$class_counter.">Latest</label>' data-fourth_element='<label class=ceil_fourth_element_".$equation_counter."_".$class_counter.">Open</label>' data-fifth_element='<button type=button class=ceil_fifth_element_".$equation_counter."_".$class_counter."><i class=fa></i></button>' data-six_element='<label class=ceil_six_element_".$equation_counter."_".$class_counter.">)</label></div>'>Ceil(value)</option>";
                              $finalReturnHTML .= "<option value='floor' data-first_element='<div class=floor_equation_div><label class=floor_first_element_".$equation_counter."_".$class_counter.">Floor</label>' data-second_element='<label class=floor_second_element_".$equation_counter."_".$class_counter.">(</label>' data-third_element='<label class=floor_third_element_".$equation_counter."_".$class_counter.">Latest</label>' data-fourth_element='<label class=floor_fourth_element_".$equation_counter."_".$class_counter.">Open</label>' data-fifth_element='<button type=button class=floor_fifth_element_".$equation_counter."_".$class_counter."><i class=fa></i></button>' data-six_element='<label class=floor_six_element_".$equation_counter."_".$class_counter.">)</label></div>'>Floor(value)</option>";
                              $finalReturnHTML .= "<option value='round' data-first_element='<div class=round_equation_div><label class=round_first_element_".$equation_counter."_".$class_counter.">Round</label>' data-second_element='<label class=round_second_element_".$equation_counter."_".$class_counter.">(</label>' data-third_element='<label class=round_third_element_".$equation_counter."_".$class_counter.">Latest</label>' data-fourth_element='<label class=round_fourth_element_".$equation_counter."_".$class_counter.">Open</label>' data-fifth_element='<button type=button class=round_fifth_element_".$equation_counter."_".$class_counter."><i class=fa></i></button>' data-six_element='<label class=round_six_element_".$equation_counter."_".$class_counter.">)</label></div>'>Round(value)</option>";

                              $finalReturnHTML .= "<option value='square' data-first_element='<div class=square_equation_div><label class=square_first_element_".$equation_counter."_".$class_counter.">Square</label>' data-second_element='<label class=square_second_element_".$equation_counter."_".$class_counter.">(</label>' data-third_element='<label class=square_third_element_".$equation_counter."_".$class_counter.">Latest</label>' data-fourth_element='<label class=square_fourth_element_".$equation_counter."_".$class_counter.">Open</label>' data-fifth_element='<button type=button class=square_fifth_element_".$equation_counter."_".$class_counter."><i class=fa></i></button>' data-six_element='<label class=square_six_element_".$equation_counter."_".$class_counter.">)</label></div>'>Square(value)</option>";
                              $finalReturnHTML .= "<option value='square_root'
                                   data-first_element='<div class=squareroot_equation_div><label class=squareroot_first_element_".$equation_counter."_".$class_counter.">Square root</label>'
                                   data-second_element='<label class=squareroot_second_element_".$equation_counter."_".$class_counter.">(</label>'
                                   data-third_element='<label class=squareroot_third_element_".$equation_counter."_".$class_counter.">Latest</label>'
                                   data-fourth_element='<label class=squareroot_fourth_element_".$equation_counter."_".$class_counter.">Open</label>'
                                   data-fifth_element='<button type=button class=squareroot_fifth_element_".$equation_counter."_".$class_counter."><i class=fa></i></button>'
                                   data-six_element='<label class=squareroot_six_element_".$equation_counter."_".$class_counter.">)</label></div>'>Square root(value)</option>";

                              $finalReturnHTML .= '</optgroup>';
                              $finalReturnHTML .= '<optgroup label="--Indicators--">';

                              $finalReturnHTML .= "<option value='pivot_point' data-first_element='<div class=pivotpoint_equation_div><label class=pivotpoint_first_element_".$equation_counter."_".$class_counter.">Pivot point</label></div>'>Pivot point</option>";
                              $finalReturnHTML .= "<option value='pivot_point_r1' data-first_element='<div class=pivotpoint_r1_equation_div><label class=pivotpoint_r1_first_element_".$equation_counter."_".$class_counter.">Pivot point R1</label></div>'>Pivot point R1</option>";
                              $finalReturnHTML .= "<option value='pivot_point_r2' data-first_element='<div class=pivotpoint_r2_equation_div><label class=pivotpoint_r2_first_element_".$equation_counter."_".$class_counter.">Pivot point R2</label></div>'>Pivot point R2</option>";
                              $finalReturnHTML .= "<option value='pivot_point_s1' data-first_element='<div class=pivotpoint_s1_equation_div><label class=pivotpoint_s1_first_element_".$equation_counter."_".$class_counter.">Pivot point S1</label></div>'>Pivot point S1</option>";
                              $finalReturnHTML .= "<option value='pivot_point_s2' data-first_element='<div class=pivotpoint_s2_equation_div><label class=pivotpoint_s2_first_element_".$equation_counter."_".$class_counter.">Pivot point S2</label></div>'>Pivot point S2</option>";

                              $finalReturnHTML .= '</optgroup>';
                              $finalReturnHTML .= '<optgroup label="--">';

                              $finalReturnHTML .= "<option value='sma' data-first_element='<div class=sma_equation_div><label class=sma_first_element_".$equation_counter."_".$class_counter.">Sma</label>' data-second_element='<label class=sma_second_element_".$equation_counter."_".$class_counter.">(</label>' data-third_element='<label class=sma_third_element_".$equation_counter."_".$class_counter.">close,</label>'
                                   data-fourth_element='<label class=sma_fourth_element_".$equation_counter."_".$class_counter.">20</label>'
                                   data-fifth_element='<label class=sma_fifth_element_".$equation_counter."_".$class_counter.">)</label></div>'>Sma(Simple)</option>";

                              $finalReturnHTML .= "<option value='ema' data-first_element='<div class=ema_equation_div><label class=ema_first_element_".$equation_counter."_".$class_counter.">Ema</label>' data-second_element='<label class=ema_second_element_".$equation_counter."_".$class_counter.">(</label>' data-third_element='<label class=ema_third_element_".$equation_counter."_".$class_counter.">close,</label>'
                                   data-fourth_element='<label class=ema_fourth_element_".$equation_counter."_".$class_counter.">20</label>'
                                   data-fifth_element='<label class=ema_fifth_element_".$equation_counter."_".$class_counter.">)</label></div>'>Ema(Exponential)</option>";
                              $finalReturnHTML .= "<option value='wma' data-first_element='<div class=wma_equation_div><label class=wma_first_element_".$equation_counter."_".$class_counter.">Wma</label>' data-second_element='<label class=wma_second_element_".$equation_counter."_".$class_counter.">(</label>' data-third_element='<label class=wma_third_element_".$equation_counter."_".$class_counter.">close,</label>'
                                   data-fourth_element='<label class=wma_fourth_element_".$equation_counter."_".$class_counter.">20</label>'
                                   data-fifth_element='<label class=wma_fifth_element_".$equation_counter."_".$class_counter.">)</label></div>'>Wma(Weighted)</option>";
                              $finalReturnHTML .= "<option value='tma' data-first_element='<div class=tma_equation_div><label class=tma_first_element_".$equation_counter."_".$class_counter.">Tma</label>' data-second_element='<label class=tma_second_element_".$equation_counter."_".$class_counter.">(</label>' data-third_element='<label class=tma_third_element_".$equation_counter."_".$class_counter.">close,</label>'
                                   data-fourth_element='<label class=tma_fourth_element_".$equation_counter."_".$class_counter.">20</label>'
                                   data-fifth_element='<label class=tma_fifth_element_".$equation_counter."_".$class_counter.">)</label></div>'>Tma(Triangular)</option>";
                              $finalReturnHTML .= "<option value='stddva' data-first_element='<div class=stddva_equation_div><label class=stddva_first_element_".$equation_counter."_".$class_counter.">Std</label>' data-second_element='<label class=stddva_second_element_".$equation_counter."_".$class_counter.">(</label>' data-third_element='<label class=stddva_third_element_".$equation_counter."_".$class_counter.">close,</label>'
                                   data-fourth_element='<label class=stddva_fourth_element_".$equation_counter."_".$class_counter.">20</label>'
                                   data-fifth_element='<label class=stddva_fifth_element_".$equation_counter."_".$class_counter.">)</label></div>'>Std(Standard Deviation)</option>";

                              $finalReturnHTML .= '</optgroup>';
                              $finalReturnHTML .= '<optgroup label="--">';

                              $finalReturnHTML .= "<option value='parabolic_sar'
                                   data-first_element='<div class=parabolic_sar_equation_div><label class=parabolic_sar_first_element_".$equation_counter."_".$class_counter.">Parabolic Sar</label>' 
                                   data-second_element='<label class=parabolic_sar_second_element_".$equation_counter."_".$class_counter.">(</label>'
                                   data-third_element='<label class=parabolic_sar_third_element_".$equation_counter."_".$class_counter.">0.02,</label>'
                                   data-fourth_element='<label class=parabolic_sar_fourth_element_".$equation_counter."_".$class_counter.">0.02,</label>'
                                   data-fifth_element='<label class=parabolic_sar_fifth_element_".$equation_counter."_".$class_counter.">0.2</label>'
                                   data-six_element='<label class=parabolic_sar_six_element_".$equation_counter."_".$class_counter.">)</label></div>'>Parabolic Sar</option>";
                              $finalReturnHTML .= "<option value='upper_bb'
                                   data-first_element='<div class=upper_bb_equation_div><label class=upper_bb_first_element_".$equation_counter."_".$class_counter.">Upper Bollinger band</label>' 
                                   data-second_element='<label class=upper_bb_second_element_".$equation_counter."_".$class_counter.">(</label>'
                                   data-third_element='<label class=upper_bb_third_element_".$equation_counter."_".$class_counter.">20,</label>'
                                   data-fourth_element='<label class=upper_bb_fourth_element_".$equation_counter."_".$class_counter.">2</label>'
                                   data-fifth_element='<label class=upper_bb_fifth_element_".$equation_counter."_".$class_counter.">)</label></div>'>Upper Bollinger band</option>";
                              $finalReturnHTML .= "<option value='lower_bb'
                                   data-first_element='<div class=lower_bb_equation_div><label class=lower_bb_first_element_".$equation_counter."_".$class_counter.">Lower Bollinger band</label>' 
                                   data-second_element='<label class=lower_bb_second_element_".$equation_counter."_".$class_counter.">(</label>'
                                   data-third_element='<label class=lower_bb_third_element_".$equation_counter."_".$class_counter.">20,</label>'
                                   data-fourth_element='<label class=lower_bb_fourth_element_".$equation_counter."_".$class_counter.">2</label>'
                                   data-fifth_element='<label class=lower_bb_fifth_element_".$equation_counter."_".$class_counter.">)</label></div>'>Lower Bollinger band</option>";

                              $finalReturnHTML .= '</optgroup>';
                              $finalReturnHTML .= '<optgroup label="--">';

                              $finalReturnHTML .= "<option value='supertrend'
                                   data-first_element='<div class=supertrend_equation_div><label class=supertrend_first_element_".$equation_counter."_".$class_counter.">SuperTrend</label>' 
                                   data-second_element='<label class=supertrend_second_element_".$equation_counter."_".$class_counter.">(</label>'
                                   data-third_element='<label class=supertrend_third_element_".$equation_counter."_".$class_counter.">7,</label>'
                                   data-fourth_element='<label class=supertrend_fourth_element_".$equation_counter."_".$class_counter.">3</label>'
                                   data-fifth_element='<label class=supertrend_fifth_element_".$equation_counter."_".$class_counter.">)</label></div>'>SuperTrend</option>";
                              $finalReturnHTML .= '</optgroup>';
                              $finalReturnHTML .= '<optgroup label="--">';
                              $finalReturnHTML .= "<option value='ichimoku_base'
                                   data-first_element='<div class=ichimoku_base_equation_div><label class=ichimoku_base_first_element_".$equation_counter."_".$class_counter.">Ichimoku Base Line</label>' 
                                   data-second_element='<label class=ichimoku_base_second_element_".$equation_counter."_".$class_counter.">(</label>'
                                   data-third_element='<label class=ichimoku_base_third_element_".$equation_counter."_".$class_counter.">9,</label>'
                                   data-fourth_element='<label class=ichimoku_base_fourth_element_".$equation_counter."_".$class_counter.">26,</label>'
                                   data-fifth_element='<label class=ichimoku_base_fifth_element_".$equation_counter."_".$class_counter.">52</label>'
                                   data-six_element='<label class=ichimoku_base_six_element_".$equation_counter."_".$class_counter.">)</label></div>'>Ichimoku Base Line</option>";
                              $finalReturnHTML .= "<option value='ichimoku_conversion'
                                   data-first_element='<div class=ichimoku_conversion_equation_div><label class=ichimoku_conversion_first_element_".$equation_counter."_".$class_counter.">Ichimoku Conversion Line</label>' 
                                   data-second_element='<label class=ichimoku_conversion_second_element_".$equation_counter."_".$class_counter.">(</label>'
                                   data-third_element='<label class=ichimoku_conversion_third_element_".$equation_counter."_".$class_counter.">9,</label>'
                                   data-fourth_element='<label class=ichimoku_conversion_fourth_element_".$equation_counter."_".$class_counter.">26,</label>'
                                   data-fifth_element='<label class=ichimoku_conversion_fifth_element_".$equation_counter."_".$class_counter.">52</label>'
                                   data-six_element='<label class=ichimoku_conversion_six_element_".$equation_counter."_".$class_counter.">)</label></div>'>Ichimoku Conversion Line</option>";
                              $finalReturnHTML .= "<option value='ichimoku_span_a'
                                   data-first_element='<div class=ichimoku_span_a_equation_div><label class=ichimoku_span_a_first_element_".$equation_counter."_".$class_counter.">Ichimoku Span A</label>' 
                                   data-second_element='<label class=ichimoku_span_a_second_element_".$equation_counter."_".$class_counter.">(</label>'
                                   data-third_element='<label class=ichimoku_span_a_third_element_".$equation_counter."_".$class_counter.">9,</label>'
                                   data-fourth_element='<label class=ichimoku_span_a_fourth_element_".$equation_counter."_".$class_counter.">26,</label>'
                                   data-fifth_element='<label class=ichimoku_span_a_fifth_element_".$equation_counter."_".$class_counter.">52</label>'
                                   data-six_element='<label class=ichimoku_span_a_six_element_".$equation_counter."_".$class_counter.">)</label></div>'>Ichimoku Span A</option>";
                              $finalReturnHTML .= "<option value='ichimoku_span_b'
                                   data-first_element='<div class=ichimoku_span_b_equation_div><label class=ichimoku_span_b_first_element_".$equation_counter."_".$class_counter.">Ichimoku Span B</label>' 
                                   data-second_element='<label class=ichimoku_span_b_second_element_".$equation_counter."_".$class_counter.">(</label>'
                                   data-third_element='<label class=ichimoku_span_b_third_element_".$equation_counter."_".$class_counter.">9,</label>'
                                   data-fourth_element='<label class=ichimoku_span_b_fourth_element_".$equation_counter."_".$class_counter.">26,</label>'
                                   data-fifth_element='<label class=ichimoku_span_b_fifth_element_".$equation_counter."_".$class_counter.">52</label>'
                                   data-six_element='<label class=ichimoku_span_b_six_element_".$equation_counter."_".$class_counter.">)</label></div>'>Ichimoku Span B</option>";
                              $finalReturnHTML .= "<option value='ichimoku_cloud_top'
                                   data-first_element='<div class=ichimoku_cloud_top_equation_div><label class=ichimoku_cloud_top_first_element_".$equation_counter."_".$class_counter.">Ichimoku Cloud Top</label>' 
                                   data-second_element='<label class=ichimoku_cloud_top_second_element_".$equation_counter."_".$class_counter.">(</label>'
                                   data-third_element='<label class=ichimoku_cloud_top_third_element_".$equation_counter."_".$class_counter.">9,</label>'
                                   data-fourth_element='<label class=ichimoku_cloud_top_fourth_element_".$equation_counter."_".$class_counter.">26,</label>'
                                   data-fifth_element='<label class=ichimoku_cloud_top_fifth_element_".$equation_counter."_".$class_counter.">52</label>'
                                   data-six_element='<label class=ichimoku_cloud_top_six_element_".$equation_counter."_".$class_counter.">)</label></div>'>Ichimoku Cloud Top</option>";
                              $finalReturnHTML .= "<option value='ichimoku_cloud_bottom'
                                   data-first_element='<div class=ichimoku_cloud_bottom_equation_div><label class=ichimoku_cloud_bottom_first_element_".$equation_counter."_".$class_counter.">Ichimoku Cloud Bottom</label>' 
                                   data-second_element='<label class=ichimoku_cloud_bottom_second_element_".$equation_counter."_".$class_counter.">(</label>'
                                   data-third_element='<label class=ichimoku_cloud_bottom_third_element_".$equation_counter."_".$class_counter.">9,</label>'
                                   data-fourth_element='<label class=ichimoku_cloud_bottom_fourth_element_".$equation_counter."_".$class_counter.">26,</label>'
                                   data-fifth_element='<label class=ichimoku_cloud_bottom_fifth_element_".$equation_counter."_".$class_counter.">52</label>'
                                   data-six_element='<label class=ichimoku_cloud_bottom_six_element_".$equation_counter."_".$class_counter.">)</label></div>'>Ichimoku Cloud Bottom</option>";
                              $finalReturnHTML .= '</optgroup>';
                              $finalReturnHTML .= '<optgroup label="--">';
                              $finalReturnHTML .= "<option value='rsi'
                                   data-first_element='<div class=rsi_equation_div><label class=rsi_first_element_".$equation_counter."_".$class_counter.">Rsi</label>' 
                                   data-second_element='<label class=rsi_second_element_".$equation_counter."_".$class_counter.">(</label>'
                                   data-third_element='<label class=rsi_third_element_".$equation_counter."_".$class_counter.">14</label>'
                                   data-fourth_element='<label class=rsi_fourth_element_".$equation_counter."_".$class_counter.">)</label></div>'>Rsi</option>";
                              $finalReturnHTML .= "<option value='stochrsi'
                                   data-first_element='<div class=stochrsi_equation_div><label class=stochrsi_first_element_".$equation_counter."_".$class_counter.">StochRsi</label>' 
                                   data-second_element='<label class=stochrsi_second_element_".$equation_counter."_".$class_counter.">(</label>'
                                   data-third_element='<label class=stochrsi_third_element_".$equation_counter."_".$class_counter.">14</label>'
                                   data-fourth_element='<label class=stochrsi_fourth_element_".$equation_counter."_".$class_counter.">)</label></div>'>StochRsi</option>";
                              $finalReturnHTML .= "<option value='cci'
                                   data-first_element='<div class=cci_equation_div><label class=cci_first_element_".$equation_counter."_".$class_counter.">Cci</label>' 
                                   data-second_element='<label class=cci_second_element_".$equation_counter."_".$class_counter.">(</label>'
                                   data-third_element='<label class=cci_third_element_".$equation_counter."_".$class_counter.">20</label>'
                                   data-fourth_element='<label class=cci_fourth_element_".$equation_counter."_".$class_counter.">)</label></div>'>Cci</option>";
                              $finalReturnHTML .= "<option value='mfi'
                                   data-first_element='<div class=mfi_equation_div><label class=mfi_first_element_".$equation_counter."_".$class_counter.">Mfi</label>' 
                                   data-second_element='<label class=mfi_second_element_".$equation_counter."_".$class_counter.">(</label>'
                                   data-third_element='<label class=mfi_third_element_".$equation_counter."_".$class_counter.">14</label>'
                                   data-fourth_element='<label class=mfi_fourth_element_".$equation_counter."_".$class_counter.">)</label></div>'>Mfi</option>";
                              $finalReturnHTML .= "<option value='obv'
                                   data-first_element='<div class=obv_equation_div><label class=obv_first_element_".$equation_counter."_".$class_counter.">OBV</label></div>'>OBV(On Balance Volume)</option>";
                              $finalReturnHTML .= "<option value='williamsr'
                                   data-first_element='<div class=williamsr_equation_div><label class=williamsr_first_element_".$equation_counter."_".$class_counter.">Williams %R</label>' 
                                   data-second_element='<label class=williamsr_second_element_".$equation_counter."_".$class_counter.">(</label>'
                                   data-third_element='<label class=williamsr_third_element_".$equation_counter."_".$class_counter.">14</label>'
                                   data-fourth_element='<label class=williamsr_fourth_element_".$equation_counter."_".$class_counter.">)</label></div>'>Williams %R</option>";
                              $finalReturnHTML .= '</optgroup>';
                              $finalReturnHTML .= '<optgroup label="--">';
                              $finalReturnHTML .= "<option value='macd_line'
                                   data-first_element='<div class=macd_line_equation_div><label class=macd_line_first_element_".$equation_counter."_".$class_counter.">Macd Line</label>' 
                                   data-second_element='<label class=macd_line_second_element_".$equation_counter."_".$class_counter.">(</label>'
                                   data-third_element='<label class=macd_line_third_element_".$equation_counter."_".$class_counter.">26,</label>'
                                   data-fourth_element='<label class=macd_line_fourth_element_".$equation_counter."_".$class_counter.">12,</label>'
                                   data-fifth_element='<label class=macd_line_fifth_element_".$equation_counter."_".$class_counter.">9</label>'
                                   data-six_element='<label class=macd_line_six_element_".$equation_counter."_".$class_counter.">)</label></div>'>Macd Line</option>";
                              $finalReturnHTML .= "<option value='macd_signal'
                                   data-first_element='<div class=macd_signal_equation_div><label class=macd_signal_first_element_".$equation_counter."_".$class_counter.">Macd Signal</label>' 
                                   data-second_element='<label class=macd_signal_second_element_".$equation_counter."_".$class_counter.">(</label>'
                                   data-third_element='<label class=macd_signal_third_element_".$equation_counter."_".$class_counter.">26,</label>'
                                   data-fourth_element='<label class=macd_signal_fourth_element_".$equation_counter."_".$class_counter.">12,</label>'
                                   data-fifth_element='<label class=macd_signal_fifth_element_".$equation_counter."_".$class_counter.">9</label>'
                                   data-six_element='<label class=macd_signal_six_element_".$equation_counter."_".$class_counter.">)</label></div>'>Macd Signal</option>";
                              $finalReturnHTML .= "<option value='macd_histogram'
                                   data-first_element='<div class=macd_histogram_equation_div><label class=macd_histogram_first_element_".$equation_counter."_".$class_counter.">Macd Histogram</label>' 
                                   data-second_element='<label class=macd_histogram_second_element_".$equation_counter."_".$class_counter.">(</label>'
                                   data-third_element='<label class=macd_histogram_third_element_".$equation_counter."_".$class_counter.">26,</label>'
                                   data-fourth_element='<label class=macd_histogram_fourth_element_".$equation_counter."_".$class_counter.">12,</label>'
                                   data-fifth_element='<label class=macd_histogram_fifth_element_".$equation_counter."_".$class_counter.">9</label>'
                                   data-six_element='<label class=macd_histogram_six_element_".$equation_counter."_".$class_counter.">)</label></div>'>Macd Histogram</option>";
                              $finalReturnHTML .= '</optgroup>';
                              $finalReturnHTML .= '<optgroup label="--">';
                              $finalReturnHTML .= "<option value='adx'
                                   data-first_element='<div class=adx_equation_div><label class=adx_first_element_".$equation_counter."_".$class_counter.">ADX</label>' 
                                   data-second_element='<label class=adx_second_element_".$equation_counter."_".$class_counter.">(</label>'
                                   data-third_element='<label class=adx_third_element_".$equation_counter."_".$class_counter.">14</label>'
                                   data-fourth_element='<label class=adx_fourth_element_".$equation_counter."_".$class_counter.">)</label></div>'>ADX</option>";
                              $finalReturnHTML .= "<option value='adx_di_positive'
                                   data-first_element='<div class=adx_di_positive_equation_div><label class=adx_di_positive_first_element_".$equation_counter."_".$class_counter.">ADX DI Positive</label>' 
                                   data-second_element='<label class=adx_di_positive_second_element_".$equation_counter."_".$class_counter.">(</label>'
                                   data-third_element='<label class=adx_di_positive_third_element_".$equation_counter."_".$class_counter.">14</label>'
                                   data-fourth_element='<label class=adx_di_positive_fourth_element_".$equation_counter."_".$class_counter.">)</label></div>'>ADX DI Positive</option>";
                              $finalReturnHTML .= "<option value='adx_di_negative'
                                   data-first_element='<div class=adx_di_negative_equation_div><label class=adx_di_negative_first_element_".$equation_counter."_".$class_counter.">ADX DI Negative</label>' 
                                   data-second_element='<label class=adx_di_negative_second_element_".$equation_counter."_".$class_counter.">(</label>'
                                   data-third_element='<label class=adx_di_negative_third_element_".$equation_counter."_".$class_counter.">14</label>'
                                   data-fourth_element='<label class=adx_di_negative_fourth_element_".$equation_counter."_".$class_counter.">)</label></div>'>ADX DI Negative</option>";
                              $finalReturnHTML .= '</optgroup>';
                              $finalReturnHTML .= '<optgroup label="--">';
                              $finalReturnHTML .= "<option value='true_range'
                                   data-first_element='<div class=true_range_equation_div><label class=true_range_first_element_".$equation_counter."_".$class_counter.">True Range</label>' 
                                   data-second_element='<label class=true_range_second_element_".$equation_counter."_".$class_counter.">(</label>'
                                   data-third_element='<label class=true_range_third_element_".$equation_counter."_".$class_counter.">14</label>'
                                   data-fourth_element='<label class=true_range_fourth_element_".$equation_counter."_".$class_counter.">)</label></div>'>True Range</option>";
                              $finalReturnHTML .= "<option value='avg_true_range'
                                   data-first_element='<div class=avg_true_range_equation_div><label class=avg_true_range_first_element_".$equation_counter."_".$class_counter.">Avg True Range</label>' 
                                   data-second_element='<label class=avg_true_range_second_element_".$equation_counter."_".$class_counter.">(</label>'
                                   data-third_element='<label class=avg_true_range_third_element_".$equation_counter."_".$class_counter.">14</label>'
                                   data-fourth_element='<label class=avg_true_range_fourth_element_".$equation_counter."_".$class_counter.">)</label></div>'>Avg True Range(ATR)</option>";
                              $finalReturnHTML .= '</optgroup>';
                              $finalReturnHTML .= '<optgroup label="--">';
                              $finalReturnHTML .= "<option value='aroon_up'
                                   data-first_element='<div class=aroon_up_equation_div><label class=aroon_up_first_element_".$equation_counter."_".$class_counter.">Aroon Up</label>' 
                                   data-second_element='<label class=aroon_up_second_element_".$equation_counter."_".$class_counter.">(</label>'
                                   data-third_element='<label class=aroon_up_third_element_".$equation_counter."_".$class_counter.">25</label>'
                                   data-fourth_element='<label class=aroon_up_fourth_element_".$equation_counter."_".$class_counter.">)</label></div>'>Aroon Up</option>";
                              $finalReturnHTML .= "<option value='aroon_down'
                                   data-first_element='<div class=aroon_down_equation_div><label class=aroon_down_first_element_".$equation_counter."_".$class_counter.">Aroon Down</label>' 
                                   data-second_element='<label class=aroon_down_second_element_".$equation_counter."_".$class_counter.">(</label>'
                                   data-third_element='<label class=aroon_down_third_element_".$equation_counter."_".$class_counter.">25</label>'
                                   data-fourth_element='<label class=aroon_down_fourth_element_".$equation_counter."_".$class_counter.">)</label></div>'>Aroon Down</option>";
                              $finalReturnHTML .= "<option value='aroon_osc'
                                   data-first_element='<div class=aroon_osc_equation_div><label class=aroon_osc_first_element_".$equation_counter."_".$class_counter.">Aroon Osc</label>' 
                                   data-second_element='<label class=aroon_osc_second_element_".$equation_counter."_".$class_counter.">(</label>'
                                   data-third_element='<label class=aroon_osc_third_element_".$equation_counter."_".$class_counter.">25</label>'
                                   data-fourth_element='<label class=aroon_osc_fourth_element_".$equation_counter."_".$class_counter.">)</label></div>'>Aroon Osc</option>";
                              $finalReturnHTML .= '</optgroup>';
                              $finalReturnHTML .= '<optgroup label="--">';
                              $finalReturnHTML .= "<option value='slow_stochastic_%k'
                                   data-first_element='<div class=slow_stochastic_k_equation_div><label class=slow_stochastic_k_first_element_".$equation_counter."_".$class_counter.">Slow Stochastic %K</label>' 
                                   data-second_element='<label class=slow_stochastic_k_second_element_".$equation_counter."_".$class_counter.">(</label>'
                                   data-third_element='<label class=slow_stochastic_k_third_element_".$equation_counter."_".$class_counter.">14,</label>'
                                   data-fourth_element='<label class=slow_stochastic_k_fourth_element_".$equation_counter."_".$class_counter.">3</label>'
                                   data-fifth_element='<label class=slow_stochastic_k_fifth_element_".$equation_counter."_".$class_counter.">)</label></div>'>Slow Stochastic %K</option>";
                              $finalReturnHTML .= "<option value='slow_stochastic_%d'
                                   data-first_element='<div class=slow_stochastic_d_equation_div><label class=slow_stochastic_d_first_element_".$equation_counter."_".$class_counter.">Slow Stochastic %D</label>' 
                                   data-second_element='<label class=slow_stochastic_d_second_element_".$equation_counter."_".$class_counter.">(</label>'
                                   data-third_element='<label class=slow_stochastic_d_third_element_".$equation_counter."_".$class_counter.">14,</label>'
                                   data-fourth_element='<label class=slow_stochastic_d_fourth_element_".$equation_counter."_".$class_counter.">3</label>'
                                   data-fifth_element='<label class=slow_stochastic_d_fifth_element_".$equation_counter."_".$class_counter.">)</label></div>'>Slow Stochastic %D</option>";
                              $finalReturnHTML .= "<option value='fast_stochastic_%k'
                                   data-first_element='<div class=fast_stochastic_k_equation_div><label class=fast_stochastic_k_first_element_".$equation_counter."_".$class_counter.">Fast Stochastic %K</label>' 
                                   data-second_element='<label class=fast_stochastic_k_second_element_".$equation_counter."_".$class_counter.">(</label>'
                                   data-third_element='<label class=fast_stochastic_k_third_element_".$equation_counter."_".$class_counter.">14,</label>'
                                   data-fourth_element='<label class=fast_stochastic_k_fourth_element_".$equation_counter."_".$class_counter.">3</label>'
                                   data-fifth_element='<label class=fast_stochastic_k_fifth_element_".$equation_counter."_".$class_counter.">)</label></div>'>Fast Stochastic %K</option>";
                              $finalReturnHTML .= "<option value='fast_stochastic_%d'
                                   data-first_element='<div class=fast_stochastic_d_equation_div><label class=fast_stochastic_d_first_element_".$equation_counter."_".$class_counter.">Fast Stochastic %D</label>' 
                                   data-second_element='<label class=fast_stochastic_d_second_element_".$equation_counter."_".$class_counter.">(</label>'
                                   data-third_element='<label class=fast_stochastic_d_third_element_".$equation_counter."_".$class_counter.">14,</label>'
                                   data-fourth_element='<label class=fast_stochastic_d_fourth_element_".$equation_counter."_".$class_counter.">3</label>'
                                   data-fifth_element='<label class=fast_stochastic_d_fifth_element_".$equation_counter."_".$class_counter.">)</label></div>'>Fast Stochastic %D</option>";
                              $finalReturnHTML .= "<option value='smi_%k'
                                   data-first_element='<div class=smi_k_equation_div><label class=smi_k_first_element_".$equation_counter."_".$class_counter.">Smi %K</label>' 
                                   data-second_element='<label class=smi_k_second_element_".$equation_counter."_".$class_counter.">(</label>'
                                   data-third_element='<label class=smi_k_third_element_".$equation_counter."_".$class_counter.">10,</label>'
                                   data-fourth_element='<label class=smi_k_fourth_element_".$equation_counter."_".$class_counter.">3,</label>'
                                   data-fifth_element='<label class=smi_k_fifth_element_".$equation_counter."_".$class_counter.">3</label>'
                                   data-six_element='<label class=smi_k_six_element_".$equation_counter."_".$class_counter.">)</label></div>'>Smi %K (Stochastic Momentum Index)</option>";
                              $finalReturnHTML .= "<option value='smi_%d'
                                   data-first_element='<div class=smi_d_equation_div><label class=smi_d_first_element_".$equation_counter."_".$class_counter.">Smi %D</label>' 
                                   data-second_element='<label class=smi_d_second_element_".$equation_counter."_".$class_counter.">(</label>'
                                   data-third_element='<label class=smi_d_third_element_".$equation_counter."_".$class_counter.">10,</label>'
                                   data-fourth_element='<label class=smi_d_fourth_element_".$equation_counter."_".$class_counter.">3,</label>'
                                   data-fifth_element='<label class=smi_d_fifth_element_".$equation_counter."_".$class_counter.">3</label>'
                                   data-six_element='<label class=smi_d_six_element_".$equation_counter."_".$class_counter.">)</label></div>'>Smi %D (Stochastic Momentum Index)</option>";
                              $finalReturnHTML .= '</optgroup>';
                              $finalReturnHTML .= '<optgroup label="--">';
                              $finalReturnHTML .= "<option value='wavetrend' 
                                   data-first_element='<div class=wavetrend_equation_div><label class=wavetrend_first_element_".$equation_counter."_".$class_counter.">WaveTrend</label>' 
                                   data-second_element='<label class=wavetrend_second_element_".$equation_counter."_".$class_counter.">(</label>'
                                   data-third_element='<label class=wavetrend_third_element_".$equation_counter."_".$class_counter.">10,</label>'
                                   data-fourth_element='<label class=wavetrend_fourth_element_".$equation_counter."_".$class_counter.">21,</label>'
                                   data-fifth_element='<label class=wavetrend_fifth_element_".$equation_counter."_".$class_counter.">4</label>'
                                   data-six_element='<label class=wavetrend_six_element_".$equation_counter."_".$class_counter.">)</label></div>'>WaveTrend</option>";
                              $finalReturnHTML .= "<option value='wavetrend_trigger'
                                   data-first_element='<div class=wavetrend_trigger_equation_div><label class=wavetrend_trigger_first_element_".$equation_counter."_".$class_counter.">WaveTrend Trigger</label>' 
                                   data-second_element='<label class=wavetrend_trigger_second_element_".$equation_counter."_".$class_counter.">(</label>'
                                   data-third_element='<label class=wavetrend_trigger_third_element_".$equation_counter."_".$class_counter.">10,</label>'
                                   data-fourth_element='<label class=wavetrend_trigger_fourth_element_".$equation_counter."_".$class_counter.">21,</label>'
                                   data-fifth_element='<label class=wavetrend_trigger_fifth_element_".$equation_counter."_".$class_counter.">4</label>'
                                   data-six_element='<label class=wavetrend_trigger_six_element_".$equation_counter."_".$class_counter.">)</label></div>'>WaveTrend Trigger</option>";
                              $finalReturnHTML .= "<option value='wavetrend_momentum'
                                   data-first_element='<div class=wavetrend_momentum_equation_div><label class=wavetrend_momentum_first_element_".$equation_counter."_".$class_counter.">WaveTrend Momentum</label>' 
                                   data-second_element='<label class=wavetrend_momentum_second_element_".$equation_counter."_".$class_counter.">(</label>'
                                   data-third_element='<label class=wavetrend_momentum_third_element_".$equation_counter."_".$class_counter.">10,</label>'
                                   data-fourth_element='<label class=wavetrend_momentum_fourth_element_".$equation_counter."_".$class_counter.">21,</label>'
                                   data-fifth_element='<label class=wavetrend_momentum_fifth_element_".$equation_counter."_".$class_counter.">4</label>'
                                   data-six_element='<label class=wavetrend_momentum_six_element_".$equation_counter."_".$class_counter.">)</label></div>'>WaveTrend Momentum</option>";
                              $finalReturnHTML .= '</optgroup>';
                              $finalReturnHTML .= '<optgroup label="--Fundamentals--">';
                              $finalReturnHTML .= "<option value='face_value'
                                   data-first_element='<div class=face_value_equation_div><label class=face_value_first_element_".$equation_counter."_".$class_counter.">Face Value</label></div>'>Face Value</option>";
                              $finalReturnHTML .= "<option value='reserves'
                                   data-first_element='<div class=reserves_equation_div><label class=reserves_first_element_".$equation_counter."_".$class_counter.">Reserves</label></div>'>Reserves</option>";
                              $finalReturnHTML .= "<option value='dividend'
                                   data-first_element='<div class=dividend_equation_div><label class=dividend_first_element_".$equation_counter."_".$class_counter.">Dividend</label></div>'>Dividend</option>";
                              $finalReturnHTML .= "<option value='book_value'
                                   data-first_element='<div class=book_value_equation_div><label class=book_value_first_element_".$equation_counter."_".$class_counter.">Book Value</label></div>'>Book Value</option>";
                              $finalReturnHTML .= "<option value='yearly_pe_ratio'
                                   data-first_element='<div class=yearly_pe_ratio_equation_div><label class=yearly_pe_ratio_first_element_".$equation_counter."_".$class_counter.">Yearly PE Ratio</label></div>'>Yearly PE Ratio</option>";
                              $finalReturnHTML .= "<option value='yearly_pc_ratio'
                                   data-first_element='<div class=yearly_pc_ratio_equation_div><label class=yearly_pc_ratio_first_element_".$equation_counter."_".$class_counter.">Yearly PC Ratio</label></div>'>Yearly PC Ratio</option>";
                              $finalReturnHTML .= "<option value='sales_turnover'
                                   data-first_element='<div class=sales_turnover_equation_div><label class=sales_turnover_first_element_".$equation_counter."_".$class_counter.">Sales Turnover[yearly]</label></div>'>Sales Turnover[yearly]</option>";
                              $finalReturnHTML .= "<option value='net_profit'
                                   data-first_element='<div class=net_profit_equation_div><label class=net_profit_first_element_".$equation_counter."_".$class_counter.">Net Profit[yearly]</label></div>'>Net Profit[yearly]</option>";
                              $finalReturnHTML .= "<option value='var'
                                   data-first_element='<div class=var_equation_div><label class=var_first_element_".$equation_counter."_".$class_counter.">Net Profit Variance[yr]</label></div>'>Net Profit Variance[yr]</option>";
                              $finalReturnHTML .= "<option value='net_profithy'
                                   data-first_element='<div class=net_profithy_equation_div><label class=net_profithy_first_element_".$equation_counter."_".$class_counter.">Net Profit[quarter]</label></div>'>Net Profit[quarter]</option>";
                              $finalReturnHTML .= "<option value='net_profitvhy'
                                   data-first_element='<div class=net_profitvhy_equation_div><label class=net_profitvhy_first_element_".$equation_counter."_".$class_counter.">Net Profit Variance[qr]</label></div>'>Net Profit Variance[qr]</option>";
                              $finalReturnHTML .= "<option value='earning_per_share'
                                   data-first_element='<div class=earning_per_share_equation_div><label class=earning_per_share_first_element_".$equation_counter."_".$class_counter.">Earning Per Share[EPS]</label></div>'>Earning Per Share[EPS]</option>";
                              $finalReturnHTML .= "<option value='p_earning_per_share'
                                   data-first_element='<div class=p_earning_per_share_equation_div><label class=p_earning_per_share_first_element_".$equation_counter."_".$class_counter.">Prev Year EPS</label></div>'>Prev Year EPS</option>";
                              $finalReturnHTML .= "<option value='full_year_cps'
                                   data-first_element='<div class=full_year_cps_equation_div><label class=full_year_cps_first_element_".$equation_counter."_".$class_counter.">Cash Per Share[yr]</label></div>'>Cash Per Share[yr]</option>";
                              $finalReturnHTML .= "<option value='quarter_cps'
                                   data-first_element='<div class=quarter_cps_equation_div><label class=quarter_cps_first_element_".$equation_counter."_".$class_counter.">Cash Per Share[qr]</label></div>'>Cash Per Share[qr]</option>";
                              $finalReturnHTML .= "<option value='month_cps'
                                   data-first_element='<div class=month_cps_equation_div><label class=month_cps_first_element_".$equation_counter."_".$class_counter.">Cash per share[mt]</label></div>'>Cash per share[mt]</option>";
                              $finalReturnHTML .= "<option value='latest_quarter_sales'
                                   data-first_element='<div class=latest_quarter_sales_equation_div><label class=latest_quarter_sales_first_element_".$equation_counter."_".$class_counter.">Net Sales[quarter]</label></div>'>Net Sales[quarter]</option>";
                              $finalReturnHTML .= "<option value='pvbv'
                                   data-first_element='<div class=pvbv_equation_div><label class=pvbv_first_element_".$equation_counter."_".$class_counter.">Price to Book Value</label></div>'>Price to Book Value</option>";
                              $finalReturnHTML .= "<option value='Networth'
                                   data-first_element='<div class=Networth_equation_div><label class=Networth_first_element_".$equation_counter."_".$class_counter.">Networth</label></div>'>Networth</option>";
                              $finalReturnHTML .= "<option value='bval'
                                   data-first_element='<div class=bval_equation_div><label class=bval_first_element_".$equation_counter."_".$class_counter.">BSE Value in lakhs</label></div>'>BSE Value in lakhs</option>";
                              $finalReturnHTML .= "<option value='nval'
                                   data-first_element='<div class=nval_equation_div><label class=nval_first_element_".$equation_counter."_".$class_counter.">NSE Value in lakhs</label></div>'>NSE Value in lakhs</option>";
                              $finalReturnHTML .= "<option value='market_cap'
                                   data-first_element='<div class=market_cap_equation_div><label class=market_cap_first_element_".$equation_counter."_".$class_counter.">Market Cap</label></div>'>Market Cap</option>";
                              $finalReturnHTML .= "<option value='latopm'
                                   data-first_element='<div class=latopm_equation_div><label class=latopm_first_element_".$equation_counter."_".$class_counter.">Operating profit margin[yr]</label></div>'>Operating profit margin[yr]</option>";
                              $finalReturnHTML .= "<option value='lathyopm'
                                   data-first_element='<div class=lathyopm_equation_div><label class=lathyopm_first_element_".$equation_counter."_".$class_counter.">Operating profit margin[qr]</label></div>'>Operating profit margin[qr]</option>";
                              $finalReturnHTML .= "<option value='latgpm'
                                   data-first_element='<div class=latgpm_equation_div><label class=latgpm_first_element_".$equation_counter."_".$class_counter.">Gross profit margin</label></div>'>Gross profit margin</option>";
                              $finalReturnHTML .= "<option value='gross_block'
                                   data-first_element='<div class=gross_block_equation_div><label class=gross_block_first_element_".$equation_counter."_".$class_counter.">Gross Block</label></div>'>Gross Block</option>";
                              $finalReturnHTML .= "<option value='totoloan'
                                   data-first_element='<div class=totoloan_equation_div><label class=totoloan_first_element_".$equation_counter."_".$class_counter.">Total Loans</label></div>'>Total Loans</option>";
                              $finalReturnHTML .= "<option value='advance_given_by_bank'
                                   data-first_element='<div class=advance_given_by_bank_equation_div><label class=advance_given_by_bank_first_element_".$equation_counter."_".$class_counter.">Advance Given By Bank</label></div>'>Advance Given By Bank</option>";
                              $finalReturnHTML .= "<option value='net_profit_asset'
                                   data-first_element='<div class=net_profit_asset_equation_div><label class=net_profit_asset_first_element_".$equation_counter."_".$class_counter.">Net non performing assets</label></div>'>Net non performing assets</option>";
                              $finalReturnHTML .= "<option value='trailing_twelve_months_sales'
                                   data-first_element='<div class=trailing_twelve_months_sales_equation_div><label class=trailing_twelve_months_sales_first_element_".$equation_counter."_".$class_counter.">TTM Sales</label></div>'>TTM Sales</option>";
                              $finalReturnHTML .= "<option value='trailing_twelve_month_op'
                                   data-first_element='<div class=trailing_twelve_month_op_equation_div><label class=trailing_twelve_month_op_first_element_".$equation_counter."_".$class_counter.">TTM Operating Profit</label></div>'>TTM Operating Profit</option>";
                              $finalReturnHTML .= "<option value='trailing_twelve_months_opm'
                                   data-first_element='<div class=trailing_twelve_months_opm_equation_div><label class=trailing_twelve_months_opm_first_element_".$equation_counter."_".$class_counter.">TTM Operating Profit margin</label></div>'>TTM Operating Profit margin</option>";
                              $finalReturnHTML .= "<option value='trailing_twelve_month_gp'
                                   data-first_element='<div class=trailing_twelve_month_gp_equation_div><label class=trailing_twelve_month_gp_first_element_".$equation_counter."_".$class_counter.">TTM Gross profit</label></div>'>TTM Gross profit</option>";
                              $finalReturnHTML .= "<option value='trailing_twelve_month_gpm'
                                   data-first_element='<div class=trailing_twelve_month_gpm_equation_div><label class=trailing_twelve_month_gpm_first_element_".$equation_counter."_".$class_counter.">TTM Gross profit margin</label></div>'>TTM Gross profit margin</option>";
                              $finalReturnHTML .= "<option value='trailing_twelve_months_np'
                                   data-first_element='<div class=trailing_twelve_months_np_equation_div><label class=trailing_twelve_months_np_first_element_".$equation_counter."_".$class_counter.">TTM Net profit</label></div>'>TTM Net profit</option>";
                              $finalReturnHTML .= "<option value='trailing_twelve_months_npv'
                                   data-first_element='<div class=trailing_twelve_months_npv_equation_div><label class=trailing_twelve_months_npv_first_element_".$equation_counter."_".$class_counter.">TTM Net profit Variance</label></div>'>TTM Net profit Variance</option>";
                              $finalReturnHTML .= "<option value='trailing_twelve_month_eps'
                                   data-first_element='<div class=trailing_twelve_month_eps_equation_div><label class=trailing_twelve_month_eps_first_element_".$equation_counter."_".$class_counter.">TTM EPS</label></div>'>TTM EPS</option>";
                              $finalReturnHTML .= "<option value='trailing_twelve_month_pe'
                                   data-first_element='<div class=trailing_twelve_month_pe_equation_div><label class=trailing_twelve_month_pe_first_element_".$equation_counter."_".$class_counter.">TTM PE</label></div>'>TTM PE</option>";
                              $finalReturnHTML .= "<option value='trailing_twelve_month_cps'
                                   data-first_element='<div class=trailing_twelve_month_cps_equation_div><label class=trailing_twelve_month_cps_first_element_".$equation_counter."_".$class_counter.">TTM CPS</label></div>'>TTM CPS</option>";
                              $finalReturnHTML .= "<option value='latest_ttmdepreciation'
                                   data-first_element='<div class=latest_ttmdepreciation_equation_div><label class=latest_ttmdepreciation_first_element_".$equation_counter."_".$class_counter.">TTM Depreciation</label></div>'>TTM Depreciation</option>";
                              $finalReturnHTML .= '</optgroup>';
                              $finalReturnHTML .= '</select>';



                         }
                         else if($tempEquation2[0] == "d1"){
                         //This is Timing Filter Condition
                              $finalReturnHTML .= "<label class='timing_filter_dropdown timing_filter_label timing_filter_label_".$equation_counter."_".$class_counter."' onclick='timing_filter_label_click(".$equation_counter.",".$class_counter.")'>".ucfirst(str_replace('_',' ',$tempEquation2[1]))."</label>";


                              $finalReturnHTML .= "<select class='timing_filter_dropdown_".$equation_counter."_".$class_counter."' style='display:none;' onchange='timing_filter_dropdown_click(".$equation_counter.",".$class_counter.")'>";
                              $finalReturnHTML .= "<optgroup label='--Minute--'>";

                              $finalReturnHTML .= "<option value='1_minute'
                              	data-first_element='<div class=1_minute_equation_div><label class=1_minute_first_element_".$equation_counter."_".$class_counter.">1 Minute</label></div>'>1 Minute</option>";

                              $finalReturnHTML .= "<option value='2_minute'
                              	data-first_element='<div class=2_minute_equation_div><label class=2_minute_first_element_".$equation_counter."_".$class_counter.">2 Minute</label></div>'>2 Minute</option>";

                              $finalReturnHTML .= "<option value='3_minute'
                              	data-first_element='<div class=3_minute_equation_div><label class=3_minute_first_element_".$equation_counter."_".$class_counter.">3 Minute</label></div>'>3 Minute</option>";

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

                              $finalReturnHTML .= "<option value='Latest'
                                   data-first_element='<div class=Latest_equation_div><label class=Latest_first_element_".$equation_counter."_".$class_counter.">Latest</label></div>'>Latest(daily)</option>";

                              $finalReturnHTML .= "<option value='1_dayago'
                                   data-first_element='<div class=1_dayago_equation_div><label class=1_dayago_first_element_".$equation_counter."_".$class_counter.">1 day ago</label></div>'>1 day ago</option>";

                              $finalReturnHTML .= "<option value='2_dayago'
                                   data-first_element='<div class=2_dayago_equation_div><label class=2_dayago_first_element_".$equation_counter."_".$class_counter.">2 day ago</label></div>'>2 days ago</option>";

                              $finalReturnHTML .= "<option value='3_dayago'
                                   data-first_element='<div class=3_dayago_equation_div><label class=3_dayago_first_element_".$equation_counter."_".$class_counter.">3 day ago</label></div>'>3 days ago</option>";

                              $finalReturnHTML .= "<option value='n_dayago'>n days ago</option>";


                              $finalReturnHTML .= "</optgroup>";
                              $finalReturnHTML .= "<optgroup label='--Weeks--'>";


                              $finalReturnHTML .= "<option value='Weekly'
                                   data-first_element='<div class=Weekly_equation_div><label class=Weekly_first_element_".$equation_counter."_".$class_counter.">Weekly</label></div>'>Weekly</option>";

                              $finalReturnHTML .= "<option value='1_weekago'
                                   data-first_element='<div class=1_weekago_equation_div><label class=1_weekago_first_element_".$equation_counter."_".$class_counter.">1 week ago</label></div>'>1 week ago</option>";

                              $finalReturnHTML .= "<option value='2_weekago'
                                   data-first_element='<div class=2_weekago_equation_div><label class=2_weekago_first_element_".$equation_counter."_".$class_counter.">2 week ago</label></div>'>2 weeks ago</option>";

                              $finalReturnHTML .= "<option value='3_weekago'
                                   data-first_element='<div class=3_weekago_equation_div><label class=3_weekago_first_element_".$equation_counter."_".$class_counter.">3 week ago</label></div>'>3 weeks ago</option>";

                              $finalReturnHTML .= "<option value='n_weekago'>n weeks ago</option>";

                              $finalReturnHTML .= "</optgroup>";
                              $finalReturnHTML .= "<optgroup label='--Months--'>";

                              $finalReturnHTML .= "<option value='Monthly'
                                   data-first_element='<div class=Monthly_equation_div><label class=Monthly_first_element_".$equation_counter."_".$class_counter.">Monthly</label></div>'>Monthly</option>";

                              $finalReturnHTML .= "<option value='1_monthago'
                                   data-first_element='<div class=1_monthago_equation_div><label class=1_monthago_first_element_".$equation_counter."_".$class_counter.">1 month ago</label></div>'>1 month ago</option>";

                              $finalReturnHTML .= "<option value='2_monthago'
                                   data-first_element='<div class=2_monthago_equation_div><label class=2_monthago_first_element_".$equation_counter."_".$class_counter.">2 month ago</label></div>'>2 months ago</option>";

                              $finalReturnHTML .= "<option value='3_monthago'
                                   data-first_element='<div class=3_monthago_equation_div><label class=3_monthago_first_element_".$equation_counter."_".$class_counter.">3 month ago</label></div>'>3 months ago</option>";

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
                                   $finalReturnHTML .= "<label class='custom_txt_label_".$equation_counter."_".$class_counter."' onclick='custom_txt_label_click(".$equation_counter.",".$class_counter.")'>".implode(',',$txt_box_values)."</label>";
                                   $finalReturnHTML .= "<input type='text' name='custom_txt_input' class='custom_txt_input_".$equation_counter."_".$class_counter."' style='display:none;' value=".implode(',',$txt_box_values)." onblur='custom_txt_input_blur(".$equation_counter.",".$class_counter.")'>";
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
