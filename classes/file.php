<?php
	require_once 'classes/iFile.php';

	class File implements iFile
	{
		private $filePath;
		public function __construct($filePath = null)
		{
			$this->filePath = pathinfo($filePath);
		}
		
		public function getPath()
		{
			return $this->filePath['dirname'] . '/' . $this->filePath['basename'];
		} // путь к файлу
		public function getDir()
		{
			return $this->filePath['dirname'];
		}  // папка файла
		public function getName()
		{
			return $this->filePath['filename'];
		} // имя файла
		public function getExt()
		{
			return $this->filePath['extension'];
		}  // расширение файла
		public function getSize()
		{
			return filesize($this->filePath['dirname'] . '/' . $this->filePath['basename']) / 1024 . 'Kb';
		} // размер файла
		
		public function getText()
		{
			$text = file_get_contents($this->filePath['dirname'] . '/' . $this->filePath['basename']);
			echo '<pre>';
			echo htmlspecialchars($text);
			echo '</pre>';
		}          // получает текст файла
		public function setText($text)
		{

		}     // устанавливает текст файла
		public function appendText($text)
		{

		}  // добавляет текст в конец файла
		
		public function copy($copyPath)
		{

		}    // копирует файл
		public function delete()
		{

		}           // удаляет файл
		public function rename($newName)
		{

		}   // переименовывает файл
		public function replace($newPath)
		{

		}  // перемещает файл
	}
?>