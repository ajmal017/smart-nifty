/**
===========================================================================================================
							This is Rule1 Script
===========================================================================================================
**/


$(document).on('click','#filterRule1',function(){
	$("#filterRule1").css('display','none');
	$("#filterRule1Select").css('display','');
});


$(document).on('change','#filterRule1Select',function(){
	var selectedValue = $(this).val();
	if(selectedValue == "-n"){
		selectedValue = "-";
		selectedValue += prompt("Enter Required offset, 1 offset equals 1 candle");
	}
	$("#filterRuleChild1").text(selectedValue);
	$("#filterRule1").css('display','');
	$("#filterRule1Select").css('display','none');
});




/**
===========================================================================================================
===========================================================================================================
**/







/**
===========================================================================================================
										This is Rule 2 Script
===========================================================================================================
**/

$(document).on('click','#filterRule2',function(){
	$("#filterRule2").css('display','none');
	$("#filterRule2Select").css('display','');
});


$(document).on('change','#filterRule2Select',function(){
	var selectedValue = $("#filterRule2Select option:selected").html();
	$("#filterRuleChild2").text(selectedValue);
	$("#filterRule2").css('display','');
	$("#filterRule2Select").css('display','none');
});

