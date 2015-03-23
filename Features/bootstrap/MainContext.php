<?php

use QATools\BehatExtension\Context\QAToolsContext;

class MainContext extends QAToolsContext
{

	/**
	 * @Given I'm on ':page'
	 */
	public function openPage($page)
	{
		$this->page = $this->pageFactory->getPage($page);
		$this->page->open();
	}

	/**
	 * @When I login with ':username' and ':password'
	 */
	public function login($username, $password)
	{
		$this->page->login($username, $password);
	}

	/**
	 * @Then I should be on ':page'
	 */
	public function pageOpen($page)
	{
		$this->page = $this->pageFactory->getPage($page);

		if ( !$this->page->opened() ) {
			throw new Exception($page . ' is not open!');
		}
	}

	/**
	 * @Then I should see ':message' error message
	 */
	public function errorMessageVisible($message)
	{
		if ( $this->page->errorPane->getText() !== $message ) {
			throw new Exception('Error message "' . $message . '" not visible!');
		};
	}

	/**
	 * @Given /^I wait for ([0-9]+) seconds$/
	 */
	public function waitFor($seconds)
	{
		sleep($seconds);
	}

}
