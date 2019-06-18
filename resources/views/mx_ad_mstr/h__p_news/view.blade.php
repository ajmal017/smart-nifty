@extends('mx_ad_mstr.app')

@section('title', '')

@section('css_part')
@endsection

@section('content')
	<div class="content-wrapper">

        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>


        <section class="content">

            <div class="row">
                <div class="col-lg-6">
                    <form method="POST" action="/h__p_news/1" id="news_update_form">
                        @csrf
                        <input type="hidden" name="_method" value="PATCH">
                        <label><h4><b>Enter News</b></h4></label>
                        <textarea class="form-control" rows="5" name="news_content" value="{{$current_data->news_content}}">{{$current_data->news_content}}</textarea>
                        <button type="submit" class="btn btn-success" style="margin-top: 10px;">Save Changes</button>
                    </form>
                </div>
            </div>

        </section>

    </div>
@endsection



@section('js_script')
	<script type="text/javascript">
        $(document).on('submit','#news_update_form',function(e){
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                method: $(this).attr('method'),
                data: $(this).serialize(),
                success: function (data) {
                    if(data == "1"){
                        window.location.href = '/h__p_news';
                    }else{
                        alert("Data Update in Error");
                    }
                }
            });
        }); 
    </script>
@endsection