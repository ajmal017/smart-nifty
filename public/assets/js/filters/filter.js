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
	else if(selectedValue == "=n"){
		selectedValue = "=";
		selectedValue += prompt("Enter candle of a day, starting with 1");
	}
	else if(selectedValue == "=-n"){
		selectedValue = "=-";
		selectedValue += prompt("Enter candle of previous day, the last candle referred as -1");
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
	//var selectedValue = $(this).val();

	if(selectedValue == "Latest(daily)" || selectedValue == "1 day ago" || selectedValue == "2 days ago" || selectedValue == "3 days ago" || selectedValue == "n days ago" || selectedValue == "Weekly" || selectedValue == "1 week ago" || selectedValue == "2 weeks ago" || selectedValue == "3 weeks ago" || selectedValue == "n weeks ago" || selectedValue == "Monthly" || selectedValue == "1 month ago" || selectedValue == "2 months ago" || selectedValue == "3 months ago" || selectedValue == "n moths ago")
	{
		if(selectedValue == "n days ago"){
			selectedValue = prompt("Enter Required offset, 1 offset equals 1 candle");
			selectedValue += " days ago";
			$("#filterRule1").css('display','none');
		}
		else if(selectedValue == "n weeks ago"){
			selectedValue = prompt("Enter Required offset, 1 offset equals 1 candle");
			selectedValue += " weeks ago";
		}
		else if(selectedValue == "n moths ago"){
			selectedValue = prompt("Enter Required offset, 1 offset equals 1 candle");
			selectedValue += " moths ago";
		}
		else{
			$("#filterRule1").css('display','none');
		}
	}
	
	else
	{
		$("#filterRule1").css('display','');	
	}

	$("#filterRuleChild2").text(selectedValue);
	$("#filterRule2").css('display','');
	$("#filterRule2Select").css('display','none');
});

