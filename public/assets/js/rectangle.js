var canvas = new fabric.Canvas('canvas');

preserveObjectStacking: true;
canvas.selection = false;
$(".canvas-container").css('position','absolute');
$(".canvas-container").css('top','1px');
$(".canvas-container").css('z-index','2');

		//canvas.backgroundColor="white";
		var rect, ellipse, line, triangle, isDown, origX, origY, freeDrawing = true, textVal, activeObj;
		var isRectActive = false, isCircleActive = false, isArrowActive = false, isLineActive=false, isHorizontalLineActive=false,
		isVerticalLine=false,isMarkerActive =false;
		
		var rectangle = document.getElementById('rect');
		var arrowSel = document.getElementById('arrow');
		var line = document.getElementById('line');
		var hline = document.getElementById('hline');
		var vline = document.getElementById('vline');
		var marker = document.getElementById('marker');
		
		/*rectangle.addEventListener('click', function () {
			isRectActive = !isRectActive;
		});*/


		$(document).on('click','#rect',function(){
			isRectActive = !isRectActive;
			$(".canvas-container").css('position','absolute');
			$(".canvas-container").css('top','1px');
			$(".canvas-container").css('z-index','2');
		});

		$(document).on('click','#arrow', function () { 
			isArrowActive = !isArrowActive;
			$(".canvas-container").css('position','absolute');
			$(".canvas-container").css('top','1px');
			$(".canvas-container").css('z-index','2');
		});

		$(document).on('click','#line', function () { 
			isLineActive = !isLineActive;
			$(".canvas-container").css('position','absolute');
			$(".canvas-container").css('top','1px');
			$(".canvas-container").css('z-index','2');
		});

		$(document).on('click','#hline', function () { 
			isHorizontalLineActive = !isHorizontalLineActive;
			$(".canvas-container").css('position','absolute');
			$(".canvas-container").css('top','1px');
			$(".canvas-container").css('z-index','2');
		});

		$(document).on('click','#vline', function () { 
			isVerticalLine = !isVerticalLine;
			$(".canvas-container").css('position','absolute');
			$(".canvas-container").css('top','1px');
			$(".canvas-container").css('z-index','2');
		});

		$(document).on('click','#marker',function(){
			isMarkerActive = !isMarkerActive;
			$(".canvas-container").css('position','absolute');
			$(".canvas-container").css('top','1px');
			$(".canvas-container").css('z-index','2');
		});


		
		
		
		canvas.on('mouse:down', function(o) {

			if (freeDrawing) 
			{
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
						fill: 'rgba(0,0,0,0)',
						stroke : 'red',
						type : 'rect',
						uuid : generateUUID(),
						strokeWidth:2,
					});
					canvas.add(rect);
					activeObj = rect;
					$(".canvas-container").css('position','absolute');
					$(".canvas-container").css('top','1px');
					$(".canvas-container").css('z-index','2');
				}
				else if (isArrowActive) {
					var points = [pointer.x, pointer.y, pointer.x, pointer.y];
					line = new fabric.Line(points, {
						strokeWidth: 2,
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
						width: 14,
						height: 14,
						fill: 'red',
						id:'arrow_triangle',
						uuid : line.uuid
					});
					canvas.add(line, triangle);
					activeObj = line;
				}
				else if (isLineActive) {
					var points = [pointer.x, pointer.y, pointer.x, pointer.y];
					line = new fabric.Line(points, {
						strokeWidth: 2,
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
						width: 14,
						height: 14,
						fill: 'red',
						id:'arrow_triangle',
						uuid : line.uuid
					});
					canvas.add(line);
					activeObj = line;
				}
				else if (isHorizontalLineActive) {
					var points = [pointer.x, pointer.y, pointer.x, pointer.y];
					line = new fabric.Line(points, {
						strokeWidth: 2,
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
						width: 14,
						height: 14,
						fill: 'red',
						id:'arrow_triangle',
						uuid : line.uuid
					});
					canvas.add(line);
					activeObj = line;
				}
				else if (isVerticalLine) {
					var points = [pointer.x, pointer.y, pointer.x, pointer.y];
					line = new fabric.Line(points, {
						strokeWidth: 2,
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
						width: 14,
						height: 14,
						fill: 'red',
						id:'arrow_triangle',
						uuid : line.uuid
					});
					canvas.add(line);
					activeObj = line;
				}
				if(isMarkerActive) {
					rect = new fabric.Rect({
						left: origX,
						top: origY,
						width: pointer.x-origX,
						height: pointer.y-origY,
						fill: 'rgba(255,0,0,0.28)',
						stroke : 'red',
						type : 'rect',
						uuid : generateUUID(),
						strokeWidth:0,
					});
					canvas.add(rect);
					activeObj = rect;
					$(".canvas-container").css('position','absolute');
					$(".canvas-container").css('top','1px');
					$(".canvas-container").css('z-index','2');

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
		}
		else if (isArrowActive) {
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
		else if (isLineActive) {
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
		else if (isHorizontalLineActive) {
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
		else if (isVerticalLine) {
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
		if(isMarkerActive) {
			if(origX>pointer.x){
				rect.set({ left: Math.abs(pointer.x) });
			}
			if(origY>pointer.y){
				rect.set({ top: Math.abs(pointer.y) });
			}
			
			rect.set({ width: Math.abs(origX - pointer.x) });
			rect.set({ height: Math.abs(origY - pointer.y) });
		}
		canvas.renderAll();
	}
});

canvas.on('mouse:up', function(o) {
	if(freeDrawing) {
		isDown = false;
		if (isRectActive || isArrowActive) {
					//textVal = prompt('Please enter text value..', '45');
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
				    
				    isRectActive = 'false';
				}

			}

			isDown=false;
			var objs = canvas.getObjects();
			for (var i = 0 ; i < objs.length; i++) {	
				objs[i].setCoords();	
			}
			isRectActive = false;
			isArrowActive = false;
			isLineActive = false;
			isHorizontalLineActive= false;
			isVerticalLine =false;
			isMarkerActive =false;
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

		document.getElementById("addInputField").addEventListener("click", function(event) {
			var inputField = new fabric.Textbox('Text Here', { 
				left: 10,
				top: 10,
				fill: 'black',
				width: 200,
				fontSize: 18,
				fontcolor: 'black',
				backgroundColor: '#EDEAFF'
			})
			canvas.add(inputField);
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






