@extends('front.app')

@section('title', '| Screeners')



@section('content')
<!-- <div class="page-title sp" style="background-image: url(assets/img/page-title.jpg)">
    <div class="container text-center">
        <h2>Screeners</h2>
    </div>
</div> -->


<!-- <div class="service-area spt">
    <div class="container bg1" data-padding="40px">
        <div class="row">
            <div class="col-lg-4 col-md-6 single-service-3">
                <div class="inner">
                    <div class="title">
                        <div class="icon">
                            <i class="fa fa-film"></i>
                        </div>
                        <h4>Video Making</h4>
                    </div>
                    <div class="content">
                        <p>Pellentesque habitant morbi tristique senectus et netus.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 single-service-3">
                <div class="inner">
                    <div class="title">
                        <div class="icon">
                            <i class="fa fa-camera"></i>
                        </div>
                        <h4>Photography</h4>
                    </div>
                    <div class="content">
                        <p>Pellentesque habitant morbi tristique senectus et netus.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 single-service-3">
                <div class="inner">
                    <div class="title">
                        <div class="icon">
                            <i class="fa fa-music"></i>
                        </div>
                        <h4>Music Composing</h4>
                    </div>
                    <div class="content">
                        <p>Pellentesque habitant morbi tristique senectus et netus.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 single-service-3">
                <div class="inner">
                    <div class="title">
                        <div class="icon">
                            <i class="fa fa-bullhorn"></i>
                        </div>
                        <h4>Product Marketing</h4>
                    </div>
                    <div class="content">
                        <p>Pellentesque habitant morbi tristique senectus et netus.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 single-service-3">
                <div class="inner">
                    <div class="title">
                        <div class="icon">
                            <i class="fa fa-magic"></i>
                        </div>
                        <h4>Video Editing</h4>
                    </div>
                    <div class="content">
                        <p>Pellentesque habitant morbi tristique senectus et netus.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 single-service-3">
                <div class="inner">
                    <div class="title">
                        <div class="icon">
                            <i class="fa fa-bar-chart"></i>
                        </div>
                        <h4>Presentation</h4>
                    </div>
                    <div class="content">
                        <p>Pellentesque habitant morbi tristique senectus et netus.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->   
<div class="service-area sp">
    <div class="container">
        <div class="section-title" data-margin="0 0 40px">
            <h2>Screeners</h2>
            <!-- <p>Malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p> -->
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 single-service-2">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <ul style="list-style: none;text-align: left;">
                            <li><a href="#" id="wipro_chart">Wipro</a></li>
                        </ul>

                        <div id="chart_div">
                        </div>
                    </div>
                </div>
                <!-- <div class="inner">
                    <div class="title">
                        <div class="icon">
                            <i class="fa fa-film"></i>
                        </div>
                        <h4>Video Making</h4>
                    </div>
                    <div class="content">
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames.</p>
                    </div>
                </div> -->
            </div>
            <!-- <div class="col-lg-4 col-md-6 single-service-2">
                <div class="inner">
                    <div class="title">
                        <div class="icon">
                            <i class="fa fa-camera"></i>
                        </div>
                        <h4>Photography</h4>
                    </div>
                    <div class="content">
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 single-service-2">
                <div class="inner">
                    <div class="title">
                        <div class="icon">
                            <i class="fa fa-music"></i>
                        </div>
                        <h4>Music Composing</h4>
                    </div>
                    <div class="content">
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames.</p>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>    
<!-- <div class="service-area bg2 sp">
    <div class="container">
        <div class="section-title">
            <h2>Our Service</h2>
            <p>Malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 single-service">
                <div class="inner">
                    <div class="title">
                        <div class="icon">
                            <i class="fa fa-film"></i>
                        </div>
                        <h4>Video Making</h4>
                    </div>
                    <div class="content">
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 single-service">
                <div class="inner">
                    <div class="title">
                        <div class="icon">
                            <i class="fa fa-camera"></i>
                        </div>
                        <h4>Photography</h4>
                    </div>
                    <div class="content">
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 single-service">
                <div class="inner">
                    <div class="title">
                        <div class="icon">
                            <i class="fa fa-music"></i>
                        </div>
                        <h4>Music Composing</h4>
                    </div>
                    <div class="content">
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 single-service">
                <div class="inner">
                    <div class="title">
                        <div class="icon">
                            <i class="fa fa-bullhorn"></i>
                        </div>
                        <h4>Product Marketing</h4>
                    </div>
                    <div class="content">
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 single-service">
                <div class="inner">
                    <div class="title">
                        <div class="icon">
                            <i class="fa fa-magic"></i>
                        </div>
                        <h4>Video Editing</h4>
                    </div>
                    <div class="content">
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 single-service">
                <div class="inner">
                    <div class="title">
                        <div class="icon">
                            <i class="fa fa-bar-chart"></i>
                        </div>
                        <h4>Presentation</h4>
                    </div>
                    <div class="content">
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection



@section('js_script')
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js" integrity="sha256-4iQZ6BVL4qNKlQ27TExEhBN1HFPvAvAMbFavKKosSWQ=" crossorigin="anonymous"></script>


    <script src="https://unpkg.com/lightweight-charts/dist/lightweight-charts.standalone.production.js"></script>

    <script type="application/x-javascript">
        $(document).ready(function(){
        });

        $(document).on('click','#wipro_chart',function(){
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/screeners_get',
                method: 'POST',
                success:function(result){
                    var result_Data = [];
                    $.each(result,function(key,value){
                        var tmp_new_date = value.Date.split(/[- :]/);
                        var new_time = tmp_new_date[1]+':'+tmp_new_date[2];
                        var tmp_new_date2 = tmp_new_date[0].split('/');
                        var final_date = (2000+Number(tmp_new_date2[2])+'-'+tmp_new_date2[1]+'-'+tmp_new_date2[0]+' '+new_time);
                        
                        result_Data.push({'time': moment(final_date).unix(),'open':value.WIPRO_EQO,'high':value.WIPRO_EQH,'low':value.WIPRO_EQL,'close':value.WIPRO_EQC});
                    });


                    const json_data = JSON.stringify(result_Data);

                    //var new_data_object = Object.assign({},result_Data);
                    //var json_data = JSON.stringify(new_data_object);
                    /*console.log(json_data);
                    return false;*/


                    const chart = LightweightCharts.createChart(document.getElementById('chart_div'), {
                        width: 600,
                        height: 300,
                        layout: {
                            backgroundColor: '#000000',
                            textColor: 'rgba(255, 255, 255, 0.9)',
                        },
                        grid: {
                            vertLines: {
                                color: 'rgba(197, 203, 206, 0.5)',
                            },
                            horzLines: {
                                color: 'rgba(197, 203, 206, 0.5)',
                            },
                        },
                        crosshair: {
                            mode: LightweightCharts.CrosshairMode.Normal,
                        },
                        priceScale: {
                            borderColor: 'rgba(197, 203, 206, 0.8)',
                        },
                        timeScale: {
                            borderColor: 'rgba(197, 203, 206, 0.8)',
                            timeVisible: true,
                            secondsVisible: true,
                        },
                    });

                    const candleSeries = chart.addCandlestickSeries({
                      upColor: 'rgba(255, 144, 0, 1)',
                      downColor: '#000',
                      borderDownColor: 'rgba(255, 144, 0, 1)',
                      borderUpColor: 'rgba(255, 144, 0, 1)',
                      wickDownColor: 'rgba(255, 144, 0, 1)',
                      wickUpColor: 'rgba(255, 144, 0, 1)',
                    });

                    candleSeries.setData(result_Data);
                }
            });
        });
        
    </script>
@endsection