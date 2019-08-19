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
                        <h4 class="text-primary text-left">Top Loved</h4>
                        <ul class="list-group text-left">
                            <!-- <li class="list-group-item list-group-item-light"><a href="/screeners/Wipro">Wipro</a></li> -->
                            <li class="list-group-item list-group-item-light"><a href="#">15 Minute stock Breakouts</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="#">Short term Breakouts</a></li>

                            <li class="list-group-item list-group-item-light"><a href="#">Intraday buying seen in the Past 15 minutes</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="#">Bulish for next day</a></li>

                            <li class="list-group-item list-group-item-light"><a href="#">Supertrend positive breakout - 10 mins</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="#">Volume shockers(stocks with rising volumes)</a></li>

                            <li class="list-group-item list-group-item-light"><a href="#">Perfect sell(short)</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="#">NKs best buy stocks for intraday</a></li>

                            <li class="list-group-item list-group-item-light"><a href="#">Potential breakouts</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="#">Strong stocks</a></li>

                            <li class="list-group-item list-group-item-light"><a href="#">Macd bearish or bullish crossover</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="#">Daily rsi oversold/overbought scan</a></li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-4 single-service-2">
                <div class="card border border-warning">
                    <div class="card-body">
                        <h4 class="text-primary text-left">Candlestick Patterns Scan</h4>
                        <ul class="list-group text-left">
                            <li class="list-group-item list-group-item-light"><a href="#">15 Minute stock Breakouts</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="#">Short term Breakouts</a></li>

                            <li class="list-group-item list-group-item-light"><a href="#">Supertrend positive breakout - 10 mins</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="#">Volume spike on 1 minute candle</a></li>

                            <li class="list-group-item list-group-item-light"><a href="#">Top Shares for 2018 - stocks to invest in</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="#">Morning star candlestick pattern</a></li>

                            <li class="list-group-item list-group-item-light"><a href="#">Doji</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="#">Evening star candlestick pattern</a></li>

                            <li class="list-group-item list-group-item-light"><a href="#">Buy Entry intraday</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="#">Positive hammer</a></li>

                            <li class="list-group-item list-group-item-light"><a href="#">Sell entry intraday</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="#">Breakout intraday</a></li>

                            <li class="list-group-item list-group-item-light"><a href="#">Breakout days high - 5 mins</a></li>
                        </ul>
                    </div>
                </div>
            </div>



            <div class="col-lg-4 col-md-4 single-service-2">
                <div class="card border border-danger">
                    <div class="card-body">
                        <h4 class="text-primary text-left">Range Breakouts Scan</h4>
                        <ul class="list-group text-left">
                            <li class="list-group-item list-group-item-light"><a href="#">52 week breakout</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="#">Nr7 - current day</a></li>

                            <li class="list-group-item list-group-item-light"><a href="#">Range breakout with volume</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="#">Narrow range 7 - nr7</a></li>

                            <li class="list-group-item list-group-item-light"><a href="#">52 week low</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="#">Ohol+prb</a></li>

                            <li class="list-group-item list-group-item-light"><a href="#">Nr7+nr4 with inside</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="#">Technical indicators</a></li>

                            <li class="list-group-item list-group-item-light"><a href="#">Yesterday's nr7 Stocks</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="#">Nr7 ib - nr7 stocks with inside bar pattern by www.squareoff.in</a></li>

                            <li class="list-group-item list-group-item-light"><a href="#">003-nr7-9:30 buy scan</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="#">Bollinger band squeeze</a></li>

                            <li class="list-group-item list-group-item-light"><a href="#">Nr7-fut</a></li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-4 single-service-2">
                <div class="card border border-success">
                    <div class="card-body">
                        <h4 class="text-primary text-left">Bulish Scan</h4>
                        <ul class="list-group text-left">
                            <li class="list-group-item list-group-item-light"><a href="#">Bulish for next day</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="#">Macd bearish or bulish crossover</a></li>

                            <li class="list-group-item list-group-item-light"><a href="#">Bulish engulfing - strong</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="#">Pure bulish trend stocks</a></li>

                            <li class="list-group-item list-group-item-light"><a href="#">2 days bulish by tomorrow</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="#">Bulish engulfing pattern</a></li>

                            <li class="list-group-item list-group-item-light"><a href="#">Golden Crossover</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="#">Morning Star - bullish pattern</a></li>

                            <li class="list-group-item list-group-item-light"><a href="#">Bullish-rsi-stochastic</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="#">Bullish engulf</a></li>

                            <li class="list-group-item list-group-item-light"><a href="#">Tradersway buy</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="#">Tss momentum long</a></li>

                            <li class="list-group-item list-group-item-light"><a href="#">Pvc screener @ druzbeh</a></li>
                        </ul>
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