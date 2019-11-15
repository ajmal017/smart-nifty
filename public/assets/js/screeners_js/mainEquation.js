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

	var currentSelectedValue = $(".numeric_filter_dropdown_"+equationCounter+"_"+classCounter).val();

	if(currentSelectedValue == "-n")
	{
		var entered_value = prompt("Enter Required Offset, 1 offset equals 1 candle");
		$(".numeric_filter_label_"+equationCounter+"_"+classCounter).text("["+"-"+entered_value+"]");
		$(".numeric_filter_label_"+equationCounter+"_"+classCounter).css('display','');
		$(".numeric_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');		
	}
	else if(currentSelectedValue == "=n")
	{
		var entered_value = prompt("Enter Candle of a day, starting with 1");
		$(".numeric_filter_label_"+equationCounter+"_"+classCounter).text("["+"="+entered_value+"]");
		$(".numeric_filter_label_"+equationCounter+"_"+classCounter).css('display','');
		$(".numeric_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');	
	}
	else if(currentSelectedValue == "=-n")
	{
		var entered_value = prompt("Enter Candle of Previous day, the last candle referred as -1");
		$(".numeric_filter_label_"+equationCounter+"_"+classCounter).text("["+"=-"+entered_value+"]");
		$(".numeric_filter_label_"+equationCounter+"_"+classCounter).css('display','');
		$(".numeric_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');		
	}
	else
	{
		$(".numeric_filter_label_"+equationCounter+"_"+classCounter).text("["+currentValue+"]");
		$(".numeric_filter_label_"+equationCounter+"_"+classCounter).css('display','');
		$(".numeric_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');	
	}
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

	var currentSelectedValue = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter).val();

	if(currentSelectedValue == "brackets")
	{
		if(currentSelectedValue == "brackets")
		{
			$(".bracket_label").css('display','inline-block');
			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');
		}
		else
		{
			$(".bracket_label").css('display','none');
			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','');
		}
	}
	else
	{
		$(".open_filter_label_"+equationCounter+"_"+classCounter).text(currentValue);
		$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','');
		$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');	
	}
}



//-----------------------------------------------------------------------------------------------


function timing_filter_label_click(equationCounter,classCounter)
{
	$(".timing_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
	$(".timing_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','');
}


function timing_filter_dropdown_click(equationCounter,classCounter)
{
	var currentValue = $(".timing_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").text();
	$(".timing_filter_label_"+equationCounter+"_"+classCounter).text(currentValue);
	$(".timing_filter_label_"+equationCounter+"_"+classCounter).css('display','');
	$(".timing_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');	
}



//-----------------------------------------------------------------------------------------------



function custom_txt_label_click(equationCounter,classCounter)
{
	$(".custom_txt_label_"+equationCounter+"_"+classCounter).css('display','none');
	$(".custom_txt_input_"+equationCounter+"_"+classCounter).css('display','');
}


function custom_txt_input_blur(equationCounter,classCounter)
{
	$(".custom_txt_label_"+equationCounter+"_"+classCounter).css('display','');
	$(".custom_txt_input_"+equationCounter+"_"+classCounter).css('display','none');
}