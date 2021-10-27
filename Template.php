<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
    </head>
    <body>
        <div id="wrapper">
            <div id="banner">             
            </div>
            
            <nav id="navigation">
                <ul id="nav">
                    <li><a href="btc.php?name=btc">Track BTC</a></li>
                    <li><a href="eth.php?name=eth">Track ETH</a></li>
					<li><a href="home.php?name=home">About</a></li>
                </ul>
            </nav>
            
            <div id="content_area">
				<p class="redbox">
					<?php
						if($_GET['name']=="btc"){
							echo '<b> Crypto Market opening and closing BTC</b> <br>';
							echo 'Last opening positions at $'. $crypto_btc_open .' USD <br>';
							echo 'Last closing positions at $'. $crypto_btc_close .' USD <br> <br>';
							echo '<b> Messari Market opening and closing BTC</b> <br>';
							echo 'Last opening positions at $'. $messari_btc_open .' USD <br>';
							echo 'Last closing positions at $'. $messari_btc_close .' USD <br>';
							
						}
						if($_GET['name']=="eth"){
							echo '<b> Crypto Market opening and closing ETH</b> <br>';
							echo 'Last opening positions at $'. $crypto_eth_open .' USD <br>';
							echo 'Last closing positions at $'. $crypto_eth_close .' USD <br><br>';
							echo '<b> Messari Market opening and closing ETH</b> <br>';
							echo 'Last opening positions at $'. $messari_eth_open .' USD <br>';
							echo 'Last opening positions at $'. $messari_eth_close .' USD <br>';
						}
						if($_GET['name']=="home"){
							echo 'About this project: <br>'. $content;
						}
						date_default_timezone_set("America/New_York");
						echo "<br> The current time in EST is " . date("h:i:sa");
					?>
					</P>
				<button id="refresh" onClick="window.location.reload();">Refresh Page</button>
            </div>
			
			
            
            <div id="sidebar">
				<?php
					if($_GET['name']=="btc"){
						echo '<h2 style="color:gold"  align="center"> <img src = "Images/bitcoin.png" height="40"> BITCOIN </h2>';
						echo ' Below gives suggestions to which exchange has a better deal to buy BTC: <br>';
						echo 'You want to buy from '. $buy . ' difference is: $<b>' . $diff .'</b><br>';
						echo 'You want to sell from '. $sell . ' difference is: -$<b>' . $diff2 .'</b><br>';
					}
					
					if($_GET['name']=="eth"){
						echo '<h2 style="color:silver"  align="center"> <img src = "Images/eth.png" height="40"> ETH </h2>';
						echo ' Below gives suggestions to which exchange has a better deal to buy ETH: <br>';
						echo 'You want to buy from '. $buy . ' difference is: $<b>' . $diff1 .'</b><br>';
						echo 'You want to sell from '. $sell . ' difference is: -$<b>' . $diff2 .'</b><br>';
					}
				?>
			</div>
            
            <footer>
                <p>Created by Winsor Tse</p>
            </footer>
        </div>
    </body>
</html>



