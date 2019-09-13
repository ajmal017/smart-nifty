    @extends('front.app')

@section('title', '| Screeners')

@section('css_part')
    <style type="text/css">
        .rectangle {
            border: 1px solid #FF0000;
            position: absolute;
            opacity: 1;
            z-index: 9999;
        }
    
		.card
		{
		    border-color:black;
		}

		.card-header
		{
		    background-color: #e3e0ff;
		}


		.toolbar
		{
		    width: 98%;
		    margin-left:2px;
		    background: lightgray;
		    padding: 5px!important;
		    border-radius: 3px;
		}

		.toolbar-inner
		{
		    display: inline-flex;
		}    

		.toolbar-inner img
		{

		    background-color: white;
		    border:1px solid black;
		    border-radius: 2px;
		    padding: 2px;
		    
		    /*padding-right: 5px;
		    padding-left: 5px;*/
		       

		}

		.tool
		{
		    cursor: pointer;
		    width: 45px;
		    padding:3px;
		}

		.btn
		{

		}

		canvas {
		    cursor: crosshair;
		    border: 1px solid #000000;
		}

		.tools
		{
			width: 1050px!important;
			height: 300px!important;
			/*position: absolute;*/
			  top: 0!important;
		  left: 0!important;
		}

		#canvas_preview
		{
			display: none!important;
		}

		.canvas-container{
			
		}
	</style>
@endsection

@section('content')

<div class="service-area sp">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><h3>{{$stockName}}</h3></div>
                    <div class="card-body">
                        	<div class="row toolbar">
	                            <div class="col-lg-8 toolbar-inner">
	                                <div id="" class="tool" title="Mouse"><img src="{{ asset('assets/img/tool1.png') }}"></div>
	                                <div id="line" class="tool" title="Line"><img src="{{ asset('assets/img/tool2.png') }}"></div>
	                                <div class="tool" id="tool3" title="Horizontal Line"><img src="{{ asset('assets/img/tool3.png') }}"></div>
	                                <div class="tool" title="Vertical Line"><img src="{{ asset('assets/img/tool4.png') }}"></div>
	                                <div id="rect" class="tool"  title="Rectangle"><img src="{{ asset('assets/img/tool5.png') }}"></div>
	                                <div class="tool" title="Marker"><img src="{{ asset('assets/img/tool6.png') }}"></div>
	                                <div id="arrow" class="tool" title="Arrow Line"><img src="{{ asset('assets/img/tool7.png') }}"></div>
	                                <div class="tool" title="TextBox"><img src="{{ asset('assets/img/tool8.png') }}"></div>
	                                <div class="tool" title="UP Arrow"><img src="{{ asset('assets/img/tool9.png') }}"></div>
	                                <div class="tool" title="DOWN Arrow"><img src="{{ asset('assets/img/tool10.png') }}"></div>
	                            </div>
	                            <div class="col-lg-4">
	                                <button type="button" class="btn btn-primary float-right" id="btnDownloadImage" style="cursor: pointer;">Save Image</button>
	                            </div>
							</div>
	                        <div class="row mt-2">
	                            <div class="col-lg-12 tools" id="chart">
	                                <div id="chart_div"></div>
	                          		<canvas id='canvas' width=1050 height=300 style="position: absolute !important;top: 1px !important;z-index: 2 !important;"></canvas>
	                        	</div>
	                    	</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div style="display: none!important;" id="canvas_preview"></div>

@endsection



@section('js_script')

    <script src="{{asset('assets/js/html2canvas.min.js')}}"></script>
    <script src="{{asset('assets/js/canvas2image.js')}}"></script>
    
    <script src="https://unpkg.com/lightweight-charts/dist/lightweight-charts.standalone.production.js"></script>

    <script src="{{asset('assets/js/fabric.js')}}"></script>

    <script type="text/javascript">
    



        $(document).ready(function(){
            var result_Data = JSON.parse('<?php echo $apiData; ?>');
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
                    pressedMouseMove: false,
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
        });
        




        $(document).on('click','#btnDownloadImage',function(){
          //  var chartImage = $("#chart_div").get(0);
          	var chartImage = $("#chart").get(0);
          	//console.log(chartImage); 
          	//return false;
            html2canvas(chartImage).then(function(canvas){
                var canvasWidth = canvas.width;
                var canvasHeight = canvas.height;
                Canvas2Image.saveAsImage(canvas,1050,300,'png','Image');
            });
        });


        $(document).on('click','#tool5',function(){
           document.getElementById("tool5").style.cursor="crosshair";
        });

        </script>

        <script src="{{asset('assets/js/rectangle.js')}}"></script>

        <!-- <script src="{{asset('assets/js/arrow.js')}}"></script> -->

 
@endsection