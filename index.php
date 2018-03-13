<html>
<head>
<link rel="stylesheet" href="js/micropos.css">
</head>
<body>
<?php
//Project: micro-pos Bitcore BTX php script
//Author: Jon D. <info@darkjon.de>
//Github page: https://github.com/dArkjON/micro-pos/
//This script is released under the GNU General Public License v3.0 See the LICENSE file for more information

echo '<h6>This is a Demo for the micro-pos script<br /><a href="https://github.com/dArkjON/micro-pos">https://github.com/dArkjON/micro-pos</a></h6>';
$coin = 'Bitcore';
include 'wallet.php';


$price = number_format($_POST['amount'], 2);
$msg1 = $_GET['msg'];
$msg2 = $_GET['wallet'];
$msg3 = $_GET['amount'];

$json = file_get_contents('https://api.coinmarketcap.com/v1/ticker/'.$coin.'/?convert=EUR'); 
$data = json_decode($json);

$pusd = number_format($data[0]->price_usd, 2);
$peuro = number_format($data[0]->price_eur, 2);
$pbtc = $data[0]->price_btc;
$psymbole = $data[0]->symbol;

echo '<h6>Coin : '.$coin.'<br>';
echo 'USD : $'.$pusd.' // EUR : '.$peuro.'</h6>';
//echo 'BTC : '.$pbtc.'<br>';

//echo 'Wallet 1:'.$wallet.'<br>'.'Wallet 2:'.$wallet1.'<br>'.'Wallet 3:'.$wallet2.'<br>'.'Wallet 4:'.$wallet3.'<br>'.'Wallet 5:'.$wallet4.'<br>';
echo '<br>';
if ($_POST['amount'] == ''){
	
if ($msg1 == "123"){
echo '<br><br><br>';
echo '<h6>Payment : '.$msg3.' '.$psymbole.' to wallet : '.$msg2.' completed.</h6>';	
echo '<meta http-equiv="refresh" content="3; URL=/micro-pos">';
}else{
	
echo '<form action="" method="post">';
echo '<h6>Invoice Amount : <input type="number" class="text" step="any" name="amount"> €<br><br>';
echo '<input type="submit" value="Create Invoice"></h6>';
echo '</form>';

}
}else{
$target = number_format($price/$peuro, 8);
	
$json2 = file_get_contents('http://insight.bitcore.cc/api/addr/'.$wallet); 
$data2 = json_decode($json2);
$addrStr = $data2->addrStr;
$balance = $data2->balance;
$unconfirmedBalance = $data2->unconfirmedBalance;
$unconfirmedTxApperances = $data2->unconfirmedTxApperances;
$txApperances = $data2->txApperances;

if ($unconfirmedTxApperances == '0'){
echo '<h6>Invoice total amount of : '.$price.' €<br />'.$target.' '.$psymbole.'<br /></h6>';
echo '<a href="bitcore:'.$wallet.'?amount='.$target.'"><img src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=bitcore:'.$wallet.'?amount='.$target.'" title="'.$wallet.'" /></a>';
echo '<div id="open"><h6>Payment Wallet : '.$wallet.'<br><br>... loading Details ...</h6></div>';
}else{
	$json2 = file_get_contents('http://insight.bitcore.cc/api/addr/'.$wallet1); 
	$data2 = json_decode($json2);
	$addrStr = $data2->addrStr;
	$balance = $data2->balance;
	$unconfirmedBalance = $data2->unconfirmedBalance;
	$unconfirmedTxApperances = $data2->unconfirmedTxApperances;
	$txApperances = $data2->txApperances;
	if ($unconfirmedTxApperances == '0'){
	echo '<h6>Invoice total amount of : '.$price.' €<br />'.$target.' '.$psymbole.'<br /></h6>';
	echo '<a href="bitcore:'.$wallet1.'?amount='.$target.'"><img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=bitcore:'.$wallet1.'?amount='.$target.'" title="'.$wallet1.'" /></a>';
	echo '<div id="open"><h6>Payment Wallet : '.$wallet1.'<br><br>... loading Details ...</h6></div>';
	}else{
	$json2 = file_get_contents('http://insight.bitcore.cc/api/addr/'.$wallet2); 
	$data2 = json_decode($json2);
	$addrStr = $data2->addrStr;
	$balance = $data2->balance;
	$unconfirmedBalance = $data2->unconfirmedBalance;
	$unconfirmedTxApperances = $data2->unconfirmedTxApperances;
	$txApperances = $data2->txApperances;
	if ($unconfirmedTxApperances == '0'){
	echo '<h6>Invoice total amount of : '.$price.' €<br />'.$target.' '.$psymbole.'<br /></h6>';
	echo '<a href="bitcore:'.$wallet2.'?amount='.$target.'"><img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=bitcore:'.$wallet2.'?amount='.$target.'" title="'.$wallet2.'" /></a>';
	echo '<div id="open"><h6>Payment Wallet : '.$wallet2.'<br><br>... loading Details ...</h6></div>';
	}else{
	$json2 = file_get_contents('http://insight.bitcore.cc/api/addr/'.$wallet3); 
	$data2 = json_decode($json2);
	$addrStr = $data2->addrStr;
	$balance = $data2->balance;
	$unconfirmedBalance = $data2->unconfirmedBalance;
	$unconfirmedTxApperances = $data2->unconfirmedTxApperances;
	$txApperances = $data2->txApperances;
	if ($unconfirmedTxApperances == '0'){
	echo '<h6>Invoice total amount of : '.$price.' €<br />'.$target.' '.$psymbole.'<br /></h6>';
	echo '<a href="bitcore:'.$wallet3.'?amount='.$target.'"><img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=bitcore:'.$wallet3.'?amount='.$target.'" title="'.$wallet3.'" /></a>';
	echo '<div id="open">Payment Wallet : '.$wallet3.'<br><br>... loading Details ...</div>';
	}else{
	$json2 = file_get_contents('http://insight.bitcore.cc/api/addr/'.$wallet4); 
	$data2 = json_decode($json2);
	$addrStr = $data2->addrStr;
	$balance = $data2->balance;
	$unconfirmedBalance = $data2->unconfirmedBalance;
	$unconfirmedTxApperances = $data2->unconfirmedTxApperances;
	$txApperances = $data2->txApperances;
	if ($unconfirmedTxApperances == '0'){
	echo '<h6>Invoice total amount of : '.$price.' €<br />'.$target.' '.$psymbole.'<br /></h6>';
	echo '<a href="bitcore:'.$wallet4.'?amount='.$target.'"><img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=bitcore:'.$wallet4.'?amount='.$target.'" title="'.$wallet4.'" /></a>';	
	echo '<div id="open">Payment Wallet : '.$wallet4.'<br><br>... loading Details ...</div>';
	}else{
	echo 'Sorry, all Wallets in use. Please try again after a new Block.<br>';
	echo '<a href="/micro-pos">Restart process</a>';
	}	}	}	}	}

$myfile = fopen("logs.txt", "a") or die("Unable to open file!");
$txt = "Create Invoice : ".$addrStr." ".$target." ".$price." \n";
fwrite($myfile, $txt);
fclose($myfile);
}
?>

<script type="text/javascript">
setInterval(function(){
$('#open').load('open.php?wallet=<?php echo $addrStr;?>&coin=<?php echo $target;?>');
},15000);
</script>
<script src="js/jquery.min.js"></script>
</body>
</html>