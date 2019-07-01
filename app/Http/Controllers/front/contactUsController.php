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

            $name = $request['email_name'];
            $email = $request['email_id'];
            $subject = $request['email_subject'];
            $msg = $request['email_message'];


            Mail::send([],[],function($message) use ($name,$email,$subject,$msg){
                $message->to('zinfo.rajkot@gmail.com','N')->subject('Enquiry Mail')->setBody('<table border="2"><tr><td>Name :</td><td>'.$name.'</td></tr><tr><td>Email :</td><td>'.$email.'</td></tr><tr><td>Subject :</td><td>'.$subject.'</td></tr><tr><td>Message :</td><td>'.$msg.'</td></tr></table>','text/html');
            });

            if(!Mail::failures()){
                return view('front.thank_you');
            }else{
                return "<h1>Please Try Again</h1>";
            }    
        }
        else{
            return view('front.contact.view');
        }
        
    }
}
