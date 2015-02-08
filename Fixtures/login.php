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
	header('Location: index.html');
}

if ( $_POST['username'] != 'user' ) {
	header('Location: index.html');
}

if ( $_POST['password'] != 'validpassword' ) {
	header('Location: index.html');
}

header('Location: account.html');