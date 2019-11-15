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

	//Pass all the Values with Or Condition Like Brackets in following first Condition
	if(currentSelectedValue == "brackets")
	{
		
		if(currentSelectedValue == "brackets")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');
			var fifth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fifth_element');
			var sixth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('sixth_element');


			var complete_appended_html = first_element + second_element + third_element + fourth_element + fifth_element + sixth_element;



			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element Before Dropdown
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".bracket_equation_div").css('display','inline-block');

			//Add Button Class & Calculator Class Dynamically
			$(".bracket_fifth_element_"+equationCounter+"_"+classCounter).addClass('btn btn-info btn-sm');
			$(".bracket_fifth_element_"+equationCounter+"_"+classCounter+" .fa").addClass('fa-calculator');
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