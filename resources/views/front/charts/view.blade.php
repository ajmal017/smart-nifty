@extends('front.app')

@section('title', '| Screeners')

@section('css_part')
    
@endsection

@section('content')

<div class="service-area sp">
    <div class="container">
        <!-- <div class="section-title" data-margin="0 0 40px">
            <h2>{{$stockName}} Screener</h2>
        </div> -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><h3>{{$stockName}}</h3></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-4"></div>
                            <div class="col-lg-4">
                                <button type="button" class="btn btn-primary float-right" id="btnDownloadImage" style="cursor: pointer;">Save Image</button>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-12">
                                <div id="chart_div"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div style="display: none;" id="canvas_preview"></div>
<div style="display: none;" id="pic_preview"></div>
@endsection



@section('js_script')

    <script src="{{asset('assets/js/html2canvas.min.js')}}"></script>
    <script src="{{asset('assets/js/canvas2image.js')}}"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js" integrity="sha256-4iQZ6BVL4qNKlQ27TExEhBN1HFPvAvAMbFavKKosSWQ=" crossorigin="anonymous"></script>


    <script src="https://unpkg.com/lightweight-charts/dist/lightweight-charts.standalone.production.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
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

                    
                    const chart = LightweightCharts.createChart(document.getElementById('chart_div'), {
                        width: 1050,
                        height: 300,
                        priceScale: {
                            position: 'right',
                            mode: 1,
                            autoScale: true,
                            invertScale: false,
                            alignLabels: true,
                            scaleMargins: {
                                top: 0.30,
                                bottom: 0.25,
                            },
                            borderColor: 'rgba(197, 203, 206, 0.8)',
                        },
                        watermark: {
                            color: 'rgba(11, 94, 29, 0.4)',
                            visible: true,
                            text: 'Smart Nifty',
                            fontSize: 24,
                            horzAlign: 'left',
                            vertAlign: 'bottom',
                        },
                        handleScroll: {
                            mouseWheel: true,
                            pressedMouseMove: true,
                        },
                        handleScale: {
                            axisPressedMouseMove: true,
                            mouseWheel: true,
                            pinch: true,
                        },
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
                        timeScale: {
                            borderColor: 'rgba(197, 203, 206, 0.8)',
                            timeVisible: true,
                            secondsVisible: true,
                            rightOffset: 0,
                            barSpacing: 40,
                            fixLeftEdge: true,
                            lockVisibleTimeRangeOnResize: true,
                            rightBarStaysOnScroll: false,
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
        




        $(document).on('click','#btnDownloadImage',function(){
            var chartImage = $("#chart_div").get(0);
            html2canvas(chartImage).then(function(canvas){
                var canvasWidth = canvas.width;
                var canvasHeight = canvas.height;
                $("#canvas_preview").after(canvas);
                Canvas2Image.saveAsImage(canvas,1050,300,'png','Image');
            });
        });
    </script>
@endsection