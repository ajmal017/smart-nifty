<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Ixudra\Curl\Facades\Curl;

class chartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($screener_name,$stock_name)
    {
        $screener_name = $screener_name;
        $stockName = $stock_name;


        $screenerConditions = array();
        $screenerConditions["15 Minute Stock Breakouts"] = "last_15_min";


        $api_data = Curl::to('http://www.smartnifty.com/convertcsv.json')->asJson()->get();



        /**
            This Code is For 15 Minute Stock Breakout Screener
            --------------------------------------------------
        **/

        $latestDate = $api_data[0]->Date;
        $tmpDates = explode('/',$latestDate);
        $tmpYear = substr($tmpDates[2],0,2);
        $finalYear = 2000 + ((int)$tmpYear);


        $tmpTime = substr($tmpDates[2],2);
        $firstTime = $tmpTime.":00";
        $lastTime = date('H:i:s',strtotime("-15 minutes",strtotime($firstTime)));


        /**
            ---------------------------------------------------
        **/


        $finalApiData = array();
        foreach($api_data as $value){
            $tmpApiData = array();  


            $tmpDates = explode('/',$value->Date);
            $tmpYear = substr($tmpDates[2],0,2);
            $finalYear = 2000 + ((int)$tmpYear);


            $tmpTime = substr($tmpDates[2],2);
            $finalTime = $tmpTime.":00";


            if($screener_name == "15 Minute Stock Breakouts"){

                //This Condition Checks that Current Time is Exist or not in 15 Minute Time Range
                if((strtotime($finalTime) >= strtotime($lastTime)) && (strtotime($finalTime) <= strtotime($firstTime))){
                    $finalDate = $finalYear."/".$tmpDates[1]."/".$tmpDates[0]." ".$finalTime;
            
                    $tmpApiData['time'] = strtotime($finalDate);
                    $tmpApiData['open'] = $value->WIPRO_EQO;
                    $tmpApiData['high'] = $value->WIPRO_EQH;
                    $tmpApiData['low'] = $value->WIPRO_EQL;
                    $tmpApiData['close'] = $value->WIPRO_EQC;

                    array_push($finalApiData,$tmpApiData);
                }
            }else{
                $finalDate = $finalYear."/".$tmpDates[1]."/".$tmpDates[0]." ".$finalTime;
            
                $tmpApiData['time'] = strtotime($finalDate);
                $tmpApiData['open'] = $value->WIPRO_EQO;
                $tmpApiData['high'] = $value->WIPRO_EQH;
                $tmpApiData['low'] = $value->WIPRO_EQL;
                $tmpApiData['close'] = $value->WIPRO_EQC;

                array_push($finalApiData,$tmpApiData);
            }

        }
        $apiData = json_encode($finalApiData);

        return view('front\charts\view',compact('apiData','stockName'));
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


    public function getlivedata()
    {
        $api_data = Curl::to('http://www.smartnifty.com/convertcsv.json')->asJson()->get();
        //$api_data = Curl::to('http://dummy.restapiexample.com/api/v1/employees')->asJson()->get();
        return $api_data;
    }
}
