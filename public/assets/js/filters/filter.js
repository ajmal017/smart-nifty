/**
===========================================================================================================
							This is Rule1 Script
===========================================================================================================
**/


$(document).on('click','#filterRule1',function(){
	$("#filterRule1").css('display','none');
	$("#filterRule1Select").css('display','');
	$("#filterRule1Select").focus();
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

$(document).on('blur','#filterRule1Select',function(){
	$("#filterRule1").css('display','');
	$("#filterRule1Select").css('display','none');
})


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
	$("#filterRule2Select").focus();
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


$(document).on('blur','#filterRule2Select',function(){
	$("#filterRule2").css('display','');
	$("#filterRule2Select").css('display','none');
})



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
	$("#filterRule3Select").focus();
});

$(document).on('change','#filterRule3Select',function(){
	var selectedValue = $(this).val();
	var selVal = $(this).val();

	if(selVal == "brackets"){
		$("#filterRule3Div").css('display','');
		$("#filterRule3").css('display','none');
	}

	$("#filterRuleChild3").text(selectedValue);
	$("#filterRule3").css('display','');
	$("#filterRule3Select").css('display','none');
});


$(document).on('blur','#filterRule3Select',function(){
	$("#filterRule3").css('display','');
	$("#filterRule3Select").css('display','none');
})



/**----------------------- Sub Start --------------- **/ 






$(document).on('click','#filterRule3sub1',function(){
	$("#filterRule3sub1").css('display','none');
	$("#filterRule3sub1Select").css('display','');
	$("#filterRule3sub1Select").focus();
});


$(document).on('change','#filterRule3sub1Select',function(){
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
	$("#filterRuleChild3sub1").text(selectedValue);
	$("#filterRule3sub1").css('display','');
	$("#filterRule3sub1Select").css('display','none');
});

$(document).on('blur','#filterRule1Select',function(){
	$("#filterRule3sub1").css('display','');
	$("#filterRule1Select").css('display','none');
})

	





$(document).on('click','#filterRule3sub2',function(){
	$("#filterRule3sub2").css('display','none');
	$("#filterRule3sub2Select").css('display','');
	$("#filterRule3sub2Select").focus();
});


$(document).on('change','#filterRule3sub2Select',function(){
	var selectedValue = $("#filterRule3sub2Select option:selected").html();
	//var selectedValue = $(this).val();

	if(selectedValue == "Latest(daily)" || selectedValue == "1 day ago" || selectedValue == "2 days ago" || selectedValue == "3 days ago" || selectedValue == "n days ago" || selectedValue == "Weekly" || selectedValue == "1 week ago" || selectedValue == "2 weeks ago" || selectedValue == "3 weeks ago" || selectedValue == "n weeks ago" || selectedValue == "Monthly" || selectedValue == "1 month ago" || selectedValue == "2 months ago" || selectedValue == "3 months ago" || selectedValue == "n moths ago")
	{
		if(selectedValue == "n days ago"){
			selectedValue = prompt("Enter Required offset, 1 offset equals 1 candle");
			selectedValue += " days ago";
			$("#filterRule3sub1").css('display','none');
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
			$("#filterRule3sub1").css('display','none');
		}
	}
	
	else
	{
		$("#filterRule3sub1").css('display','');	
	}

	$("#filterRuleChild3sub2").text(selectedValue);
	$("#filterRule3sub2").css('display','');
	$("#filterRule3sub2Select").css('display','none');
});


$(document).on('blur','#filterRule3sub2Select',function(){
	$("#filterRule3sub2").css('display','');
	$("#filterRule3sub2Select").css('display','none');
})




$(document).on('click','#filterRule3sub3',function(){
	$("#filterRule3sub3").css('display','none');
	$("#filterRule3sub3Select").css('display','');
	$("#filterRule3sub3Select").focus();
});

$(document).on('change','#filterRule3sub3Select',function(){
	var selectedValue = $(this).val();

	$("#filterRuleChild3sub3").text(selectedValue);
	$("#filterRule3sub3").css('display','');
	$("#filterRule3sub3Select").css('display','none');
});


$(document).on('blur','#filterRule3sub3Select',function(){
	$("#filterRule3sub3").css('display','');
	$("#filterRule3sub3Select").css('display','none');
})

	




$(document).on('click','#filterRule3sub4',function(){
	$("#filterRule3sub4").css('display','none');
	$("#filterRule3sub4Select").css('display','');
	$("#filterRule3sub4Select").focus();
});

$(document).on('change','#filterRule3sub4Select',function(){
	var selectedValue = $(this).val();

	$("#filterRuleChild3sub4").text(selectedValue);
	$("#filterRule3sub4").css('display','');
	$("#filterRule3sub4Select").css('display','none');
});


$(document).on('blur','#filterRule3sub4Select',function(){
	$("#filterRule3sub4").css('display','');
	$("#filterRule3sub4Select").css('display','none');
});



$(document).on('click','#brackets',function(){

	$("#filterRule3sub1Div").css('display','');
	$("#filterRule3sub1Div").focus();

	$("#filterRule1Div").css('display','none');
	$("#filterRule2Div").css('display','none');
	

});








/** ----------------- Sub End ------------------ **/


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
	$("#filterRule4Select").focus();
});

$(document).on('change','#filterRule4Select',function(){
	var selectedValue = $(this).val();

	$("#filterRuleChild4").text(selectedValue);
	$("#filterRule4").css('display','');
	$("#filterRule4Select").css('display','none');
});

$(document).on('blur','#filterRule4Select',function(){
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
	$("#filterRule5Select").focus();
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



$(document).on('blur','#filterRule5Select',function(){
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
	$("#filterRule6Select").focus();
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


$(document).on('blur','#filterRule6Select',function(){
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
	$("#filterRule7Select").focus();
});

$(document).on('change','#filterRule7Select',function(){
	var selectedValue = $(this).val();

	$("#filterRuleChild7").text(selectedValue);
	$("#filterRule7").css('display','');
	$("#filterRule7Select").css('display','none');
});


$(document).on('blur','#filterRule7Select',function(){
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

$(document).on('click','#filterRuleChild8',function(){
	$("#filterRuleChild8").css('display','none');
	$("#filterRule8mid1input").css('display','');
	$("#filterRule8mid1input").focus();
});

$(document).on('blur','#filterRule8mid1input',function(){
	var selectedValue = $(this).val();
	$("#filterRuleChild8").text(selectedValue);
	$("#filterRuleChild8").css('display','');
	$("#filterRule8mid1input").css('display','none');
});


$(document).on('blur','#filterRule8mid1input',function(){
	$("#filterRuleChild8").css('display','');
	$("#filterRule8mid1input").css('display','none');
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
	$("#filterRule9Select").focus();
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


$(document).on('blur','#filterRule9Select',function(){
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
	$("#filterRule10Select").focus();
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


$(document).on('blur','#filterRule10Select',function(){
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
	$("#filterRule11Select").focus();
});

$(document).on('change','#filterRule11Select',function(){
	var selectedValue = $(this).val();

	$("#filterRuleChild11").text(selectedValue);
	$("#filterRule11").css('display','');
	$("#filterRule11Select").css('display','none');
});

$(document).on('blur','#filterRule11Select',function(){
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
	$("#filterRule12Select").focus();
});

$(document).on('change','#filterRule12Select',function(){
	var selectedValue = $(this).val();

	$("#filterRuleChild12").text(selectedValue);
	$("#filterRule12").css('display','');
	$("#filterRule12Select").css('display','none');
});


$(document).on('blur','#filterRule12Select',function(){
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
	$("#filterRule13Select").focus();
});

$(document).on('change','#filterRule13Select',function(){
	var selectedValue = $(this).val();

	$("#filterRuleChild13").text(selectedValue);
	$("#filterRule13").css('display','');
	$("#filterRule13Select").css('display','none');
});


$(document).on('blur','#filterRule13Select',function(){
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
	$("#filterRuleeq1Select").focus();
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


$(document).on('blur','#filterRuleeq1Select',function(){
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
	$("#filterRuleeq2Select").focus();
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


$(document).on('blur','#filterRuleeq2Select',function(){
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
	$("#filterRuleeq3Select").focus();
});

$(document).on('change','#filterRuleeq3Select',function(){
	var selectedValue = $(this).val();

	$("#filterRuleeqChild3").text(selectedValue);
	$("#filterRuleeq3").css('display','');
	$("#filterRuleeq3Select").css('display','none');
});


$(document).on('blur','#filterRuleeq3Select',function(){
	$("#filterRuleeq3").css('display','');
	$("#filterRuleeq3Select").css('display','none');
})


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
	$("#filterRuleeq4Select").focus();
});

$(document).on('change','#filterRuleeq4Select',function(){
	var selectedValue = $(this).val();

	$("#filterRuleeqChild4").text(selectedValue);
	$("#filterRuleeq4").css('display','');
	$("#filterRuleeq4Select").css('display','none');
});


$(document).on('blur','#filterRuleeq4Select',function(){
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
	$("#filterRuleeq5Select").focus();
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

$(document).on('blur','#filterRuleeq5Select',function(){
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
	$("#filterRuleeq6Select").focus();
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


$(document).on('blur','#filterRuleeq6Select',function(){
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
	$("#filterRuleeq7Select").focus();
});

$(document).on('change','#filterRuleeq7Select',function(){
	var selectedValue = $(this).val();

	$("#filterRuleeqChild7").text(selectedValue);
	$("#filterRuleeq7").css('display','');
	$("#filterRuleeq7Select").css('display','none');
});


$(document).on('blur','#filterRuleeq7Select',function(){
	$("#filterRuleeq7").css('display','');
	$("#filterRuleeq7Select").css('display','none');
});

/**
===========================================================================================================
===========================================================================================================
**/




/**
===========================================================================================================
										This is Rule-EQ 7 Mid Script (For Textbox)
===========================================================================================================
**/

$(document).on('click','#filterRuleeq7mid1',function(){
	$("#filterRuleeq7mid1").css('display','none');
	$("#filterRuleeq7mid1input").css('display','');
	$("#filterRuleeq7mid1input").focus();
});

$(document).on('blur','#filterRuleeq7mid1input',function(){
	var selectedValue = $(this).val();
	$("#filterRuleeq7mid1").text(selectedValue);
	$("#filterRuleeq7mid1").css('display','');
	$("#filterRuleeq7mid1input").css('display','none');
});


$(document).on('blur','#filterRuleeq7mid1input',function(){
	$("#filterRuleeq7mid1").css('display','');
	$("#filterRuleeq7mid1input").css('display','none');
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
	$("#filterRuleeq8Select").focus();
});

$(document).on('change','#filterRuleeq8Select',function(){
	var selectedValue = $(this).val();

	$("#filterRuleeqChild8").text(selectedValue);
	$("#filterRuleeq8").css('display','');
	$("#filterRuleeq8Select").css('display','none');
});

$(document).on('blur','#filterRuleeq8Select',function(){
	$("#filterRuleeq8").css('display','');
	$("#filterRuleeq8Select").css('display','none');
});

/**
===========================================================================================================
===========================================================================================================
**/