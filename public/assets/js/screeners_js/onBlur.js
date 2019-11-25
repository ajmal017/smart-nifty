//Function For Arithmatic Dropdown Blur Function

function arith_dropdown_blur(equation_counter,class_counter)
{
	$(".arith_dropdown_"+equation_counter+"_"+class_counter).css('display','none');
	$(".arith_label_"+equation_counter+"_"+class_counter).css('display','inline-block');
}


function numeric_filter_dropdown_blur(equation_counter,class_counter)
{
	$(".numeric_filter_dropdown_"+equation_counter+"_"+class_counter).css('display','none');
	$(".numeric_filter_label_"+equation_counter+"_"+class_counter).css('display','inline-block');	
}