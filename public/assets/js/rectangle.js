var canvas = new fabric.Canvas('canvas');
		canvas.selection = false;
		$(".canvas-container").css('position','absolute');
	    $(".canvas-container").css('top','1px');
	    $(".canvas-container").css('z-index','2');

		//canvas.backgroundColor="white";
		var rect, ellipse, line, triangle, isDown, origX, origY, freeDrawing = true, textVal, activeObj;
		var isRectActive = false, isCircleActive = false, isArrowActive = false;
		
		var rectangle = document.getElementById('rect');
		
		/*rectangle.addEventListener('click', function () {
			isRectActive = !isRectActive;
		});*/


		$(document).on('click','#rect',function(){
        	isRectActive = !isRectActive;
        	$(".canvas-container").css('position','absolute');
		    $(".canvas-container").css('top','1px');
		    $(".canvas-container").css('z-index','2');
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
			}
		});

		

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
		    canvas.renderAll();
		   }
		});

		canvas.on('mouse:up', function(o) {
		
		isDown=false;
		var objs = canvas.getObjects();
   	    for (var i = 0 ; i < objs.length; i++) {	
			objs[i].setCoords();	
   	   	}
   	   	isRectActive = false;
   	  // 	isDown=false;

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