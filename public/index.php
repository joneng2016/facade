<?php
require_once "../vendor/autoload.php";

use App\BankAccountFacade;

$accessingBank = new BankAccountFacade(12345678,1234);

$accessingBank->withdrawCash(200.00);
$accessingBank->depositCash(200.00);
$accessingBank->depositCash(1000.00);
$accessingBank->withdrawCash(350.00);













