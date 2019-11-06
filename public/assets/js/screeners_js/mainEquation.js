function arith_label_click(equationCounter,classCounter)
{
	$(".arith_label_"+equationCounter+"_"+classCounter).css('display','none');
	$(".arith_dropdown_"+equationCounter+"_"+classCounter).css('display','');
}


function arith_dropdown_click(equationCounter,classCounter)
{
	var currentValue = $(".arith_dropdown_"+equationCounter+"_"+classCounter+" option:selected").text();
	$(".arith_label_"+equationCounter+"_"+classCounter).text(currentValue);
	$(".arith_label_"+equationCounter+"_"+classCounter).css('display','');
	$(".arith_dropdown_"+equationCounter+"_"+classCounter).css('display','none');	
}


//-----------------------------------------------------------------------------------------------


function numeric_filter_label_click(equationCounter,classCounter)
{
	$(".numeric_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
	$(".numeric_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','');
}


function numeric_filter_dropdown_click(equationCounter,classCounter)
{
	var currentValue = $(".numeric_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").text();
	$(".numeric_filter_label_"+equationCounter+"_"+classCounter).text("["+currentValue+"]");
	$(".numeric_filter_label_"+equationCounter+"_"+classCounter).css('display','');
	$(".numeric_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');	
}



//-----------------------------------------------------------------------------------------------



function open_filter_label_click(equationCounter,classCounter)
{
	$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
	$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','');
}


function open_filter_dropdown_click(equationCounter,classCounter)
{
	var currentValue = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").text();
	$(".open_filter_label_"+equationCounter+"_"+classCounter).text(currentValue);
	$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','');
	$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');	
}



//-----------------------------------------------------------------------------------------------