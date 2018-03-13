<!--
Project: micro-pos Bitcore BTX php script
Author: Jon D. <info@darkjon.de>
Github page: https://github.com/dArkjON/micro-pos/
This script is released under the GNU General Public License v3.0 See the LICENSE file for more information
-->

<?php 
$paywallet = $_GET['wallet'];
$total = $_GET['coin'];

$json2 = file_get_contents('http://insight.bitcore.cc/api/addr/'.$paywallet); 
$data2 = json_decode($json2);

$addrStr = $data2->addrStr;
$balance = $data2->balance;
$unconfirmedBalance = $data2->unconfirmedBalance;
$unconfirmedTxApperances = $data2->unconfirmedTxApperances;
$txApperances = $data2->txApperances;

echo 'Payment Wallet : '.$addrStr.'<br>';
echo 'Balance : '.$balance.' // TXIDS : '.$txApperances.'<br>';
echo 'Unconfirmed Balance : '.$unconfirmedBalance.' // TXIDS : '.$unconfirmedTxApperances.'<br>';

$check1 = $unconfirmedBalance - $total;

if ($unconfirmedBalance == $total && $unconfirmedTxApperances == "1") {
	$msg = 'Payment recieved and Amount Match !';
	$myfile = fopen("logs.txt", "a") or die("Unable to open file!");
	$txt = "Payed Invoice : ".$addrStr." ".$total." \n";
	fwrite($myfile, $txt);
	fclose($myfile);
	echo '<meta http-equiv="refresh" content="3; URL='.$_SERVER['HTTP_REFERER'].'?msg=123&wallet='.$addrStr.'&amount='.$total.'">';
	}else{
	$msg = 'Waiting for payment....';
}
echo $msg;
echo '<br>';
echo '<a href="'.$_SERVER['HTTP_REFERER'].'">Restart</a>';
?>
