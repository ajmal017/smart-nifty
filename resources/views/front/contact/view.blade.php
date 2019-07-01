@extends('front.app')

@section('title', '| Contact Us')



@section('content')
<div class="page-title sp" style="background-image: url(assets/img/page-title.jpg)">
    <div class="container text-center">
        <h2>Contact Us</h2>
    </div>
</div>


<div class="contact-area sp">
    <div class="container">
        <div class="row">
            <div class="col-md-5 contact-info">
                <div class="single-info">
                    <h5><u>Phone</u></h5>
                    <p>(+91) 9428228307</p>
                </div>
                <div class="single-info">
                    <h5><u>Email</u></h5>
                    <p>zinfo.rajkot@gmail.com</p>
                </div>
                <div class="single-info">
                    <h5><u>Address</u></h5>
                    <p>SHOP NO 2 UPASANA COMPLEX,<br>
                    NEAR AMRAPALI RAILWAY CROSSING,<br>
                    RAIYA ROAD,<br>
                    RAJKOT-360007</p>
                </div>
                <div class="single-info">
                    <h5><u>Social</u></h5>
                    <p>
                        <a href="https://www.facebook.com/permalink.php?story_fbid=717401932049724&id=717400522049865&aymt_tip=1&placement=aymt_boost_post_with_ads_intent_tip&notif_id=1561532320864323&notif_t=aymt_upsell_tip&ref=notif" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-linkedin"></a>
                    </p>
                </div>
            </div>
            <div class="col-md-7">
            	<h3><u>Send Enquiry</u></h3>
                <form action="/s_mail" class="contact-form" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" placeholder="Name" required="" name="email_name">
                        </div>
                        <div class="col-lg-6">
                            <input type="email" placeholder="Email" required="" name="email_id">
                        </div>
                        <div class="col-lg-12">
                            <input type="text" placeholder="Subject" required="" name="email_subject">
                        </div>
                        <div class="col-lg-12">
                            <textarea placeholder="Message" required="" name="email_message"></textarea>
                        </div>
                        <div class="col-lg-12">
                            <input class="button" type="submit" value="Send Message">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection



@section('js_script')
@endsection