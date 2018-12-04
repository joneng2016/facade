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
	...
}
