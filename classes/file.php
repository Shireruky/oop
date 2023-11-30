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
			$file = $this->filePath['dirname'] . '/' . $this->filePath['basename'];
			return filesize($file) / 1024 . 'Kb';
		} // размер файла
		
		public function getText()
		{
			$file = $this->filePath['dirname'] . '/' . $this->filePath['basename'];
			return file_get_contents($file);
		}          // получает текст файла
		public function setText($text)
		{
			$file = $this->filePath['dirname'] . '/' . $this->filePath['basename'];
			return file_put_contents($file, $text, LOCK_EX);
		}     // устанавливает текст файла
		public function appendText($text)
		{
			$file = $this->filePath['dirname'] . '/' . $this->filePath['basename'];
			return file_put_contents($file, $text, FILE_APPEND | LOCK_EX);
		}  // добавляет текст в конец файла
		
		public function copy($copyPath)
		{
			$file = $this->filePath['dirname'] . '/' . $this->filePath['basename'];
			return copy($file, $copyPath . $file);
		}    // копирует файл
		public function delete()
		{
			$file = $this->filePath['dirname'] . '/' . $this->filePath['basename'];
			return delete($file);
		}           // удаляет файл
		public function rename($newName)
		{
			$file = $this->filePath['dirname'] . '/' . $this->filePath['basename'];
			return rename($file, $newName);
		}   // переименовывает файл
		public function replace($newPath)
		{
			$file = $this->filePath['dirname'] . '/' . $this->filePath['basename'];
			return rename($file, $newPath . $file);
		}  // перемещает файл
	}
?>