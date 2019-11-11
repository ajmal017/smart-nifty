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


	2) Short Tream Breakouts

		Heading Equation
		================
		m1:passes,m2:all,m3:cash	

		Main Equation
		=============
		b1:0,d1:15_minute,c1:max,other:(,other:customtxt_5_,',b1:0,d1:15_minute,c1:close,arith)a1:greater_than,b1:0,d1:15_minute,c1:max,other:(,other:customtxt_120_,',b1:0,d1:15_minute,c1:close,arith),a1:*,c1:number,other:,other:customtxt_1.05_,arith==b1:0,d1:15_minute,c1:volume,a1:greater_than,b1:0,d1:15_minute,c1:sma,other:(,other:customtxt_volume_5,other:),arith==b1:0,d1:15_minute,c1:close,a1:greater_than,b1:0,d1:15_minute,c1:close,arith



	3)Intraday buying seen in the Past 15 minutes

		Heading Equation
		================
		m1:passes,m2:all,m3:cash	

		Main Equation
		=============
		b1:0,d1:5_minute,c1:close,a1:greater_than,b1;-1,d1:5_minute,c1:close,arith==b1:-1,d1:5_minute,c1:close,a1:greater_than,b1;-2,d1:5_minute,c1:close,arith==b1:-2,d1:5_minute,c1:close,a1:greater_than,b1;-3,d1:5_minute,c1:close,arith==b1:0,d1:5_minute,c1:volume,a1:greater_than,b1:-1,d1:5_minute,c1:sma,other:(,other:customtxt_volume_15,other:),arith==b1:-1,d1:5_minute,c1:volume,a1:greater_than,b1:-2,d1:5_minute,c1:sma,other:(,other:customtxt_volume_15,other:),arith==b1:-2,d1:5_minute,c1:volume,a1:greater_than,b1:-3,d1:5_minute,c1:sma,other:(,other:customtxt_volume_15,other:),arith

	4)Bulish

		Heading Equation
		================
		m1:passes,m2:all,m3:futures==m1:passes,m2:all,m3:futures==m1:passes,m2:all,m3:futures==m1:passes,m2:all,m3:futures==m1:passes,m2:all,m3:futures==m1:passes,m2:all,m3:futures==m1:passes,m2:all,m3:futures==m1:passes,m2:all,m3:futures

		Main Equation
		================

		b1:0,d1:15_minute,c1:ema,other:(,other:customtxt_close_20,other:),a1:greater_than,c1:number,other:,other:customtxt_20_,arith/b1:0,d1:15_minute,c1:sma,other:(,other:customtxt_volume_20,other:),a1:greater_than_equal
		_to,c1:number,other:,other:customtxt_100000_,arith/
		b1:0,d1:15_minute,c1:Ichimoku_Conversion_Line,other:(,other:customtxt_3_,',other:customtxt_7_,',other:customtxt_14_),a1:greater_than_equal
		_to,b1:0,d1:15_minute,c1:Ichimoku_Base_Line,other:(,other:customtxt_3_,',other:customtxt_7_,',other:customtxt_14_),arith/
		b1:0,d1:15_minute,c1:Ichimoku_SpanA,other:(,other:customtxt_3_,',other:customtxt_7_,',other:customtxt_14_),a1:greater_than_equal
		_to,b1:0,d1:15_minute,c1:Ichimoku_SpanB,other:(,other:customtxt_3_,',other:customtxt_7_,',other:customtxt_14_),arith/
		b1:0,d1:15_minute,c1:close,a1:greater_than_equal
		_to,b1:0,d1:15_minute,c1:Ichimoku_Cloud_Bottom,other:(,other:customtxt_3_,',other:customtxt_7_,',other:customtxt_14_),arith/
		b1:0,d1:15_minute,c1:close,a1:greater_than_equal
		_to,b1:0,d1:15_minute,c1:Parabolic_Sar,other:(,other:customtxt_0.02_,',other:customtxt_0.0.2_,',other:customtxt_0.2_),arith==b1:0,d1:15_minute,c1:Rsi,other:(,other:customtxt_10_),a1:greater_than_equal_to,c1:number,other:,other:customtxt_20_,arith==b1:0,d1:15_minute,c1:StochRsi,other:(,other:customtxt_10_),a1:greater_than_equal_to,c1:number,other:,other:customtxt_20_,arith==b1:0,d1:15_minute,c1:Cci,other:(,other:customtxt_10_),a1:greater_than_equal_to,c1:number,other:,other:customtxt_0_,arith==b1:0,d1:15_minute,c1:Mfi,other:(,other:customtxt_10_),a1:greater_than_equal_to,c1:number,other:,other:customtxt_20_,arith==b1:0,d1:15_minute,c1:Williams%R,other:(,other:customtxt_10_),a1:greater_than_equal_to,c1:number,other:,other:customtxt_-80_,arith==b1:0,d1:15_minute,c1:close,a1:greater_than_equal_to,b1:0,d1:15_minute,c1:Ema,other:(,other:customtxt_close_14,other:),arith==b1:0,d1:15_minute,c1:ADX_DI_Positive,other:(,other:customtxt_10_),a1:greater_than_equal_to,b1:0,d1:15_minute,c1:ADX_DI_Negative,other:(,other:customtxt_10_),arith==
		b1:0,d1:15_minute,c1:Aroon_Up,other:(,other:customtxt_10_),a1:greater_than_equal_to,b1:0,d1:15_minute,c1:Aroon_Down,other:(,other:customtxt_10_),arith==
		b1:0,d1:15_minute,c1:Slow_Stochastic%K,other:(,other:customtxt_5_,',other:customtxt_3_),a1:greater_than_equal_to,b1:0,d1:15_minute,c1:Slow_Stochastic%D,other:(,other:customtxt_5_,',other:customtxt_3_),arith==b1:0,d1:15_minute,c1:Fast_Stochastic%K,other:(,other:customtxt_5_,',other:customtxt_3_),a1:greater_than_equal_to,b1:0,d1:15_minute,c1:Fast_Stochastic%D,other:(,other:customtxt_5_,',other:customtxt_3_),arith==b1:0,d1:15_minute,c1:close,a1:greater_than_equal_to,b1:0,d1:15_minute,c1:Sma,other:(,other:customtxt_close_10,other:),arith/
		b1:0,d1:15_minute,c1:Macd_line,other:(,other:customtxt_14_,',other:customtxt_5_,',other:customtxt_3_),a1:greater_than_equal_to,b1:0,d1:15_minute,c1:Macd_Signal,other:(,other:customtxt_14_,',other:customtxt_5_,',other:customtxt_3_),arith==b1:0,d1:15_minute,c1:Macd_Histogram,other:(,other:customtxt_14_,',other:customtxt_5_,',other:customtxt_3_),a1:greater_than_equal_to,c1:number,other:,other:customtxt_0_,arith/
		b1:0,d1:15_minute,c1:Rsi,other:(,other:customtxt_14_),a1:greater_than,c1:number,other:,other:customtxt_50_,arith==b1:0,d1:15_minute,c1:StochRsi,other:(,other:customtxt_14_),a1:greater_than,c1:number,other:,other:customtxt_50_,arith==b1:0,d1:15_minute,c1:Rsi,other:(,other:customtxt_10_),a1:less_than,c1:number,other:,other:customtxt_80_,arith==
		b1:0,d1:15_minute,c1:close,a1:greater_than_equal_to,b1:0,d1:15_minute,c1:Upper_Bollinger_band,other:(,other:customtxt_20_,',other:customtxt_2_),arith==b1:0,d1:15_minute,c1:close,a1:greater_than_equal_to,b1:0,d1:15_minute,c1:Ichimoku_Cloud_Bottom,other:(,other:customtxt_9_,',other:customtxt_26_,',other:customtxt_52_),arith==
		b1:0,d1:15_minute,c1:close,a1:greater_than_equal,b1:0,d1:15_minute,c1:open,arith==b1:0,d1:15_minute,c1:volume,a1:greater_than,c1:number,other:,other:customtxt_100000_,arith==
		b1:0,d1:15_minute,c1:Ema,other:(,other:customtxt_close_5,other:),a1:greater_than,b1:0,d1:15_minute,c1:Ema,other:(,other:customtxt_close_20,other:),arith==b1:0,d1:15_minute,c1:Ema,other:(,other:customtxt_close_20,other:),a1:greater_than,b1:0,d1:15_minute,c1:Ema,other:(,other:customtxt_close_50,other:),arith==b1:0,d1:15_minute,c1:close,a1:greater_than,b1:0,d1:15_minute,c1:Ema,other:(,other:customtxt_close_50,other:),arith


	5)Supertrend positive breakout - 10 mins

		Heading Equation
		================
		m1:passes,m2:all,m3:cash


		Main Equation
		=============
		b1:0,d1:10_minute,c1:superTrend,other:(,other:customtxt_7_,',other:customtxt_3_),a1:crossed_below,b1:0,d1:10_minute,c1:close,arith


	6)Volume Shockers (stocks with rising volumes)

		Heading Equation
		================
		m1:passes,m2:all,m3:cash==m1:passes,m2:any,m3:cash


		Main Equation
		=============
		b1:0,d1:10_minute,c1:volume,a1:greater_than,b1:0,d1:15_minute,c1:sma,other:(,other:customtxt_volume_10,other:),a1:*,c1:number,other:,other:customtxt_2_,arith/b1:0,d1:15_minute,c1:close,a1:greater_than,b1:0,d1:15_minute,c1:close,a1:*,c1:number,other:,other:customtxt_1.05_,arith==b1:0,d1:15_minute,c1:close,a1:less_than,b1:0,d1:15_minute,c1:close,a1:*,c1:number,other:,other:customtxt_1.95_,arith	



	7)Perfect Sell(Short)

		Heading Equation
		================
		m1:passes,m2:all,m3:cash

		Main Equation
		=============
		b1:0,d1:10_minute,c1:high,a1:greater_than,b1:0,d1:10_minute,c1:high,arith==b1:0,d1:10_minute,c1:close,a1:less_than,b1:0,d1:10_minute,c1:high,arith==b1:0,d1:10_minute,c1:volume,a1:greater_than,b1:0,d1:10_minute,c1:volume,arith==b1:0,d1:10_minute,c1:high,a1:less_than,b1:0,d1:10_minute,c1:high,arith


	8)NKs best buy stocks for intraday
		
		Heading Equation
		================
		m1:passes,m2:all,m3:cash

		Main Equation
		=============
		c1:Bracket(b1:0,d1:15_minute,c1:high,-,b1:0,d1:15_minute,c1:low,arith)a1:greater_than,c1:Bracket(b1:0,d1
		:15_minute,c1:high,-,b1:0,d1:15_minute,c1:low,arith)arith==c1:Bracket(b1:0,d1:15_minute,c1:high,-,b1:0,d1:15_minute,c1:low,arith)a1:greater_than,c1:Bracket(b1:0,d1
		:15_minute,c1:high,-,b1:0,d1:15_minute,c1:low,arith)arith==c1:Bracket(b1:0,d1:15_minute,c1:high,-,b1:0,d1:15_minute,c1:low,arith)a1:greater_than,c1:Bracket(b1:0,d1
		:15_minute,c1:high,-,b1:0,d1:15_minute,c1:low,arith)arith==c1:Bracket(b1:0,d1:15_minute,c1:high,-,b1:0,d1:15_minute,c1:low,arith)a1:greater_than,c1:Bracket(b1:0,d1
		:15_minute,c1:high,-,b1:0,d1:15_minute,c1:low,arith)arith==c1:Bracket(b1:0,d1:15_minute,c1:high,-,b1:0,d1:15_minute,c1:low,arith)a1:greater_than,c1:Bracket(b1:0,d1
		:15_minute,c1:high,-,b1:0,d1:15_minute,c1:low,arith)arith==c1:Bracket(b1:0,d1:15_minute,c1:high,-,b1:0,d1:15_minute,c1:low,arith)a1:greater_than,c1:Bracket(b1:0,d1
		:15_minute,c1:high,-,b1:0,d1:15_minute,c1:low,arith)arith==c1:Bracket(b1:0,d1:15_minute,c1:high,-,b1:0,d1:15_minute,c1:low,arith)a1:greater_than,c1:Bracket(b1:0,d1
		:15_minute,c1:high,-,b1:0,d1:15_minute,c1:low,arith)arith==b1:0,d1:15_minute,c1:close,a1:greater_than,b1:0,d1:15_minute,c1:open,arith==b1:0,d1:15_minute,c1:close,a1:greater_than,b1:0,d1:15_minute,c1:open,arith==b1:0,d1:15_minute,c1:close,a1:greater_than,b1:0,d1:15_minute,c1:open,arith==b1:0,d1:15_minute,c1:close,a1:greater_than,b1:0,d1:15_minute,c1:open,arith==b1:0,d1:15_minute,c1:volume,a1:greater_than,c1:number,other:,other:customtxt_10000_,arith==b1:0,d1:15_minute,c1:sma,other:(,other:customtxt_close_20,other:),a1:greater_than,b1:0,d1:15_minute,c1:sma,other:(,other:customtxt_close_50,other:),arith==b1:0,d1:15_minute,c1:sma,other:(,other:customtxt_close_50,other:),a1:greater_than,b1:0,d1:15_minute,c1:sma,other:(,other:customtxt_close_200,other:),arith	


	9)Potential breakouts
		
		Heading Equation
		================
		m1:passes,m2:all,m3:cash

		Main Equation
		=============	

		b1:0,d1:15_minute,c1:close,a1:*,c1:number,other:,other:customtxt_1.05_,a1:greater_than,b1:0,d1:15_minute,c1:max,other:(,other:customtxt_200_,',b1:0,d1:15_minute,c1:high,arith),arith==b1:0,d1:15_minute,c1:max,other:(,other:customtxt_30_,',b1:0,d1:15_minute,c1:high,arith),a1:less_than_equal_to,b1:0,d1:15_minute,c1:max,other:(,other:customtxt_200_,',b1:0,d1:15_minute,c1:high,arith),arith==b1:0,d1:15_minute,c1:volume,a1:greater_than,b1:0,d1:15_minute,c1:sma,other:customtxt_volume_50,other:),arith

	10)Strong Stocks

		Heading Equation
		================
		m1:passes,m2:all,m3:cash	

		Main Equation
		=============
		b1:0,d1:15_minute,c1:close,a1:greater_than,b1:0,d1:15_minute,c1:close,arith==b1:0,d1:15_minute,c1:close,a1:greater_than,b1:0,d1:15_minute,c1:close,arith==b1:0,d1:15_minute,c1:close,a1:greater_than,b1:0,d1:15_minute,c1:close,arith==b1:0,d1:15_minute,c1:close,a1:greater_than,b1:0,d1:15_minute,c1:close,arith==b1:0,d1:15_minute,c1:close,a1:greater_than,b1:0,d1:15_minute,c1:close,arith


	11)MACD Bearish or Bullish crossover


		Heading Equation
		================
		m1:passes,m2:any,m3:cash	

		Main Equation
		=============

		b1:0,d1:15_minute,c1:Macd_line,other:(,other:customtxt_26_,',other:customtxt_12_,',other:customtxt_9_),a1:crossed_below,b1:0,d1:15_minute,c1:Macd_line,other:(,other:customtxt_26_,',other:customtxt_12_,',other:customtxt_9_),arith==b1:0,d1:15_minute,c1:Macd_line,other:(,other:customtxt_26_,',other:customtxt_12_,',other:customtxt_9_),a1:crossed_above,b1:0,d1:15_minute,c1:Macd_line,other:(,other:customtxt_26_,',other:customtxt_12_,',other:customtxt_9_),arith
		

	12)Daily RSI Oversold/Overbought scan		

		Heading Equation
		================
		m1:passes,m2:any,m3:cash	

		Main Equation
		=============

		b1:0,d1:15_minute,c1:Rsi,other:(,other:customtxt_14_),a1:crossed_below,c1:number,other:,other:customtxt_70_,arith==b1:0,d1:15_minute,c1:Rsi,other:(,other:customtxt_14_),a1:crossed_above,c1:number,other:,other:customtxt_30_,arith