# TRON API
A PHP API for interacting with the Tron Protocol

## Install

```bash
> composer require fptron/tron-api
```
## Requirements

The following versions of PHP are supported by this version.

* PHP 7.4

## Example Usage

```php
use FpTron\TronAPI\Tron;

$fullNode = new \FpTron\TronAPI\Provider\HttpProvider('https://api.trongrid.io');
$solidityNode = new \FpTron\TronAPI\Provider\HttpProvider('https://api.trongrid.io');
$eventServer = new \FpTron\TronAPI\Provider\HttpProvider('https://api.trongrid.io');

try {
    $tron = new \FpTron\TronAPI\Tron($fullNode, $solidityNode, $eventServer);
} catch (\FpTron\TronAPI\Exception\TronException $e) {
    exit($e->getMessage());
}


$this->setAddress('..');
//Balance
$tron->getBalance(null, true);

// Transfer Trx
var_dump($tron->send('to', 1.5));

//Generate Address
var_dump($tron->createAccount());

//Get Last Blocks
var_dump($tron->getLatestBlocks(2));

//Change account name (only once)
var_dump($tron->changeAccountName('address', 'NewName'));


// Contract
$tron->contract('Contract Address');



```

## Testing

``` bash
$ vendor/bin/phpunit
```

## Donations
**Tron(TRX)**: TGTqnzCQSSp9UDqvRidPq5pfdiyVfF8eWR
