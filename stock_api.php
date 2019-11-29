<?php
	include("kiteconnect.php");

	$kite = new KiteConnect("75iz85qa18odk9yk");

	print_r(fetch_access_token($kite));

	/*try{
		$user = $kite->generateSession("75iz85qa18odk9yk","mmlf9wzf0z43un0kwh87bsc0fn02ssz3");

		echo "Authentication Successfull";
		echo "<br>";
		print_r($user);

		$kite->setAccessToken($user->access_token);
	}catch(Exception $e){
		echo "Authentication Failed: ".$e->getMessage();
		throw $e;
	}

	echo $user->user_id." has Logged in";*/
?>