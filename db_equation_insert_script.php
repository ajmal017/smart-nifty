Top Loved
---------
	1) 15 Minute Stock Screener

		b1:0,d1:15_minute,c1:close,a1:greater_than,b1:-1,d1:15_minute,c1:max,other:(,other:customtxt_20,b1:0,d1:15_minute,c1:close,a1:arith,other:),a1:arith==b1:0,d1:15,c1:volume,a1:greater_than,b1:0,d1:15_minute,c1:sma,other:(,other:customtxt_volume_20,other:),arith

		INSERT INTO screeners_equation(screener_name , screener_equation) VALUES('15-Minute-Stock-Breakouts','b1:0,d1:15_minute,c1:close,a1:greater_than,b1:-1,d1:15_minute,c1:max,other:(,other:customtxt_20,b1:0,d1:15_minute,c1:close,a1:arith,other:),a1:arith==b1:0,d1:15,c1:volume,a1:greater_than,b1:0,d1:15_minute,c1:sma,other:(,other:customtxt_volume_20,other:),arith');