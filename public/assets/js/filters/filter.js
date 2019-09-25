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
										This is Rule 9 Script
===========================================================================================================
**/

$(document).on('click','#filterRule9',function(){
	$("#filterRule9").css('display','none');
	$("#filterRule9Select").css('display','');
});

$(document).on('change','#filterRule9Select',function(){
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


	$("#filterRuleChild9").text(selectedValue);
	$("#filterRule9").css('display','');
	$("#filterRule9Select").css('display','none');
});


/**
===========================================================================================================
===========================================================================================================
**/


/**
===========================================================================================================
										This is Rule 10 Script
===========================================================================================================
**/

$(document).on('click','#filterRule10',function(){
	$("#filterRule10").css('display','none');
	$("#filterRule10Select").css('display','');
});


$(document).on('change','#filterRule10Select',function(){
	var selectedValue = $("#filterRule10Select option:selected").html();
	//var selectedValue = $(this).val();

	if(selectedValue == "Latest(daily)" || selectedValue == "1 day ago" || selectedValue == "2 days ago" || selectedValue == "3 days ago" || selectedValue == "n days ago" || selectedValue == "Weekly" || selectedValue == "1 week ago" || selectedValue == "2 weeks ago" || selectedValue == "3 weeks ago" || selectedValue == "n weeks ago" || selectedValue == "Monthly" || selectedValue == "1 month ago" || selectedValue == "2 months ago" || selectedValue == "3 months ago" || selectedValue == "n moths ago")
	{
		if(selectedValue == "n days ago"){
			selectedValue = prompt("Enter Required offset, 1 offset equals 1 candle");
			selectedValue += " days ago";
			$("#filterRule9").css('display','none');
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
			$("#filterRule9").css('display','none');
		}
	}
	
	else
	{
		$("#filterRule9").css('display','');	
	}

	$("#filterRuleChild10").text(selectedValue);
	$("#filterRule10").css('display','');
	$("#filterRule10Select").css('display','none');
});

/**
===========================================================================================================
===========================================================================================================
**/

/**
===========================================================================================================
										This is Rule 11 Script
===========================================================================================================
**/

$(document).on('click','#filterRule11',function(){
	$("#filterRule11").css('display','none');
	$("#filterRule11Select").css('display','');
});

$(document).on('change','#filterRule11Select',function(){
	var selectedValue = $(this).val();

	$("#filterRuleChild11").text(selectedValue);
	$("#filterRule11").css('display','');
	$("#filterRule11Select").css('display','none');
});


/**
===========================================================================================================
===========================================================================================================
**/


/**
===========================================================================================================
										This is Rule 12 Script
===========================================================================================================
**/

$(document).on('click','#filterRule12',function(){
	$("#filterRule12").css('display','none');
	$("#filterRule12Select").css('display','');
});

$(document).on('change','#filterRule12Select',function(){
	var selectedValue = $(this).val();

	$("#filterRuleChild12").text(selectedValue);
	$("#filterRule12").css('display','');
	$("#filterRule12Select").css('display','none');
});


/**
===========================================================================================================
===========================================================================================================
**/


/**
===========================================================================================================
										This is Rule 13 Script
===========================================================================================================
**/

$(document).on('click','#filterRule13',function(){
	$("#filterRule13").css('display','none');
	$("#filterRule13Select").css('display','');
});

$(document).on('change','#filterRule13Select',function(){
	var selectedValue = $(this).val();

	$("#filterRuleChild13").text(selectedValue);
	$("#filterRule13").css('display','');
	$("#filterRule13Select").css('display','none');
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



/**
===========================================================================================================
							This is Rule-EQ 3 Script
===========================================================================================================
**/

$(document).on('click','#filterRuleeq3',function(){
	$("#filterRuleeq3").css('display','none');
	$("#filterRuleeq3Select").css('display','');
});

$(document).on('change','#filterRuleeq3Select',function(){
	var selectedValue = $(this).val();

	$("#filterRuleeqChild3").text(selectedValue);
	$("#filterRuleeq3").css('display','');
	$("#filterRuleeq3Select").css('display','none');
});



/**
===========================================================================================================
===========================================================================================================
**/



/**
===========================================================================================================
										This is Rule-EQ 4 Script
===========================================================================================================
**/

$(document).on('click','#filterRuleeq4',function(){
	$("#filterRuleeq4").css('display','none');
	$("#filterRuleeq4Select").css('display','');
});

$(document).on('change','#filterRuleeq4Select',function(){
	var selectedValue = $(this).val();

	$("#filterRuleeqChild4").text(selectedValue);
	$("#filterRuleeq4").css('display','');
	$("#filterRuleeq4Select").css('display','none');
});


/**
===========================================================================================================
===========================================================================================================
**/


/**
===========================================================================================================
										This is Rule-EQ 5 Script
===========================================================================================================
**/

$(document).on('click','#filterRuleeq5',function(){
	$("#filterRuleeq5").css('display','none');
	$("#filterRuleeq5Select").css('display','');
});

$(document).on('change','#filterRuleeq5Select',function(){
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


	$("#filterRuleeqChild5").text(selectedValue);
	$("#filterRuleeq5").css('display','');
	$("#filterRuleeq5Select").css('display','none');
});



/**
===========================================================================================================
===========================================================================================================
**/



/**
===========================================================================================================
										This is Rule-EQ 6 Script
===========================================================================================================
**/

$(document).on('click','#filterRuleeq6',function(){
	$("#filterRuleeq6").css('display','none');
	$("#filterRuleeq6Select").css('display','');
});


$(document).on('change','#filterRuleeq6Select',function(){
	var selectedValue = $("#filterRuleeq6Select option:selected").html();
	//var selectedValue = $(this).val();

	if(selectedValue == "Latest(daily)" || selectedValue == "1 day ago" || selectedValue == "2 days ago" || selectedValue == "3 days ago" || selectedValue == "n days ago" || selectedValue == "Weekly" || selectedValue == "1 week ago" || selectedValue == "2 weeks ago" || selectedValue == "3 weeks ago" || selectedValue == "n weeks ago" || selectedValue == "Monthly" || selectedValue == "1 month ago" || selectedValue == "2 months ago" || selectedValue == "3 months ago" || selectedValue == "n moths ago")
	{
		if(selectedValue == "n days ago"){
			selectedValue = prompt("Enter Required offset, 1 offset equals 1 candle");
			selectedValue += " days ago";
			$("#filterRuleeq5").css('display','none');
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
			$("#filterRuleeq5").css('display','none');
		}
	}
	
	else
	{
		$("#filterRuleeq5").css('display','');	
	}

	$("#filterRuleeqChild6").text(selectedValue);
	$("#filterRuleeq6").css('display','');
	$("#filterRuleeq6Select").css('display','none');
});


/**
===========================================================================================================
===========================================================================================================
**/


/**
===========================================================================================================
										This is Rule-EQ 7 Script
===========================================================================================================
**/

$(document).on('click','#filterRuleeq7',function(){
	$("#filterRuleeq7").css('display','none');
	$("#filterRuleeq7Select").css('display','');
});

$(document).on('change','#filterRuleeq7Select',function(){
	var selectedValue = $(this).val();

	$("#filterRuleeqChild7").text(selectedValue);
	$("#filterRuleeq7").css('display','');
	$("#filterRuleeq7Select").css('display','none');
});

/**
===========================================================================================================
===========================================================================================================
**/


/**
===========================================================================================================
										This is Rule-EQ 8 Script
===========================================================================================================
**/

$(document).on('click','#filterRuleeq8',function(){
	$("#filterRuleeq8").css('display','none');
	$("#filterRuleeq8Select").css('display','');
});

$(document).on('change','#filterRuleeq8Select',function(){
	var selectedValue = $(this).val();

	$("#filterRuleeqChild8").text(selectedValue);
	$("#filterRuleeq8").css('display','');
	$("#filterRuleeq8Select").css('display','none');
});

/**
===========================================================================================================
===========================================================================================================
**/