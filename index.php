<?php
	session_start();
	ini_set('error_reporting', E_ALL);
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	
	require 'connectDB.php';
	require_once 'classes/date.php';

	$date1 = new Date;
	echo $date1;
	echo '<br>';
	$date2 = new Date('2021-05-15');
	echo $date2;
	echo '<br>';

	$date = new Date('2025-12-31');
	echo $date;
	echo '<br>';
	echo $date->getYear();  // выведет '2025'
	echo '<br>';
	echo $date->getMonth(); // выведет '12'
	echo '<br>';
	echo $date->getMonth('ru'); // выведет '12'
	echo '<br>';
	echo $date->getMonth('en'); // выведет '12'
	echo '<br>';
	echo $date->getDay();   // выведет '31'
	echo '<br>';
	echo $date->getWeekDay();     // выведет '3'
	echo '<br>';
	echo $date->getWeekDay('ru'); // выведет 'среда'
	echo '<br>';
	echo $date->getWeekDay('en'); // выведет 'wednesday'
	echo '<br>';
?>