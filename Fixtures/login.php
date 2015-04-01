<?php
/**
 * This file is part of the QA-Tools library.
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * @copyright Michael Iwersen <mi.iwersen@gmail.com>
 * @link      https://github.com/qa-tools/behat-example
 */

if ( empty($_POST) ) {
	header('Location: /?error');
	die();
}

if ( $_POST['username'] !== 'username' ) {
	header('Location: /?error');
	die();
}

if ( $_POST['password'] !== 'password' ) {
	header('Location: /?error');
	die();
}

header('Location: /account.html');