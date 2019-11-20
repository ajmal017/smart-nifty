$( document ).ready(function() {
    $(".m2_bold").css({'color':'red','font-weight':'bold'});
    $(".m1_bold").css({'color':'red','font-weight':'bold'});
    $(".m3_bold").css({'color':'red','font-weight':'bold'});
});


//Function For Arithmatic Dropdown Click

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

/*$(document).on('blur','#filterRule3Div #closeDropdown',function(){
	closeDropDownBlur('filterRule3Div','filterRule3');
});


$(document).on('blur','".arith_dropdown_"+equationCounter+"_"+classCounter',function(){
	closeDropDownBlur('filterRule11Div','filterRule11');
});*/


/*function closeDropDownBlur(element_id,span_id)
{

	$("#"+element_id+" #"+span_id).css('display','');
	$("#"+element_id+" #closeDropdown").css('display','none');
}*/

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

			//Add font css
			$(".bracket_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
			$(".bracket_fourth_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}

	else if(currentSelectedValue == "min")
	{
		
		if(currentSelectedValue == "min")
		{	
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');
			var fifth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fifth_element');
			var sixth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('six_element');
			var seven_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('seven_element');
			var eight_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('eight_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element + fifth_element + sixth_element + seven_element + eight_element;

			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".min_equation_div").css('display','inline-block');

			//Add Button Class & Calculator Class Dynamically
			$(".min_seven_element_"+equationCounter+"_"+classCounter).addClass('btn btn-info btn-sm');
			$(".min_seven_element_"+equationCounter+"_"+classCounter+" .fa").addClass('fa-calculator');

			//Add font css
			$(".min_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
			$(".min_fourth_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
			$(".min_six_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});

		}
	}
	else if(currentSelectedValue == "max")
	{
		if(currentSelectedValue == "max")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');
			var fifth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fifth_element');
			var sixth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('six_element');
			var seven_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('seven_element');
			var eight_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('eight_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element + fifth_element + sixth_element + seven_element + eight_element;

			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".max_equation_div").css('display','inline-block');

			//Add Button Class & Calculator Class Dynamically
			$(".max_seven_element_"+equationCounter+"_"+classCounter).addClass('btn btn-info btn-sm');
			$(".max_seven_element_"+equationCounter+"_"+classCounter+" .fa").addClass('fa-calculator');

			//Add font css
			$(".max_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
			$(".max_fourth_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
			$(".max_six_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}

	}

	else if(currentSelectedValue == "abs")
	{
		if(currentSelectedValue == "abs")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');
			var fifth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fifth_element');
			var sixth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('six_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element + fifth_element + sixth_element;


			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".abs_equation_div").css('display','inline-block');

			//Add Button Class & Calculator Class Dynamically
			$(".abs_fifth_element_"+equationCounter+"_"+classCounter).addClass('btn btn-info btn-sm');
			$(".abs_fifth_element_"+equationCounter+"_"+classCounter+" .fa").addClass('fa-calculator');

			//Add font css
			$(".abs_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
			$(".abs_fourth_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});	
		}
	}
	else if(currentSelectedValue == "ceil")
	{
		if(currentSelectedValue == "ceil")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');
			var fifth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fifth_element');
			var sixth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('six_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element + fifth_element + sixth_element;


			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".ceil_equation_div").css('display','inline-block');

			//Add Button Class & Calculator Class Dynamically
			$(".ceil_fifth_element_"+equationCounter+"_"+classCounter).addClass('btn btn-info btn-sm');
			$(".ceil_fifth_element_"+equationCounter+"_"+classCounter+" .fa").addClass('fa-calculator');

			//Add font css
			$(".ceil_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
			$(".ceil_fourth_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});	
		}
	}
	else if(currentSelectedValue == "floor")
	{
		if(currentSelectedValue == "floor")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');
			var fifth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fifth_element');
			var sixth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('six_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element + fifth_element + sixth_element;


			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".floor_equation_div").css('display','inline-block');

			//Add Button Class & Calculator Class Dynamically
			$(".floor_fifth_element_"+equationCounter+"_"+classCounter).addClass('btn btn-info btn-sm');
			$(".floor_fifth_element_"+equationCounter+"_"+classCounter+" .fa").addClass('fa-calculator');

			//Add font css
			$(".floor_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
			$(".floor_fourth_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}	
	else if(currentSelectedValue == "round")
	{
		if(currentSelectedValue == "round")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');
			var fifth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fifth_element');
			var sixth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('six_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element + fifth_element + sixth_element;


			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".round_equation_div").css('display','inline-block');

			//Add Button Class & Calculator Class Dynamically
			$(".round_fifth_element_"+equationCounter+"_"+classCounter).addClass('btn btn-info btn-sm');
			$(".round_fifth_element_"+equationCounter+"_"+classCounter+" .fa").addClass('fa-calculator');

			//Add font css
			$(".round_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
			$(".round_fourth_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "square")
	{
		if(currentSelectedValue == "square")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');
			var fifth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fifth_element');
			var sixth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('six_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element + fifth_element + sixth_element;


			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".square_equation_div").css('display','inline-block');

			//Add Button Class & Calculator Class Dynamically
			$(".square_fifth_element_"+equationCounter+"_"+classCounter).addClass('btn btn-info btn-sm');
			$(".square_fifth_element_"+equationCounter+"_"+classCounter+" .fa").addClass('fa-calculator');

			//Add font css
			$(".square_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
			$(".square_fourth_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "square_root")
	{
		if(currentSelectedValue == "square_root")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');
			var fifth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fifth_element');
			var sixth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('six_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element + fifth_element + sixth_element;


			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".squareroot_equation_div").css('display','inline-block');

			//Add Button Class & Calculator Class Dynamically
			$(".squareroot_fifth_element_"+equationCounter+"_"+classCounter).addClass('btn btn-info btn-sm');
			$(".squareroot_fifth_element_"+equationCounter+"_"+classCounter+" .fa").addClass('fa-calculator');

			//Add font css
			$(".squareroot_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
			$(".squareroot_fourth_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "pivot_point")
	{
		if(currentSelectedValue == "pivot_point")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element; 

			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".pivotpoint_equation_div").css('display','inline-block');

			//Add font css
			$(".pivotpoint_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "pivot_point_r1")
	{
		if(currentSelectedValue == "pivot_point_r1")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element; 

			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".pivotpoint_r1_equation_div").css('display','inline-block');

			//Add font css
			$(".pivotpoint_r1_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "pivot_point_r2")
	{
		if(currentSelectedValue == "pivot_point_r2")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element; 

			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".pivotpoint_r2_equation_div").css('display','inline-block');

			//Add font css
			$(".pivotpoint_r2_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "pivot_point_s1")
	{
		if(currentSelectedValue == "pivot_point_s1")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element; 

			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".pivotpoint_s1_equation_div").css('display','inline-block');

			//Add font css
			$(".pivotpoint_s1_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "pivot_point_s2")
	{
		if(currentSelectedValue == "pivot_point_s2")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element; 

			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".pivotpoint_s2_equation_div").css('display','inline-block');

			//Add font css
			$(".pivotpoint_s2_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "sma")
	{
		if(currentSelectedValue == "sma")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');
			var fifth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fifth_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element + fifth_element;

			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".sma_equation_div").css('display','inline-block');

			//Add font css
			$(".sma_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "ema")
	{
		if(currentSelectedValue == "ema")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');
			var fifth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fifth_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element + fifth_element;

			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".ema_equation_div").css('display','inline-block');

			//Add font css
			$(".ema_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "wma")
	{
		if(currentSelectedValue == "wma")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');
			var fifth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fifth_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element + fifth_element;

			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".wma_equation_div").css('display','inline-block');

			//Add font css
			$(".wma_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "tma")
	{
		if(currentSelectedValue == "tma")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');
			var fifth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fifth_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element + fifth_element;

			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".tma_equation_div").css('display','inline-block');

			//Add font css
			$(".tma_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "stddva")
	{
		if(currentSelectedValue == "stddva")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');
			var fifth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fifth_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element + fifth_element;

			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".stddva_equation_div").css('display','inline-block');

			//Add font css
			$(".stddva_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "parabolic_sar")
	{
		if(currentSelectedValue == "parabolic_sar")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');
			var fifth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fifth_element');
			var sixth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('six_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element + fifth_element + sixth_element;

			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".parabolic_sar_equation_div").css('display','inline-block');

			//Add font css
			$(".parabolic_sar_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}	
	else if(currentSelectedValue == "upper_bb")
	{
		if(currentSelectedValue == "upper_bb")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');
			var fifth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fifth_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element + fifth_element;

			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".upper_bb_equation_div").css('display','inline-block');

			//Add font css
			$(".upper_bb_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "lower_bb")
	{
		if(currentSelectedValue == "lower_bb")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');
			var fifth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fifth_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element + fifth_element;

			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".lower_bb_equation_div").css('display','inline-block');

			//Add font css
			$(".lower_bb_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});

		}
	}
	else if(currentSelectedValue == "supertrend")
	{
		if(currentSelectedValue == "supertrend")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');
			var fifth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fifth_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element + fifth_element;

			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".supertrend_equation_div").css('display','inline-block');

			//Add font css
			$(".supertrend_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});

		}
	}
	else if(currentSelectedValue == "ichimoku_base")
	{
		if(currentSelectedValue == "ichimoku_base")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');
			var fifth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fifth_element');
			var sixth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('six_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element + fifth_element + sixth_element;

			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".ichimoku_base_equation_div").css('display','inline-block');

			//Add font css
			$(".ichimoku_base_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "ichimoku_conversion")
	{
		if(currentSelectedValue == "ichimoku_conversion")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');
			var fifth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fifth_element');
			var sixth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('six_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element + fifth_element + sixth_element;

			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".ichimoku_conversion_equation_div").css('display','inline-block');

			//Add font css
			$(".ichimoku_conversion_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "ichimoku_span_a")
	{
		if(currentSelectedValue == "ichimoku_span_a")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');
			var fifth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fifth_element');
			var sixth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('six_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element + fifth_element + sixth_element;

			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".ichimoku_span_a_equation_div").css('display','inline-block');

			//Add font css
			$(".ichimoku_span_a_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "ichimoku_span_b")
	{
		if(currentSelectedValue == "ichimoku_span_b")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');
			var fifth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fifth_element');
			var sixth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('six_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element + fifth_element + sixth_element;

			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".ichimoku_span_b_equation_div").css('display','inline-block');

			//Add font css
			$(".ichimoku_span_b_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "ichimoku_cloud_top")
	{
		if(currentSelectedValue == "ichimoku_cloud_top")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');
			var fifth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fifth_element');
			var sixth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('six_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element + fifth_element + sixth_element;

			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".ichimoku_cloud_top_equation_div").css('display','inline-block');

			//Add font css
			$(".ichimoku_cloud_top_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "ichimoku_cloud_bottom")
	{
		if(currentSelectedValue == "ichimoku_cloud_bottom")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');
			var fifth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fifth_element');
			var sixth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('six_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element + fifth_element + sixth_element;

			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".ichimoku_cloud_bottom_equation_div").css('display','inline-block');

			//Add font css
			$(".ichimoku_cloud_bottom_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "rsi")
	{
		if(currentSelectedValue == "rsi")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element;

			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".rsi_equation_div").css('display','inline-block');

			//Add font css
			$(".rsi_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "stochrsi")
	{
		if(currentSelectedValue == "stochrsi")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element;

			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".stochrsi_equation_div").css('display','inline-block');

			//Add font css
			$(".stochrsi_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "cci")
	{
		if(currentSelectedValue == "cci")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element;

			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".cci_equation_div").css('display','inline-block');

			//Add font css
			$(".cci_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "mfi")
	{
		if(currentSelectedValue == "mfi")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element;

			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".mfi_equation_div").css('display','inline-block');

			//Add font css
			$(".mfi_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "obv")
	{
		if(currentSelectedValue == "obv")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element; 

			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".obv_equation_div").css('display','inline-block');

			//Add font css
			$(".obv_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "williamsr")
	{
		if(currentSelectedValue == "williamsr")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element;

			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".williamsr_equation_div").css('display','inline-block');

			//Add font css
			$(".williamsr_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "macd_line")
	{
		if(currentSelectedValue == "macd_line")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');
			var fifth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fifth_element');
			var sixth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('six_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element + fifth_element + sixth_element;

			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".macd_line_equation_div").css('display','inline-block');

			//Add font css
			$(".macd_line_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "macd_signal")
	{
		if(currentSelectedValue == "macd_signal")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');
			var fifth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fifth_element');
			var sixth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('six_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element + fifth_element + sixth_element;

			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".macd_signal_equation_div").css('display','inline-block');

			//Add font css
			$(".macd_signal_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "macd_histogram")
	{
		if(currentSelectedValue == "macd_histogram")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');
			var fifth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fifth_element');
			var sixth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('six_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element + fifth_element + sixth_element;

			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".macd_histogram_equation_div").css('display','inline-block');

			//Add font css
			$(".macd_histogram_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "adx")
	{
		if(currentSelectedValue == "adx")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element;

			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".adx_equation_div").css('display','inline-block');

			//Add font css
			$(".adx_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "adx_di_positive")
	{
		if(currentSelectedValue == "adx_di_positive")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element;

			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".adx_di_positive_equation_div").css('display','inline-block');

			//Add font css
			$(".adx_di_positive_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "adx_di_negative")
	{
		if(currentSelectedValue == "adx_di_negative")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element;

			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".adx_di_negative_equation_div").css('display','inline-block');

			//Add font css
			$(".adx_di_negative_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "true_range")
	{
		if(currentSelectedValue == "true_range")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element;

			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".true_range_equation_div").css('display','inline-block');

			//Add font css
			$(".true_range_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "avg_true_range")
	{
		if(currentSelectedValue == "avg_true_range")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element;

			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".avg_true_range_equation_div").css('display','inline-block');

			//Add font css
			$(".avg_true_range_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "aroon_up")
	{
		if(currentSelectedValue == "aroon_up")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element;

			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".aroon_up_equation_div").css('display','inline-block');

			//Add font css
			$(".aroon_up_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "aroon_down")
	{
		if(currentSelectedValue == "aroon_down")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element;

			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".aroon_down_equation_div").css('display','inline-block');

			//Add font css
			$(".aroon_down_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "aroon_osc")
	{
		if(currentSelectedValue == "aroon_osc")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element;

			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".aroon_osc_equation_div").css('display','inline-block');

			//Add font css
			$(".aroon_osc_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "slow_stochastic_%k")
	{
		if(currentSelectedValue == "slow_stochastic_%k")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');
			var fifth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fifth_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element + fifth_element;

			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".slow_stochastic_k_equation_div").css('display','inline-block');

			//Add font css
			$(".slow_stochastic_k_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "slow_stochastic_%d")
	{
		if(currentSelectedValue == "slow_stochastic_%d")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');
			var fifth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fifth_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element + fifth_element;

			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".slow_stochastic_d_equation_div").css('display','inline-block');

			//Add font css
			$(".slow_stochastic_d_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "fast_stochastic_%k")
	{
		if(currentSelectedValue == "fast_stochastic_%k")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');
			var fifth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fifth_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element + fifth_element;

			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".fast_stochastic_k_equation_div").css('display','inline-block');

			//Add font css
			$(".fast_stochastic_k_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "fast_stochastic_%d")
	{
		if(currentSelectedValue == "fast_stochastic_%d")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');
			var fifth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fifth_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element + fifth_element;

			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".fast_stochastic_d_equation_div").css('display','inline-block');

			//Add font css
			$(".fast_stochastic_d_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "smi_%k")
	{
		if(currentSelectedValue == "smi_%k")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');
			var fifth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fifth_element');
			var sixth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('six_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element + fifth_element + sixth_element;

			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".smi_k_equation_div").css('display','inline-block');

			//Add font css
			$(".smi_k_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "smi_%d")
	{
		if(currentSelectedValue == "smi_%d")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');
			var fifth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fifth_element');
			var sixth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('six_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element + fifth_element + sixth_element;

			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".smi_d_equation_div").css('display','inline-block');

			//Add font css
			$(".smi_d_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "wavetrend")
	{
		if(currentSelectedValue == "wavetrend")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');
			var fifth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fifth_element');
			var sixth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('six_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element + fifth_element + sixth_element;

			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".wavetrend_equation_div").css('display','inline-block');

			//Add font css
			$(".wavetrend_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "wavetrend_trigger")
	{
		if(currentSelectedValue == "wavetrend_trigger")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');
			var fifth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fifth_element');
			var sixth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('six_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element + fifth_element + sixth_element;

			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".wavetrend_trigger_equation_div").css('display','inline-block');

			//Add font css
			$(".wavetrend_trigger_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "wavetrend_momentum")
	{
		if(currentSelectedValue == "wavetrend_momentum")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');
			var second_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('second_element');
			var third_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('third_element');
			var fourth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fourth_element');
			var fifth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('fifth_element');
			var sixth_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('six_element');

			var complete_appended_html = first_element + second_element + third_element + fourth_element + fifth_element + sixth_element;

			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".wavetrend_momentum_equation_div").css('display','inline-block');

			//Add font css
			$(".wavetrend_momentum_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
/*------------------------------------------------------------	*/


	else if(currentSelectedValue == "face_value")
	{
		if(currentSelectedValue == "face_value")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element; 

			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".face_value_equation_div").css('display','inline-block');

			//Add font css
			$(".face_value_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "reserves")
	{
		if(currentSelectedValue == "reserves")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element; 

			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".reserves_equation_div").css('display','inline-block');

			//Add font css
			$(".reserves_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "dividend")
	{
		if(currentSelectedValue == "dividend")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element; 

			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".dividend_equation_div").css('display','inline-block');

			//Add font css
			$(".dividend_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "book_value")
	{
		if(currentSelectedValue == "book_value")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element; 

			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".book_value_equation_div").css('display','inline-block');

			//Add font css
			$(".book_value_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "yearly_pe_ratio")
	{
		if(currentSelectedValue == "yearly_pe_ratio")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element; 

			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".yearly_pe_ratio_equation_div").css('display','inline-block');

			//Add font css
			$(".yearly_pe_ratio_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "yearly_pc_ratio")
	{
		if(currentSelectedValue == "yearly_pc_ratio")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element; 

			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".yearly_pc_ratio_equation_div").css('display','inline-block');

			//Add font css
			$(".yearly_pc_ratio_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "sales_turnover")
	{
		if(currentSelectedValue == "sales_turnover")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element; 

			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".sales_turnover_equation_div").css('display','inline-block');

			//Add font css
			$(".sales_turnover_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "net_profit")
	{
		if(currentSelectedValue == "net_profit")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element; 

			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".net_profit_equation_div").css('display','inline-block');

			//Add font css
			$(".net_profit_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "var")
	{
		if(currentSelectedValue == "var")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element; 

			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".var_equation_div").css('display','inline-block');

			//Add font css
			$(".var_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "net_profithy")
	{
		if(currentSelectedValue == "net_profithy")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element; 

			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".net_profithy_equation_div").css('display','inline-block');

			//Add font css
			$(".net_profithy_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "net_profitvhy")
	{
		if(currentSelectedValue == "net_profitvhy")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element; 

			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".net_profitvhy_equation_div").css('display','inline-block');

			//Add font css
			$(".net_profitvhy_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "earning_per_share")
	{
		if(currentSelectedValue == "earning_per_share")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element; 

			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".earning_per_share_equation_div").css('display','inline-block');

			//Add font css
			$(".earning_per_share_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "p_earning_per_share")
	{
		if(currentSelectedValue == "p_earning_per_share")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element; 

			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".p_earning_per_share_equation_div").css('display','inline-block');

			//Add font css
			$(".p_earning_per_share_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "full_year_cps")
	{
		if(currentSelectedValue == "full_year_cps")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element; 

			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".full_year_cps_equation_div").css('display','inline-block');

			//Add font css
			$(".full_year_cps_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "quarter_cps")
	{
		if(currentSelectedValue == "quarter_cps")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element; 

			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".quarter_cps_equation_div").css('display','inline-block');

			//Add font css
			$(".quarter_cps_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "month_cps")
	{
		if(currentSelectedValue == "month_cps")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element; 

			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".month_cps_equation_div").css('display','inline-block');

			//Add font css
			$(".month_cps_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "latest_quarter_sales")
	{
		if(currentSelectedValue == "latest_quarter_sales")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element; 

			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".latest_quarter_sales_equation_div").css('display','inline-block');

			//Add font css
			$(".latest_quarter_sales_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "pvbv")
	{
		if(currentSelectedValue == "pvbv")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element; 

			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".pvbv_equation_div").css('display','inline-block');

			//Add font css
			$(".pvbv_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "Networth")
	{
		if(currentSelectedValue == "Networth")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element; 

			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".Networth_equation_div").css('display','inline-block');

			//Add font css
			$(".Networth_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "bval")
	{
		if(currentSelectedValue == "bval")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element; 

			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".bval_equation_div").css('display','inline-block');

			//Add font css
			$(".bval_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "nval")
	{
		if(currentSelectedValue == "nval")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element; 

			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".nval_equation_div").css('display','inline-block');

			//Add font css
			$(".nval_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "market_cap")
	{
		if(currentSelectedValue == "market_cap")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element; 

			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".market_cap_equation_div").css('display','inline-block');

			//Add font css
			$(".market_cap_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "latopm")
	{
		if(currentSelectedValue == "latopm")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element; 

			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".latopm_equation_div").css('display','inline-block');

			//Add font css
			$(".latopm_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "lathyopm")
	{
		if(currentSelectedValue == "lathyopm")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element; 

			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".lathyopm_equation_div").css('display','inline-block');

			//Add font css
			$(".lathyopm_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "latgpm")
	{
		if(currentSelectedValue == "latgpm")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element; 

			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".latgpm_equation_div").css('display','inline-block');

			//Add font css
			$(".latgpm_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "gross_block")
	{
		if(currentSelectedValue == "gross_block")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element; 

			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".gross_block_equation_div").css('display','inline-block');

			//Add font css
			$(".gross_block_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "totoloan")
	{
		if(currentSelectedValue == "totoloan")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element; 

			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".totoloan_equation_div").css('display','inline-block');

			//Add font css
			$(".totoloan_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}

	else if(currentSelectedValue == "advance_given_by_bank")
	{
		if(currentSelectedValue == "advance_given_by_bank")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element; 

			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".advance_given_by_bank_equation_div").css('display','inline-block');

			//Add font css
			$(".advance_given_by_bank_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "net_profit_asset")
	{
		if(currentSelectedValue == "net_profit_asset")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element; 

			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".net_profit_asset_equation_div").css('display','inline-block');

			//Add font css
			$(".net_profit_asset_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "trailing_twelve_months_sales")
	{
		if(currentSelectedValue == "trailing_twelve_months_sales")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element; 

			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".trailing_twelve_months_sales_equation_div").css('display','inline-block');

			//Add font css
			$(".trailing_twelve_months_sales_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "trailing_twelve_month_op")
	{
		if(currentSelectedValue == "trailing_twelve_month_op")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element; 

			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".trailing_twelve_month_op_equation_div").css('display','inline-block');

			//Add font css
			$(".trailing_twelve_month_op_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "trailing_twelve_months_opm")
	{
		if(currentSelectedValue == "trailing_twelve_months_opm")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element; 

			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".trailing_twelve_months_opm_equation_div").css('display','inline-block');

			//Add font css
			$(".trailing_twelve_months_opm_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "trailing_twelve_month_gp")
	{
		if(currentSelectedValue == "trailing_twelve_month_gp")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element; 

			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".trailing_twelve_month_gp_equation_div").css('display','inline-block');

			//Add font css
			$(".trailing_twelve_month_gp_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "trailing_twelve_month_gpm")
	{
		if(currentSelectedValue == "trailing_twelve_month_gpm")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element; 

			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".trailing_twelve_month_gpm_equation_div").css('display','inline-block');

			//Add font css
			$(".trailing_twelve_month_gpm_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "trailing_twelve_months_np")
	{
		if(currentSelectedValue == "trailing_twelve_months_np")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element; 

			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".trailing_twelve_months_np_equation_div").css('display','inline-block');

			//Add font css
			$(".trailing_twelve_months_np_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "trailing_twelve_months_npv")
	{
		if(currentSelectedValue == "trailing_twelve_months_npv")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element; 

			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".trailing_twelve_months_npv_equation_div").css('display','inline-block');

			//Add font css
			$(".trailing_twelve_months_npv_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "trailing_twelve_month_eps")
	{
		if(currentSelectedValue == "trailing_twelve_month_eps")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element; 

			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".trailing_twelve_month_eps_equation_div").css('display','inline-block');

			//Add font css
			$(".trailing_twelve_month_eps_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "trailing_twelve_month_pe")
	{
		if(currentSelectedValue == "trailing_twelve_month_pe")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element; 

			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".trailing_twelve_month_pe_equation_div").css('display','inline-block');

			//Add font css
			$(".trailing_twelve_month_pe_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "trailing_twelve_month_cps")
	{
		if(currentSelectedValue == "trailing_twelve_month_cps")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element; 

			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".trailing_twelve_month_cps_equation_div").css('display','inline-block');

			//Add font css
			$(".trailing_twelve_month_cps_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
		}
	}
	else if(currentSelectedValue == "latest_ttmdepreciation")
	{
		if(currentSelectedValue == "latest_ttmdepreciation")
		{
			var first_element = $(".open_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element;

			$(".timing_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-2)).css('display','none');
			$(".open_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');

			//Add Element
			$(".open_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".latest_ttmdepreciation_equation_div").css('display','inline-block');

			//Add font css
			$(".latest_ttmdepreciation_first_element_"+equationCounter+"_"+classCounter).css({'color':'#000','font-weight':'bold'});
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

	var currentSelectedValue = $(".timing_filter_dropdown_"+equationCounter+"_"+classCounter).val();

	
	if(currentSelectedValue == "Latest")
	{
		if(currentSelectedValue == "Latest")
		{
			var first_element = $(".timing_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element;

			$(".timing_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".timing_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');

			//Add Element
			$(".timing_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".Latest_equation_div").css('display','inline-block');
		}
	}

	else if(currentSelectedValue == "1_dayago")
	{
		if(currentSelectedValue == "1_dayago")
		{
			var first_element = $(".timing_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element;

			$(".timing_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".timing_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');

			//Add Element
			$(".timing_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".1_dayago_equation_div").css('display','inline-block');
		}
	}
	else if(currentSelectedValue == "2_dayago")
	{
		if(currentSelectedValue == "2_dayago")
		{
			var first_element = $(".timing_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element;

			$(".timing_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".timing_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');

			//Add Element
			$(".timing_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".2_dayago_equation_div").css('display','inline-block');
		}
	}
	else if(currentSelectedValue == "3_dayago")
	{
		if(currentSelectedValue == "3_dayago")
		{
			var first_element = $(".timing_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element;

			$(".timing_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".timing_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');

			//Add Element
			$(".timing_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".3_dayago_equation_div").css('display','inline-block');
		}
	}
	
	else if(currentSelectedValue == "n_dayago")
	{
		if(currentSelectedValue == "n_dayago")
		{
			var entered_value = prompt("Enter Required Offset, 1 offset equals 1 candle");

			$(".timing_filter_label_"+equationCounter+"_"+classCounter).text(entered_value+" "+"days ago");
			
			$(".timing_filter_label_"+equationCounter+"_"+classCounter).css('display','');
			$(".timing_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');

		}
	}

	else if(currentSelectedValue == "Weekly")
	{
		if(currentSelectedValue == "Weekly")
		{
			var first_element = $(".timing_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element;

			$(".timing_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".timing_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');

			//Add Element
			$(".timing_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".Weekly_equation_div").css('display','inline-block');
		}
	}

	else if(currentSelectedValue == "1_weekago")
	{
		if(currentSelectedValue == "1_weekago")
		{
			var first_element = $(".timing_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element;

			$(".timing_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".timing_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');

			//Add Element
			$(".timing_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".1_weekago_equation_div").css('display','inline-block');
		}
	}

	else if(currentSelectedValue == "2_weekago")
	{
		if(currentSelectedValue == "2_weekago")
		{
			var first_element = $(".timing_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element;

			$(".timing_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".timing_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');

			//Add Element
			$(".timing_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".2_weekago_equation_div").css('display','inline-block');
		}
	}

	else if(currentSelectedValue == "3_weekago")
	{
		if(currentSelectedValue == "3_weekago")
		{
			var first_element = $(".timing_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element;

			$(".timing_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".timing_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');

			//Add Element
			$(".timing_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".3_weekago_equation_div").css('display','inline-block');
		}
	}

	else if(currentSelectedValue == "n_weekago")
	{
		if(currentSelectedValue == "n_weekago")
		{
			var entered_value = prompt("Enter Required Offset, 1 offset equals 1 candle");

			$(".timing_filter_label_"+equationCounter+"_"+classCounter).text(entered_value+" "+"week ago");
			
			$(".timing_filter_label_"+equationCounter+"_"+classCounter).css('display','');
			$(".timing_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
		}
	}

	else if(currentSelectedValue == "Monthly")
	{
		if(currentSelectedValue == "Monthly")
		{
			var first_element = $(".timing_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element;

			$(".timing_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".timing_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');

			//Add Element
			$(".timing_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".Monthly_equation_div").css('display','inline-block');
		}
	}

	else if(currentSelectedValue == "1_monthago")
	{
		if(currentSelectedValue == "1_monthago")
		{
			var first_element = $(".timing_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element;

			$(".timing_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".timing_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');

			//Add Element
			$(".timing_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".1_monthago_equation_div").css('display','inline-block');
		}
	}

	else if(currentSelectedValue == "2_monthago")
	{
		if(currentSelectedValue == "2_monthago")
		{
			var first_element = $(".timing_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element;

			$(".timing_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".timing_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');

			//Add Element
			$(".timing_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".2_monthago_equation_div").css('display','inline-block');
		}
	}

	else if(currentSelectedValue == "3_monthago")
	{
		if(currentSelectedValue == "3_monthago")
		{
			var first_element = $(".timing_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").data('first_element');

			var complete_appended_html = first_element;

			$(".timing_filter_label_"+equationCounter+"_"+classCounter).css('display','none');
			$(".timing_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');

			//Add Element
			$(".timing_filter_dropdown_"+equationCounter+"_"+classCounter).before(complete_appended_html);
			$(".3_monthago_equation_div").css('display','inline-block');
		}
	}

	else if(currentSelectedValue == "n_monthago")
	{
		if(currentSelectedValue == "n_monthago")
		{
			var entered_value = prompt("Enter Required Offset, 1 offset equals 1 candle");

			$(".timing_filter_label_"+equationCounter+"_"+classCounter).text(entered_value+" "+"months ago");
			
			$(".timing_filter_label_"+equationCounter+"_"+classCounter).css('display','');
			$(".timing_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');
			$(".numeric_filter_label_"+equationCounter+"_"+(classCounter-1)).css('display','none');
		}
	}
	else
	{
		$(".timing_filter_label_"+equationCounter+"_"+classCounter).text(currentValue);
		$(".timing_filter_label_"+equationCounter+"_"+classCounter).css('display','');
		$(".timing_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');	
	}

		
}

/*var currentValue = $(".numeric_filter_dropdown_"+equationCounter+"_"+classCounter+" option:selected").text();

	var currentSelectedValue = $(".numeric_filter_dropdown_"+equationCounter+"_"+classCounter).val();

	if(currentSelectedValue == "-n")
	{
		var entered_value = prompt("Enter Required Offset, 1 offset equals 1 candle");
		$(".numeric_filter_label_"+equationCounter+"_"+classCounter).text("["+"-"+entered_value+"]");
		$(".numeric_filter_label_"+equationCounter+"_"+classCounter).css('display','');
		$(".numeric_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');		
	}

else
	{
		$(".numeric_filter_label_"+equationCounter+"_"+classCounter).text("["+currentValue+"]");
		$(".numeric_filter_label_"+equationCounter+"_"+classCounter).css('display','');
		$(".numeric_filter_dropdown_"+equationCounter+"_"+classCounter).css('display','none');	
	}*/


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