@extends('front.app')

@section('title', '| Screeners')

@section('css_part')
    <style type="text/css">
        .card-body li a{
            color: #000;
        }
    </style>
@endsection

@section('content')

<div class="service-area sp">
    <div class="container">
        <div class="section-title" data-margin="0 0 40px">
            <h2>Screeners</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 single-service-2">
                <div class="card border border-primary">
                    <div class="card-body">
                        <h4 class="text-primary text-left">Fundamental Scans</h4>
                        <ul class="list-group text-left">
                            <!-- <li class="list-group-item"><a href="#" id="wipro_chart">Wipro</a></li> -->
                            <li class="list-group-item list-group-item-light"><a href="/screeners/Wipro">Wipro</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="#">Profit Jump by 200%</a></li>
                            <li class="list-group-item list-group-item-light"><a href="#">Swing Trade Scanner</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="#">Low Debt Companies</a></li>
                            <li class="list-group-item list-group-item-light"><a href="#">Mid Cap Stocks</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="#">Small Cap Stocks</a></li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-lg-6 col-md-6 single-service-2">
                <div class="card">
                    <div class="card-header" style="text-align: left;">
                        <h4 id="stock_name"></h4>
                    </div>
                    <div class="card-body">
                        <div id="chart_div">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div style="display: none;" id="loader"><img src="{{asset('assets/img/Loading.gif')}}" style="position: absolute;top: 37%;left: 37%;"></div>    
@endsection



@section('js_script')
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js" integrity="sha256-4iQZ6BVL4qNKlQ27TExEhBN1HFPvAvAMbFavKKosSWQ=" crossorigin="anonymous"></script>


    <script src="https://unpkg.com/lightweight-charts/dist/lightweight-charts.standalone.production.js"></script>

    <script type="application/x-javascript">
        $(document).ready(function(){
        });

        $(document).on('click','#wipro_chart',function(){
            $("#loader").css('display','');
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/screeners_get',
                method: 'POST',
                success:function(result){
                    $("#loader").css('display','none');
                    $("#stock_name").text('Wipro');
                    var result_Data = [];
                    $.each(result,function(key,value){
                        var tmp_new_date = value.Date.split(/[- :]/);
                        var new_time = tmp_new_date[1]+':'+tmp_new_date[2];
                        var tmp_new_date2 = tmp_new_date[0].split('/');
                        var final_date = (2000+Number(tmp_new_date2[2])+'-'+tmp_new_date2[1]+'-'+tmp_new_date2[0]+' '+new_time);
                        
                        result_Data.push({'time': moment(final_date).unix(),'open':value.WIPRO_EQO,'high':value.WIPRO_EQH,'low':value.WIPRO_EQL,'close':value.WIPRO_EQC});
                    });


                    const json_data = JSON.stringify(result_Data);

                    
                    const chart = LightweightCharts.createChart(document.getElementById('chart_div'), {
                        width: 500,
                        height: 300,
                        layout: {
                            backgroundColor: '#222538',
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