<?php

/**
* 
*/
class field
{

	protected $x_coord;
	protected $y_coord;
	protected $piece;
	
	function __construct($x, $y, $piece = null)
	{
		$this->x_coord = $x;
		$this->y_coord = $y;
		$this->piece = $piece;
	}

	protected function isDark() {
		if(($this->x_coord%2 == 0) && ($this->y_coord%2 == 0)) {
			return true;
		} else {
			return false;
		}

	}

	public function __tostring() {		
		if ($this->isdark()) {
			return '<div class="dark"  >' . $this->piece . '</div>';
		} else {
			return '<div class="light"  >' . $this->piece . '</div>';
		}	
	}


}