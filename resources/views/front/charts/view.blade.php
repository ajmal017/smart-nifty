    @extends('front.app')

@section('title', '| Screeners')

@section('css_part')

<style type="text/css">

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



</style>

    

    
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
                        <div class="row toolbar">
                            
                            <div class="col-lg-8 toolbar-inner">
                                <div class="tool" title="Mouse"><img src="{{ asset('assets/img/tool1.png') }}"></div>
                                <div class="tool" title="Line"><img src="{{ asset('assets/img/tool2.png') }}"></div>
                                <div class="tool" id="tool3" title="Horizontal Line"><img src="{{ asset('assets/img/tool3.png') }}"></div>
                                <div class="tool" title="Vertical Line"><img src="{{ asset('assets/img/tool4.png') }}"></div>
                                <div id="rect" class="tool"  title="Rectangle"><img src="{{ asset('assets/img/tool5.png') }}"></div>
                                <div class="tool" title="Marker"><img src="{{ asset('assets/img/tool6.png') }}"></div>
                                <div class="tool" title="Arrow Line"><img src="{{ asset('assets/img/tool7.png') }}"></div>
                                <div class="tool" title="TextBox"><img src="{{ asset('assets/img/tool8.png') }}"></div>
                                <div class="tool" title="UP Arrow"><img src="{{ asset('assets/img/tool9.png') }}"></div>
                                <div class="tool" title="DOWN Arrow"><img src="{{ asset('assets/img/tool10.png') }}"></div>
                            </div>
                            <div class="col-lg-4">
                                <button type="button" class="btn btn-primary float-right" id="btnDownloadImage" style="cursor: pointer;">Save Image</button>
                            </div>

                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-12 tools">
                                <div id="chart_div"></div>
                          		<canvas id='canvas' width=1050 height=300 style="background:transparent!important;"></canvas>
                        	</div>



                       		<!--  <button id="rect">Draw Rectangle</button> -->
							<button id="circle" style="display: none">Draw Circle</button>
							<button id="arrow" style="display: none">Draw Arrow</button>
							<button id="freedrawing" style="display: none">ToggleFreedrawing</button>
								<!-- <canvas id='canvas' width=1050 height=300 style="background:transparent;"></canvas> -->

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

    <script src='https://cdnjs.cloudflare.com/ajax/libs/fabric.js/1.6.6/fabric.min.js'></script>

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


        $(document).on('click','#tool5',function(){
           document.getElementById("tool5").style.cursor="crosshair";
        });

        
       /**
    		Code For Generate Rectangle
       **/
		var canvas = new fabric.Canvas('canvas');
		canvas.selection = false;
		canvas.backgroundColor="white";
		var rect, ellipse, line, triangle, isDown, origX, origY, freeDrawing = true, textVal, activeObj;
		var isRectActive = false, isCircleActive = false, isArrowActive = false;
		
		var rectangle = document.getElementById('rect');
		var circle = document.getElementById('circle');
		var arrowSel = document.getElementById('arrow');
		var freedrawing = document.getElementById('freedrawing');
		rectangle.addEventListener('click', function () {
			isRectActive = !isRectActive;
		});
		circle.addEventListener('click', function () { 
			isCircleActive = !isCircleActive;
		});
		arrowSel.addEventListener('click', function () { 
			isArrowActive = !isArrowActive;
		});
		freedrawing.addEventListener('click', function () { 
			freeDrawing = !freeDrawing;
		});
		canvas.on('mouse:down', function(o) {
			if (freeDrawing) {
			    isDown = true;
			    var pointer = canvas.getPointer(o.e);
			    origX = pointer.x;
			    origY = pointer.y;
			    if(isRectActive) {
			    	rect = new fabric.Rect({
				        left: origX,
				        top: origY,
				        width: pointer.x-origX,
				        height: pointer.y-origY,
				        fill: '',
				        stroke : 'red',
				        type : 'rect',
				        uuid : generateUUID(),
				        strokeWidth:5,
				    });
				    canvas.add(rect);
				    activeObj = rect;
				} else if (isCircleActive) {
					ellipse = new fabric.Ellipse({
	                    left: origX,
	                    top: origY,
	                    originX: 'left',
	                    originY: 'top',
	                    rx: pointer.x - origX,
	                    ry: pointer.y - origY,
	                    angle: 0,
	                    fill: '',
	                    stroke: 'orange',
	                    strokeWidth:6,
	                    type : 'ellipse',
	                    uuid : generateUUID()
	                });
			       canvas.add(ellipse);
			       activeObj = ellipse;
				} else if (isArrowActive) {
					var points = [pointer.x, pointer.y, pointer.x, pointer.y];
		            line = new fabric.Line(points, {
		                strokeWidth: 6,
		                fill: 'red',
		                stroke: 'red',
		                originX: 'center',
		                originY: 'center',
		                id:'arrow_line',
		                uuid : generateUUID(),
		                type : 'arrow'
		            });
		            var centerX = (line.x1 + line.x2) / 2;
		            var centerY = (line.y1 + line.y2) / 2;
		            deltaX = line.left - centerX;
		            deltaY = line.top - centerY;

		            triangle = new fabric.Triangle({
		                left: line.get('x1') + deltaX,
		                top: line.get('y1') + deltaY,
		                originX: 'center',
		                originY: 'center',
		                selectable: false,
		                pointType: 'arrow_start',
		                angle: -45,
		                width: 20,
		                height: 20,
		                fill: 'red',
		                id:'arrow_triangle',
		                uuid : line.uuid
		            });
		            canvas.add(line, triangle);
			       activeObj = line;
				}
			}
		});

		var _FabricCalcArrowAngle = function(x1, y1, x2, y2) {
	        var angle = 0, x, y;
	        x = (x2 - x1);
	        y = (y2 - y1);
	        if (x === 0) {
	            angle = (y === 0) ? 0 : (y > 0) ? Math.PI / 2 : Math.PI * 3 / 2;
	        } else if (y === 0) {
	            angle = (x > 0) ? 0 : Math.PI;
	        } else {
	            angle = (x < 0) ? Math.atan(y / x) + Math.PI :
	                (y < 0) ? Math.atan(y / x) + (2 * Math.PI) : Math.atan(y / x);
	        }
	        return (angle * 180 / Math.PI + 90);
	    };

		canvas.on('mouse:move', function(o) {
		    if (isDown && freeDrawing) {
		    var pointer = canvas.getPointer(o.e);

		    if(isRectActive) {
		    	if(origX>pointer.x){
			        rect.set({ left: Math.abs(pointer.x) });
			    }
			    if(origY>pointer.y){
			        rect.set({ top: Math.abs(pointer.y) });
			    }
			    
			    rect.set({ width: Math.abs(origX - pointer.x) });
			    rect.set({ height: Math.abs(origY - pointer.y) });
			} else if (isCircleActive) {
				if(ellipse === null) {
		            return;
		        }
		        var rx = Math.abs(origX - pointer.x)/2;
		        var ry = Math.abs(origY - pointer.y)/2;
		        if (rx > ellipse.strokeWidth) {
		            rx -= ellipse.strokeWidth/2;
		        }
		        if (ry > ellipse.strokeWidth) {
		            ry -= ellipse.strokeWidth/2;
		        }
		        ellipse.set({ rx: rx, ry: ry});

		        if(origX > pointer.x){
		            ellipse.set({originX: 'right' });
		        } else {
		            ellipse.set({originX: 'left' });
		        }
		        if(origY > pointer.y){
		            ellipse.set({originY: 'bottom'  });
		        } else {
		            ellipse.set({originY: 'top'  });
		        }
			} else if (isArrowActive) {
				line.set({
	                x2: pointer.x,
	                y2: pointer.y
	            });
	            triangle.set({
	                'left': pointer.x + deltaX,
	                'top': pointer.y + deltaY,
	                'angle': _FabricCalcArrowAngle(line.x1,
	                                                line.y1,
	                                                line.x2,
	                                                line.y2)
	            });
			}
		    canvas.renderAll();
		   }
		});

		canvas.on('mouse:up', function(o) {
			if(freeDrawing) {
				isDown = false;
				if (isRectActive || isCircleActive || isArrowActive) {
				/*	textVal = prompt('Please enter text value..', '45');*/
				    if(isArrowActive) {
				    	var group = new window.fabric.Group([line,triangle],
				                {
				                    borderColor: 'black',
				                    cornerColor: 'green',
				                    lockScalingFlip : true,
				                    typeOfGroup : 'arrow',
				                    userLevel : 1,
				                    name:'my_ArrowGroup',
				                    uuid : activeObj.uuid,
				                    type : 'arrow'
				                }
				                );
				    	canvas.remove(line, triangle);// removing old object
				    	activeObj = group;
				    	canvas.add(group);
					}
				  //add text to the canvas.
					var _text = new fabric.Text(textVal, {
				        fontSize: 30,
				        fill : 'green',
				        type : 'text',
				        selectable : false,
				        left : activeObj.left,
				        top : activeObj.top - 30,
				        uuid : activeObj.uuid,
				        type : 'text'
				    });
					canvas.add(_text);
				}
			}
			//set coordinates for proper mouse interaction
			var objs = canvas.getObjects();
	   	    for (var i = 0 ; i < objs.length; i++) {
				objs[i].setCoords();
	   	   	}
		});
		function generateUUID(){
		    var d = new Date().getTime();
		    if(window.performance && typeof window.performance.now === "function"){
		        d += performance.now(); //use high-precision timer if available
		    }
		    var uuid = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
		        var r = (d + Math.random()*16)%16 | 0;
		        d = Math.floor(d/16);
		        return (c=='x' ? r : (r&0x3|0x8)).toString(16);
		    });
		    return uuid;
		}




		canvas.on("object:modified", function (e) {
	        try {
	       	 	var obj = e.target;
	   	     	    if (obj.type === 'ellipse') {
						obj.rx *= obj.scaleX;
						obj.ry *= obj.scaleY;
	   	   	     	}
		   	     	if (obj.type !== 'arrow') {
						obj.width *= obj.scaleX;
		   	     	    obj.height *= obj.scaleY;
			   	     	obj.scaleX = 1; 
		   	     	    obj.scaleY = 1;
					}
	   	     	    //find text with the same UUID
	   	     	    var currUUID = obj.uuid;
	   	     	    var objs = canvas.getObjects();
	   	     	    var currObjWithSameUUID = null;
	   	     	    for (var i = 0 ; i < objs.length; i++) {
						if (objs[i].uuid === currUUID && 
								objs[i].type === 'text') {
							currObjWithSameUUID = objs[i];
							break;
						}
	   	   	     	}
	   	   	     	if (currObjWithSameUUID) {
	   	   	     		currObjWithSameUUID.left = obj.left;
	   	   	     		currObjWithSameUUID.top = obj.top - 30;
	   	   	     		currObjWithSameUUID.opacity = 1;
	      	   	   	}
          	}catch(E){
          	}
	   	});

		var _hideText = function (e) {
			try {
	       	 	var obj = e.target;
				//console.log(obj);
	   	     	    //find text with the same UUID
	   	     	    var currUUID = obj.uuid;
	   	     	    var objs = canvas.getObjects();
	   	     	    var currObjWithSameUUID = null;
	   	     	    for (var i = 0 ; i < objs.length; i++) {
						if (objs[i].uuid === currUUID && objs[i].type === 'text') {
							currObjWithSameUUID = objs[i];
							break;
						}
	   	   	     	}
	   	   	     	if (currObjWithSameUUID) {
	   	   	     		currObjWithSameUUID.opacity = 0;
	      	   	   	}
	          } catch (E) {
	          }
		}
   	
	    canvas.on("object:moving", function (e) {
	    	_hideText(e);
	    });
	    canvas.on("object:scaling", function (e) {
	    	_hideText(e);
	    });
	    canvas.renderAll();
        


    </script>
@endsection