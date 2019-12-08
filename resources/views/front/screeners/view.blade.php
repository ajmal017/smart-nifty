@extends('front.app')

@section('title', '| Screeners')

@section('css_part')
    <style type="text/css">
        .card-body li a{
            color: #000;
        }
        body{
            background-color: #f5f5f5;
        }
        .card{
            border-left-width: 5px !important;
            border-radius: 3px !important;
            border-right-width: 0px !important;
            border-top-width: 0px !important;
            border-bottom-width: 0px !important;
        }

        .card h4,h5{
            font-size: 1.2rem;
        }
    </style>
@endsection

@section('content')

<div class="service-area sp" style="padding-top: 50px;">
    <div class="container">
        <!-- <div class="section-title" data-margin="0 0 40px">
            <h2>Screeners</h2>
        </div> -->
        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="card border border-success">
                    <div class="card-body">
                        <h5>Search Screeners</h5>
                        <div class="input-group" style="margin-top: 10px;">
                            <input type="text" class="form-control" placeholder="eg: RSI, Breakout, Uptrend, Short term .." name="screener_search">
                            <span class="input-group-btn">
                                 <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i> Search scans </button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-lg-4 col-md-4 single-service-2">
                <div class="card border border-primary">
                    <div class="card-body">
                        <h4 class="text-primary text-left">Top Loved</h4>
                        <ul class="list-group text-left">
                            <!-- <li class="list-group-item list-group-item-light"><a href="/screeners/Wipro">Wipro</a></li> -->
                            <li class="list-group-item list-group-item-light"><a href="/screeners/topLoved/15-Minute-Stock-Breakouts">15 Minute stock Breakouts</a></li>
                            
                            <li class="list-group-item list-group-item-dark"><a href="/screeners/topLoved/Short Tream Breakouts">Short term Breakouts</a></li>

                            <li class="list-group-item list-group-item-light"><a href="/screeners/topLoved/Intraday buying seen in the Past 15 minutes">Intraday buying seen in the Past 15 minutes</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="/screeners/topLoved/Bulish for next day">Bulish for next day</a></li>

                            <li class="list-group-item list-group-item-light"><a href="/screeners/topLoved/Supertrend positive breakout - 10 mins">Supertrend positive breakout - 10 mins</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="/screeners/topLoved/Volume Shockers(stocks with rising volumes)">Volume shockers(stocks with rising volumes)</a></li>

                            <li class="list-group-item list-group-item-light"><a href="/screeners/topLoved/Perfect Sell(Short)">Perfect sell(short)</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="/screeners/topLoved/NKs best buy stocks for intraday">NKs best buy stocks for intraday</a></li>

                            <li class="list-group-item list-group-item-light"><a href="/screeners/topLoved/Potential breakouts">Potential breakouts</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="/screeners/topLoved/Strong Stocks">Strong stocks</a></li>

                            <li class="list-group-item list-group-item-light"><a href="/screeners/topLoved/MACD Bearish or Bullish crossover">Macd bearish or bullish crossover</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="/screeners/topLoved/Daily RSI Oversold/Overbought scan">Daily rsi oversold/overbought scan</a></li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-4 single-service-2">
                <div class="card border border-warning">
                    <div class="card-body">
                        <h4 class="text-primary text-left">Candlestick Patterns Scan</h4>
                        <ul class="list-group text-left">
                            <li class="list-group-item list-group-item-light"><a href="/screeners/candleStick/15-Minute-Stock-Breakouts">15 Minute stock Breakouts</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="/screeners/candleStick/Short Tream Breakouts">Short term Breakouts</a></li>

                            <li class="list-group-item list-group-item-light"><a href="/screeners/candleStick/Supertrend positive breakout - 10 mins">Supertrend positive breakout - 10 mins</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="/screeners/candleStick/Volume spike on 1 minute candle">Volume spike on 1 minute candle</a></li>

                            <li class="list-group-item list-group-item-light"><a href="/screeners/candleStick/Top Shares for 2018 - Stocks to invest in">Top Shares for 2018 - stocks to invest in</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="/screeners/candleStick/Morning Star Candlestick pattern">Morning star candlestick pattern</a></li>

                            <li class="list-group-item list-group-item-light"><a href="/screeners/candleStick/Doji">Doji</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="/screeners/candleStick/Evening Star Candlestick Pattern">Evening star candlestick pattern</a></li>

                            <li class="list-group-item list-group-item-light"><a href="/screeners/candleStick/Buy entry intraday">Buy Entry intraday</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="/screeners/candleStick/Positive Hammer">Positive hammer</a></li>

                            <li class="list-group-item list-group-item-light"><a href="/screeners/candleStick/Sell entry intraday">Sell entry intraday</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="/screeners/candleStick/Breakout intraday">Breakout intraday</a></li>

                            <li class="list-group-item list-group-item-light"><a href="/screeners/candleStick/Breaking Days High - 5 Mins">Breakout days high - 5 mins</a></li>
                        </ul>
                    </div>
                </div>
            </div>



            <div class="col-lg-4 col-md-4 single-service-2">
                <div class="card border border-danger">
                    <div class="card-body">
                        <h4 class="text-primary text-left">Range Breakouts Scan</h4>
                        <ul class="list-group text-left">
                            <li class="list-group-item list-group-item-light"><a href="/screeners/rangeBreakout/52 week breakout">52 week breakout</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="/screeners/rangeBreakout/NR7- CURRENT DAY">Nr7 - current day</a></li>

                            <li class="list-group-item list-group-item-light"><a href="/screeners/rangeBreakout/Range Break Out With Volume">Range breakout with volume</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="/screeners/rangeBreakout/Narrow Range 7 - NR7">Narrow range 7 - nr7</a></li>

                            <li class="list-group-item list-group-item-light"><a href="/screeners/rangeBreakout/52 WEEK LOW">52 week low</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="/screeners/rangeBreakout/OHOL PRB">Ohol+prb</a></li>

                            <li class="list-group-item list-group-item-light"><a href="/screeners/rangeBreakout/NR7 NR4 with INSIDE">Nr7+nr4 with inside</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="/screeners/rangeBreakout/Technical Indicators">Technical indicators</a></li>

                            <li class="list-group-item list-group-item-light"><a href="/screeners/rangeBreakout/Yesterdays NR7 Stocks">Yesterday's nr7 Stocks</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="/screeners/rangeBreakout/NR7 IB">Nr7 ib - nr7 stocks with inside bar pattern by www.squareoff.in</a></li>

                            <li class="list-group-item list-group-item-light"><a href="/screeners/rangeBreakout/003 NR7">003-nr7-9:30 buy scan</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="/screeners/rangeBreakout/Bollinger band Squeeze">Bollinger band squeeze</a></li>

                            <li class="list-group-item list-group-item-light"><a href="/screeners/rangeBreakout/NR7 FUT">Nr7-fut</a></li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-4 single-service-2">
                <div class="card border border-success">
                    <div class="card-body">
                        <h4 class="text-primary text-left">Bulish Scan</h4>
                        <ul class="list-group text-left">
                            <li class="list-group-item list-group-item-light"><a href="/screeners/builshScan/Bulish for next day">Bulish for next day</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="/screeners/builshScan/MACD Bearish or Bullish crossover">Macd bearish or bulish crossover</a></li>

                            <li class="list-group-item list-group-item-light"><a href="/screeners/builshScan/Bullish Engulfing Strong">Bulish engulfing - strong</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="/screeners/builshScan/Pure bullish trend stocks">Pure bulish trend stocks</a></li>

                            <li class="list-group-item list-group-item-light"><a href="/screeners/builshScan/2 days Bullish">2 days bulish by tomorrow</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="/screeners/builshScan/Bullish Engulfing Pattern">Bulish engulfing pattern</a></li>

                            <li class="list-group-item list-group-item-light"><a href="/screeners/builshScan/Golden Crossover">Golden Crossover</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="/screeners/builshScan/Morning Star">Morning Star - bullish pattern</a></li>

                            <li class="list-group-item list-group-item-light"><a href="/screeners/builshScan/Bullish-rsi-stochastic">Bullish-rsi-stochastic</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="/screeners/builshScan/Bullish Engulf">Bullish engulf</a></li>

                            <li class="list-group-item list-group-item-light"><a href="/screeners/builshScan/Tradersway Buy">Tradersway buy</a></li>
                            <li class="list-group-item list-group-item-dark"><a href="/screeners/builshScan/TSS Momentum Long">Tss momentum long</a></li>

                            <!-- <li class="list-group-item list-group-item-light"><a href="/screeners/builshScan/Short Tream Breakouts">Pvc screener @ druzbeh</a></li> -->
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