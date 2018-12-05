<?php

namespace App;

class BankAccountFacade
{
    private $accountNumber;
    private $securityCode;
    private $acctChecker;
    private $codeChecker;
    private $codeChecker;
    private $fundsChecker;
    private $bankWelcome;

    public function __construct($newAccNum,$newSecCode)
    {
        $this->accountNumbert = $newAccNum;
        $this->securityCode = $newSecCode;

        ...
    }
}
