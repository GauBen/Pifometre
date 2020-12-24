<?php

require '../app/bootstrap.php';

if (isset($_GET['q'])) {

	if (filesize('pending-texts.js') > 8196 || strlen($_GET['q']) > 300) {
		header('Location: add.html#err');
		exit;
	}

	file_put_contents('pending-texts.js', $_GET['q'] . "\n", FILE_APPEND);
	header('Location: add.html#thx');
	exit;

}

header('Location: add.html');
