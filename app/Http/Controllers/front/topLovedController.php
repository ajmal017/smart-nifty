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
                if($tempEquation2[0] == "a1"){
                    //This is Arithmetic Filter Condition
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
