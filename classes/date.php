<?php
	class Date
	{
		private $timeStamp;
		private $days = ["Воскресенье" , "Понедельник" , "Вторник" , "Среда" , "Четверг" , "Пятница" , "Суббота"];
		private $months = [1=>'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'];

		public function __construct($date = null)
		{
			if($date != null) // если дата не передана - пусть берется текущая
			{
				$this->timeStamp = strtotime($date);
			}
			else
			{
				$this->timeStamp = time();
			}
		}
		
		public function getDay()
		{
			return date('d', $this->timeStamp);
		}
		
		public function getMonth($lang = null)
		{
			// переменная $lang может принимать значение ru или en
			// если эта не пуста - пусть месяц будет словом на заданном языке
			if($lang == 'en')
			{
				return date('F', $this->timeStamp);
			}
			elseif($lang == 'ru')
			{
				return $this->months[date('m', $this->timeStamp)];
			}
			else
			{
				return date('m', $this->timeStamp); // возвращает месяц
			}
		}
		
		public function getYear()
		{
			return date('Y', $this->timeStamp);// возвращает год
		}
		
		public function getWeekDay($lang = null)
		{
			// возвращает день недели
			
			// переменная $lang может принимать значение ru или en
			// если эта не пуста - пусть день будет словом на заданном языке
			if($lang == 'en')
			{
				return date('l', $this->timeStamp);
			}
			elseif($lang == 'ru')
			{
				return $this->days[date('w', $this->timeStamp)];
			}
			else
			{
				return date('w', $this->timeStamp);
			}
		}
		
		public function addDay($value)
		{
			// добавляет значение $value к дню
		}
		
		public function subDay($value)
		{
			// отнимает значение $value от дня
		}
		
		public function addMonth($value)
		{
			// добавляет значение $value к месяцу
		}
		
		public function subMonth($value)
		{
			// отнимает значение $value от месяца
		}
		
		public function addYear($value)
		{
			// добавляет значение $value к году
		}
		
		public function subYear($value)
		{
			// отнимает значение $value от года
		}
		
		public function format($format)
		{
			return date($format, $this->timeStamp);// выведет дату в указанном формате
			// формат пусть будет такой же, как в функции date
		}
		
		public function __toString()
		{
			return date('Y - m - d', $this->timeStamp);// выведет дату в формате 'год-месяц-день'
		}
	}
?>