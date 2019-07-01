<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;

class contactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.contact.view');
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


    public function sendmail(Request $request)
    {
        if(isset($request['_token']) && !empty($request['_token']))
        {

            $msg_data ='
            <table border="2">
                <tr>
                    <td>Name :</td>
                    <td>'.$request['email_name'].'</td>
                </tr>
                <tr>
                    <td>Email :</td>
                    <td>'.$request['email_id'].'</td>
                </tr>
                <tr>
                    <td>Subject :</td>
                    <td>'.$request['email_subject'].'</td>
                </tr>
                <tr>
                    <td>Message :</td>
                    <td>'.$request['email_message'].'</td>
                </tr>
            </table>';


            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
            $headers .= 'From: noreply@smartnifty.com';

            @mail("ranparagaurav98@gmail.com", "Enquiry Mail", $msg_data, $headers);

            /*$data['name'] = "This is Testing Mail";

            Mail::send(['text'=>'mail'],$data,function($message){
                $message->to('ranparagaurav98@gmail.com','Gaurav Ranpara')->subject('Testing Mail')->setBody("<h1>Final Testing</h1>",'text/html');
            });

            if(!Mail::failures()){
                return view('front.thank_you');
            }else{
                return "<h1>Please Try Again</h1>";
            }*/    
        }
        else{
            return view('front.contact.view');
        }
        
    }
}
