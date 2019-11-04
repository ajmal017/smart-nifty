Top Loved
---------
	1) 15 Minute Stock Screener


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



	4) Builsh For Next Day

		Heading Equation
		================
		m1:passes,m2:all,m3:futures==m1:passes,m2:all,m3:futures==m1:passes,m2:all,m3:futures==m1:passes,m2:all,m3:futures==m1:passes,m2:all,m3:futures==m1:passes,m2:all,m3:futures==m1:passes,m2:all,m3:futures==m1:passes,m2:all,m3:futures

		Main Equation
		=============
		