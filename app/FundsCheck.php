<?php

namespace App;

class FundsCheck
{
	private $cashInAccount = 1000.00;
	public function getCashInAccount()
	{
		return $this->cashInAccount;
	}
	public function increaseCashInAccount($cashInWithdraw)
	{
		$this->cashInAccount += $cashInWithdraw;
	}
	public function decreaseCashInAccount($cashInWithdraw)
	{
		$this->cashInAccount -= $cashInWithdraw;
	}
    public function haveEnoughMoney($withdrawal)
    {
        if($withdrawl > $this->getCashInAccount())
        {
            echo "Não há fundos suficientes \n".PHP_EOL;
            echo "Saldo atual:".$this->getCashInAccount()."\n".PHP_EOL;
            return false;
        }

        $this->decreaseCashInAccount($withdrawal);
        echo "O saldo atual é de:".$this->getCashInAccount()."\n".PHP_EOL;
    }
    public function makeDeposit($cashToDeposit)
    {
        $this->increaseCashInAccount($cashToDeposit)
        echo "Depósito efetuado, o saldo é:".$this->getCashInAccount()."\n";
    }
}
