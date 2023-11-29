<?php
	class Interval
	{
		private $date1;
		private $date2;

		public function __construct(Date $date1, Date $date2)
		{
			if($date1 <= $date2)
			{
				$this->date1 = $date1->timeStamp;	
				$this->date2 = $date2->timeStamp;
			}
			else
			{
				$this->date1 = $date2->timeStamp;	
				$this->date2 = $date1->timeStamp;
			}
		}
		
		public function toDays()
		{
			return ($this->date2 - $this->date1) / 60 / 60 / 24;// вернет разницу в днях
		}
		
		public function toMonths()
		{
			$d1 = date('j', $this->date1);
			$d2 = date('j', $this->date2);
			$m1 = date('n', $this->date1);
			$m2 = date('n', $this->date2);
			$y1 = date('Y', $this->date1);
			$y2 = date('Y', $this->date2);
			$y_diff = $y2 - $y1;
			$m_diff = $m2 - $m1;
			if($d2 < $d1 && $d2 < date('t', $this->date2))
				{
					$m_diff--;
				}
			return $y_diff * 12 + $m_diff;
		}
		
		public function toYears()
		{
			$d1 = date('j', $this->date1);
			$d2 = date('j', $this->date2);
			$m1 = date('n', $this->date1);
			$m2 = date('n', $this->date2);
			$y1 = date('Y', $this->date1);
			$y2 = date('Y', $this->date2);
			$y_diff = $y2 - $y1;
			if($m2 < $m1)
			{
				$y_diff--;
			}
			if($m2 == $m1 && $d2 < $d1 && $d2 < date('t', $this->date2))
			{
				$y_diff--;
			}
			return $y_diff;
		}
	}