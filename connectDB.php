<?php
	$bdInfo['host'] = 'localhost'; // имя хоста
	$bdInfo['userbd'] = 'root';		// имя пользователя
	$bdInfo['pass'] = 'q';		// пароль
	$bdInfo['name'] = 'oop';	// имя базы данных
	
	$link = mysqli_connect($bdInfo['host'], $bdInfo['userbd'], $bdInfo['pass'], $bdInfo['name']);