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
                    $finalReturnHTML .= "<option value='0'>0(Latest Candle)</option>";
                    $finalReturnHTML .= "<option value='-1'>-1(Previous Candle)</option>";
                    $finalReturnHTML .= "<option value='-2'>-2</option>";
                    $finalReturnHTML .= "<option value='-3'>-3</option>";
                    $finalReturnHTML .= "<option value='-4'>-4</option>";
                    $finalReturnHTML .= "<option value='-5'>-5</option>";
                    $finalReturnHTML .= "<option value='-6'>-6</option>";
                    $finalReturnHTML .= "<option value='-7'>-7</option>";
                    $finalReturnHTML .= "<option value='-8'>-8</option>";
                    $finalReturnHTML .= "<option value='-n'>n candles ago</option>";
                    $finalReturnHTML .= "<optgroup label='--Day Candle--'>";
                    $finalReturnHTML .= "<option value='=1'>=1(first candle)</option>";
                    $finalReturnHTML .= "<option value='=2'>=2(second candle)</option>";
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
                }
                else if($tempEquation2[0] == "d1"){
                    //This is Timing Filter Condition
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
