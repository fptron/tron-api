<?php
include_once '../vendor/autoload.php';

$fullNode = new \FpTron\TronAPI\Provider\HttpProvider('https://api.trongrid.io');
$solidityNode = new \FpTron\TronAPI\Provider\HttpProvider('https://api.trongrid.io');
$eventServer = new \FpTron\TronAPI\Provider\HttpProvider('https://api.trongrid.io');

try {
    $tron = new \FpTron\TronAPI\Tron($fullNode, $solidityNode, $eventServer);
} catch (\FpTron\TronAPI\Exception\TronException $e) {
    exit($e->getMessage());
}

$tron->isConnected();
