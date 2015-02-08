<?php

use QATools\BehatExtension\Context\QAToolsContext;

class MainContext extends QAToolsContext
{

	/**
	 * @When /^the user enters (.+?) and (.+?)$/
	 */
	public function fillForm($username, $password)
	{
		$this->page->fillForm($username, $password);
	}

	/**
	 * @Then /^the login should fail$/
	 */
	public function loginFail()
	{
		$this->page = $this->page->loginFailure();
	}

	/**
	 * @Then /^the login should succeed/
	 */
	public function loginSucceed()
	{
		$this->page = $this->page->loginSuccess();
	}

	/**
	 * @Given /^the user waits for ([0-9]+) seconds$/
	 */
	public function waitFor($seconds)
	{
		sleep($seconds);
	}

}
