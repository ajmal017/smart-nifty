function span_click(span_no,element_name,element_counter)
{
	$("."+span_no+"_"+element_name+"_"+element_counter).css('display','none');
	$("#"+span_no+"_select"+"_"+element_counter).css('display','block');
}


function select_click(select_no,element_name,element_counter)
{
	var currentSelectedValue = $("#"+select_no+"_"+element_name+"_"+element_counter).val();
	$("."+select_no+"_span"+"_"+element_counter).text(currentSelectedValue);
	$("."+select_no+"_span"+"_"+element_counter).css('display','block');
	$("#"+select_no+"_"+element_name+"_"+element_counter).css('display','none');
}