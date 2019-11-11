Candle Stick Patterns Scan
--------------------------
	1) 15 Minute Stock Breakouts

		Heading Equation
		================
		m1:passes,m2:all,m3:cash

		Main Equation
		=============
		b1:0,d1:15_minute,c1:close,a1:greater_than,b1:-1,d1:15_minute,c1:max,other:(,other:customtxt_20_,',b1:0,d1:15_minute,c1:close,arith,other:),arith==b1:0,d1:15_minute,c1:volume,a1:greater_than,b1:0,d1:15_minute,c1:sma,other:(,other:customtxt_volume_20,other:),arith


		Insert Query
		============
		INSERT INTO screeners_equation(screener_name , heading_equation , screener_equation) VALUES(
		'15-Minute-Stock-Breakouts',
		'm1:passes,m2:all,m3:cash',
		'b1:0,d1:15_minute,c1:close,a1:greater_than,b1:-1,d1:15_minute,c1:max,other:(,other:customtxt_20_,',b1:0,d1:15_minute,c1:close,arith,other:),arith==b1:0,d1:15_minute,c1:volume,a1:greater_than,b1:0,d1:15_minute,c1:sma,other:(,other:customtxt_volume_20,other:),arith');


---------------------------------------------------------------------------------------------------------------------------		

	2) Short Term Breakouts

		Heading Equation
		================
		m1:passes,m2:all,m3:cash

		Main Equation
		=============
		b1:0,d1:15_minute,c1:close,a1:greater_than,b1:-1,d1:15_minute,c1:max,other:(,other:customtxt_20_,',b1:0,d1:15_minute,c1:close,arith,other:),arith==b1:0,d1:15_minute,c1:volume,a1:greater_than,b1:0,d1:15_minute,c1:sma,other:(,other:customtxt_volume_20,other:),arith


		Insert Query
		============
		INSERT INTO screeners_equation(screener_name , heading_equation , screener_equation) VALUES(
		'15-Minute-Stock-Breakouts',
		'm1:passes,m2:all,m3:cash',
		'b1:0,d1:15_minute,c1:close,a1:greater_than,b1:-1,d1:15_minute,c1:max,other:(,other:customtxt_20_,',b1:0,d1:15_minute,c1:close,arith,other:),arith==b1:0,d1:15_minute,c1:volume,a1:greater_than,b1:0,d1:15_minute,c1:sma,other:(,other:customtxt_volume_20,other:),arith');




---------------------------------------------------------------------------------------------------------------------------	



	3) SuperTrend Positive Breakout - 10 Mins

		Heading Equation
		================
		m1:passes,m2:all,m3:cash


		Main Equation
		=============
		b1:0,d1:15_minute,c1: