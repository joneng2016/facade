<?php

namespace App;

class SecurityCodeCheck
{
	private $securityCode = 1234;
	private function getSecurityCode()
	{
		return $this->securityCode;
	}
	private function isCodeCorrect($securityCode)
	{
		return $securityCode == $this->securityCode;
	}
}
