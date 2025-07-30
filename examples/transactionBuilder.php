<?php
$fullNode = new \FpTron\TronAPI\Provider\HttpProvider('https://api.trongrid.io');
$solidityNode = new \FpTron\TronAPI\Provider\HttpProvider('https://api.trongrid.io');
$eventServer = new \FpTron\TronAPI\Provider\HttpProvider('https://api.trongrid.io');

try {
    $tron = new \FpTron\TronAPI\Tron($fullNode, $solidityNode, $eventServer);
} catch (\FpTron\TronAPI\Exception\TronException $e) {
    exit($e->getMessage());
}


try {
    $transaction = $tron->getTransactionBuilder()->sendTrx('to', 2,'fromAddress');
    $signedTransaction = $tron->signTransaction($transaction);
    $response = $tron->sendRawTransaction($signedTransaction);
} catch (\FpTron\TronAPI\Exception\TronException $e) {
    die($e->getMessage());
}
