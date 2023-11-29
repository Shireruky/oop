<?php
	session_start();
	ini_set('error_reporting', E_ALL);
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	
	require 'connectDB.php';
	require_once 'classes/date.php';
	require_once 'classes/interval.php';
	require_once 'classes/file.php';

	$date1 = new Date('2021-02-29');
	$date2 = new Date('2024-02-28');
	$file1 = new File('classes/interval.php');
		
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
	echo '<br>';
	echo str_replace(array(' ',':','.',',',), '-', '1945-05-09 12:00');
	echo '<br>';
	echo $file1->getPath();
	echo '<br>';
	echo $file1->getDir();  // папка файла
	echo '<br>';
	echo $file1->getName(); // имя файла
	echo '<br>';
	echo $file1->getExt();  // расширение файла
	echo '<br>';
	echo $file1->getSize(); // размер файла
	echo '<br>';
	echo $file1->getText();          // получает текст файла
	echo '<br>';
	/* echo $file1->setText($text);     // устанавливает текст файла
	echo $file1->appendText($text);  // добавляет текст в конец файла
		
	echo $file1->copy($copyPath);    // копирует файл
	echo $file1->delete();           // удаляет файл
	echo $file1->rename($newName);   // переименовывает файл
	echo $file1->replace($newPath); */
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
	</head>
	<body>
	</body>
</html>