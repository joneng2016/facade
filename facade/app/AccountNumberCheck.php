<?php

namespace App;

class AccountNumberCheck
{
	private $accountNumber = 12345678;
	public function getAccountNumbeR()
	{
		return $this->accountNumber;
	}
	public function accountActive($accountNumber)
	{
		return $accountNumber == $this->accountNumber;
	}
}
