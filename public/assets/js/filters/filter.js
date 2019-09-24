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

/**
===========================================================================================================
===========================================================================================================
**/


/**
===========================================================================================================
										This is Rule 3 Script
===========================================================================================================
**/

$(document).on('click','#filterRule3',function(){
	$("#filterRule3").css('display','none');
	$("#filterRule3Select").css('display','');
});

$(document).on('change','#filterRule3Select',function(){
	var selectedValue = $(this).val();

	$("#filterRuleChild3").text(selectedValue);
	$("#filterRule3").css('display','');
	$("#filterRule3Select").css('display','none');
});


/**
===========================================================================================================
===========================================================================================================
**/



/**
===========================================================================================================
										This is Rule 4 Script
===========================================================================================================
**/

$(document).on('click','#filterRule4',function(){
	$("#filterRule4").css('display','none');
	$("#filterRule4Select").css('display','');
});

$(document).on('change','#filterRule4Select',function(){
	var selectedValue = $(this).val();

	$("#filterRuleChild4").text(selectedValue);
	$("#filterRule4").css('display','');
	$("#filterRule4Select").css('display','none');
});


/**
===========================================================================================================
===========================================================================================================
**/

/**
===========================================================================================================
										This is Rule 5 Script
===========================================================================================================
**/

$(document).on('click','#filterRule5',function(){
	$("#filterRule5").css('display','none');
	$("#filterRule5Select").css('display','');
});

$(document).on('change','#filterRule5Select',function(){
	var selectedValue = $(this).val();
	if(selectedValue == "n_candles_ago"){
		selectedValue = "-";
		selectedValue += prompt("Enter Required offset, 1 offset equals 1 candle");
	}
	else if(selectedValue == "nth_candle_of_day"){
		selectedValue = "=";
		selectedValue += prompt("Enter candle of a day, starting with 1");
	}
	else if(selectedValue == "nth_last_candle_of_previous_day"){
		selectedValue = "=-";
		selectedValue += prompt("Enter candle of previous day, the last candle referred as -1");
	}


	$("#filterRuleChild5").text(selectedValue);
	$("#filterRule5").css('display','');
	$("#filterRule5Select").css('display','none');
});


/**
===========================================================================================================
===========================================================================================================
**/



/**
===========================================================================================================
										This is Rule 6 Script
===========================================================================================================
**/

$(document).on('click','#filterRule6',function(){
	$("#filterRule6").css('display','none');
	$("#filterRule6Select").css('display','');
});


$(document).on('change','#filterRule6Select',function(){
	var selectedValue = $("#filterRule6Select option:selected").html();
	//var selectedValue = $(this).val();

	if(selectedValue == "Latest(daily)" || selectedValue == "1 day ago" || selectedValue == "2 days ago" || selectedValue == "3 days ago" || selectedValue == "n days ago" || selectedValue == "Weekly" || selectedValue == "1 week ago" || selectedValue == "2 weeks ago" || selectedValue == "3 weeks ago" || selectedValue == "n weeks ago" || selectedValue == "Monthly" || selectedValue == "1 month ago" || selectedValue == "2 months ago" || selectedValue == "3 months ago" || selectedValue == "n moths ago")
	{
		if(selectedValue == "n days ago"){
			selectedValue = prompt("Enter Required offset, 1 offset equals 1 candle");
			selectedValue += " days ago";
			$("#filterRule5").css('display','none');
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
			$("#filterRule5").css('display','none');
		}
	}
	
	else
	{
		$("#filterRule5").css('display','');	
	}

	$("#filterRuleChild6").text(selectedValue);
	$("#filterRule6").css('display','');
	$("#filterRule6Select").css('display','none');
});

/**
===========================================================================================================
===========================================================================================================
**/

/**
===========================================================================================================
										This is Rule 7 Script
===========================================================================================================
**/

$(document).on('click','#filterRule7',function(){
	$("#filterRule7").css('display','none');
	$("#filterRule7Select").css('display','');
});

$(document).on('change','#filterRule7Select',function(){
	var selectedValue = $(this).val();

	$("#filterRuleChild7").text(selectedValue);
	$("#filterRule7").css('display','');
	$("#filterRule7Select").css('display','none');
});


/**
===========================================================================================================
===========================================================================================================
**/

/**
===========================================================================================================
										This is Rule 8 Script
===========================================================================================================
**/

$(document).on('click','#filterRule8',function(){
	$("#filterRule8").css('display','none');
	$("#filterRule8Select").css('display','');
});

$(document).on('change','#filterRule8Select',function(){
	var selectedValue = $(this).val();

	$("#filterRuleChild8").text(selectedValue);
	$("#filterRule8").css('display','');
	$("#filterRule8Select").css('display','none');
});


/**
===========================================================================================================
===========================================================================================================
**/




/**
===========================================================================================================
							This is Rule-EQ 1 Script
===========================================================================================================
**/


$(document).on('click','#filterRuleeq1',function(){
	$("#filterRuleeq1").css('display','none');
	$("#filterRuleeq1Select").css('display','');
});


$(document).on('change','#filterRuleeq1Select',function(){
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
	$("#filterRuleeqChild1").text(selectedValue);
	$("#filterRuleeq1").css('display','');
	$("#filterRuleeq1Select").css('display','none');
});


/**
===========================================================================================================
===========================================================================================================
**/


/**
===========================================================================================================
							This is Rule-EQ 2 Script
===========================================================================================================
**/

$(document).on('click','#filterRuleeq2',function(){
	$("#filterRuleeq2").css('display','none');
	$("#filterRuleeq2Select").css('display','');
});


$(document).on('change','#filterRuleeq2Select',function(){
	var selectedValue = $("#filterRuleeq2Select option:selected").html();
	//var selectedValue = $(this).val();

	if(selectedValue == "Latest(daily)" || selectedValue == "1 day ago" || selectedValue == "2 days ago" || selectedValue == "3 days ago" || selectedValue == "n days ago" || selectedValue == "Weekly" || selectedValue == "1 week ago" || selectedValue == "2 weeks ago" || selectedValue == "3 weeks ago" || selectedValue == "n weeks ago" || selectedValue == "Monthly" || selectedValue == "1 month ago" || selectedValue == "2 months ago" || selectedValue == "3 months ago" || selectedValue == "n moths ago")
	{
		if(selectedValue == "n days ago"){
			selectedValue = prompt("Enter Required offset, 1 offset equals 1 candle");
			selectedValue += " days ago";
			$("#filterRuleeq2").css('display','none');
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
			$("#filterRuleeq1").css('display','none');
		}
	}
	
	else
	{
		$("#filterRuleeq1").css('display','');	
	}

	$("#filterRuleeqChild2").text(selectedValue);
	$("#filterRuleeq2").css('display','');
	$("#filterRuleeq2Select").css('display','none');
});


/**
===========================================================================================================
===========================================================================================================
**/