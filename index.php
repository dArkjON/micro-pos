<?php
$shorty = 'Bitcore';

$wallet = '11472JagyCb2sXEqHNBdm3KD22S27P7FC4';
$wallet1 = '13R4ZRMFfTysscP2K1krZaNZNJgF9jTiCJ';
$wallet2 = '17CJJC4J3bqeF479x3ihRUcodYJhvvjTWA';
$wallet3 = '18QFyvYczodKetMRgioyZSB4ARbby5Ac4';
$wallet4 = '1ByedRWzXbpbjErBcM8eR5XPS7tVJVoiLs';

$price = number_format($_POST['amount'], 2);
$msg1 = $_GET['msg'];
$msg2 = $_GET['wallet'];
$msg3 = $_GET['amount'];

$json = file_get_contents('https://api.coinmarketcap.com/v1/ticker/'.$shorty.'/?convert=EUR'); 
$data = json_decode($json);

$pusd = number_format($data[0]->price_usd, 2);
$peuro = number_format($data[0]->price_eur, 2);
$pbtc = $data[0]->price_btc;
$psymbole = $data[0]->symbol;

echo 'Coin : '.$shorty.'<br>';
echo 'USD : $'.$pusd.' // EUR : '.$peuro.'<br>';
//echo 'BTC : '.$pbtc.'<br>';

//echo 'Wallet 1:'.$wallet.'<br>'.'Wallet 2:'.$wallet1.'<br>'.'Wallet 3:'.$wallet2.'<br>'.'Wallet 4:'.$wallet3.'<br>'.'Wallet 5:'.$wallet4.'<br>';
echo '<br>';
if ($_POST['amount'] == ''){
	
if ($msg1 == "123"){
echo '<br><br><br>';
echo '<b>Payment : '.$msg3.' '.$psymbole.' to wallet : '.$msg2.' completed.</b>';	
echo '<meta http-equiv="refresh" content="3; URL=/confirm/">';
}else{
	
echo '<form action="" method="post">';
echo 'Invoice Amount : <input type="number" step="any" name="amount"> €';
echo '<input type="submit" value="Create Invoice">';
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
echo 'Invoice total amount of : '.$price.' €<br />'.$target.'<br />';
echo '<a href="bitcore:'.$wallet.'?amount='.$target.'"><img src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=bitcore:'.$wallet.'?amount='.$target.'" title="'.$wallet.'" /></a>';
echo '<div id="open">Payment Wallet : '.$wallet.'<br><br>... loading Details ...</div>';
}else{
	$json2 = file_get_contents('http://insight.bitcore.cc/api/addr/'.$wallet1); 
	$data2 = json_decode($json2);
	$addrStr = $data2->addrStr;
	$balance = $data2->balance;
	$unconfirmedBalance = $data2->unconfirmedBalance;
	$unconfirmedTxApperances = $data2->unconfirmedTxApperances;
	$txApperances = $data2->txApperances;
	if ($unconfirmedTxApperances == '0'){
	echo 'Creating Invoice with a total amount of : '.$price.' € <br>';
	echo 'Coin Price : '.$target;
	echo '<br>';
	echo '<a href="bitcore:'.$wallet1.'?amount='.$target.'"><img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=bitcore:'.$wallet1.'?amount='.$target.'" title="'.$wallet1.'" /></a>';
	echo '<div id="open">Payment Wallet : '.$wallet1.'<br><br>... loading Details ...</div>';
	}else{
	$json2 = file_get_contents('http://insight.bitcore.cc/api/addr/'.$wallet2); 
	$data2 = json_decode($json2);
	$addrStr = $data2->addrStr;
	$balance = $data2->balance;
	$unconfirmedBalance = $data2->unconfirmedBalance;
	$unconfirmedTxApperances = $data2->unconfirmedTxApperances;
	$txApperances = $data2->txApperances;
	if ($unconfirmedTxApperances == '0'){
	echo 'Creating Invoice with a total amount of : '.$price.' € <br>';
	echo 'Coin Price : '.$target;
	echo '<br>';
	echo '<a href="bitcore:'.$wallet2.'?amount='.$target.'"><img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=bitcore:'.$wallet2.'?amount='.$target.'" title="'.$wallet2.'" /></a>';
	echo '<div id="open">Payment Wallet : '.$wallet2.'<br><br>... loading Details ...</div>';
	}else{
	$json2 = file_get_contents('http://insight.bitcore.cc/api/addr/'.$wallet3); 
	$data2 = json_decode($json2);
	$addrStr = $data2->addrStr;
	$balance = $data2->balance;
	$unconfirmedBalance = $data2->unconfirmedBalance;
	$unconfirmedTxApperances = $data2->unconfirmedTxApperances;
	$txApperances = $data2->txApperances;
	if ($unconfirmedTxApperances == '0'){
	echo 'Creating Invoice with a total amount of : '.$price.' € <br>';
	echo 'Coin Price : '.$target;
	echo '<br>';
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
	echo 'Creating Invoice with a total amount of : '.$price.' € <br>';
	echo 'Coin Price : '.$target;
	echo '<br>';
	echo '<a href="bitcore:'.$wallet4.'?amount='.$target.'"><img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=bitcore:'.$wallet4.'?amount='.$target.'" title="'.$wallet4.'" /></a>';	
	echo '<div id="open">Payment Wallet : '.$wallet4.'<br><br>... loading Details ...</div>';
	}else{
	echo 'Sorry, all Wallets in use. Please try again after a new Block.';
	echo '<a href="/confirm">Restart</a>';
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
