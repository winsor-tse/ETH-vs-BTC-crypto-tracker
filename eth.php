<?php 

 /* bitpay api */
 // https://data.messari.io/api/v1/assets/btc/metrics
 // https://data.messari.io/api/v1/assets/eth/metrics
 //"https://bitpay.com/api/rates"
 //https://min-api.cryptocompare.com/data/v2/histohour?fsym=BTC&tsym=USD&limit=20&toTs=-1&api_key=YOURKEYHERE
 
 
 
 $crypto_eth_open=0;
 $crypto_eth_close=0;
 $messari_eth_open;
 $messari_eth_close;
 
 
 $url = "https://min-api.cryptocompare.com/data/v2/histohour?fsym=ETH&tsym=USD&limit=20&toTs=-1&api_key=YOURKEYHERE";
 
 $json = json_decode(file_get_contents($url));
	$int =0;

	//echo 'Using crypto compare api the open and closing ETH numbers are:<br>';
	foreach($json->Data->Data as $obj){
		//var_dump($obj);
		if($int==10){
			$crypto_eth_open = $obj->open;
			$crypto_eth_close = $obj->close;

		}
		$int++;
	}
	
	$url = "https://data.messari.io/api/v1/assets/eth/metrics";
 
	$json = json_decode(file_get_contents($url));
	//var_dump($json);
	$messari_eth_open = $json->data->market_data->ohlcv_last_1_hour->open;
	$messari_eth_close = $json->data->market_data->ohlcv_last_1_hour->close;
	
	$diff1;
	$diff2;
	$buy;
	$sell;
	 
	//which one would you buy right now for ETH?
	if( $crypto_eth_open >  $messari_eth_open){
		$diff1 = $crypto_eth_open-$messari_eth_open;
		$buy = "MESSARI";
	}
	else{
		$diff1 = $messari_eth_open-$crypto_eth_open;
		$buy = "CRYPTO";
	}
	
	//which one would you sell right now for ETH?
	if( $crypto_eth_close >  $messari_eth_close){
		$diff2 = $crypto_eth_close-$messari_eth_close;
		$sell="CRYPTO";
	}
	else{
		$diff2 = $messari_eth_close-$crypto_eth_close;
		$sell = "MESSARI";
	}


	include 'Template.php';
?>

