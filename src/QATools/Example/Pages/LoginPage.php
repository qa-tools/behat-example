<?php
/**
 * This file is part of the QA-Tools library.
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * @copyright Michael Iwersen <mi.iwersen@gmail.com>
 * @link      https://github.com/qa-tools/behat-example
 */

namespace QATools\Example\Pages;


use QATools\QATools\HtmlElements\Element\Form;
use QATools\QATools\HtmlElements\TypifiedPage;

/**
 * Class LoginPage.
 *
 * @page-url('/')
 */
class LoginPage extends TypifiedPage
{

	/**
	 * The login form.
	 *
	 * @var Form
	 * @find-by('id' => 'login-form')
	 */
	protected $loginForm;

	/**
	 * Fill the login form with given data.
	 *
	 * @param string $username The username.
	 * @param string $password The password.
	 *
	 * @return static
	 */
	public function fillForm($username, $password)
	{
		$this->loginForm->fill(array(
			'username' => $username,
			'password' => $password,
		));

		return $this;
	}

	/**
	 * Does the login.
	 *
	 * @return Page
	 */
	public function loginSuccess()
	{
		$this->loginForm->submit();

		return $this->pageFactory->getPage('Account Page');
	}

	/**
	 * Does a failing login.
	 *
	 * @return Page
	 */
	public function loginFailure()
	{
		$this->loginForm->submit();

		return $this;
	}

}
