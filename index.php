<?php
	session_start();
	ini_set('error_reporting', E_ALL);
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	
	require 'connectDB.php';
	require_once 'classes/date.php';
	require_once 'classes/interval.php';

	$date1 = new Date('2021-02-29');
	$date2 = new Date('2024-02-28');
	
	$interval = new Interval($date1, $date2);
	
	echo $interval->toDays();   // выведет разницу в днях
	echo '<br>';
	echo $interval->toMonths(); // выведет разницу в месяцах
	echo '<br>';
	echo $interval->toYears();  // выведет разницу в годах
	echo '<br>';
	echo $date1;
	echo '<br>';
	echo $date2;
?>