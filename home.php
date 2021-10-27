
<?php
	$content = '
	
	<br> Messari API database: <br>
	https://data.messari.io/api/v1/assets/btc/metrics <br>
	https://data.messari.io/api/v1/assets/eth/metrics <br>
	
	<br> Cryptocompare API database:<br>
	https://min-api.cryptocompare.com/data/v2/histohour?fsym=BTC&tsym=USD&limit=20&toTs=-1&api_key=YOURKEYHERE <br>
	https://min-api.cryptocompare.com/data/v2/histohour?fsym=ETH&tsym=USD&limit=20&toTs=-1&api_key=YOURKEYHERE <br>
	';
	include 'Template.php';
 ?>