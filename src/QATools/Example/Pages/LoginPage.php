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
use QATools\QATools\HtmlElements\Element\TextBlock;
use QATools\QATools\HtmlElements\TypifiedPage;

/**
 * Class LoginPage.
 *
 * @page-url('/')
 * @page-url-match('path' => '/')
 */
class LoginPage extends TypifiedPage
{

	/**
	 * The login form.
	 *
	 * @var Form
	 * @find-by('id' => 'login-form')
	 */
	public $loginForm;

	/**
	 * The error label.
	 *
	 * @var TextBlock
	 * @find-by('css' => '.alert')
	 */
	public $errorPane;

	/**
	 * Does the login.
	 *
	 * @param string $username The username.
	 * @param string $password The password.
	 * @param string $success The success page.
	 * @param string $failure The failure page.
	 *
	 * @return static
	 */
	public function login($username, $password)
	{
		$this->loginForm->fill(array(
			'username' => $username,
			'password' => $password,
		));

		$this->loginForm->submit();

		return $this;
	}

}
