<?php 
 
 $crypto_btc_open=0;
 $crypto_btc_close=0;
 $messari_btc_open;
 $messari_btc_close;
 
 
 
 $url = "https://min-api.cryptocompare.com/data/v2/histohour?fsym=BTC&tsym=USD&limit=20&toTs=-1&api_key=YOURKEYHERE";
 
 $json = json_decode(file_get_contents($url));
	$int =0;

	//echo 'Using crypto compare api the open and closing BTC numbers are:<br>';
	foreach($json->Data->Data as $obj){
		//var_dump($obj);
		if($int==10){
			 $content= $crypto_btc_open = $obj->open;
			 $crypto_btc_close = $obj->close;
			//echo 'Last opening positions for bit coin opens at $'. $crypto_btc_open .' USD <br>';
			//echo 'Last closing positions for bit coin closes at $'. $crypto_btc_close .' USD <br>';
			
		}
		$int++;
	}


 $url = "https://data.messari.io/api/v1/assets/btc/metrics";
 
 $json = json_decode(file_get_contents($url));

	//echo 'Using data messari api the open and closing BTC numbers are: <br>';
	//var_dump($json);
	$messari_btc_open = $json->data->market_data->ohlcv_last_1_hour->open;
	$messari_btc_close = $json->data->market_data->ohlcv_last_1_hour->close;
	//echo '1 BTC opens at $'. $messari_btc_open .' USD <br>';
	//echo '1 BTC closes at $'. $messari_btc_close .' USD <br>';

	//echo '<br> Below gives suggestions to which exchange has a better deal to buy BTC:<br>';
	$buy = "CRYPTO";
	$sell = "CRYPTO";
	
	
	//which one would you buy right now for BTC?
	
	if( $crypto_btc_open >  $messari_btc_open){
		$diff = $crypto_btc_open-$messari_btc_open;
		$buy = "MESSARI";
		//echo 'You want to buy BTC from MESSARI becuase crypto is $'. $diff .' USD <br>';
	}
	else if($crypto_btc_open ==  $messari_btc_open){
		//cho 'Crypto and Messari have the same price. Either is fine. <br>';	
	}
	else{
		$diff = $messari_btc_open-$crypto_btc_open;
		$buy = "CRYPTO";
		//echo 'You want to buy BTC from CRYPTO becuase messari is $'. $diff .' USD<br>';
	}
	
	//echo '<br> Below gives suggestions to which exchange has a better deal to sell BTC:<br>';
	
	//which one would you sell right now for BTC?
	if( $crypto_btc_close >  $messari_btc_close){
		$diff2 = $crypto_btc_close-$messari_btc_close;
		$sell = "CRYPTO";
		//echo 'You want to sell BTC from CRYPTO becuase messari is $-'. $diff .' USD<br>';
	}
	else if($crypto_btc_close ==  $messari_btc_close){
		//echo 'Crypto and Messari have the same price. Either is fine. <br>';	
	}
	else{
		$diff2 = $messari_btc_close-$crypto_btc_close;
		$sell = "MESSARI";
		//echo 'You want to buy BTC from MESSARI becuase crypto is $-'. $diff .' USD<br>';
	}
	
	include 'Template.php';
?>

