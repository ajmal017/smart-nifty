$(document).on('click','#runscan',function(){
	/**
		This Code Will Get The Data Of Heading Equation
		-----------------------------------------------
	**/
	var headingVal1_arr = [];
	var headingVal2_arr = [];
	var headingVal3_arr = [];

	var mainDivLength = $(".equvation").length;
	for(var i=1;i<=mainDivLength;i++)
	{
		var tmpHeadingVal1 = $(".equvation_"+i).find(".m1_span_"+i).text();
		var tmpHeadingVal2 = $(".equvation_"+i).find(".m2_span_"+i).text();
		var tmpHeadingVal3 = $(".equvation_"+i).find(".m3_span_"+i).text();

		headingVal1_arr.push(tmpHeadingVal1);
		headingVal2_arr.push(tmpHeadingVal2);
		headingVal3_arr.push(tmpHeadingVal3);
	}

	/**
		-------------------------------------------------
	**/
});