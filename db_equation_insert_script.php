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
		b1:0,d1:15_minute,c1:max,other:(,other:customtxt_5_,',b1:0,d1:15_minute,c1:close,arith,other:),a1:greater_than,b1:0,d1:15_minute,c1:max,other:(,other:customtxt_120_,',b1:0,d1:15_minute,c1:close,arith,other:),a1:*,c1:number,other:,other:customtxt_1.05_,other:,arith==b1:0,d1:15_minute,c1:volume,a1:greater_than,b1:0,d1:15_minute,c1:sma,other:(,other:customtxt_volume_5,other:),arith==b1:0,d1:15_minute,c1:close,a1:greater_than,b1:0,d1:15_minute,c1:close,arith



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

		b1:0,d1:15_minute,c1:ema,other:(,other:customtxt_close_20,other:),a1:greater_than,c1:number,other:,other:customtxt_20_,other:,arith/b1:0,d1:15_minute,c1:sma,other:(,other:customtxt_volume_20,other:),a1:greater_than_equal
		_to,c1:number,other:,other:customtxt_100000_,other:,arith/
		b1:0,d1:15_minute,c1:Ichimoku_Conversion_Line,other:(,other:customtxt_3_7_14,other:),a1:greater_than_equal
		_to,b1:0,d1:15_minute,c1:Ichimoku_Base_Line,other:(,other:customtxt_3_7_14,other:),arith/
		b1:0,d1:15_minute,c1:Ichimoku_SpanA,other:(,other:customtxt_3_7_14,other:),a1:greater_than_equal
		_to,b1:0,d1:15_minute,c1:Ichimoku_SpanB,other:(,other:customtxt_3_7_14,other:),arith/
		b1:0,d1:15_minute,c1:close,a1:greater_than_equal
		_to,b1:0,d1:15_minute,c1:Ichimoku_Cloud_Bottom,other:(,other:customtxt_3_7_14,other:),arith/
		b1:0,d1:15_minute,c1:close,a1:greater_than_equal
		_to,b1:0,d1:15_minute,c1:Parabolic_Sar,other:(,other:customtxt_0.02_0.02_0.2,other:),arith==b1:0,d1:15_minute,c1:Rsi,other:(,other:customtxt_10_,other:),a1:greater_than_equal_to,c1:number,other:,other:customtxt_20_,other:,arith==b1:0,d1:15_minute,c1:StochRsi,other:(,other:customtxt_10_,other:),a1:greater_than_equal_to,c1:number,other:,other:customtxt_20_,other:,arith==b1:0,d1:15_minute,c1:Cci,other:(,other:customtxt_10_,other:),a1:greater_than_equal_to,c1:number,other:,other:customtxt_0_,other:,arith==b1:0,d1:15_minute,c1:Mfi,other:(,other:customtxt_10_,other:),a1:greater_than_equal_to,c1:number,other:,other:customtxt_20_,other:,arith==b1:0,d1:15_minute,c1:Williams%R,other:(,other:customtxt_10_,other:),a1:greater_than_equal_to,c1:number,other:,other:customtxt_-80_,other:,arith==b1:0,d1:15_minute,c1:close,a1:greater_than_equal_to,b1:0,d1:15_minute,c1:Ema,other:(,other:customtxt_close_14,other:),arith==b1:0,d1:15_minute,c1:ADX_DI_Positive,other:(,other:customtxt_10_,other:),a1:greater_than_equal_to,b1:0,d1:15_minute,c1:ADX_DI_Negative,other:(,other:customtxt_10_,other:),arith==
		b1:0,d1:15_minute,c1:Aroon_Up,other:(,other:customtxt_10_,other:),a1:greater_than_equal_to,b1:0,d1:15_minute,c1:Aroon_Down,other:(,other:customtxt_10_,other:),arith==
		b1:0,d1:15_minute,c1:Slow_Stochastic%K,other:(,other:customtxt_5_3,other:),a1:greater_than_equal_to,b1:0,d1:15_minute,c1:Slow_Stochastic%D,other:(,other:customtxt_5_3,other:),arith==b1:0,d1:15_minute,c1:Fast_Stochastic%K,other:(,other:customtxt_5_3,other:),a1:greater_than_equal_to,b1:0,d1:15_minute,c1:Fast_Stochastic%D,other:(,other:customtxt_5_3,other:),arith==b1:0,d1:15_minute,c1:close,a1:greater_than_equal_to,b1:0,d1:15_minute,c1:Sma,other:(,other:customtxt_close_10,other:),arith/
		b1:0,d1:15_minute,c1:Macd_line,other:(,other:customtxt_14_5_3,other:),a1:greater_than_equal_to,b1:0,d1:15_minute,c1:Macd_Signal,other:(,other:customtxt_14_5_3,other:),arith==b1:0,d1:15_minute,c1:Macd_Histogram,other:(,other:customtxt_14_5_3,other:),a1:greater_than_equal_to,c1:number,other:,other:customtxt_0_,other:,arith/
		b1:0,d1:15_minute,c1:Rsi,other:(,other:customtxt_14_,other:),a1:greater_than,c1:number,other:,other:customtxt_50_,other:,arith==b1:0,d1:15_minute,c1:StochRsi,other:(,other:customtxt_14_,other:),a1:greater_than,c1:number,other:,other:customtxt_50_,other:,arith==b1:0,d1:15_minute,c1:Rsi,other:(,other:customtxt_10_,other:),a1:less_than,c1:number,other:,other:customtxt_80_,other:,arith==
		b1:0,d1:15_minute,c1:close,a1:greater_than_equal_to,b1:0,d1:15_minute,c1:Upper_Bollinger_band,other:(,other:customtxt_20_2,other:),arith==b1:0,d1:15_minute,c1:close,a1:greater_than_equal_to,b1:0,d1:15_minute,c1:Ichimoku_Cloud_Bottom,other:(,other:customtxt_9_26_52,other:),arith==
		b1:0,d1:15_minute,c1:close,a1:greater_than_equal,b1:0,d1:15_minute,c1:open,arith==b1:0,d1:15_minute,c1:volume,a1:greater_than,c1:number,other:,other:customtxt_100000_,other:,arith==
		b1:0,d1:15_minute,c1:Ema,other:(,other:customtxt_close_5,other:),a1:greater_than,b1:0,d1:15_minute,c1:Ema,other:(,other:customtxt_close_20,other:),arith==b1:0,d1:15_minute,c1:Ema,other:(,other:customtxt_close_20,other:),a1:greater_than,b1:0,d1:15_minute,c1:Ema,other:(,other:customtxt_close_50,other:),arith==b1:0,d1:15_minute,c1:close,a1:greater_than,b1:0,d1:15_minute,c1:Ema,other:(,other:customtxt_close_50,other:),arith


	5)Supertrend positive breakout - 10 mins

		Heading Equation
		================
		m1:passes,m2:all,m3:cash


		Main Equation
		=============
		b1:0,d1:10_minute,c1:superTrend,other:(,other:customtxt_7_3,other:),a1:crossed_below,b1:0,d1:10_minute,c1:close,arith


	6)Volume Shockers (stocks with rising volumes)

		Heading Equation
		================
		m1:passes,m2:all,m3:cash==m1:passes,m2:any,m3:cash


		Main Equation
		=============
		b1:0,d1:10_minute,c1:volume,a1:greater_than,b1:0,d1:15_minute,c1:sma,other:(,other:customtxt_volume_10,other:),a1:*,c1:number,other:,other:customtxt_2_,other:,arith/b1:0,d1:15_minute,c1:close,a1:greater_than,b1:0,d1:15_minute,c1:close,a1:*,c1:number,other:,other:customtxt_1.05_,other:,arith==b1:0,d1:15_minute,c1:close,a1:less_than,b1:0,d1:15_minute,c1:close,a1:*,c1:number,other:,other:customtxt_0.95_,other:,arith	



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
		c1:Bracket(b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,arith)a1:greater_than,c1:Bracket(b1:0,d1
		:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,arith)arith==c1:Bracket(b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,arith)a1:greater_than,c1:Bracket(b1:0,d1
		:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,arith)arith==c1:Bracket(b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,arith)a1:greater_than,c1:Bracket(b1:0,d1
		:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,arith)arith==c1:Bracket(b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,arith)a1:greater_than,c1:Bracket(b1:0,d1
		:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,arith)arith==c1:Bracket(b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,arith)a1:greater_than,c1:Bracket(b1:0,d1
		:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,arith)arith==c1:Bracket(b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,arith)a1:greater_than,c1:Bracket(b1:0,d1
		:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,arith)arith==c1:Bracket(b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,arith)a1:greater_than,c1:Bracket(b1:0,d1
		:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,arith)arith==b1:0,d1:15_minute,c1:close,a1:greater_than,b1:0,d1:15_minute,c1:open,arith==b1:0,d1:15_minute,c1:close,a1:greater_than,b1:0,d1:15_minute,c1:open,arith==b1:0,d1:15_minute,c1:close,a1:greater_than,b1:0,d1:15_minute,c1:open,arith==b1:0,d1:15_minute,c1:close,a1:greater_than,b1:0,d1:15_minute,c1:open,arith==b1:0,d1:15_minute,c1:volume,a1:greater_than,c1:number,other:,other:customtxt_10000_,other:,arith==b1:0,d1:15_minute,c1:sma,other:(,other:customtxt_close_20,other:),a1:greater_than,b1:0,d1:15_minute,c1:sma,other:(,other:customtxt_close_50,other:),arith==b1:0,d1:15_minute,c1:sma,other:(,other:customtxt_close_50,other:),a1:greater_than,b1:0,d1:15_minute,c1:sma,other:(,other:customtxt_close_200,other:),arith	


	9)Potential breakouts
		
		Heading Equation
		================
		m1:passes,m2:all,m3:cash

		Main Equation
		=============	

		b1:0,d1:15_minute,c1:close,a1:*,c1:number,other:,other:customtxt_1.05_,other:,a1:greater_than,b1:0,d1:15_minute,c1:max,other:(,other:customtxt_200_,',b1:0,d1:15_minute,c1:high,arith),arith==b1:0,d1:15_minute,c1:max,other:(,other:customtxt_30_,',b1:0,d1:15_minute,c1:high,arith),a1:less_than_equal_to,b1:0,d1:15_minute,c1:max,other:(,other:customtxt_200_,',b1:0,d1:15_minute,c1:high,arith),arith==b1:0,d1:15_minute,c1:volume,a1:greater_than,b1:0,d1:15_minute,c1:sma,other:customtxt_volume_50,other:),arith

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

		b1:0,d1:15_minute,c1:Macd_line,other:(,other:customtxt_26_12_9,other:),a1:crossed_below,b1:0,d1:15_minute,c1:Macd_Signal,other:(,other:customtxt_26_12_9,other:),arith==b1:0,d1:15_minute,c1:Macd_line,other:(,other:customtxt_26_12_9,other:),a1:crossed_above,b1:0,d1:15_minute,c1:Macd_Signal,other:(,other:customtxt_26_12_9,other:),arith
		

	12)Daily RSI Oversold/Overbought scan		

		Heading Equation
		================
		m1:passes,m2:any,m3:cash	

		Main Equation
		=============

		b1:0,d1:15_minute,c1:Rsi,other:(,other:customtxt_14_,other:),a1:crossed_below,c1:number,other:,other:customtxt_70_,other:,arith==b1:0,d1:15_minute,c1:Rsi,other:(,other:customtxt_14_,other:),a1:crossed_above,c1:number,other:,other:customtxt_30_,other:,arith



Candlestick Patterns scan
-------------------------

	
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
		b1:0,d1:15_minute,c1:max,other:(,other:customtxt_5_,',b1:0,d1:15_minute,c1:close,arith,other:),a1:greater_than,b1:0,d1:15_minute,c1:max,other:(,other:customtxt_120_,',b1:0,d1:15_minute,c1:close,arith,other:),a1:*,c1:number,other:,other:customtxt_1.05_,other:,arith==b1:0,d1:15_minute,c1:volume,a1:greater_than,b1:0,d1:15_minute,c1:sma,other:(,other:customtxt_volume_5,other:),arith==b1:0,d1:15_minute,c1:close,a1:greater_than,b1:0,d1:15_minute,c1:close,arith


	3) SuperTrend positive breakout - 10 mins
	
		Heading Equation
		================
		m1:passes,m2:all,m3:cash	

		Main Equation
		=============
		b1:0,d1:10_minute,c1:SuperTrend,other:(,other:customtxt_7_3,other:),a1:Crossed_below,b1:0,d1:10_minute,c1:close,arith


	4) Volume spike on 1 minute candle	

		Heading Equation
		================
		m1:passes,m2:all,m3:cash	

		Main Equation
		=============
		b1:0,d1:1_minute,c1:volume,a1:greater_than,b1:-1,d1:1_minute,c1:close,other:(,other:customtxt_volume_1000,other:),a1:*,c1:number,other:,other:customtxt_10_,other:,arith		


	5)Top Shares for 2018 - Stocks to invest in	

		Heading Equation
		================
		m1:passes,m2:all,m3:cash	

		Main Equation
		=============
		b1:0,d1:15_minute,c1:min,other:(,other:customtxt_252_,',b1:0,d1:15_minute,c1:low,arith,other:),a1:/,b1:0,d1:15_minute,c1:max,other:(,other:customtxt_252_,',b1:0,d1:15_minute,c1:high,arith,other:),a1:greater_than_equal_to,c1:number,other:,other:customtxt_0.50_,other:,arith==b1:0,d1:15_minute,c1:volume,a1:greater_than,c1:number,other:,other:customtxt_50000_,other:,arith==b1:0,d1:15_minute,c1:Rsi,other:(,other:customtxt_14_,other:),a1:greater_than,c1:number,other:,other:customtxt_30_,other:,arith


	6)Morning Star Candlestick pattern
	
		Heading Equation
		================
		m1:passes,m2:all,m3:cash	

		Main Equation
		=============
		b1:0,d1:15_minute,c1:open,a1:less_than,b1:0,d1:15_minute,c1:close,arith==b1:0,d1:15_minute,c1:open,a1:greater_than,b1:0,d1:15_minute,c1:close,arith==b1:0,d1:15_minute,c1:open,a1:less_than,b1:0,d1:15_minute,c1:close,arith==b1:0,d1:15_minute,c1:close,a1:less_than,b1:0,d1:15_minute,c1:close,arith==b1:0,d1:15_minute,c1:open,a1:greater_than,b1:0,d1:15_minute,c1:close,arith==b1:0,d1:15_minute,c1:close,a1:less_than,b1:0,d1:15_minute,c1:close,arith==b1:0,d1:15_minute,c1:open,a1:greater_than,b1:0,d1:15_minute,c1:close,arith


	7)Doji	

		Heading Equation
		================
		m1:passes,m2:all,m3:cash==m1:passes,m2:any,m3:cash	

		Main Equation
		=============
		b1:0,d1:15_minute,c1:volume,a1:greater_than,c1:number,other:,other:customtxt_200000_,other:,
		arith==b1:0,d1:15_minute,c1:high,a1:greater_than,b1:0,d1:15_minute,c1:close,arith==b1:0,d1:15_minute,c1:low,a1:less_than,b1:0,d1:15_minute,c1:close,arith==b1:0,d1:15_minute,c1:close,a1:greater_than,b1:0,d1:15_minute,c1:sma,other:(,other:customtxt_close_20,other:),arith/b1:0,d1:15_minute,c1:open,a1:/,b1:0,d1:15_minute,c1:close,a1:crossed_above,c1:number,other:,other:customtxt_1_,other:,arith==
		b1:0,d1:15_minute,c1:open,a1:/,b1:0,d1:15_minute,c1:close,a1:crossed_below,c1:number,other:,other:customtxt_1_,other:,arith==b1:0,d1:15_minute,c1:open,a1:Equals,b1:0,d1:15_minute,c1:close,arith==b1:0,d1:15_minute,c1:open,a1:/,b1:0,d1:15_minute,c1:close,a1:greater_than,c1:number,other:,other:customtxt_0.99_,other:,arith==b1:0,d1:15_minute,c1:close,a1:/,b1:0,d1:15_minute,c1:open,a1:greater_than,c1:number,other:,other:customtxt_0.99_,other:,arith


	8)Evening Star Candlestick Pattern

		Heading Equation
		================
		m1:passes,m2:all,m3:cash	

		Main Equation
		=============
		b1:0,d1:15_minute,c1:open,a1:greater_than,b1:0,d1:15_minute,c1:close,arith==b1:0,d1:15_minute,c1:open,a1:less_than,b1:0,d1:15_minute,c1:close,arith==b1:0,d1:15_minute,c1:open,a1:greater_than,b1:0,d1:15_minute,c1:close,arith==b1:0,d1:15_minute,c1:close,a1:greater_than,b1:0,d1:15_minute,c1:close,arith==b1:0,d1:15_minute,c1:close,a1:greater_than,b1:0,d1:15_minute,c1:close,arith==b1:0,d1:15_minute,c1:open,a1:less_than,b1:0,d1:15_minute,c1:close,arith


	9)Buy entry intraday		

		Heading Equation
		================
		m1:passes,m2:all,m3:cash	

		Main Equation
		=============
		b1:0,d1:15_minute,c1:ParabolicSar,other:(,other:customtxt_0.04_0.02_0.2,other:),a1:crossed_below,b1:0,d1:15_minute,c1:ema,other:(,other:customtxt_close_9,other:),arith


	10)Positive Hammer

		Heading Equation
		================
		m1:passes,m2:all,m3:cash	

		Main Equation
		=============
		b1:0,d1:15_minute,c1:close,a1:less_than_equal_to,b1:0,d1:15_minute,c1:high,arith==b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:close,a1:less_than,b1:0,d1:15_minute,c1:close,a1:-,b1:0,d1:15_minute,c1:open,arith==b1:0,d1:15_minute,c1:close,a1:greater_than,b1:0,d1:15_minute,c1:open,arith==b1:0,d1:15_minute,c1:open,a1:-,b1:0,d1:15_minute,c1:low,a1:greater_than,b1:0,d1:15_minute,c1:close,a1:-,b1:0,d1:15_minute,c1:open,arith



	11)Sell entry intraday	

		Heading Equation
		================
		m1:passes,m2:all,m3:futures

		Main Equation
		=============
		b1:0,d1:15_minute,c1:ParabolicSar,other:(,other:customtxt_0.04_0.02_0.2,other:),a1:crossed_above,b1:0,d1:15_minute,c1:ema,other:(,other:customtxt_close_9,other:),arith


	12)Breakout intraday

		Heading Equation
		================
		m1:passes,m2:all,m3:futures

		Main Equation
		=============
		b1:0,d1:15_minute,c1:open,a1:crossed_above,b1:0,d1:15_minute,c1:ParabolicSar,other:(,other:customtxt_0.02_0.02_0.2,other:),arith==b1:0,d1:15_minute,c1:open,a1:greater_than,b1:0,d1:15_minute,c1:ParabolicSar,other:(,other:customtxt_0.02_0.02_0.2,other:),arith

	13)Breaking Days High - 5 Mins
	
		Heading Equation
		================
		m1:passes,m2:all,m3:futures

		Main Equation
		=============
		b1:0,d1:5_minute,c1:close,a1:greater_than,b1:-1,d1:5_minute,c1:max,other:(,other:customtxt_20_,',b1:0,d1:15_minute,c1:close,arith,other:),arith==b1:0,d1:15_minute,c1:volume,a1:greater_than,b1:0,d1:15_minute,c1:sma,other:(,other:customtxt_volume_20,other:),arith==b1:-1,d1:5_minute,c1:close,a1:greater_than,b1:-2,d1:5_minute,c1:max,other:(,other:customtxt_20_,',b1:0,d1:15_minute,c1:close,arith,other:),arith==b1:-1,d1:5_minute,c1:volume,a1:greater_than,b1:-1,d1:5_minute,c1:sma,other:(,other:customtxt_volume_20,other:),arith==b1:0,d1:15_minute,c1:volume,a1:greater_than,c1:number,other:,other:customtxt_100000_,other:,arith	



Range Breakouts scan
--------------------






	1)52 week breakout	

		Heading Equation
		================
		m1:passes,m2:all,m3:cash

		Main Equation
		=============
		b1:0,d1:15_minute,c1:close,a1:greater_than_equal_to,c1:number,other:,other:customtxt_50_,other,arith==b1:0,d1:15_minute,c1:ema,other:(,other:customtxt_close_5,other:),a1:greater_than,b1:0,d1:15_minute,c1:ema,other:(,other:customtxt_close_26,other:),arith==b1:0,d1:15_minute,c1:ema,other:(,other:customtxt_close_13,other:),a1:greater_than,b1:0,d1:15_minute,c1:ema,other:(,other:customtxt_close_26,other:),arith==b1:0,d1:15_minute,c1:close,a1:greater_than,b1:0,d1:15_minute,c1:close,a1:*,c1:number,other:,other:customtxt_1.03_,other,arith==b1:0,d1:15_minute,c1:volume,a1:greater_than,b1:0,d1:15_minute,c1:sma,other:(,other:customtxt_volume_20,other:),a1:*,c1:number,other:,other:customtxt_1.0_,other,arith==b1:0,d1:15_minute,c1:ema,other:(,other:customtxt_close_5,other:),a1:greater_than,b1:0,d1:15_minute,c1:ema,other:(,other:customtxt_close_13,other:),arith==b1:0,d1:15_minute,c1:high,a1:Equals,b1:0,d1:15_minute,c1:max,other:(,other:customtxt_260_,',b1:0,d1:15_minute,c1:high,arith,other:),a1:*,c1:number,other:,other:customtxt_1_,other,arith==b1:0,d1:15_minute,c1:close,a1:greater_than,b1:0,d1:15_minute,c1:close,a1:*,c1:number,other:,other:customtxt_0.98_,other,arith



	2)NR7- CURRENT DAY

		Heading Equation
		================
		m1:passes,m2:all,m3:futures

		Main Equation
		=============
		b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,a1:less_than,b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,arith==b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,a1:less_than,b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,arith==b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,a1:less_than,b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,arith==b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,a1:less_than,b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,arith==b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,a1:less_than,b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,arith==b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,a1:less_than,b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,arith


	3)Range Break Out With Volume	

		Heading Equation
		================
		m1:passes,m2:all,m3:cash

		Main Equation
		=============
		c1:Abs,(b1:0,d1:15_minutes,c1:high,a1:-,b1:0,d1:15_minutes,c1:low,arith),a1:greater_than,c1:Abs,(b1:0,d1:15_minutes,c1:high,a1:-,b1:0,d1:15_minutes,c1:low,arith),arith==c1:Abs,(b1:0,d1:15_minutes,c1:high,a1:-,b1:0,d1:15_minutes,c1:low,arith),a1:greater_than,c1:Abs,(b1:0,d1:15_minutes,c1:high,a1:-,b1:0,d1:15_minutes,c1:low,arith),arith==c1:Abs,(b1:0,d1:15_minutes,c1:high,a1:-,b1:0,d1:15_minutes,c1:low,arith),a1:greater_than,c1:Abs,(b1:0,d1:15_minutes,c1:high,a1:-,b1:0,d1:15_minutes,c1:low,arith),arith==c1:Abs,(b1:0,d1:15_minutes,c1:high,a1:-,b1:0,d1:15_minutes,c1:low,arith),a1:greater_than,c1:Abs,(b1:0,d1:15_minutes,c1:high,a1:-,b1:0,d1:15_minutes,c1:low,arith),arith==b1:0,d1:15_minutes,c1:close,a1:greater_than,b1:0,d1:15_minutes,c1:open,arith==b1:0,d1:15_minutes,c1:close,a1:greater_than,b1:0,d1:15_minutes,c1:open,arith==b1:0,d1:15_minutes,c1:close,a1:greater_than,b1:0,d1:15_minutes,c1:open,arith==b1:0,d1:15_minutes,c1:volume,a1:*,b1:0,d1:15_minutes,c1:close,a1:greater
		_than_equal_to,c1:number,other:,other:customtxt_10000000_,other:,arith==b1:0,d1:15_minutes,c1:low,a1:greater_than,b1:0,d1:15_minutes,c1:close,a1:-,c1:Abs,(b1:0,d1:15_minutes,c1:close,a1:/,c1:number,other:,other:customtxt_222_,other:,arith),arith



	4)Narrow Range 7 - NR7
		

		Heading Equation
		================
		m1:passes,m2:all,m3:futures

		Main Equation
		=============	
		b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,a1:less_than,b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,arith==b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,a1:less_than,b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,arith==b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,a1:less_than,b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,arith==b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,a1:less_than,b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,arith==b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,a1:less_than,b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,arith==b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,a1:less_than,b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,arith==
		b1:0,d1:15_minute,c1:sma,other:(,other:customtxt_close_10,other:),a1:greater_than,b1:0,d1:15_minute,c1:sma,other:(,other:customtxt_close_50,other:),arith==b1:0,d1:15_minute,c1:sma,other:(,other:customtxt_close_50,other:),a1:greater_than,b1:0,d1:15_minute,c1:sma,other:(,other:customtxt_close_200,other:),arith==b1:0,d1:15_minute,c1:volume,a1:greater
		_than,c1:number,other:,other:customtxt_50000_,other:,arith	



	5)52 WEEK LOW
		

		Heading Equation
		================
		m1:passes,m2:all,m3:cash

		Main Equation
		=============	
		b1:0,d1:15_minute,c1:min,other:(,other:customtxt_52_,',b1:0,d1:15_minute,c1:low,arith,other:),a1:equals,b1:0,d1:15_minute,c1:low,arith


	6)OHOL+PRB

		
		Heading Equation
		================
		m1:passes,m2:all,m3:nifty500==m1:passes,m2:all,m3:nifty500

		Main Equation
		=============
		b1:0,d1:15_minute,c1:open,a1:equals,b1:0,d1:15_minute,c1:low,arith==b1:0,d1:15_minute,c1:close,a1:greater_than_equal_to,b1:0,d1:15_minute,c1:high,arith/b1:0,d1:15_minute,c1:open,a1:equals,b1:0,d1:15_minute,c1:high,arith==b1:0,d1:15_minute,c1:close,a1:less_than_equal_to,b1:0,d1:15_minute,c1:low,arith


	7)NR7/NR4 with INSIDE	


		Heading Equation
		================
		m1:passes,m2:all,m3:futures==m1:passes,m2:all,m3:cash

		Main Equation
		=============
		c1:Bracket,(b1:0,d1:15_minutes,c1:high,a1:-,b1:0,d1:15_minutes,c1:low,arith),a1:less_than,c1:Bracket,(b1:0,d1:15_minutes,c1:high,a1:-,b1:0,d1:15_minutes,c1:low,arith),arith==c1:Bracket,(b1:0,d1:15_minutes,c1:high,a1:-,b1:0,d1:15_minutes,c1:low,arith),a1:less_than,c1:Bracket,(b1:0,d1:15_minutes,c1:high,a1:-,b1:0,d1:15_minutes,c1:low,arith),arith==c1:Bracket,(b1:0,d1:15_minutes,c1:high,a1:-,b1:0,d1:15_minutes,c1:low,arith),a1:less_than,c1:Bracket,(b1:0,d1:15_minutes,c1:high,a1:-,b1:0,d1:15_minutes,c1:low,arith),arith==c1:Bracket,(b1:0,d1:15_minutes,c1:high,a1:-,b1:0,d1:15_minutes,c1:low,arith),a1:less_than,c1:Bracket,(b1:0,d1:15_minutes,c1:high,a1:-,b1:0,d1:15_minutes,c1:low,arith),arith==c1:Bracket,(b1:0,d1:15_minutes,c1:high,a1:-,b1:0,d1:15_minutes,c1:low,arith),a1:less_than,c1:Bracket,(b1:0,d1:15_minutes,c1:high,a1:-,b1:0,d1:15_minutes,c1:low,arith),arith==c1:Bracket,(b1:0,d1:15_minutes,c1:high,a1:-,b1:0,d1:15_minutes,c1:low,arith),a1:less_than,c1:Bracket,(b1:0,d1:15_minutes,c1:high,a1:-,b1:0,d1:15_minutes,c1:low,arith),arith/b1:0,d1:15_minutes,c1:high,a1:less_than,b1:0,d1:15_minutes,c1:high,arith==b1:0,d1:15_minutes,c1:low,a1:greater_than,b1:0,d1:15_minutes,c1:low,arith


	8)Technical Indicators

		Heading Equation
		================
		m1:passes,m2:all,m3:cash

		Main Equation
		=============	
		b1:0,d1:15_minute,c1:ema,other:(,other:customtxt_close_12,other:),a1:Crossed_above,b1:0,d1:15_minute,c1:ema,other:(,other:customtxt_close_24,other:),arith==b1:0,d1:15_minute,c1:Rsi,other:(,other:customtxt_14_,other:),a1:greater_than,c1:number,other:,other:customtxt_48_,other:,arith==b1:0,d1:15_minute,c1:Cci,other:(,other:customtxt_34_,other:),a1:greater_than,c1:number,other:,other:customtxt_72_,other:,arith==b1:0,d1:15_minute,c1:ADX,other:(,other:customtxt_24_,other:),a1:greater_than,c1:number,other:,other:customtxt_15_,other:,arith==b1:0,d1:15_minute,c1:ADX_DI_Positive,other:(,other:customtxt_14_,other:),a1:greater_than_equal_to,b1:0,d1:15_minute,c1:ADX_DI_Positive,other:(,other:customtxt_14_,other:),arith==b1:0,d1:15_minute,c1:volume,a1:*,c1:number,other:,other:customtxt_2_,other:,a1:greater_than_equal_to,b1:0,d1:15_minute,c1:volume,arith


	9)Yesterday's NR7 Stocks

		Heading Equation
		================
		m1:passes,m2:all,m3:futures

		Main Equation
		=============	
		b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,a1:less_than,b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,arith==b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,a1:less_than,b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,arith==b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,a1:less_than,b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,arith==b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,a1:less_than,b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,arith==b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,a1:less_than,b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,arith==b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,a1:less_than,b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,arith==b1:0,d1:15_minute,c1:sma,other:(,other:customtxt_volume_20,other:),a1:greater_than,c1:number,other:,other:customtxt_50000_,other:,arith==b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,a1:less_than,b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,arith==b1:0,d1:15_minute,c1:sma,other:(,other:customtxt_close_20,other:),a1:greater_than_equal_to,c1:number,other:,other:customtxt_200_,other:,arith		



	10)NR7 IB - NR7 stocks with Inside Bar pattern by www.squareoff.in


		Heading Equation
		================
		m1:passes,m2:all,m3:futures

		Main Equation
		=============		
		b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,a1:less_than,b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,arith==b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,a1:less_than,b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,arith==b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,a1:less_than,b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,arith==b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,a1:less_than,b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,arith==b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,a1:less_than,b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,arith==b1:0,d1:15_minute,c1:high,a1:less_than,b1:0,d1:15_minute,c1:high,arith==b1:0,d1:15_minute,c1:low,a1:greater_than,b1:0,d1:15_minute,c1:low,arith==b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,a1:less_than,b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,arith


	11)003-NR7-9:30 Buy Scan

		Heading Equation
		================
		m1:passes,m2:all,m3:futures

		Main Equation
		=============		
		c1:Bracket,(b1:0,d1:15_minutes,c1:high,a1:-,b1:0,d1:15_minutes,c1:low,arith),a1:greater_than,c1:Bracket,(b1:0,d1:15_minutes,c1:high,a1:-,b1:0,d1:15_minutes,c1:low,arith),arith==c1:Bracket,(b1:0,d1:15_minutes,c1:high,a1:-,b1:0,d1:15_minutes,c1:low,arith),a1:greater_than,c1:Bracket,(b1:0,d1:15_minutes,c1:high,a1:-,b1:0,d1:15_minutes,c1:low,arith),arith==c1:Bracket,(b1:0,d1:15_minutes,c1:high,a1:-,b1:0,d1:15_minutes,c1:low,arith),a1:greater_than,c1:Bracket,(b1:0,d1:15_minutes,c1:high,a1:-,b1:0,d1:15_minutes,c1:low,arith),arith==c1:Bracket,(b1:0,d1:15_minutes,c1:high,a1:-,b1:0,d1:15_minutes,c1:low,arith),a1:greater_than,c1:Bracket,(b1:0,d1:15_minutes,c1:high,a1:-,b1:0,d1:15_minutes,c1:low,arith),arith==c1:Bracket,(b1:0,d1:15_minutes,c1:high,a1:-,b1:0,d1:15_minutes,c1:low,arith),a1:greater_than,c1:Bracket,(b1:0,d1:15_minutes,c1:high,a1:-,b1:0,d1:15_minutes,c1:low,arith),arith==c1:Bracket,(b1:0,d1:15_minutes,c1:high,a1:-,b1:0,d1:15_minutes,c1:low,arith),a1:greater_than,c1:Bracket,(b1:0,d1:15_minutes,c1:high,a1:-,b1:0,d1:15_minutes,c1:low,arith),arith==c1:Bracket,(b1:0,d1:15_minutes,c1:high,a1:-,b1:0,d1:15_minutes,c1:low,arith),a1:greater_than,c1:Bracket,(b1:0,d1:15_minutes,c1:high,a1:-,b1:0,d1:15_minutes,c1:low,arith),arith==
		b1:0,d1:15_minutes,c1:close,a1:greater_than,b1:0,d1:15_minutes,c1:open,arith==b1:0,d1:15_minutes,c1:close,a1:greater_than,b1:0,d1:15_minutes,c1:close,arith==b1:0,d1:15_minutes,c1:close,a1:greater_than,b1:0,d1:15_minutes,c1:open,arith==b1:0,d1:15_minutes,c1:close,a1:greater_than,b1:0,d1:15_minutes,c1:open,arith==b1:0,d1:15_minutes,c1:volume,a1:greater
		_than,c1:number,other:,other:customtxt_10000_,other:,arith==b1:0,d1:15_minute,c1:sma,other:(,other:customtxt_close_20,other:),a1:greater_than,b1:0,d1:15_minute,c1:sma,other:(,other:customtxt_close_40,other:),arith==b1:0,d1:15_minute,c1:sma,other:(,other:customtxt_close_40,other:),a1:greater_than,b1:0,d1:15_minute,c1:sma,other:(,other:customtxt_close_60,other:),arith



	12)Bollinger band Squeeze

		Heading Equation
		================
		m1:passes,m2:all,m3:futures

		Main Equation
		=============		
		b1:0,d1:15_minute,c1:Upper_Bollinger_band,other:(,other:customtxt_20_2,other:),a1:-,b1:0,d1:15_minute,c1:Lower_Bollinger_band,other:(,other:customtxt_20_2,other:),a1:less_than_equal_to,b1:0,d1:15_minute,c1:Avg_True_Range,other:(,other:customtxt_14_,other:),a1:*,c1:number,other:,other:customtxt_2_,other:,arith


	13)NR7-FUT	

		Heading Equation
		================
		m1:passes,m2:all,m3:futures

		Main Equation
		=============
		b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,a1:less_than,b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,arith==b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,a1:less_than,b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,arith==b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,a1:less_than,b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,arith==b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,a1:less_than,b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,arith==b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,a1:less_than,b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,arith==b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,a1:less_than,b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,arith==
		b1:0,d1:15_minute,c1:sma,other:(,other:customtxt_close_10,other:),a1:greater_than,b1:0,d1:15_minute,c1:sma,other:(,other:customtxt_close_50,other:),arith==b1:0,d1:15_minute,c1:sma,other:(,other:customtxt_close_50,other:),a1:greater_than,b1:0,d1:15_minute,c1:sma,other:(,other:customtxt_close_200,other:),arith==b1:0,d1:15_minute,c1:volume,a1:greater_than,c1:number,other:,other:customtxt_50000_,other:,arith==b1:0,d1:15_minute,c1:open,a1:greater_than,b1:0,d1:15_minute,c1:close,arith==b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,a1:less_than,b1:0,d1:15_minute,c1:high,a1:-,b1:0,d1:15_minute,c1:low,arith




Bullish scan
------------

	
	1)BULLISH FOR NEXT DAY


		Heading Equation
		================
		m1:passes,m2:all,m3:futures==m1:passes,m2:all,m3:futures==m1:passes,m2:all,m3:futures==m1:passes,m2:all,m3:futures==m1:passes,m2:all,m3:futures==m1:passes,m2:all,m3:futures==m1:passes,m2:all,m3:futures==m1:passes,m2:all,m3:futures

		Main Equation
		================

		b1:0,d1:15_minute,c1:ema,other:(,other:customtxt_close_20,other:),a1:greater_than,c1:number,other:,other:customtxt_20_,other:,arith/b1:0,d1:15_minute,c1:sma,other:(,other:customtxt_volume_20,other:),a1:greater_than_equal
		_to,c1:number,other:,other:customtxt_100000_,other:,arith/
		b1:0,d1:15_minute,c1:Ichimoku_Conversion_Line,other:(,other:customtxt_3_7_14,other:),a1:greater_than_equal
		_to,b1:0,d1:15_minute,c1:Ichimoku_Base_Line,other:(,other:customtxt_3_7_14,other:),arith/
		b1:0,d1:15_minute,c1:Ichimoku_SpanA,other:(,other:customtxt_3_7_14,other:),a1:greater_than_equal
		_to,b1:0,d1:15_minute,c1:Ichimoku_SpanB,other:(,other:customtxt_3_7_14,other:),arith/
		b1:0,d1:15_minute,c1:close,a1:greater_than_equal
		_to,b1:0,d1:15_minute,c1:Ichimoku_Cloud_Bottom,other:(,other:customtxt_3_7_14,other:),arith/
		b1:0,d1:15_minute,c1:close,a1:greater_than_equal
		_to,b1:0,d1:15_minute,c1:Parabolic_Sar,other:(,other:customtxt_0.02_0.02_0.2,other:),arith==b1:0,d1:15_minute,c1:Rsi,other:(,other:customtxt_10_,other:),a1:greater_than_equal_to,c1:number,other:,other:customtxt_20_,other:,arith==b1:0,d1:15_minute,c1:StochRsi,other:(,other:customtxt_10_,other:),a1:greater_than_equal_to,c1:number,other:,other:customtxt_20_,other:,arith==b1:0,d1:15_minute,c1:Cci,other:(,other:customtxt_10_,other:),a1:greater_than_equal_to,c1:number,other:,other:customtxt_0_,other:,arith==b1:0,d1:15_minute,c1:Mfi,other:(,other:customtxt_10_,other:),a1:greater_than_equal_to,c1:number,other:,other:customtxt_20_,other:,arith==b1:0,d1:15_minute,c1:Williams%R,other:(,other:customtxt_10_,other:),a1:greater_than_equal_to,c1:number,other:,other:customtxt_-80_,other:,arith==b1:0,d1:15_minute,c1:close,a1:greater_than_equal_to,b1:0,d1:15_minute,c1:Ema,other:(,other:customtxt_close_14,other:),arith==b1:0,d1:15_minute,c1:ADX_DI_Positive,other:(,other:customtxt_10_,other:),a1:greater_than_equal_to,b1:0,d1:15_minute,c1:ADX_DI_Negative,other:(,other:customtxt_10_,other:),arith==
		b1:0,d1:15_minute,c1:Aroon_Up,other:(,other:customtxt_10_,other:),a1:greater_than_equal_to,b1:0,d1:15_minute,c1:Aroon_Down,other:(,other:customtxt_10_,other:),arith==
		b1:0,d1:15_minute,c1:Slow_Stochastic%K,other:(,other:customtxt_5_3,other:),a1:greater_than_equal_to,b1:0,d1:15_minute,c1:Slow_Stochastic%D,other:(,other:customtxt_5_3,other:),arith==b1:0,d1:15_minute,c1:Fast_Stochastic%K,other:(,other:customtxt_5_3,other:),a1:greater_than_equal_to,b1:0,d1:15_minute,c1:Fast_Stochastic%D,other:(,other:customtxt_5_3,other:),arith==b1:0,d1:15_minute,c1:close,a1:greater_than_equal_to,b1:0,d1:15_minute,c1:Sma,other:(,other:customtxt_close_10,other:),arith/
		b1:0,d1:15_minute,c1:Macd_line,other:(,other:customtxt_14_5_3,other:),a1:greater_than_equal_to,b1:0,d1:15_minute,c1:Macd_Signal,other:(,other:customtxt_14_5_3,other:),arith==b1:0,d1:15_minute,c1:Macd_Histogram,other:(,other:customtxt_14_5_3,other:),a1:greater_than_equal_to,c1:number,other:,other:customtxt_0_,other:,arith/
		b1:0,d1:15_minute,c1:Rsi,other:(,other:customtxt_14_,other:),a1:greater_than,c1:number,other:,other:customtxt_50_,other:,arith==b1:0,d1:15_minute,c1:StochRsi,other:(,other:customtxt_14_,other:),a1:greater_than,c1:number,other:,other:customtxt_50_,other:,arith==b1:0,d1:15_minute,c1:Rsi,other:(,other:customtxt_10_,other:),a1:less_than,c1:number,other:,other:customtxt_80_,other:,arith==
		b1:0,d1:15_minute,c1:close,a1:greater_than_equal_to,b1:0,d1:15_minute,c1:Upper_Bollinger_band,other:(,other:customtxt_20_2,other:),arith==b1:0,d1:15_minute,c1:close,a1:greater_than_equal_to,b1:0,d1:15_minute,c1:Ichimoku_Cloud_Bottom,other:(,other:customtxt_9_26_52,other:),arith==
		b1:0,d1:15_minute,c1:close,a1:greater_than_equal,b1:0,d1:15_minute,c1:open,arith==b1:0,d1:15_minute,c1:volume,a1:greater_than,c1:number,other:,other:customtxt_100000_,other:,arith==
		b1:0,d1:15_minute,c1:Ema,other:(,other:customtxt_close_5,other:),a1:greater_than,b1:0,d1:15_minute,c1:Ema,other:(,other:customtxt_close_20,other:),arith==b1:0,d1:15_minute,c1:Ema,other:(,other:customtxt_close_20,other:),a1:greater_than,b1:0,d1:15_minute,c1:Ema,other:(,other:customtxt_close_50,other:),arith==b1:0,d1:15_minute,c1:close,a1:greater_than,b1:0,d1:15_minute,c1:Ema,other:(,other:customtxt_close_50,other:),arith



	2)MACD Bearish or Bullish crossover	

		Heading Equation
		================
		m1:passes,m2:any,m3:cash	

		Main Equation
		=============

		b1:0,d1:15_minute,c1:Macd_line,other:(,other:customtxt_26_12_9,other:),a1:crossed_below,b1:0,d1:15_minute,c1:Macd_Signal,other:(,other:customtxt_26_12_9,other:),arith==b1:0,d1:15_minute,c1:Macd_line,other:(,other:customtxt_26_12_9,other:),a1:crossed_above,b1:0,d1:15_minute,c1:Macd_Signal,other:(,other:customtxt_26_12_9,other:),arith


	3)Bullish Engulfing - Strong
			
		Heading Equation
		================
		m1:passes,m2:any,m3:cash	

		Main Equation
		=============
		b1:0,d1:15_minute,c1:close,a1:less_than,b1:0,d1:15_minute,c1:open,arith==b1:0,d1:15_minute,c1:open,a1:less_than_equal_to,b1:0,d1:15_minute,c1:close,arith==b1:0,d1:15_minute,c1:close,a1:less_than,b1:0,d1:15_minute,c1:open,arith==b1:0,d1:15_minute,c1:open,a1:less_than_equal_to,b1:0,d1:15_minute,c1:close,arith==b1:0,d1:15_minute,c1:close,a1:less_than,b1:0,d1:15_minute,c1:open,arith==b1:0,d1:15_minute,c1:open,a1:less_than_equal_to,b1:0,d1:15_minute,c1:close,arith==b1:0,d1:15_minute,c1:close,a1:less_than,b1:0,d1:15_minute,c1:open,arith==b1:0,d1:15_minute,c1:open,a1:less_than_equal_to,b1:0,d1:15_minute,c1:close,arith==b1:0,d1:15_minute,c1:open,a1:less_than,b1:0,d1:15_minute,c1:close,arith==b1:0,d1:15_minute,c1:close,a1:greater_than,b1:0,d1:15_minute,c1:open,arith==b1:0,d1:15_minute,c1:close,a1:greater_than,b1:0,d1:15_minute,c1:open,arith==b1:0,d1:15_minute,c1:volume,a1:greater_than_or_equal_to,b1:0,d1:15_minute,c1:volume,a1:*,c1:number,other:,other:customtxt_1.20_,other:,arith

	4)Pure bullish trend stocks	


		Heading Equation
		================
		m1:passes,m2:all,m3:cash==m1:passes,m2:all,m3:cash==m1:passes,m2:all,m3:cash==m1:passes,m2:all,m3:cash==m1:passes,m2:all,m3:cash==m1:passes,m2:all,m3:cash==m1:passes,m2:all,m3:cash==m1:passes,m2:all,m3:cash

		Main Equation
		================

		b1:0,d1:15_minute,c1:ema,other:(,other:customtxt_close_20,other:),a1:greater_than,c1:number,other:,other:customtxt_20_,other:,arith/b1:0,d1:15_minute,c1:sma,other:(,other:customtxt_volume_20,other:),a1:greater_than_equal
		_to,c1:number,other:,other:customtxt_100000_,other:,arith/
		b1:0,d1:15_minute,c1:Ichimoku_Conversion_Line,other:(,other:customtxt_3_7_14,other:),a1:greater_than_equal
		_to,b1:0,d1:15_minute,c1:Ichimoku_Base_Line,other:(,other:customtxt_3_7_14,other:),arith/
		b1:0,d1:15_minute,c1:Ichimoku_SpanA,other:(,other:customtxt_3_7_14,other:),a1:greater_than_equal
		_to,b1:0,d1:15_minute,c1:Ichimoku_SpanB,other:(,other:customtxt_3_7_14,other:),arith/
		b1:0,d1:15_minute,c1:close,a1:greater_than_equal
		_to,b1:0,d1:15_minute,c1:Ichimoku_Cloud_Bottom,other:(,other:customtxt_3_7_14,other:),arith/
		b1:0,d1:15_minute,c1:close,a1:greater_than_equal
		_to,b1:0,d1:15_minute,c1:Parabolic_Sar,other:(,other:customtxt_0.02_0.02_0.2,other:),arith==b1:0,d1:15_minute,c1:Rsi,other:(,other:customtxt_10_,other:),a1:greater_than_equal_to,c1:number,other:,other:customtxt_20_,other:,arith==b1:0,d1:15_minute,c1:StochRsi,other:(,other:customtxt_10_,other:),a1:greater_than_equal_to,c1:number,other:,other:customtxt_20_,other:,arith==b1:0,d1:15_minute,c1:Cci,other:(,other:customtxt_10_,other:),a1:greater_than_equal_to,c1:number,other:,other:customtxt_0_,other:,arith==b1:0,d1:15_minute,c1:Mfi,other:(,other:customtxt_10_,other:),a1:greater_than_equal_to,c1:number,other:,other:customtxt_20_,other:,arith==b1:0,d1:15_minute,c1:Williams%R,other:(,other:customtxt_10_,other:),a1:greater_than_equal_to,c1:number,other:,other:customtxt_-80_,other:,arith==b1:0,d1:15_minute,c1:close,a1:greater_than_equal_to,b1:0,d1:15_minute,c1:Ema,other:(,other:customtxt_close_14,other:),arith==b1:0,d1:15_minute,c1:ADX_DI_Positive,other:(,other:customtxt_10_,other:),a1:greater_than_equal_to,b1:0,d1:15_minute,c1:ADX_DI_Negative,other:(,other:customtxt_10_,other:),arith==
		b1:0,d1:15_minute,c1:Aroon_Up,other:(,other:customtxt_10_,other:),a1:greater_than_equal_to,b1:0,d1:15_minute,c1:Aroon_Down,other:(,other:customtxt_10_,other:),arith==
		b1:0,d1:15_minute,c1:Slow_Stochastic%K,other:(,other:customtxt_5_3,other:),a1:greater_than_equal_to,b1:0,d1:15_minute,c1:Slow_Stochastic%D,other:(,other:customtxt_5_3,other:),arith==b1:0,d1:15_minute,c1:Fast_Stochastic%K,other:(,other:customtxt_5_3,other:),a1:greater_than_equal_to,b1:0,d1:15_minute,c1:Fast_Stochastic%D,other:(,other:customtxt_5_3,other:),arith==b1:0,d1:15_minute,c1:close,a1:greater_than_equal_to,b1:0,d1:15_minute,c1:Sma,other:(,other:customtxt_close_10,other:),arith/
		b1:0,d1:15_minute,c1:Macd_line,other:(,other:customtxt_14_5_3,other:),a1:greater_than_equal_to,b1:0,d1:15_minute,c1:Macd_Signal,other:(,other:customtxt_14_5_3,other:),arith==b1:0,d1:15_minute,c1:Macd_Histogram,other:(,other:customtxt_14_5_3,other:),a1:greater_than_equal_to,c1:number,other:,other:customtxt_0_,other:,arith/
		b1:0,d1:15_minute,c1:Rsi,other:(,other:customtxt_14_,other:),a1:greater_than,c1:number,other:,other:customtxt_50_,other:,arith==b1:0,d1:15_minute,c1:StochRsi,other:(,other:customtxt_14_,other:),a1:greater_than,c1:number,other:,other:customtxt_50_,other:,arith==b1:0,d1:15_minute,c1:Rsi,other:(,other:customtxt_10_,other:),a1:less_than,c1:number,other:,other:customtxt_80_,other:,arith==
		b1:0,d1:15_minute,c1:close,a1:greater_than_equal_to,b1:0,d1:15_minute,c1:Upper_Bollinger_band,other:(,other:customtxt_20_2,other:),arith==b1:0,d1:15_minute,c1:close,a1:greater_than_equal_to,b1:0,d1:15_minute,c1:Ichimoku_Cloud_Bottom,other:(,other:customtxt_9_26_52,other:),arith==
		b1:0,d1:15_minute,c1:close,a1:greater_than_equal,b1:0,d1:15_minute,c1:open,arith==b1:0,d1:15_minute,c1:volume,a1:greater_than,c1:number,other:,other:customtxt_100000_,other:,arith


	5)2 days Bullish. By tomorrow
	
		Heading Equation
		================
		m1:passes,m2:all,m3:futures==m1:passes,m2:all,m3:futures==m1:passes,m2:all,m3:futures==m1:passes,m2:all,m3:futures==m1:passes,m2:all,m3:futures==m1:passes,m2:all,m3:futures==m1:passes,m2:all,m3:futures==m1:passes,m2:all,m3:futures

		Main Equation
		================

		b1:0,d1:15_minute,c1:ema,other:(,other:customtxt_close_20,other:),a1:greater_than,c1:number,other:,other:customtxt_20_,other:,arith/b1:0,d1:15_minute,c1:sma,other:(,other:customtxt_volume_20,other:),a1:greater_than_equal
		_to,c1:number,other:,other:customtxt_100000_,other:,arith/
		b1:0,d1:15_minute,c1:Ichimoku_Conversion_Line,other:(,other:customtxt_3_7_14,other:),a1:greater_than_equal
		_to,b1:0,d1:15_minute,c1:Ichimoku_Base_Line,other:(,other:customtxt_3_7_14,other:),arith/
		b1:0,d1:15_minute,c1:Ichimoku_SpanA,other:(,other:customtxt_3_7_14,other:),a1:greater_than_equal
		_to,b1:0,d1:15_minute,c1:Ichimoku_SpanB,other:(,other:customtxt_3_7_14,other:),arith/
		b1:0,d1:15_minute,c1:close,a1:greater_than_equal
		_to,b1:0,d1:15_minute,c1:Ichimoku_Cloud_Bottom,other:(,other:customtxt_3_7_14,other:),arith/
		b1:0,d1:15_minute,c1:close,a1:greater_than_equal
		_to,b1:0,d1:15_minute,c1:Parabolic_Sar,other:(,other:customtxt_0.02_0.02_0.2,other:),arith==b1:0,d1:15_minute,c1:Rsi,other:(,other:customtxt_10_,other:),a1:greater_than_equal_to,c1:number,other:,other:customtxt_20_,other:,arith==b1:0,d1:15_minute,c1:StochRsi,other:(,other:customtxt_10_,other:),a1:greater_than_equal_to,c1:number,other:,other:customtxt_20_,other:,arith==b1:0,d1:15_minute,c1:Cci,other:(,other:customtxt_10_,other:),a1:greater_than_equal_to,c1:number,other:,other:customtxt_0_,other:,arith==b1:0,d1:15_minute,c1:Mfi,other:(,other:customtxt_10_,other:),a1:greater_than_equal_to,c1:number,other:,other:customtxt_20_,other:,arith==b1:0,d1:15_minute,c1:Williams%R,other:(,other:customtxt_10_,other:),a1:greater_than_equal_to,c1:number,other:,other:customtxt_-80_,other:,arith==b1:0,d1:15_minute,c1:close,a1:greater_than_equal_to,b1:0,d1:15_minute,c1:Ema,other:(,other:customtxt_close_14,other:),arith==b1:0,d1:15_minute,c1:ADX_DI_Positive,other:(,other:customtxt_10_,other:),a1:greater_than_equal_to,b1:0,d1:15_minute,c1:ADX_DI_Negative,other:(,other:customtxt_10_,other:),arith==
		b1:0,d1:15_minute,c1:Aroon_Up,other:(,other:customtxt_10_,other:),a1:greater_than_equal_to,b1:0,d1:15_minute,c1:Aroon_Down,other:(,other:customtxt_10_,other:),arith==
		b1:0,d1:15_minute,c1:Slow_Stochastic%K,other:(,other:customtxt_5_3,other:),a1:greater_than_equal_to,b1:0,d1:15_minute,c1:Slow_Stochastic%D,other:(,other:customtxt_5_3,other:),arith==b1:0,d1:15_minute,c1:Fast_Stochastic%K,other:(,other:customtxt_5_3,other:),a1:greater_than_equal_to,b1:0,d1:15_minute,c1:Fast_Stochastic%D,other:(,other:customtxt_5_3,other:),arith==b1:0,d1:15_minute,c1:close,a1:greater_than_equal_to,b1:0,d1:15_minute,c1:Sma,other:(,other:customtxt_close_10,other:),arith/
		b1:0,d1:15_minute,c1:Macd_line,other:(,other:customtxt_14_5_3,other:),a1:greater_than_equal_to,b1:0,d1:15_minute,c1:Macd_Signal,other:(,other:customtxt_14_5_3,other:),arith==b1:0,d1:15_minute,c1:Macd_Histogram,other:(,other:customtxt_14_5_3,other:),a1:greater_than_equal_to,c1:number,other:,other:customtxt_0_,other:,arith/
		b1:0,d1:15_minute,c1:Rsi,other:(,other:customtxt_14_,other:),a1:greater_than,c1:number,other:,other:customtxt_50_,other:,arith==b1:0,d1:15_minute,c1:StochRsi,other:(,other:customtxt_14_,other:),a1:greater_than,c1:number,other:,other:customtxt_50_,other:,arith==b1:0,d1:15_minute,c1:Rsi,other:(,other:customtxt_10_,other:),a1:less_than,c1:number,other:,other:customtxt_80_,other:,arith==
		b1:0,d1:15_minute,c1:close,a1:greater_than_equal_to,b1:0,d1:15_minute,c1:Upper_Bollinger_band,other:(,other:customtxt_20_2,other:),arith==b1:0,d1:15_minute,c1:close,a1:greater_than_equal_to,b1:0,d1:15_minute,c1:Ichimoku_Cloud_Bottom,other:(,other:customtxt_9_26_52,other:),arith==
		b1:0,d1:15_minute,c1:close,a1:greater_than_equal,b1:0,d1:15_minute,c1:open,arith==b1:0,d1:15_minute,c1:volume,a1:greater_than,c1:number,other:,other:customtxt_100000_,other:,arith


	6)Bullish Engulfing Pattern

		Heading Equation
		================
		m1:passes,m2:all,m3:cash	

		Main Equation
		=============
		b1:0,d1:15_minute,c1:close,a1:less_than,b1:0,d1:15_minute,c1:open,arith==b1:0,d1:15_minute,c1:close,a1:greater_than,b1:0,d1:15_minute,c1:open,arith==b1:0,d1:15_minute,c1:open,a1:greater_than,b1:0,d1:15_minute,c1:close,arith==b1:0,d1:15_minute,c1:high,a1:greater_than,b1:0,d1:15_minute,c1:high,arith==b1:0,d1:15_minute,c1:low,a1:greater_than,b1:0,d1:15_minute,c1:low,arith

	

	7)Golden Crossover

		Heading Equation
		================
		m1:passes,m2:all,m3:nifty200	

		Main Equation
		=============
		b1:0,d1:15_minute,c1:ema,other:(,other:customtxt_close_14,other:),a1:crossed_above,b1:0,d1:15_minute,c1:ema,other:(,other:customtxt_close_50,other:),arith==b1:0,d1:15_minute,c1:close,a1:greater_than,c1:number,other:,other:customtxt_150_,other:,arith==b1:0,d1:15_minute,c1:volume,a1:greater_than,c1:number,other:,other:customtxt_50000_,other:,arith

	8)Morning Star - Bullish Pattern

		Heading Equation
		================
		m1:passes,m2:all,m3:cash	

		Main Equation
		=============
		b1:0,d1:15_minute,c1:open,a1:less_than,b1:0,d1:15_minute,c1:close,arith==b1:0,d1:15_minute,c1:open,a1:less_than,b1:0,d1:15_minute,c1:open,arith==b1:0,d1:15_minute,c1:close,a1:less_than,b1:0,d1:15_minute,c1:open,arith==b1:0,d1:15_minute,c1:open,a1:less_than,b1:0,d1:15_minute,c1:close,arith==b1:0,d1:15_minute,c1:close,a1:less_than,b1:0,d1:15_minute,c1:close,arith==b1:0,d1:15_minute,c1:open,a1:greater_than,b1:0,d1:15_minute,c1:close,arith==b1:0,d1:15_minute,c1:close,a1:less_than,b1:0,d1:15_minute,c1:close,arith==b1:0,d1:15_minute,c1:open,a1:greater_than,b1:0,d1:15_minute,c1:close,arith==b1:0,d1:15_minute,c1:open,a1:less_than,b1:0,d1:15_minute,c1:close,arith==b1:0,d1:15_minute,c1:volume,a1:less_than,b1:0,d1:15_minute,c1:volume,arith

	9)Bullish-rsi-stochastic


		Heading Equation
		================
		m1:passes,m2:all,m3:cash	

		Main Equation
		=============			
		b1:0,d1:15_minute,c1:close,a1:greater_than,c1:number,other:,other:customtxt_100_,other:,arith==b1:0,d1:15_minute,c1:close,a1:less_than,c1:number,other:,other:customtxt_3000_,other:,arith==b1:0,d1:15_minute,c1:Rsi,other:(,other:customtxt_6_,other:),a1:greater_than,b1:0,d1:15_minute,c1:Rsi,other:(,other:customtxt_6_,other:),arith==b1:0,d1:15_minute,c1:Rsi,other:(,other:customtxt_6_,other:),a1:greater_than,b1:0,d1:15_minute,c1:Rsi,other:(,other:customtxt_6_,other:),arith==b1:0,d1:15_minute,c1:Slow_Stochastic%K,other:(,other:customtxt_10_3,other:),a1:Crossed_above,b1:0,d1:15_minute,c1:Slow_Stochastic%D,other:(,other:customtxt_10_3,other:),arith



	10)Bullish Engulf

		Heading Equation
		================
		m1:passes,m2:all,m3:cash	

		Main Equation
		=============
		b1:0,d1:15_minute,c1:open,a1:less_than,b1:0,d1:15_minute,c1:close,arith==b1:0,d1:15_minute,c1:open,a1:greater_than,b1:0,d1:15_minute,c1:close,arith==b1:0,d1:15_minute,c1:open,a1:less_than,b1:0,d1:15_minute,c1:close,arith==b1:0,d1:15_minute,c1:close,a1:greater_than,b1:0,d1:15_minute,c1:open,arith==b1:0,d1:15_minute,c1:max,other:(,other:customtxt_5_,',b1:0,d1:15_minute,c1:close,arith,other:),a1:less_than,b1:0,d1:15_minute,c1:ema,other:(,other:customtxt_close_20,other:),arith==b1:0,d1:15_minute,c1:sma,other:(,other:customtxt_volume_5,other:),a1:less_than,b1:0,d1:15_minute,c1:volume,arith	

	11)Tradersway Buy

		Heading Equation
		================
		m1:passes,m2:all,m3:cash	

		Main Equation
		=============	
		b1:0,d1:5_minute,c1:close,a1:greater_than,b1:-1,d1:5_minute,c1:close,arith==b1:-1,d1:5_minute,c1:close,a1:greater_than,b1:-2,d1:5_minute,c1:close,arith==b1:0,d1:5_minute,c1:volume,a1:greater_than,b1:-1,d1:5_minute,c1:sma,other:(,other:customtxt_volume_15,other:),arith==b1:-1,d1:5_minute,c1:volume,a1:greater_than,b1:-2,d1:5_minute,c1:sma,other:(,other:customtxt_volume_15,other:),arith==b1:0,d1:5_minute,c1:Rsi,other:(,other:customtxt_14_,other:),a1:greater_than,c1:number,other:,other:customtxt_59_,other:,arith


	12)TSS Momentum Long

		Heading Equation
		================
		m1:passes,m2:all,m3:cash	

		Main Equation
		=============
		b1:0,d1:15_minute,c1:close,a1:greater_than,b1:0,d1:15_minute,c1:ema,other:(,other:customtxt_close_13,other:),arith==b1:0,d1:15_minute,c1:close,a1:-,b1:0,d1:15_minute,c1:close,a1:less_than,c1:number,other:,other:customtxt_0_,other:,arith==b1:0,d1:15_minute,c1:close,a1:-,b1:0,d1:15_minute,c1:close,a1:greater_than,b1:0,d1:15_minute,c1:close,a1:-,b1:0,d1:15_minute,c1:low,arith==b1:0,d1:15_minute,c1:volume,a1:greater_than,b1:0,d1:15_minute,c1:sma,other:(,other:customtxt_volume_10,other:),arith==
		b1:0,d1:15_minute,c1:Rsi,other:(,other:customtxt_14_,other:),a1:*,b1:0,d1:15_minute,c1:volume,a1:greater_than,b1:0,d1:15_minute,c1:Rsi,other:(,other:customtxt_14_,other:),a1:*,b1:0,d1:15_minute,c1:volume,arith==b1:0,d1:15_minute,c1:close,a1:greater_than,b1:0,d1:15_minute,c1:high,arith==b1:0,d1:15_minute,c1:close,a1:greater_than,b1:0,d1:15_minute,c1:sma,other:(,other:customtxt_volume_200,other:),arith


	13)Pvc Screener@druzbeh	














<!-- b1:0,d1:15_minute,c1:close,a1:greater_than,b1:-1,d1:15_minute,c1:max,other:(,other:customtxt_20_,',b1:0,d1:15_minute,c1:close,arith,other:),arith==b1:0,d1:15_minute,c1:volume,a1:greater_than,b1:0,d1:15_minute,c1:sma,other:(,other:customtxt_volume_20,other:),arith


For Number:--   c1:number,other:,other:customtxt_0.50_,other:,


For right side (,) -- b1:0,d1:15_minute,c1:close,a1:greater_than,b1:0,d1:15_minute,c1:sma,other:(,other:customtxt_close_20,other:),arith


other ex -- b1:0,d1:10_minute,c1:SuperTrend,other:(,other:customtxt_7_3,other:),a1:Crossed_below,b1:0,d1:10_minute,c1:close,arith



Rsi --- b1:0,d1:15_minute,c1:Rsi,other:(,other:customtxt_14_,other:),a1:greater_than,c1:number,other:,other:customtxt_30_,other:,arith -->