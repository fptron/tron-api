<?php
$fullNode = new \FpTron\TronAPI\Provider\HttpProvider('https://api.trongrid.io');
$solidityNode = new \FpTron\TronAPI\Provider\HttpProvider('https://api.trongrid.io');
$eventServer = new \FpTron\TronAPI\Provider\HttpProvider('https://api.trongrid.io');

try {
    $tron = new \FpTron\TronAPI\Tron($fullNode, $solidityNode, $eventServer);
} catch (\FpTron\TronAPI\Exception\TronException $e) {
    exit($e->getMessage());
}


$balance=$tron->getTransactionBuilder()->contractbalance($tron->getAddress);
foreach($balance as $key =>$item)
{
	echo $item["name"]. " (".$item["symbol"].") => " . $item["balance"] . "\n";
}

