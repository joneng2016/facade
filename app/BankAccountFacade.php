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

        $this->accChecker = new AccountNumberCheck();
        $this->codeChecker = new SecurityCodeCheck();
        $this->fundChecker = new FundsCheck(); 
    }

    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    public function getSecurityCode()
    {
        return $this->securityCode;
    }
    public function withdrawCash($cashToGet)
    {
        $isActive = $this->accChecker->accountActive($this->getAccountNumber());
        $isCodeCorrect = $this->codeChecker->isCodeCorrect($this->getSecurityCode());
        $hasEnoughMoney = $this->fundsChecker->haveEnoughMoney($cashToGet); 

        if($isActive && $isCodeCorrect && $hasEnoughMoney)
        {
            echo "Saque: transação efetuada <br>"; 
            return;
        }
        
        echo "Saque: trasnacao não realizada<br>";
    }
    public function depositCash($cashToDeposit)
    {
        $isActive = $this->acctChecker->accountActive($this->getAccountNumber());
        $isCodeCorrect = $this->codeChecker->isCodeCorrect($this->getSecurityCode());
        if($isActive && $isCodeCorrect) 
        {
            $this->fundsChecker->makeDeposit($cashToDeposit);
            echo "Depósito: transação concluida <br>";
            return;
        }   
        
       echo "Depósito: transacao não realizada <br>"; 
    }
}
